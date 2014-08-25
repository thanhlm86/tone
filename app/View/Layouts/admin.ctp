<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset('utf-8'); ?>
    <title>Adminica | The Professional Admin Theme</title>
    <?php
        echo $this->Html->meta('icon');
    ?>


    <!-- Styles -->
    <?php
    echo $this->Html->css('reset');
    echo $this->Html->css('font');
    //echo $this->Html->css('../js/fancybox/jquery.fancybox-1.3.4');
     echo $this->Html->css('../js/tinyeditor/style');
    //echo $this->Html->css('../js/slidernav/slidernav');
    //echo $this->Html->css('../js/syntax_highlighter/styles/shCore');
    //echo $this->Html->css('../js/syntax_highlighter/styles/shThemeDefault');
    //echo $this->Html->css('../js/uitotop/css/ui.totop');
    //echo $this->Html->css('../js/fullcalendar/fullcalendar');
    //echo $this->Html->css('../js/isotope/isotope');
    //echo $this->Html->css('../js/elfinder/css/elfinder');
    //echo $this->Html->css('../js/tiptip/tipTip');
    //echo $this->Html->css('../js/uniform/css/uniform.aristo');
    //echo $this->Html->css('../js/multiselect/css/ui.multiselect');
    //echo $this->Html->css('../js/selectbox/jquery.selectBox');
    //echo $this->Html->css('../js/colorpicker/css/colorpicker');
    //echo $this->Html->css('../js/uistars/jquery.ui.stars.min');
    echo $this->Html->css('../js/themeroller/Aristo');
    echo $this->Html->css('text');
     echo $this->Html->css('grid');
    echo $this->Html->css('main');
    echo $this->Html->css('theme/theme_base');
    echo $this->Html->css('theme/switcher');
    echo $this->Html->css('theme/theme_blue');
     echo $this->Html->css('theme/bg_wood');
    echo $this->Html->css('colours');
    echo $this->Html->css('ie');
    ?>
    <!-- Scripts -->

    <!-- Load JQuery -->
    <?php
    echo $this->Html->script('jquery.min1.7.1');
    ?>
    <!-- Load JQuery UI -->
    <?php
    echo $this->Html->script('jquery-ui.min1.8.17');
    ?>

    <!-- Global -->
    <?php
    echo $this->Html->script('touchPunch/jquery.ui.touch-punch.min');
    echo $this->Html->script('uitotop/js/jquery.ui.totop');
    ?>
    <!-- Forms -->
    <?php
    //echo $this->Html->script('uniform/jquery.uniform.min');
    //echo $this->Html->script('autogrow/jquery.autogrowtextarea');
    //echo $this->Html->script('multiselect/js/ui.multiselect');
    //echo $this->Html->script('selectbox/jquery.selectBox.min');
    //echo $this->Html->script('timepicker/jquery.timepicker');
    //echo $this->Html->script('colorpicker/js/colorpicker');
    //echo $this->Html->script('uistars/jquery.ui.stars.min');
    // echo $this->Html->script('tiptip/jquery.tipTip.minified');
    echo $this->Html->script('validation/jquery.validate.min');
    ?>
    <!-- Configuration Script -->
    <?php
    echo $this->Html->script('adminica/adminica_ui');
    echo $this->Html->script('ckeditor/ckeditor');
    echo $this->Html->script('adminica/adminica_forms');
    echo $this->Html->script('adminica/adminica_mobile');
    ?>

</head>
<body>
<div id="wrapper">
    <?php echo $this->element('topbar') ?>
    <?php echo $this->element('sidebar') ?>
    <div id="main_container" class="main_container container_16 clearfix">
        <?php $keyphrase = '6';
        echo $this->element('navigation');
         echo $this->fetch('content')
        ?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>

</body>
</html>
