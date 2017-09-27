<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Mostrar Autores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Mostrar Noticias'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Noticia'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorsPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($authorsPost) ?>
    <fieldset>
        <legend><?= __('Novo Autor') ?></legend>
        <?php
            echo $this->Form->control('name_author');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
