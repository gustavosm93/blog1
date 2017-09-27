<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorsPost $authorsPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Autor'), ['action' => 'edit', $authorsPost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Autor'), ['action' => 'delete', $authorsPost->id], ['confirm' => __('Você tem certeza que deseja excluir o autor {0}?', $authorsPost->name_author)]) ?> </li>
        <li><?= $this->Html->link(__('Mostrar Autores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Autor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Mostrar Noticias'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Noticia'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="authorsPosts view large-9 medium-8 columns content">
    <h3><?= h($authorsPost->name_author) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Autor') ?></th>
            <td><?= h($authorsPost->name_author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($authorsPost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($authorsPost->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Noticias Relacionadas') ?></h4>
        <?php if (!empty($authorsPost->posts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Noticia') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($authorsPost->posts as $posts): ?>
            <tr>
                <td><?= h($posts->id) ?></td>
                <td><?= h($posts->title_post) ?></td>
                <td><?= h($posts->body_post) ?></td>
                <td><?= h($posts->created) ?></td>
                <td><?= h($posts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Você tem certeza que deseja excluir a noticia {0}?', $posts->title_post)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
