<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\local $local
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit local'), ['action' => 'edit', $local->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete local'), ['action' => 'delete', $local->id], ['confirm' => __('Are you sure you want to delete # {0}?', $local->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New local'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locais view large-9 medium-8 columns content">
    <h3><?= h($local->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($local->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($local->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($local->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($local->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($local->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($local->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($local->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($local->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($local->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($local->data) ?></td>
        </tr>
    </table>
</div>
