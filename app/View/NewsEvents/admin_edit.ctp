<div class="newsEvents form">
    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
    <?php echo $this->Form->create('NewsEvent', array('type' => 'file')); ?>
    <!--    <fieldset>-->
    <!--        <legend>--><?php //echo __('Admin Add News Event'); ?><!--</legend>-->
    <!--        --><?php
    //        echo $this->Form->textarea('description', array('class' => 'ckeditor'));
    ////		echo $this->Form->input('description', array('label'=>'HEHE'));
    ////		echo $this->Form->input('content');
    //        echo $this->Form->textarea('content', array('class' => 'ckeditor'));
    //		echo $this->Form->input('author');
    //		echo $this->Form->input('publish');
    //		echo $this->Form->input('tone');
    //		echo $this->Form->input('general');
    ?>
    <!--    // TEST-->
    <div class="box grid_16" style="opacity: 1;">
        <h2 class="box_head">SỬA TIN TỨC</h2>
        <a href="#" class="grabber">&nbsp;</a>
        <a href="#" class="toggle">&nbsp;</a>

        <div class="toggle_container">
            <div class="block" style="opacity: 1;">
                <h2 class="section">Text Fields</h2>

                <div class="col_60">
                    <fieldset>
                        <label>Tên bài<span>Tên của bài tin</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->input('title', array('placeholder' => 'Nhập tên của bài tin', 'class' => 'text', 'label' => false)) ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label>Mô tả bài tin<span>Trường mô tả bài tin hiển thị trang chủ</span></label>

                        <div class="clearfix">
                            <?php echo $this->Form->textarea('description', array('class' => 'tooltip autogrow textarea', 'placeholder' => 'Bạn bắt buộc phải nhập mô tả bài tin', 'title' => 'This field keeps expanding, just like on Facebook')); ?>
                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label>Nội dung bài tin<span>Nội dung chính của bài tin</span></label>

                        <div>
                            <?php echo $this->Form->textarea('content', array('class' => 'ckeditor tooltip right text')); ?>

                            <div class="required_tag tooltip hover left" title="This field is required"></div>
                        </div>
                    </fieldset>

                </div>
                <div class="columns clearfix">
                    <div class="col_40">


                        <label>Chọn ảnh cho bài tin</label>
                        <fieldset>
                            <div>
                                <?php
                                echo $this->Form->input('hidden', array('type' => 'hidden', 'value' => $this->request->data['NewsEvent']['image']));
                                //                                echo $this->Form->input('image', array('type' => 'file', 'label' => false))
                                if ($this->request->data['NewsEvent']['image'] == '') {
                                    echo $this->Html->image('/img/upload/' . 'no-image.jpg', array('alt' => 'no image', 'width' => '100'));
                                } else {
                                    echo $this->Html->image('/img/upload/' . $this->request->data['NewsEvent']['image'], array('alt' => 'uploaded image', 'width' => '100'));
                                }
                                ?>
                                <?php
                                echo $this->Form->input('image', array('type' => 'file', 'label' => false));
                                echo $this->Form->input('Del', array('label'=>'Delete Image', 'type' => 'checkbox'));
                                ?>
                            </div>
                        </fieldset>


                        <div class="columns clearfix">
                            <div>
                                <fieldset>
                                    <label>Nguồn/ Tác giả</label>

                                    <div>
                                        <!--                                        <input type="text" placeholder="Nhập nguồn của bài tin" class="text">-->
                                        <?php echo $this->Form->input('author', array('placeholder' => 'Nhập nguồn của bài tin', 'class' => 'text', 'label' => false)) ?>
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
                                        echo $this->Form->input('publish', array('type' => 'checkbox', 'label' => 'Đăng trang chủ'));
                                        echo $this->Form->input('tone', array('type' => 'checkbox', 'label' => 'Tin của tone'));
                                        echo $this->Form->input('general', array('type' => 'checkbox', 'label' => 'Tin tổng hợp'));
                                        ?>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col_60">-->
                    <!--                        <fieldset>-->
                    <!--                            <label>60% Width Column</label>-->
                    <!---->
                    <!--                            <div>-->
                    <!--                                <input type="text" placeholder="Input is 66% column width">-->
                    <!--                            </div>-->
                    <!--                        </fieldset>-->
                    <!--                    </div>-->
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
                    <button class="grey send_right img_icon has_text">
                        <img src="/template_admin/img/icons/small/white/bended_arrow_right.png" alt="Bended Arrow Right"
                             height="24" width="24"> <span>Maybe</span>
                    </button>
                </div>
            </div>
        </div>

    </div>


    <!--    // END TEST-->

    <!--    </fieldset>-->
    <?php
    echo $this->Form->input('id', array('type'=>'hidden'));
    echo $this->Form->end(__('Submit')); ?>
</div>
<!--<div class="actions">-->
<!--	<h3>--><?php //echo __('Actions'); ?><!--</h3>-->
<!--	<ul>-->
<!---->
<!--		<li>--><?php //echo $this->Html->link(__('List News Events'), array('action' => 'index')); ?><!--</li>-->
<!--	</ul>-->
<!--</div>-->
