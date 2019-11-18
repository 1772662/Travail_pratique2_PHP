<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $breuvage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $breuvage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Breuvage'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="breuvage form large-9 medium-8 columns content">
    <?= $this->Form->create($breuvage) ?>
    <fieldset>
        <legend><?= __('Edit Breuvage') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
