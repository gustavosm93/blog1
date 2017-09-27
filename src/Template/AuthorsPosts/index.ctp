<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorsPost[]|\Cake\Collection\CollectionInterface $authorsPosts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Mostrar Noticias'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Noticia'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorsPosts index large-9 medium-8 columns content">
    <h3><?= __('Autores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authorsPosts as $authorsPost): ?>
            <tr>
                <td><?= $this->Number->format($authorsPost->id) ?></td>
                <td><?= h($authorsPost->name_author) ?></td>
                <td><?= h($authorsPost->created) ?></td>
                <td><?= h($authorsPost->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $authorsPost->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $authorsPost->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $authorsPost->id], ['confirm' => __('Você tem certeza que quer deletar o autor {0}?', $authorsPost->name_author)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registros(s) de {{count}} totais')]) ?></p>
    </div>
</div>
