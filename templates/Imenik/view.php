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
            <?= $this->Html->link(__('Edit Imenik'), ['action' => 'edit', $imenik->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Imenik'), ['action' => 'delete', $imenik->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imenik->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Imenik'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Imenik'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="imenik view content">
            <h3><?= h($imenik->ime) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ime') ?></th>
                    <td><?= h($imenik->ime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prezime') ?></th>
                    <td><?= h($imenik->prezime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($imenik->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($imenik->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
