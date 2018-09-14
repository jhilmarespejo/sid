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

$cakeDescription = '.:DNA:.';
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

    <?php echo $this->Html->css('bootstrap/bootstrap.css'); 
        echo $this->Html->script('jquery.min.js');
        echo $this->Html->script('bootstrap/bootstrap.min.js');
    ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php  $usuario = $this->request->session()->read('Auth.User.role'); ?>
    <?php echo $this->element('menu/menu_admin', ['usuario' =>  $usuario]);?>

    <?= $this->Flash->render() ?>

    <div class="container clearfix" style="">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
