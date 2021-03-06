<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<?php    $this->managelayout->add_js(base_url('plugin/zeroclipboard/ZeroClipboard.js')); ?>

<?php
if (element('syntax_highlighter', element('board', $view)) OR element('comment_syntax_highlighter', element('board', $view))) {
    $this->managelayout->add_css(base_url('assets/js/syntaxhighlighter/styles/shCore.css'));
    $this->managelayout->add_css(base_url('assets/js/syntaxhighlighter/styles/shThemeMidnight.css'));
    $this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shCore.js'));
    $this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushJScript.js'));
    $this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushPhp.js'));
    $this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushCss.js'));
    $this->managelayout->add_js(base_url('assets/js/syntaxhighlighter/scripts/shBrushXml.js'));
?>
    <script type="text/javascript">
    SyntaxHighlighter.config.clipboardSwf = '<?php echo base_url('assets/js/syntaxhighlighter/scripts/clipboard.swf'); ?>';
    var is_SyntaxHighlighter = true;
    SyntaxHighlighter.all();
    </script>
<?php } ?>

<?php echo element('headercontent', element('board', $view)); ?>

<div class="board">
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>'); ?>
    <h3>
        <?php if (element('category', element('post', $view))) { ?>[<?php echo html_escape(element('bca_value', element('category', element('post', $view)))); ?>] <?php } ?>
        <?php echo html_escape(element('post_title', element('post', $view))); ?>
    </h3>
    <ul class="info">
        <li><?php echo element('display_name', element('post', $view)); ?></li>
        <li><i class="fa fa-comments"></i> <?php echo number_format(element('post_comment_count', element('post', $view))); ?></li>
        <li><i class="fa fa-eye"></i> <?php echo number_format(element('post_hit', element('post', $view))); ?></li>
        <?php if (element('use_post_like', element('board', $view))) { ?>
            <li><i class="fa fa-thumbs-up"></i> <span class="post-like"><?php echo number_format(element('post_like', element('post', $view))); ?></span></li>
        <?php } ?>
        <?php if (element('use_post_dislike', element('board', $view))) { ?>
            <li><i class="fa fa-thumbs-down"></i> <span class="post-dislike"><?php echo number_format(element('post_dislike', element('post', $view))); ?></span></li>
        <?php } ?>
        <?php if (element('use_print', element('board', $view))) { ?>
            <li><a href="javascript:;" id="btn-print" onClick="post_print('<?php echo element('post_id', element('post', $view)); ?>', 'post-print');" title="??? ?????? ???????????????"><i class="fa fa-print"></i> <span class="post-print">Print</span></a></li>
        <?php } ?>
        <li class="copy_post_url" data-clipboard-text="<?php echo element('short_url', $view); ?>"><span><i class="fa fa-link"></i> ?????????</span></li>
        <?php if (element('show_url_qrcode', element('board', $view))) { ?>
            <li class="url-qrcode"  data-qrcode-url="<?php echo urlencode(element('short_url', $view)); ?>"><i class="fa fa-qrcode"></i></li>
        <?php } ?>
        <li class="pull-right time"><i class="fa fa-clock-o"></i> <?php echo element('display_datetime', element('post', $view)); ?></li>
        <?php if (element('display_ip', element('post', $view))) { ?>
            <li class="pull-right time"><i class="fa fa-map-marker"></i> <?php echo element('display_ip', element('post', $view)); ?></li>
        <?php } ?>
        <?php if (element('is_mobile', element('post', $view))) { ?>
            <li class="pull-right time"><i class="fa fa-wifi"></i></li>
        <?php } ?>
    </ul>
    <?php if (element('link_count', $view) > 0 OR element('file_download_count', $view) > 0) { ?>
        <ul class="list-group">
            <?php if (element('file_download_count', $view) > 0) { ?>
                <li class="list-group-item list-group-item-info">Download</li>
                    <?php    foreach (element('file_download', $view) as $key => $value) { ?>
                        <li class="list-group-item"><i class="fa fa-download"></i> <a href="javascript:file_download('<?php echo element('download_link', $value); ?>')"><?php echo html_escape(element('pfi_originname', $value)); ?>(<?php echo byte_format(element('pfi_filesize', $value)); ?>)</a> <span class="time"><i class="fa fa-clock-o"></i> <?php echo display_datetime(element('pfi_datetime', $value), 'full'); ?></span><span class="badge"><?php echo number_format(element('pfi_download', $value)); ?></span></li>
            <?php
                }
            }
            if (element('link_count', $view) > 0) { ?>
                <li class="list-group-item list-group-item-info">Link</li>
            <?php
            foreach (element('link', $view) as $key => $value) {
            ?>
                <li class="list-group-item"><i class="fa fa-link"></i> <a href="<?php echo element('link_link', $value); ?>" target="_blank"><?php echo html_escape(element('pln_url', $value)); ?></a><span class="badge"><?php echo number_format(element('pln_hit', $value)); ?></span>
                    <?php if (element('show_url_qrcode', element('board', $view))) { ?>
                        <span class="url-qrcode"  data-qrcode-url="<?php echo urlencode(element('pln_url', $value)); ?>"><i class="fa fa-qrcode"></i></span>
                    <?php } ?>
                </li>
            <?php
                    }
                }
            ?>
        </ul>
    <?php
    }
    ?>
    <script type="text/javascript">
    //<![CDATA[
    function file_download(link) {
        <?php if (element('point_filedownload', element('board', $view)) < 0) { ?>if ( ! confirm("????????? ???????????? ????????? ???????????? ??????(<?php echo number_format(element('point_filedownload', element('board', $view))); ?>???)?????????.\n\n???????????? ???????????? ????????? ???????????? ????????? ?????? ???????????? ????????? ???????????? ???????????? ????????????.\n\n????????? ???????????? ???????????????????")) { return; }<?php }?>
        document.location.href = link;
    }
    //]]>
    </script>
    <?php if (element('extra_content', $view)) { ?>
        <ul class="list-group">
            <?php foreach (element('extra_content', $view) as $key => $value) { ?>
                <li class="list-group-item">
                    <div class="col-sm-2"> <strong><?php echo html_escape(element('display_name', $value)); ?></strong></div>
                    <div class="list-group-item-text" style="min-height:20px;"><?php echo nl2br(html_escape(element('output', $value))); ?></div></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <div class="contents-view">
        <div class="contents-view-img">
            <?php
            if (element('file_image', $view)) {
                foreach (element('file_image', $view) as $key => $value) {
            ?>
                <img src="<?php echo element('thumb_image_url', $value); ?>" alt="<?php echo html_escape(element('pfi_originname', $value)); ?>" title="<?php echo html_escape(element('pfi_originname', $value)); ?>" class="view_full_image" data-origin-image-url="<?php echo element('origin_image_url', $value); ?>" style="max-width:100%;" />
            <?php
                }
            }
            ?>
        </div>

        <!-- ?????? ?????? ?????? -->
        <div id="post-content"><?php echo element('content', element('post', $view)); ?></div>
        <!-- ?????? ?????? ??? -->

    </div>

    <?php if ( ! element('post_del', element('post', $view)) && (element('use_post_like', element('board', $view)) OR element('use_post_dislike', element('board', $view)))) { ?>
        <div class="recommand">
            <?php if (element('use_post_like', element('board', $view))) { ?>
                <a class="good" href="javascript:;" id="btn-post-like" onClick="post_like('<?php echo element('post_id', element('post', $view)); ?>', '1', 'post-like');" title="????????????"><span class="post-like"><?php echo number_format(element('post_like', element('post', $view))); ?></span><br /><i class="fa fa-thumbs-o-up fa-lg"></i></a>
            <?php } ?>
            <?php if (element('use_post_dislike', element('board', $view))) { ?>
                <a class="bad" href="javascript:;" id="btn-post-dislike" onClick="post_like('<?php echo element('post_id', element('post', $view)); ?>', '2', 'post-dislike');" title="????????????"><span class="post-dislike"><?php echo number_format(element('post_dislike', element('post', $view))); ?></span><br /><i class="fa fa-thumbs-o-down fa-lg"></i></a>
            <?php } ?>
        </div>
    <?php } ?>

    <?php
    if (element('poll', $view)) {
    $poll = element('poll', $view);
    $poll_item = element('poll_item', $view);
    ?>
        <div class="poll mb30 mt20">
            <div class="headline">
                <h5>[????????????] <?php echo html_escape(element('ppo_title', $poll)); ?></h5>
            </div>
            <?php
            if (element('attended', $poll) OR element('ended_poll', $poll)) {
                if ($poll_item) {
                    $i = 1;
                    foreach ($poll_item as $pkey => $pval) {
            ?>
                <div class="poll-result"><?php echo $i;?>. <?php echo html_escape(element('ppi_item', $pval)); ?> <div class="pull-right"><?php echo number_format(element('ppi_count', $pval)); ?>???, <?php echo element('s_rate', $pval); ?>%</div></div>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo element('s_rate', $pval); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo element('bar', $pval); ?>%;">
                        <span class="sr-only"><?php echo element('s_rate', $pval); ?>% Complete</span>
                    </div>
                </div>
            <?php
                    $i++;
                    }
                }
            } else {
            ?>
            <div id="poll_write_form">
                <?php
                $attributes = array('name' => 'fpostpoll', 'id' => 'fpostpoll');
                echo form_open('', $attributes);
                    if ($poll_item) {
                        foreach ($poll_item as $pkey => $pval) {
                ?>
                    <div class="checkbox">
                        <label for="ppi_item_<?php echo html_escape(element('ppi_id', $pval)); ?>">
                            <input type="checkbox" name="ppi_item[]" class="poll_item_chk" id="ppi_item_<?php echo html_escape(element('ppi_id', $pval)); ?>" value="<?php echo html_escape(element('ppi_id', $pval)); ?>" />
                            <?php echo html_escape(element('ppi_item', $pval)); ?>
                        </label>
                    </div>
                <?php
                    }
                }
                ?>
                    <div class="form-group mt10">
                        <button type="button" class="btn btn-default btn-xs" onClick="post_poll('<?php echo element('post_id', element('post', $view)); ?>', '<?php echo element('ppo_id', element('post', $view)); ?>');">????????????</button>
                        <button type="button" class="btn btn-default btn-xs" onClick="post_poll_result('<?php echo element('post_id', element('post', $view)); ?>', '<?php echo element('ppo_id', element('post', $view)); ?>');">????????????</button>
                        <span class="help-block">
                            ?????? <?php echo element('ppo_choose_count', $poll); ?> ??? ?????? ??????, ?????? <?php echo element('ppo_count', $poll); ?>?????? ?????????, ???????????? : <?php echo html_escape(element('poll_period', $poll)); ?>
                            <?php if (element('ppo_point', $poll)) { echo '?????????' . number_format(element('ppo_point', $poll)) . '????????? ??????'; } ?>
                        </span>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <?php
            }
            ?>

            <div id="poll_result_ajax"></div>

            <script type="text/javascript">
            //<![CDATA[
            var chklimit = <?php echo element('ppo_choose_count', $poll); ?>;
            $('input.poll_item_chk').on('change', function(evt) {
            if ($('input.poll_item_chk:checked').length > chklimit) {
                this.checked = false;
                alert('????????? ' + chklimit + '???????????? ????????? ???????????????.');
            }
            });
            function post_poll(post_id, ppo_id) {
                var href;
                href = cb_url + '/postact/post_poll/' + post_id + '/' + ppo_id;
                var $that = $(this);
                $.ajax({
                    url : href,
                    type : 'post',
                    data : $('#fpostpoll').serialize() + '&csrf_test_name=' + cb_csrf_hash,
                    dataType : 'json',
                    success : function(data) {
                        if (data.error) {
                            alert(data.error);
                            return false;
                        } else if (data.success) {
                            post_poll_result(post_id, ppo_id);
                            $('#poll_write_form').hide();

                        }

                    }
                });
            }

            function post_poll_result(post_id, ppo_id) {
                var href;
                var result = '';
                href = cb_url + '/postact/post_poll_result/' + post_id + '/' + ppo_id;
                var $that = $(this);
                $.ajax({
                    url : href,
                    type : 'post',
                    data : {csrf_test_name : cb_csrf_hash},
                    dataType : 'json',
                    success : function(data) {
                        if (data.error) {
                            alert(data.error);
                            return false;
                        } else if (data.success) {
                            var i = 1;
                            for (var key in data.poll_item) {
                                obj = data.poll_item[key];
                                result += '<div class="poll-result">' + i + '. ' + obj.ppi_item + '<div class="pull-right">' + obj.ppi_count + '???, ' + obj.s_rate + '%</div></div><div class="progress" style="height:5px;"><div class="progress-bar" role="progressbar" aria-valuenow="' + obj.s_rate + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + obj.bar + '%;"></div></div>';
                                i++;
                            }
                            $('#poll_result_ajax').html(result);
                        }

                    }
                });
            }
            //]]>
            </script>
        </div>
    <?php
    }
    ?>

    <div class="pull-right mb20">
        <?php if ( ! element('post_del', element('post', $view)) && element('use_scrap', element('board', $view))) { ?>
            <button type="button" class="btn btn-black btn-sm" id="btn-scrap" onClick="post_scrap('<?php echo element('post_id', element('post', $view)); ?>', 'post-scrap');">????????? <span class="post-scrap"><?php echo element('scrap_count', element('post', $view)) ? '+' . number_format(element('scrap_count', element('post', $view))) : ''; ?></span></button>
        <?php } ?>
        <?php if ( ! element('post_del', element('post', $view)) && element('use_blame', element('board', $view)) && ( ! element('blame_blind_count', element('board', $view)) OR element('post_blame', element('post', $view)) < element('blame_blind_count', element('board', $view)))) { ?>
            <button type="button" class="btn btn-black btn-sm" id="btn-blame" onClick="post_blame('<?php echo element('post_id', element('post', $view)); ?>', 'post-blame');">?????? <span class="post-blame"><?php echo element('post_blame', element('post', $view)) ? '+' . number_format(element('post_blame', element('post', $view))) : ''; ?></span></button>
        <?php } ?>

        <?php if ( ! element('post_del', element('post', $view)) && element('is_admin', $view)) { ?>
            <button type="button" class="btn btn-default btn-sm admin-manage-post"><i class="fa fa-cog big-fa"></i> ??????</button>
            <div class="btn-admin-manage-layer admin-manage-post-layer">
            <?php if (element('is_admin', $view) === 'super') { ?>
                <div class="item" onClick="post_copy('copy', '<?php echo element('post_id', element('post', $view)); ?>');"><i class="fa fa-files-o"></i> ????????????</div>
                <div class="item" onClick="post_copy('move', '<?php echo element('post_id', element('post', $view)); ?>');"><i class="fa fa-arrow-right"></i> ????????????</div>
                <?php if (element('use_category', element('board', $view))) { ?>
                    <div class="item" onClick="post_change_category('<?php echo element('post_id', element('post', $view)); ?>');"><i class="fa fa-tags"></i> ??????????????????</div>
                <?php
                    }
                }
                if (element('use_post_secret', element('board', $view))) {
                    if (element('post_secret', element('post', $view))) {
                ?>
                    <div class="item" onClick="post_action('post_secret', '<?php echo element('post_id', element('post', $view)); ?>', '0');"><i class="fa fa-unlock"></i> ???????????????</div>
                <?php } else { ?>
                    <div class="item" onClick="post_action('post_secret', '<?php echo element('post_id', element('post', $view)); ?>', '1');"><i class="fa fa-lock"></i> ????????????</div>
                <?php
                    }
                }
                if (element('post_hide_comment', element('post', $view))) {
                ?>
                    <div class="item" onClick="post_action('post_hide_comment', '<?php echo element('post_id', element('post', $view)); ?>', '0');"><i class="fa fa-comments"></i> ??????????????????</div>
                <?php } else { ?>
                    <div class="item" onClick="post_action('post_hide_comment', '<?php echo element('post_id', element('post', $view)); ?>', '1');"><i class="fa fa-comments"></i> ????????????</div>
                <?php } ?>
                <?php if (element('post_notice', element('post', $view))) { ?>
                    <div class="item" onClick="post_action('post_notice', '<?php echo element('post_id', element('post', $view)); ?>', '0');"><i class="fa fa-bullhorn"></i> ????????????</div>
                <?php } else { ?>
                    <div class="item" onClick="post_action('post_notice', '<?php echo element('post_id', element('post', $view)); ?>', '1');"><i class="fa fa-bullhorn"></i> ????????????</div>
                <?php } ?>
                <?php if (element('post_blame', element('post', $view)) >= element('blame_blind_count', element('board', $view))) { ?>
                    <div class="item" onClick="post_action('post_blame_blind', '<?php echo element('post_id', element('post', $view)); ?>', '0');"><i class="fa fa-exclamation-circle"></i> ??????????????????</div>
                <?php } else { ?>
                    <div class="item" onClick="post_action('post_blame_blind', '<?php echo element('post_id', element('post', $view)); ?>', '1');"><i class="fa fa-exclamation-circle"></i> ??????????????????</div>
                <?php } ?>
                <?php if (element('use_posthistory', element('board', $view))) { ?>
                    <div class="item" onClick="post_history('<?php echo element('post_id', element('post', $view)); ?>');" ><i class="fa fa-history"></i> ???????????????</div>
                <?php } ?>
                <?php if (element('use_download_log', element('board', $view))) { ?>
                    <div class="item" onClick="download_log('<?php echo element('post_id', element('post', $view)); ?>');" ><i class="fa fa-download"></i> ??????????????????</div>
                <?php } ?>
                <?php    if (element('use_link_click_log', element('board', $view))) { ?>
                    <div class="item" onClick="link_click_log('<?php echo element('post_id', element('post', $view)); ?>');"><i class="fa fa-link"></i> ??????????????????</div>
                <?php } ?>
                <div class="item" onClick="post_action('post_trash', '<?php echo element('post_id', element('post', $view)); ?>', '', '??? ?????? ??????????????? ?????????????????????????');"><i class="fa fa-trash"></i> ???????????????</div>
            </div>
        <?php } ?>
    </div>

    <?php
    if (element('use_sns_button', $view)) {
        $this->managelayout->add_js(base_url('assets/js/sns.js'));
        if ($this->cbconfig->item('kakao_apikey')) {
            $this->managelayout->add_js('https://developers.kakao.com/sdk/js/kakao.min.js');
    ?>
        <script type="text/javascript">Kakao.init('<?php echo $this->cbconfig->item('kakao_apikey'); ?>');</script>
    <?php } ?>
        <div class="sns_button">
            <a href="javascript:;" onClick="sendSns('facebook', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="??? ?????? ?????????????????? ?????????"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_facebook.png" width="22" height="22" alt="??? ?????? ?????????????????? ?????????" title="??? ?????? ?????????????????? ?????????" /></a>
            <a href="javascript:;" onClick="sendSns('twitter', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="??? ?????? ???????????? ?????????"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_twitter.png" width="22" height="22" alt="??? ?????? ???????????? ?????????" title="??? ?????? ???????????? ?????????" /></a>
            <?php if ($this->cbconfig->item('kakao_apikey')) { ?>
                <a href="javascript:;" onClick="kakaolink_send('<?php echo html_escape(element('post_title', element('post', $view)));?>', '<?php echo element('short_url', $view); ?>');" title="??? ?????? ?????????????????? ?????????"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_kakaotalk.png" width="22" height="22" alt="??? ?????? ?????????????????? ?????????" title="??? ?????? ?????????????????? ?????????" /></a>
            <?php } ?>
            <a href="javascript:;" onClick="sendSns('kakaostory', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="??? ?????? ????????????????????? ?????????"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_kakaostory.png" width="22" height="22" alt="??? ?????? ????????????????????? ?????????" title="??? ?????? ????????????????????? ?????????" /></a>
            <a href="javascript:;" onClick="sendSns('band', '<?php echo element('short_url', $view); ?>', '<?php echo html_escape(element('post_title', element('post', $view)));?>');" title="??? ?????? ????????? ?????????"><img src="<?php echo element('view_skin_url', $layout); ?>/images/social_band.png" width="22" height="22" alt="??? ?????? ????????? ?????????" title="??? ?????? ????????? ?????????" /></a>
        </div>
    <?php } ?>

    <div class="clearfix"></div>
    <?php if (element('tag', element('post', $view))) { ?>
        <div class="tags mt20">
            <i class="fa fa-tags"></i>
            <?php
            foreach (element('tag', element('post', $view)) as $key => $value) {
            ?>
                <a href="<?php echo site_url('tags/?tag=' . html_escape(element('pta_tag', $value))); ?>" title="<?php echo html_escape(element('pta_tag', $value)); ?> ?????? ??????"><?php echo html_escape(element('pta_tag', $value)); ?></a>,
            <?php    } ?>
        </div>
    <?php } ?>

    <?php
    if ( ! element('post_hide_comment', element('post', $view))) {
    ?>
        <div id="viewcomment"></div>
    <?php
        $this->load->view(element('view_skin_path', $layout) . '/comment_write');
    }
    ?>

    <div class="border_button mt20 mb20">
        <div class="btn-group pull-left" role="group" aria-label="...">
            <?php if (element('modify_url', $view)) { ?>
                <a href="<?php echo element('modify_url', $view); ?>" class="btn btn-default btn-sm">??????</a>
            <?php } ?>
            <?php    if (element('delete_url', $view)) { ?>
                <button type="button" class="btn btn-default btn-sm btn-one-delete" data-one-delete-url="<?php echo element('delete_url', $view); ?>">??????</button>
            <?php } ?>
                <a href="<?php echo element('list_url', $view); ?>" class="btn btn-default btn-sm">??????</a>
            <?php if (element('search_list_url', $view)) { ?>
                    <a href="<?php echo element('search_list_url', $view); ?>" class="btn btn-default btn-sm">????????????</a>
            <?php } ?>
            <?php if (element('reply_url', $view)) { ?>
                <a href="<?php echo element('reply_url', $view); ?>" class="btn btn-default btn-sm">??????</a>
            <?php } ?>
            <?php if (element('prev_post', $view)) { ?>
                <a href="<?php echo element('url', element('prev_post', $view)); ?>" class="btn btn-default btn-sm">?????????</a>
            <?php } ?>
            <?php if (element('next_post', $view)) { ?>
                <a href="<?php echo element('url', element('next_post', $view)); ?>" class="btn btn-default btn-sm">?????????</a>
            <?php } ?>
            </div>
        <?php if (element('write_url', $view)) { ?>
            <div class="pull-right">
                <a href="<?php echo element('write_url', $view); ?>" class="btn btn-success btn-sm">?????????</a>
            </div>
        <?php } ?>
    </div>
</div>
<?php echo element('footercontent', element('board', $view)); ?>

<?php if (element('target_blank', element('board', $view))) { ?>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
    $("#post-content a[href^='http']").attr('target', '_blank');
});
//]]>
</script>
<?php } ?>

<script type="text/javascript">
//<![CDATA[
var client = new ZeroClipboard($('.copy_post_url'));
client.on('ready', function( readyEvent ) {
    client.on('aftercopy', function( event ) {
        alert('????????? ????????? ?????????????????????. \'Ctrl+V\'??? ?????? ???????????? ????????????.');
    });
});
//]]>
</script>
<?php
if (element('highlight_keyword', $view)) {
    $this->managelayout->add_js(base_url('assets/js/jquery.highlight.js'));
?>
    <script type="text/javascript">
    //<![CDATA[
        $('#post-content').highlight([<?php echo element('highlight_keyword', $view);?>]);
    //]]>
    </script>
<?php } ?>
