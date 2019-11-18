<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cocktail $cocktail
 */
?>
<nav class="large-3breuvage4 columns" id="actions-sidebar">breuvage
    <ul class="side-nav">breuvage class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit breuvage'), ['action' => 'edit', $breuvage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete breuvage'), ['action' => 'delete', $breuvage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breuvage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List breuvages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New breuvage'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cocktails view large-9 medium-8 columns content">
    <h3><?= h($breuvage->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($breuvage->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($breuvage->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($breuvage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($breuvage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($breuvage->modified) ?></td>
        </tr>
    </table>
</div>
