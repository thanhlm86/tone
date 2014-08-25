<div class="newsEvents form">
    <?php echo $this->Form->create('Equipment', array('type' => 'file', 'autocomplete'=>"on")); ?>
    <input type="email" name="email" autocomplete="off">
    <div class="box grid_16" style="opacity: 1;">
        <h2 class="box_head">THÊM THIẾT BỊ</h2>
        <a href="#" class="grabber">&nbsp;</a>
        <a href="#" class="toggle">&nbsp;</a>

        <div class="toggle_container">
            <div class="block" style="opacity: 1;">
                <h2 class="section">Text Fields</h2>

                <div class="col_60">
                    <fieldset>
                        <label>Tên bài<span>Tên của bài tin</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->input('name', array('placeholder' => 'Nhập tên của bài tin', 'class' => 'text', 'label' => false)) ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label>Tên bài<span>Tên của bài tin</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->input('features', array('placeholder' => 'Nhập tên của bài tin', 'class' => 'text', 'label' => false)) ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                </div>
                <div class="columns clearfix">
                    <div class="col_40">

                        <fieldset>
                            <label>Chọn ảnh cho bài tin</label>

                            <div>
                                <?php echo $this->Form->input('file', array('type' => 'file', 'label'=>false)) ?>
                            </div>
                        </fieldset>
                        <div class="columns clearfix">
                            <div>
                                <fieldset>
                                    <label>Nguồn/ Tác giả</label>

                                    <div>
                                        <!--                                        <input type="text" placeholder="Nhập nguồn của bài tin" class="text">-->
                                        <?php echo $this->Form->input('production', array('placeholder' => 'Nhập nguồn của bài tin', 'class' => 'text', 'label' => false)) ?>
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
                                        echo $this->Form->input('status', array('type' => 'checkbox', 'label' => 'Đăng trang chủ'));
                                        ?>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="button_bar clearfix">
                    <button class="green img_icon has_text">
                        <img src="/template_admin/img/icons/small/white/bended_arrow_right.png" alt="Bended Arrow Right"
                             height="24" width="24"> <span>Yes</span>
                    </button>
                    <button class="red img_icon has_text">
                        <img src="/template_admin/img/icons/small/white/bended_arrow_right.png" alt="Bended Arrow Right"
                             height="24" width="24"> <span>No</span>
                    </button>
                    <button type="submit" class="grey send_right img_icon has_text">
                        <img src="/template_admin/img/icons/small/white/bended_arrow_right.png" alt="Bended Arrow Right"
                             height="24" width="24"> <span>Maybe</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <?php echo $this->Form->end(); ?>
