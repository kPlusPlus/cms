<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imenik $imenik
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Imenik'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="imenik form content">
            <?= $this->Form->create($imenik) ?>
            <fieldset>
                <legend><?= __('Add Imenik') ?></legend>
                <?php
                    echo $this->Form->control('ime');
                    echo $this->Form->control('prezime');
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
