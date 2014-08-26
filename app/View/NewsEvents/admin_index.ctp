<?php
//debug($this->Paginator->params());
?>
<div class="flat_area grid_16">
    <h2><?php echo __('TIN TỨC') ?></h2>

    <p>Quản lý <strong>Bảng tin tức</strong> các thông tin, sửa xóa thêm tin tức của tone, hoặc tin tức chung tại nơi
        nay</p>
</div>
<?php
?>
<div class="box grid_16 single_datatable no_titlebar" style="opacity: 1;">
    <div id="dt1" class="no_margin">
        <div class="dataTables_wrapper">
            <div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
                <div class="dataTables_length"><label>Show
                        <div class="selector" id="uniform-undefined"><span>10</span><select size="1"
                                                                                            style="opacity: 0;">
                                <option value="10" selected="selected">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select></div>
                        entries</label></div>
                <div class="dataTables_filter"><label>Search: <input type="text" class="text"></label></div>
            </div>
            <div class="dataTables_scroll">
                <div class="dataTables_scrollHead ui-state-default"
                     style="overflow: hidden; position: relative; border: 0px; width: 101%;">
                    <div class="dataTables_scrollHeadInner" style="width: 1118px;">
                        <table class="display datatable" style="margin-left: 0px; width: 1101px; visibility: visible;">
                            <thead>
                            <tr>
                                <th class="ui-state-default" rowspan="1" colspan="1" style="width: 50px;">
                                    <div class="DataTables_sort_wrapper">STT<span
                                            class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span>
                                    </div>
                                </th>
                                <th class="ui-state-default" rowspan="1" colspan="1" style="width: 220px;">
                                    <div class="DataTables_sort_wrapper">Tên bài
                                    </div>
                                </th>
                                <th class="ui-state-default" rowspan="1" colspan="1" style="width: 500px;">
                                    <div class="DataTables_sort_wrapper">Tóm tắt
                                    </div>
                                </th>
                                <th class="ui-state-default" rowspan="1" colspan="1" style="width: 70px;">
                                    <div class="DataTables_sort_wrapper">Trạng thái
                                    </div>
                                </th>
                                <th class="ui-state-default" rowspan="1" colspan="1" style="width: 70px;">
                                    <div class="DataTables_sort_wrapper">Xóa
                                    </div>
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="dataTables_scrollBody" style="overflow: auto; width: 101%;">
                    <table class="display datatable" style="margin-left: 0px; width: 1101px; visibility: visible;">
                        <thead>
                        <tr style="height: 0px;">
                            <th class="ui-state-default" rowspan="1" colspan="1"
                                style="width: 50px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"></th>
                            <th class="ui-state-default" rowspan="1" colspan="1"
                                style="width: 220px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"></th>
                            <th class="ui-state-default" rowspan="1" colspan="1"
                                style="width: 500px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"></th>
                            <th class="ui-state-default" rowspan="1" colspan="1"
                                style="width: 70px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"></th>
                            <th class="ui-state-default" rowspan="1" colspan="1"
                                style="width: 70px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt = 0;
                        foreach ($newsEvents as $newsEvent):
                            $stt++;
                            ?>
                            <tr class="gradeA <?php if ($stt % 2 == 0) { ?>even<?php } else { ?>odd<?php } ?>">
                                <td style="text-align: center; vertical-align: middle"><?php echo $stt; ?></td>
                                <td style="vertical-align: middle">
                                    <?php echo $this->Html->link($newsEvent['NewsEvent']['title'], array('action' => 'edit', $newsEvent['NewsEvent']['id'])); ?>
                                </td>
                                <td style="vertical-align: middle"><?php echo $newsEvent['NewsEvent']['description'] ?></td>
                                <td style="text-align: center; vertical-align: middle"
                                    id="ajax<?php echo $newsEvent['NewsEvent']['id'] ?>"><a
                                        onclick="state(<?php echo $newsEvent['NewsEvent']['id']; ?>,<?php echo $newsEvent['NewsEvent']['publish']; ?>)"><?php if ($newsEvent['NewsEvent']['publish'] == 1) {
                                            echo $this->Html->image('/img/on.png', array('alt' => 'Đăng'));
                                        } else {
                                            echo $this->Html->image('/img/off.png', array('alt' => 'Không đăng'));
                                        } ?></a></td>
                                <!--                            <td style="text-align: center; vertical-align: middle">-->
                                <?php //echo $this->Html->link('Edit', array('action' => 'edit', $newsEvent['NewsEvent']['id'])); ?><!--</td>-->
                                <td style="text-align: center; vertical-align: middle"><?php
                                    echo $this->Form->postLink('Delete', array('action' => 'delete', $newsEvent['NewsEvent']['id']),
                                        array('confirm' => 'Are you sure?')
                                    );
                                    ?></td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
                <div class="dataTables_info">Showing 1 to 10 of 58 entries</div>
                <div
                    class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers">
                    <span
                        class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled"><?php echo $this->Paginator->first("First"); ?></span><span class="previous fg-button ui-button ui-state-default ui-state-disabled"><?php echo $this->Paginator->prev(__('previous', true), array(), null, array('class' => 'disabled')); ?></span><span
                            class="fg-button ui-button ui-state-default ui-state-disabled"><?php echo $this->Paginator->numbers(); ?></span><span class="next fg-button ui-button ui-state-default"><?php echo $this->Paginator->next(__('next', true), array(), null, array('class' => 'disabled')); ?></span><span class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default"><?php echo $this->Paginator->last("Last"); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div id="pagination">-->
<!--    <p>-->
<!--        --><?php
//
//        echo $this->Paginator->counter(array(
//            'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
//        ));
//        ?>
<!--    </p>-->
<!---->
<!--    <div class="paging">-->
<!--        --><?php //echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<!--        |  --><?php //echo $this->Paginator->numbers();?>
<!--        |-->
<!--        --><?php //echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
<!--    </div>-->
<!--</div>-->
<script>
    function state(id, ne_state) {
        if (ne_state == 1) {
            ne_state = 0;
        }
        else {
            ne_state = 1;
        }
        $.ajax({
            type: "POST",
            url: "/tone/admin/newsevents/status/" + id + "/" + ne_state,
            success: function (data) {
                $('#ajax' + id).html(data);
            }
        });
    }
</script>



