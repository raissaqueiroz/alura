<?php
    namespace App\Controller;
    use Cake\ORM\TableRegistry;
    use Cake\Event\Event;

    class UsersController extends AppController{
        public function beforeFilter(Event $event){
            parent::beforeFilter($event);
            $this->Auth->allow(['add', 'salvar']);
        }
        public function index(){

        }

        public function add(){
            $userTable = TableRegistry::get('Users');
            $novoUser = $userTable->newEntity();
            $this->set('novoUser', $novoUser);
        }

        public function salvar(){
            $userTable = TableRegistry::get('Users');
            $user = $userTable->newEntity($this->request->data());
            $return['tipo'] = ($userTable->save($user)) ? "success" : "error";
            $return['message'] = ($return['tipo'] == 'error') ? "Erro ao Cadastrar Usuário!" : "Usuário Cadastrado com Sucesso!";
            $this->Flash->set($return['message'], ['element' => $return['tipo']]);
            $this->redirect("/Users/add");

        }

        public function login(){
            if($this->request->is('post')){
                $user = $this->Auth->identify();
                if($user){
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Flash->set("Usuário e/ou Senha Inválido(s)", ['element' => 'error']);
                }
            } 
        }

        public function logout(){
            return $this->redirect($this->Auth->logout());
        }

    }
?>