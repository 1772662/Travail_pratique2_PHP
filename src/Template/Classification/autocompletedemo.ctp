<?php
$urlToCarsAutocompletedemoJson = $this->Url->build([
    "controller" => "Classification",
    "action" => "findClassification",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCarsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Classification/autocompletedemo', ['block' => 'scriptBottom']);
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Classifications'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('Classification') ?>
<fieldset>
    <legend><?= __('Search Classifications') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>
