<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\local[]|\Cake\Collection\CollectionInterface $locais
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New local'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locais index large-9 medium-8 columns content">
    <h3><?= __('Locais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locais as $local): ?>
            <tr>
                <td><?= $this->Number->format($local->id) ?></td>
                <td><?= h($local->nome) ?></td>
                <td><?= h($local->cep) ?></td>
                <td><?= h($local->logradouro) ?></td>
                <td><?= h($local->complemento) ?></td>
                <td><?= h($local->numero) ?></td>
                <td><?= h($local->bairro) ?></td>
                <td><?= h($local->uf) ?></td>
                <td><?= h($local->cidade) ?></td>
                <td><?= h($local->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $local->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $local->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $local->id], ['confirm' => __('Are you sure you want to delete # {0}?', $local->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
