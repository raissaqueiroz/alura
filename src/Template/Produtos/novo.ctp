<div style="padding: 40px 4%">
    <?php

        echo $this->Form->create($novoProduto, ['action' => 'salva']);
        echo $this->Form->input('id');
        echo $this->Form->input('nome');
        echo $this->Form->input('preco');
        echo $this->Form->input('descricao');
        echo $this->Form->button('Salvar');
        echo $this->Form->end();

    ?>
</div>