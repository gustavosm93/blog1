<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Noticia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Mostrar Autores'), ['controller' => 'AuthorsPosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['controller' => 'AuthorsPosts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts index large-9 medium-8 columns content">
    <h3><?= __('Noticias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Titulo da Noticia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome do Autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>
                <td><?= h($post->title_post) ?></td>
                <td><?= $post->has('authors_post') ? $this->Html->link($post->authors_post->name_author, ['controller' => 'AuthorsPosts', 'action' => 'view', $post->authors_post->id]) : '' ?></td>
                <td><?= h($post->created) ?></td>
                <td><?= h($post->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $post->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $post->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $post->id], ['confirm' => __('Você tem certeza que quer deletar a noticia {0}?', $post->title_post)]) ?>
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
