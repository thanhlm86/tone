<div id="sidebar">
    <div class="cog">+</div>

    <a href="index.php" class="logo"><span>Adminica</span></a>

    <div class="user_box dark_box clearfix">
        <?php echo $this->Html->image('profile.jpg', array('alt'=>'Profile Pic', 'width'=>'55'))?>
        <h2>Administrator</h2>
        <h3><a href="#">John Smith</a></h3>
        <ul>
            <li><a href="#">settings</a><span class="divider">|</span></li>
            <li><a href="login.php">logout</a></li>
        </ul>
    </div><!-- #user_box -->

    <ul class="side_accordion"> <!-- add class 'open_multiple' to change to from accordion to toggles -->
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/home.png', array('alt'=>''))?>Home</a>
            <ul class="drawer">
                <li><a href="#">Activity</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Tasks</a></li>
            </ul>
        </li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/mail.png', array('alt'=>''))?>Mailbox<span class="alert badge alert_red">5</span></a>
            <ul class="drawer " >
                <li><a href="#">Inbox</a></li>
                <li><a href="#">Sent Items</a></li>
                <li><a href="#">Drafts<span class="alert badge alert_grey">2</span></a></li>
                <li><a href="#">Trash<span class="alert badge alert_grey">3</span></a></li>
            </ul>
        </li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/documents.png', array('alt'=>''))?>Documents<span class="alert badge alert_black">2</span></a>
            <ul class="drawer">
                <li><a href="#">Create New</a></li>
                <li><a href="#">View All</a></li>
                <li><a href="#">Upload/Download<span class="alert badge alert_grey">2</span></a></li>
            </ul>
        </li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/users.png', array('alt'=>''))?>Members</a>
            <ul class="drawer">
                <li><a href="#">Add New</a></li>
                <li><a href="#">Edit/Delete</a></li>
                <li><a href="#">Search Profiles</a></li>
            </ul>
        </li>
        <li><a href="http://www.tricycle.ie"><?php echo $this->Html->image('icons/small/grey/graph.png', array('alt'=>''))?>Statistics</a></li>
        <li><a href="#"><?php echo $this->Html->image('icons/small/grey/cog_2.png', array('alt'=>''))?>Settings</a>
            <ul class="drawer">
                <li><a href="#">Account</a></li>
                <li><a href="#">System</a></li>
            </ul>
        </li>
    </ul>
    <form>
        <div id="search_side" class="dark_box"><input class="" type="text" value="Search Adminica..." onclick="value=''"></div>
    </form>
    <ul id="side_links" class="side_links" style="margin-bottom:0;">
        <li><a href="http://goo.gl/UjRRe">Online Documentation</a>
        <li><a href="support.tricyclelabs.com">Expert Forum</a></li>
        <li><a href="#">Product Wiki</a></li>
        <li><a href="#">Latest Company News</a></li>
    </ul>
</div><!-- #sidebar -->
