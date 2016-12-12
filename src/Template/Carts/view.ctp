<?php $total = 0; ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumbs">
            <li><?= $this->Html->link('home', '/'); ?></li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-9 col-sm-8">
        <?php echo $this->Form->create('Cart',array('id'=>"update-cart",'class'=>'cart-form','url'=>array('controller'=>'carts','action'=>'update')));?>
        <?php foreach ($products as $product):?>
            <div class="cart-item">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="cart-img-container">
                            <?= $this->HTML->image($product->image, ['alt' => $product->name]); ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h4><?= h($product->name) ?></h4>
                        <div class="cart-price">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <?php echo $this->Form->hidden('product-id[]',array('value'=>$product->id));?>
                                    <?php echo $this->Form->input('count[]',array('id'=>'count'.$product->id,'type'=>'number', 'label'=>false,'class'=>'form-control input-sm', 'value'=>$product->count));?>
                                    
                                </div>
                                <div class="col-md-3">
                                    x <?= $this->Number->currency($product->price, 'USD') ?>
                                </div>
                            </div>
                            <div class="row">
                                <ul class="list-inline">
                                    <li>
                                        <?php echo $this->Form->submit('Update Quantity',array('class'=>'btn'));?>
                                    </li>
                                    <li>
                                        <?= $this->Html->link('Remove', array('controller' => 'carts', 'action' => 'remove', $product->id)); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><?= $this->Number->currency($product->count * $product->price, 'USD') ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                $total += $product->count * $product->price;
            ?>
        <?php endforeach;?>
        <?php echo $this->Form->end();?>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="row">
            <div class="col-md-12 text-right">
                <h5>Subtotal (<?= $count ?> Items): <?= $this->Number->currency($total, 'USD') ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <?= $this->Html->link('Proceed to Checkout', ['controller' => 'Orders', 'action' => 'add'], ['class' =>  'checkout-btn']) ?>
            </div>
        </div>
    </div>
</div>


