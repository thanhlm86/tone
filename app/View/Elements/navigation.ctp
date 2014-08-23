<div id="nav_top" class="clearfix round_top">
    <ul class="clearfix">
        <li><a href="index.php"><?php echo $this->Html->image('icons/small/grey/laptop.png', array('atl' => '')) ?></a>
        </li>

        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/frames.png', array('atl' => '')) ?>
                <span>Layout</span></a>
            <ul>
                <li><a href="layout.php"><span>16 Grid - 960.gs</span></a></li>
                <li><a href="text.php"><span>Text & Typography</span></a></li>
                <li><a class="hide_mobile" href="#"><span>Layout Width</span></a>
                    <ul class="drawer">
                        <li><a href="styles/theme/switcher1.php?style=layout_fixed.css"><span>Fixed</span></a></li>
                        <li><a href="styles/theme/switcher1.php?style=switcher.css"><span>Fluid</span></a></li>
                    </ul>
                </li>
                <li><a class="hide_mobile" href="#"><span>Layout Position</span></a>
                    <ul class="drawer">
                        <li><a href="styles/theme/switcher2.php?style=switcher.css"><span>Side</span></a></li>
                        <li><a href="styles/theme/switcher2.php?style=header_top.css"><span>Top</span></a></li>
                        <li><a href="styles/theme/switcher2.php?style=header_slideout.css"><span>Slide</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/coverflow.png', array('atl' => '')) ?><span>Boxes</span></a>
            <ul>
                <li><a href="tabs.php"><span>Tab Boxes</span></a></li>
                <li><a href="accordions.php"><span>Accordions Boxes</span></a></li>
                <li><a href="wizard.php"><span>Step by Step Wizard</span></a></li>
                <li><a href="code.php"><span>Code View</span></a></li>
            </ul>
        </li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/create_write.png', array('atl' => '')) ?><span>Forms</span></a>
            <ul>
                <li><?php echo $this->Html->link($this->Html->tag('span', __('Input Fields', true)), array('controller' => 'forms', 'action' => 'index'), array('escape' => false)); ?></li>
                <li><a href="buttons.php"><span>Buttons</span></a></li>
                <li><a href="#"><span>More components</span></a>
                    <ul class="drawer">
                        <li><a href="validation.php"><span>Validation</span></a></li>
                        <li><a href="editor.php"><span>WYSIWYG Editor</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="gallery.php"><?php echo $this->Html->image('icons/small/grey/images.png', array('atl' => '')) ?>
                <span>Gallery</span></a></li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/blocks_images.png', array('atl' => '')) ?><span>Tables</span></a>
            <ul class="">
                <li><?php echo $this->Html->link($this->Html->tag('span', __('DataTables', true)), array('controller' => 'tables', 'action' => 'index'), array('escape' => false)); ?></li>

                <li><a href="tables_static.php"><span>Regular Tables</span><span
                            class="alert badge alert_black">new</span></a></li>
            </ul>
        </li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/file_cabinet.png', array('atl' => '')) ?><span>Org</span></a>
            <ul class="">
                <li>
                    <a href="files.php"><?php echo $this->Html->image('icons/small/grey/folder.png', array('atl' => '')) ?>
                        <span>Files</span></a></li>
                <li>
                    <a href="contacts.php"><?php echo $this->Html->image('icons/small/grey/users.png', array('atl' => '')) ?>
                        <span>Contacts</span></a></li>
            </ul>
        </li>
        <li>
            <a href="calendar.php"><?php echo $this->Html->image('icons/small/grey/month_calendar.png', array('atl' => '')) ?>
                <span>Cal</span><span class="alert badge alert_blue">new</span></a></li>
        <li><a href="charts.php"><?php echo $this->Html->image('icons/small/grey/graph.png', array('atl' => '')) ?>
                <span>Charts</span><span class="alert badge alert_green">new</span></a></li>
        <li><a href="login.php" class="dialog_button"
               data-dialog="logout"><?php echo $this->Html->image('icons/small/grey/locked_2.png', array('atl' => '')) ?></a>
        </li>
    </ul>


    <script type="text/javascript">

        var currentPage = 6 - 1; //This is only used in php to tell the nav what the current page is
        $('#nav_top > ul > li').eq(currentPage).addClass("current");
        $('#nav_top > ul > li').addClass("icon_only").children("a").children("span").parent().parent().removeClass("icon_only");
    </script>


    <div id="mobile_nav">
        <div class="main"></div>
        <div class="side"></div>
    </div>

</div><!-- #nav_top -->
