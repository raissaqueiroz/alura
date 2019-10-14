<?php
    namespace App\Controller;
    use Cake\ORM\TableRegistry;

    Class ProdutosController extends AppController {

        public $paginate = [
            'limit' => 1
        ];

        public function initialize(){
            parent::initialize();
            $this->loadComponent('Paginator');
        }

        public function index(){
            $produtosTable = TableRegistry::get('Produtos');
            $produtos = $produtosTable->find('all');
            $this->set('produtos', $this->paginate($produtos));
        }

        public function novo(){
            $produtosTable = TableRegistry::get('Produtos');
            $novoProduto = $produtosTable->newEntity();
            $this->set('novoProduto', $novoProduto);
        }

        public function editar($id){
            $produtosTable = TableRegistry::get('Produtos');
            $novoProduto = $produtosTable->get($id);
            $this->set('novoProduto', $novoProduto);
            $this->render('novo');
        }

        public function excluir($id){
            $produtosTable = TableRegistry::get('Produtos');
            $produto = $produtosTable->get($id);
            $message = ($produtosTable->delete($produto)) ? "Produto Excluido com Sucesso!" : 'Erro ao Excluir o Produto.';
            $this->Flash->set($message, ['element' => 'error']);
            $this->redirect("/Produtos/index");
        }

        public function salva(){
            $produtosTable = TableRegistry::get('Produtos');
            $produto = $produtosTable->newEntity($this->request->data());
            if(!$produto->errors() && $produtosTable->save($produto)){
                $this->Flash->set("Produto Salvo com Sucesso!", ['Element' => 'success']);
                $this->redirect("/Produtos/index");
            } else {
                $this->Flash->set("Erro ao Salvar o Produto.", ['Element' => 'error']);
                $this->set('novoProduto', $produto);
                $this->render('novo');
            }            
        }

        
    }
?>