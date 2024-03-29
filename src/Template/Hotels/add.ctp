<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Villes",
    "action" => "getByPays",
    "_ext" => "json"
]);

$urlToCarsAutocompletedemoJson = $this->Url->build([
    "controller" => "Classification",
    "action" => "findClassification",
    "_ext" => "json"
]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCarsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Classification/autocompletedemo', ['block' => 'scriptBottom']);

echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Hotels/add', ['block' => 'scriptBottom']);
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hotel $hotel
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Room Bookings'), ['controller' => 'RoomBookings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room Booking'), ['controller' => 'RoomBookings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotels form large-9 medium-8 columns content">
    <?= $this->Form->create($hotel) ?>
    <fieldset>
        <legend><?= __('Add Hotel') ?></legend>
        <?php
        echo $this->Form->control('pays_id', ['options' => $pays]);
        echo $this->Form->control('villes_id', ['options' => $villes]);
        echo $this->Form->input('Classification', ['id' => 'autocomplete']);
            echo $this->Form->control('hotel_name');
            echo $this->Form->control('hotel_address');
            echo $this->Form->control('hotel_postcode');
            echo $this->Form->control('url');
            echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
