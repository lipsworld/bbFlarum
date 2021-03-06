<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<div id="post-<?php bbp_reply_id(); ?>" class="prvi_odgovor">
    <div class="odgovori">
        <div class="row">
            <div class="col-md-12">
                <div class="avatar pull-left">
                    <?php do_action( 'bbp_theme_before_reply_author_details' ); ?>
                    <?php bbp_reply_author_link( array( 'type' => 'avatar', 'size' => 50 ) ); ?>
                    <?php do_action( 'bbp_theme_after_reply_author_details' ); ?>
                    <?php if (is_super_admin(bbp_get_reply_author_id())): ?>
                        <span class="status"><i class="fa fa-wrench" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="<?php echo _x( 'Keymaster', 'User role', 'bbpress' ); ?>"></i></span>
                    <?php endif; ?>
                </div>
                <?php if ( is_user_logged_in() ) : ?>
                    <span class="pull-right">
                                    <?php if ( bbp_is_topic(bbp_get_reply_id()) ) : ?>
                                        <bottom class="btn btn-sm btn-default">
                                  <?php bbp_forum_subscription_link( array( 'before' => '', 'subscribe' => '<i class="fa fa-eye" aria-hidden="true"></i> '. translate('Subscribe', bbpress) .'', 'unsubscribe' => '<i class="fa fa-eye-slash" aria-hidden="true"></i> '. translate('Unsubscribe', bbpress) .' ' ) ); ?>
                                        </bottom>
                                    <?php endif; ?>
                        <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                           <li><?php bbp_reply_admin_links(array('before' => '<li>', 'sep' => '', 'after' => '</li>')); ?></li>
                                           <li role="separator" class="divider"></li>
                                           <li><a href="<?php bbp_reply_url(); ?>" class="bbp-reply-permalink">#<?php bbp_reply_id(); ?></a></li>
                                        </ul>
                                    </div>
                                </span>
                <?php endif; ?>
                <div class="odgovor">
                    <div class="ime">
                        <?php bbp_reply_author_link( array( 'type' => 'name' ) ); ?>
                    </div>
                    <div class="vrijeme"> pre <?php bbp_reply_post_date(0, true); ?></div>
                    <?php do_action( 'bbp_theme_before_reply_content' ); ?>
                    <?php bbp_reply_content(); ?>
                    <?php do_action( 'bbp_theme_after_reply_content' ); ?>
                    <?php if ( bbp_is_topic(bbp_get_reply_id()) ) : ?>
                        <div class="fb-like pull-right" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
