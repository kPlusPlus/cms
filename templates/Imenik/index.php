<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Imenik> $imenik
 */
?>
<div class="imenik index content">
    <?= $this->Html->link(__('New Imenik'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Imenik') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ime') ?></th>
                    <th><?= $this->Paginator->sort('prezime') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imenik as $imenik): ?>
                <tr>
                    <td><?= $this->Number->format($imenik->id) ?></td>
                    <td><?= h($imenik->ime) ?></td>
                    <td><?= h($imenik->prezime) ?></td>
                    <td><?= h($imenik->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $imenik->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imenik->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imenik->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imenik->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
