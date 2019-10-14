<div style="padding: 40px 4%">
    <h1> Cadastrar Usuário </h1>
    <?php
        echo $this->Form->create($novoUser, ['action' => 'salvar']);
        echo $this->Form->input("username");
        echo $this->Form->input("password");
        echo $this->Form->button("Cadastrar");
        echo $this->Form->end();
    ?>
</div>