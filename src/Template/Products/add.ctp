<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Product</h1>
        </div>
    </div>
</div>
<div class="prod-add-form">
    <?= $this->Form->create($product); ?>
    <div class="row">
        <div class="col-sm-8 col-md-9">
            <?= $this->Form->input('name'); ?>
            <?= $this->Form->input('long_description', ['rows' => '10']); ?>
            <?= $this->Form->input('short_description', ['rows' => '3']); ?>
        </div>
        <div class="col-sm-4 col-md-3">
            <?= $this->Form->input('price'); ?>
            <?= $this->Form->input('image'); ?>
            <?= $this->Form->button(__('Save Product')); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>