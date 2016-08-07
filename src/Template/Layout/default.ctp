<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= $this->fetch('meta') ?>

    <title><?= $this->fetch('title') ?></title>

    <!-- Vendor CSS -->
    <?= $this->Html->css('/assets/animate.css/animate.min.css') ?>
    <?= $this->Html->css('/assets/sweetalert/dist/sweetalert.css') ?>
    <?= $this->Html->css('/assets/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') ?>
    <?= $this->Html->css('/assets/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') ?>        

    <!-- CSS -->
    <?= $this->Html->css('/assets/mdadmin/css/app_1.min.css') ?>
    <?= $this->Html->css('/assets/mdadmin/css/app_2.min.css') ?>

    <?= $this->fetch('css') ?>
    
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    
     <!-- Javascript Libraries -->
    <?= $this->Html->script('/assets/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('/assets/bootstrap/dist/js/bootstrap.min.js') ?>
    <?= $this->Html->script('/assets/Waves/dist/waves.min.js') ?>
    

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
        <?= $this->Html->script('/assets/jquery-placeholder/jquery.placeholder.min.js') ?>
    <![endif]-->

    <?= $this->Html->script('/assets/mdadmin/js/app.js') ?>

    <?= $this->fetch('script') ?>
</body>
</html>
