<div style="padding: 40px 4%">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>VALOR</th>
                <th>VALOR COM DESCONTO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td><?=$produto['id']?></td>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$this->Money->format($produto['preco'])?></td>
                <td><?=$this->Money->format($produto->calculaDesconto())?></td>
                
                <td>
                    <?= $this->Html->Link("Editar", ["controller" => "produtos", "action" => "editar", $produto['id']]); ?>
                    <?= $this->Form->postLink("Apagar", ["controller" => "produtos", "action" => "excluir", $produto['id']], ['confirm' => 'Deseja realmente excluir este produto?']); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('Anterior');?>
            <?= $this->Paginator->numbers();?>
            <?= $this->Paginator->next('Proximo');?>
        </ul>
    </div>
    
    <?= $this->Html->Link('Novo Produto', ['controller' => 'produtos', 'action' => 'novo']); ?>
    <?= $this->Html->Link('Sair', ['controller' => 'users', 'action' => 'logout']); ?>
</div>