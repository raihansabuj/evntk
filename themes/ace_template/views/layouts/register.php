<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <!-- Title and other stuffs -->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Md. Rihanul Hoque">
        <meta name="generator" content="Eventek" />
        <!-- Stylesheets -->
        <?php Yii::app()->bootstrap->register(); ?>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/font-awesome.css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/style/style.css" rel="stylesheet">        
        <!-- HTML5 Support for IE -->
        <!--[if lt IE 9]>
        <script src="js/html5shim.js"></script>
        <![endif]-->
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon/favicon.png">
    </head>
    <body>
        <div class="admin-form">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <!-- Widget starts -->
                        <div class="widget">
                            <div class="widget-head">
                                <i class="icon-lock"></i> Register 
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <?php echo $content; ?>                                   
                                </div>
                                <div class="widget-foot">
                                    <!-- Footer goes here -->
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>