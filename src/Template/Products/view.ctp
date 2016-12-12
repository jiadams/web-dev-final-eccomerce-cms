<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumbs">
            <li><?= $this->Html->link('home', '/'); ?></li>
            <li><?= $this->HTML->link($product->name, ['action' => 'view', $product -> id])  ?></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <?= $this->HTML->image($product->image, ['alt' => $product->name]); ?>
    </div>
    <div class="col-md-7">
        <h1><?= h($product->name); ?></h1>
        <div class="prod-description">
            <p><?= html_entity_decode($product->long_description); ?></p>
        </div>
        <h5><?= $this->Number->currency($product->price, 'USD') ?></h5>
        <div class="prod-add-to-cart">
                <p>
            <?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?>
            <?php echo $this->Form->hidden('id',array('value'=>$product->id));?>
            <?php echo $this->Form->submit('Add to cart',array('class'=>'btn btn-lg'));?>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>