<div class="flat_area grid_16" style="opacity: 1;">
    <h2>Form elements and controls</h2>

    <p>Check out the Application like <a href="#">navigation</a>. Resize to see the liquid layout in action.
        Expand/Collapse and sort boxes. Try out the WYSIWYGs.</p>
</div>
<div class="openLetters form">
    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
    <?php echo $this->Form->create('Introduction', array('type' => 'file')); ?>
    <div class="box grid_16" style="opacity: 1;">
        <h2 class="box_head">LỜI GIỚI THIỆU</h2>
        <a href="#" class="grabber">&nbsp;</a>
        <a href="#" class="toggle">&nbsp;</a>

        <div class="toggle_container">
            <div class="block" style="opacity: 1;">
                <h2 class="section">Text Fields</h2>

                <div class="col_60">
                    <fieldset>
                        <label>Thư ngỏ<span>Trường lời giới thiệu</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->textarea('content', array('class' => 'tooltip autogrow textarea ckeditor', 'placeholder' => 'Bạn bắt buộc phải nội dung thư ngỏ', 'title' => 'This field keeps expanding, just like on Facebook')); ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                </div>
                <div class="columns clearfix">
                    <div class="col_40">
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
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end(); ?>

