<div class="flat_area grid_16" style="opacity: 1;">
    <h2>Equipment</h2>

    <p>Check out the Application like <a href="#">navigation</a>. Resize to see the liquid layout in action.
        Expand/Collapse and sort boxes. Try out the WYSIWYGs.</p>
</div>
<div class="equipment form">
    <?php echo $this->Form->create('Equipment', array('type' => 'file')); ?>
    <div class="box grid_16" style="opacity: 1;">
        <h2 class="box_head">THÊM THIẾT BỊ</h2>
        <a href="#" class="grabber">&nbsp;</a>
        <a href="#" class="toggle">&nbsp;</a>

        <div class="toggle_container">
            <div class="block" style="opacity: 1;">
                <h2 class="section">Text Fields</h2>

                <div class="col_60">
                    <fieldset>
                        <label>Tên thiết bị<span>Tên của thiết bị</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->input('name', array('placeholder' => 'Nhập tên thiết bị', 'class' => 'text', 'label' => false)) ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label>Tính năng<span>Tính năng của thiết bị</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->input('features', array('placeholder' => 'Nhập tính năng của thiết bị', 'class' => 'text', 'label' => false)) ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                </div>
                <div class="columns clearfix">
                    <div class="col_40">

                        <fieldset>
                            <label>Tập tin </label>

                            <div>
                                <?php echo $this->Form->input('file', array('type' => 'file', 'label'=>false)) ?>
                            </div>
                        </fieldset>
                        <div class="columns clearfix">
                            <div>
                                <fieldset>
                                    <label>Nước sản xuất</label>

                                    <div>
                                        <!--                                        <input type="text" placeholder="Nhập nguồn của bài tin" class="text">-->
                                        <?php echo $this->Form->input('production', array('placeholder' => 'Nhập nước sản xuất', 'class' => 'text', 'label' => false)) ?>
                                    </div>
                                </fieldset>
                            </div>
                            <div>
                                <fieldset>
                                    <label>Trạng thái hiển thị</label>

                                    <div class="inline clearfix">
                                        <!--                                        <label for="yes2b"><input type="checkbox" name="answer2b" id="yes2b">One</label>-->
                                        <!--                                        <label for="no2b"><input type="checkbox" name="answer2b" id="no2b">Two</label>-->
                                        <?php
                                        echo $this->Form->input('status', array('type' => 'checkbox', 'label' => 'Đăng'));
                                        ?>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="button_bar clearfix">
                    <button class="green img_icon has_text" type="submit">
                        <span>Thêm</span>
                    </button>
                    <button class="red img_icon has_text" type="reset">
                        <span>Hủy</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <?php echo $this->Form->end(); ?>
