<div style="padding: 40px 4%">
    <h1> Entre em contato!</h1>
    <?php
        echo $this->Form->create();
        echo $this->Form->input('nome');
        echo $this->Form->input('email');
        echo $this->Form->input('msg');
        echo $this->Form->button('Enviar');
        echo $this->Form->end();
    ?>
</div>