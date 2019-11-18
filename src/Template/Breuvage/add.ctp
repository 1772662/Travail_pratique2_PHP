<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Breuvage'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="breuvages form large-9 medium-8 columns content">
    <?= $this->Form->create($cocktail) ?>
    <fieldset>
        <legend><?= __('Add Breuvage') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
