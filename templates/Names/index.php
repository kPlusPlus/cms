<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Name> $names
 */
?>
<div class="names index content">
    <?= $this->Html->link(__('New Name'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Names') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($names as $name): ?>
                <tr>
                    <td><?= $this->Number->format($name->id) ?></td>
                    <td><?= h($name->first_name) ?></td>
                    <td><?= h($name->last_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $name->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $name->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $name->id], ['confirm' => __('Are you sure you want to delete # {0}?', $name->id)]) ?>
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
