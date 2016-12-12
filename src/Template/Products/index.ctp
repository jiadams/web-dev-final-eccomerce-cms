<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>Shop</h1>
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-3 col-sm-6">
            <div class="prod-img">
                <?= $this->HTML->image($product->image, [
                    'url' => ['controller' => 'Products', 'action' => 'view', $product->id],
                    'alt' => $product->name]) ?>
            </div>
            <div class="prod-info">
                <ul class="list-unstyled">
                    <li><h5><?= $this->HTML->link($product->name, ['action' => 'view', $product->id])  ?></h5></li>
                    <li><?= $this->Number->currency($product->price, 'USD')  ?></li>
                    <li><?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?>
                        <?php echo $this->Form->hidden('id',array('value'=>$product->id));?>
                        <?php echo $this->Form->submit('Add to cart',array('class'=>'btn btn-lg'));?>
                        <?php echo $this->Form->end();?></li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>
