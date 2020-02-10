<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
   
    <button><?= $this->Html->link(__('New User'), ['action' => 'signup']) ?> </button>
    <?= $this->Form->button(__('Login')) ?>
    <?= $this->Form->end() ?>
</div>
