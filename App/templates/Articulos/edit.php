<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articulo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articulos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="articulos form content">
            <?= $this->Form->create($articulo) ?>
            <fieldset>
                <legend><?= __('Edit Articulo') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('texto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
