<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cocktail[]|\Cake\Collection\CollectionInterface $cocktails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Breuvage'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="Breuvage index large-9 medium-8 columns content">
    <h3><?= __('Breuvage') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Breuvage as $a): ?>
            <tr>
                <td><?= $this->Number->format($a->id) ?></td>
                <td><?= h($a->name) ?></td>
                <td><?= h($a->description) ?></td>
                <td><?= h($a->created) ?></td>
                <td><?= h($a->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $a->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $a->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $a->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cocktail->id)]) ?>
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
