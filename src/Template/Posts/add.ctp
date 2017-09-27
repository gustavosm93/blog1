<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Mostrar Noticias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Mostrar Autores'), ['controller' => 'AuthorsPosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['controller' => 'AuthorsPosts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Adicionar Noticia') ?></legend>
        <?php
            echo $this->Form->control('title_post');
            echo $this->Form->control('body_post');
            echo $this->Form->control('authors_post_id', ['options' => $authorsPosts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
