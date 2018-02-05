<div class="card post">
	<div id="comments" class="card-content">
<?php 
if (!comments_open() && get_comments_number())
{
	echo '<span class="card-title"><h2>دیدگاه ها برای این پست بسته شده اند.</h2></span>';
} 
else
{

if(have_comments())
	{ ?>
	<span class="card-title"><h2><?php comments_number('این پست بدون دیدگاه است.','این پست یک دیدگاه دارد:', 'این پست % دیدگاه دارد:'); ?></h2></span>
	<?php
	$args = array(
		'walker' => new smoein_walker_comment(),
		'style' => 'div',
		'reply_text' => 'پاسخ',
		'avatar_size' => 0
	);
	wp_list_comments( $args );
	}
else
	{ ?>
	<span class="card-title"><h2>برای این پست دیدگاهی وجود ندارد.</h2></span>
	<?php
	}
		$fields = array(
		'author' => '<div class="row"><div class="input-field col s12 m12 l6 xl6 right">
        				<input id="authoru" name="author" type="text" class="validate smh-dir" required>
        				<label for="authoru" class="smh-dir right">نام شما</label>
       				</div>',
        'email' => '<div class="input-field col s12 m12 l6 xl6 right">
       					<input id="emailu" name="email" type="email" data-error="wrong" data-success="right" class="validate smh-dir">
       					<label for="emailu" class="smh-dir right">ایمیل شما (اختیاری)</label>
       				</div></div>'
	);
	$argsc = array(
		'class_form' => '',
		'fields' => $fields,
		'comment_field' => '<div class="row no-margin">
         						<div class="input-field col s12">
            						<textarea class="materialize-textarea" required id="comment" name="comment" aria-required="true"></textarea>
            						<label for="comment" class="smh-dir right">متن دیدگاه</label>
          						</div>
        					</div>',
        'label_submit'=>'بفرست',
        'title_reply'=>'<div>دیدگاه خود را بنویسید:</div>',
        'comment_notes_before' => '',
        'class_submit' => 'btn waves-effect waves-light deep-purple accent-3 single-page-btn',
        'logged_in_as' => '<div class="deep-purple-text" style="text-align: right;margin-bottom: 10px;">وارد شده به عنوان ' . sprintf( __( '<a href="%1$s">%2$s</a> - <a class="indigo-text" href="%3$s" title="خارج شدن از این اکانت">خروج؟</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</div>',
        'title_reply_to' => '<span class="smh-dir">در حال پاسخ به %s - </span>',
        'cancel_reply_link' => '<span class="smh-dir">لغو پاسخ</span>'
	);
	comment_form( $argsc );
}
		?>
	</div>
</div>