<?php
    namespace App\Model\Table;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class ProdutosTable extends Table {
        public function validationDefault(Validator $validator){
            $validator->add('descricao', [
                'minLength' => [
                    'rule'  => ['minLength',10],
                    'message' => 'A Descrição deve Conter no Mínimo 10 Caracteres'
                ]
            ]);
            $validator->add('preco',[
                'decimal' => [
                    'rule' => ['decimal',2],
                    'message' => 'Por favor, digite um número decimal separado por .'
                ]
            ]);
            $validator->requirePresence('nome',true)->notEmpty('nome');
            return $validator;
        }
    }
?>