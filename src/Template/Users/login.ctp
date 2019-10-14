<div style="padding: 40px 4%">
    <h1> Acesso Restrito - Login </h1>
    <?php
        echo $this->Form->create();
        echo $this->Form->input("username");
        echo $this->Form->input("password");
        echo $this->Form->button("Entrar");
        echo $this->Form->end();
    ?>
</div>