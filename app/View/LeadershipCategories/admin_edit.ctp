<div class="flat_area grid_16" style="opacity: 1;">
    <h2>Form elements and controls</h2>

    <p>Check out the Application like <a href="#">navigation</a>. Resize to see the liquid layout in action.
        Expand/Collapse and sort boxes. Try out the WYSIWYGs.</p>
</div>
<div class="leadershipCategories form">
    <?php echo $this->Form->create('LeadershipCategory'); ?>
    <div class="box grid_16" style="opacity: 1;">
        <h2 class="box_head">DANH MỤC LÃNH ĐẠO</h2>
        <a href="#" class="grabber">&nbsp;</a>
        <a href="#" class="toggle">&nbsp;</a>

        <div class="toggle_container">
            <div class="block" style="opacity: 1;">
                <h2 class="section">Text Fields</h2>

                <div class="col_60">
                    <fieldset>
                        <label>Danh mục ban lãnh đạo<span>Tên danh mục</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->input('content', array('placeholder' => 'Nhập tên danh mục', 'class' => 'text', 'label' => false)) ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                </div>
                <div class="columns clearfix">
                    <div class="col_40">
                        <div class="columns clearfix">
                            <div>
                                <fieldset>
                                    <label>Số thứ tự tác giả</label>

                                    <div>
                                        <?php echo $this->Form->input('number', array('placeholder' => 'Số thứ tự hiển thị trang chủ', 'class' => 'text', 'label' => false)) ?>
                                        <div class="required_tag tooltip hover left" title="This field is required"></div>
                                    </div>
                                </fieldset>
                            </div>
                            <div>
                                <fieldset>
                                    <label>Trạng thái hiển thị</label>

                                    <div class="inline clearfix">
                                        <?php
                                        echo $this->Form->input('publish', array('type' => 'checkbox', 'label' => 'Đăng trang chủ'));
                                        ?>
                                    </div>
                                </fieldset>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="button_bar clearfix">
                    <button type="submit" class="green img_icon has_text">
                        <?php echo $this->Html->image('icons/small/white/bended_arrow_right.png', array('alt' => 'Bended Arrow Right', 'height' => '24', 'width' => '24')) ?>
                        <span>Sửa</span>
                    </button>
                    <button type="reset" class="red img_icon has_text">
                        <?php echo $this->Html->image('icons/small/white/bended_arrow_right.png', array('alt' => 'Bended Arrow Right', 'height' => '24', 'width' => '24')) ?>
                        <span>Hủy</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <?php
    echo $this->Form->input('id', array('type'=>'hidden'));
    echo $this->Form->end(); ?>
