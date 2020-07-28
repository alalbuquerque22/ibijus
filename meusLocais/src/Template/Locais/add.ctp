<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\local $local
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Locais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locais form large-9 medium-8 columns content">
    <?= $this->Form->create($local) ?>
    <fieldset>
        <legend><?= __('Add local') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cep');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('complemento');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('uf');
            echo $this->Form->control('cidade');
            echo $this->Form->control('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
