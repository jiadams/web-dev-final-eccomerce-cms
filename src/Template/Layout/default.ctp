<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->HTML->css('bootstrap.min.css') ?>
    <?= $this->HTML->css('font-awesome.min.css') ?>
    <?= $this->HTML->css('style.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <nav class="expanded" data-topbar role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-6 logo">
                    <?= $this->HTML->image('ac-logo.png', ['alt' => 'AC Studios']) ?>
                </div>
                <div class="col-md-6 text-right">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($username)) :?>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><?= h($username) ?></li>
                                    <li class="list-inline-item"><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']); ?></li>
                                </ul>
                                
                            <?php else :?>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']); ?></li>
                                </ul>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav">
                                <li><?= $this->Html->link('<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge" id="cart-counter"> Cart ('.$count.')</span>', array('controller'=>'carts','action'=>'view'),array('escape'=>false));?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
