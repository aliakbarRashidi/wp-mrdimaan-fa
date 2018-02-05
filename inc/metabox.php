<?php
// Meta Box ===================================
function dimaan_add_meta_box() {
    add_meta_box( 'post_data_box', 'داده های مربوط به پست', 'dimaan_data_box_cb', 'post', 'normal' );
}
    
// Generate html in meta box
function dimaan_data_box_cb( $post ) {
    wp_nonce_field( 'dimaan_save_post_data', 'dimaan_post_data_nonce' );

    $value = get_post_meta( $post->ID , '_post_data_value_key_audio', true );
    echo '<label for="dimaan_post_data_audio"> آدرس فایل صدا: ';
    echo '<input type="text" id="dimaan_post_data_audio" name="dimaan_post_data_audio" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_video', true );
    echo ' - <label for="dimaan_post_data_video"> آدرس فایل ویدیویی:  ';
    echo '<input type="text" id="dimaan_post_data_video" name="dimaan_post_data_video" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_more', true );
    echo ' - <label for="dimaan_post_data_more"> متن ادامه مطلب:  ';
    echo '<input type="text" id="dimaan_post_data_more" name="dimaan_post_data_more" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_gallery1', true );
    echo '<br/><br/> <label for="dimaan_post_data_gallery1"> تصویر اول گالری:   ';
    echo '<input type="text" id="dimaan_post_data_gallery1" name="dimaan_post_data_gallery1" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_gallery2', true );
    echo '<br/><label for="dimaan_post_data_gallery2"> تصویر دوم گالری:   ';
    echo '<input type="text" id="dimaan_post_data_gallery2" name="dimaan_post_data_gallery2" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_gallery3', true );
    echo '<br/><label for="dimaan_post_data_gallery3"> تصویر سوم گالری:   ';
    echo '<input type="text" id="dimaan_post_data_gallery3" name="dimaan_post_data_gallery3" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_gallery4', true );
    echo '<br/><label for="dimaan_post_data_gallery4"> تصویر چهارم گالری:   ';
    echo '<input type="text" id="dimaan_post_data_gallery4" name="dimaan_post_data_gallery4" value="'. esc_attr($value) .'" />';

    $value = get_post_meta( $post->ID , '_post_data_value_key_gallery5', true );
    echo '<br/><label for="dimaan_post_data_gallery5"> تصویر پنجم گالری:   ';
    echo '<input type="text" id="dimaan_post_data_gallery5" name="dimaan_post_data_gallery5" value="'. esc_attr($value) .'" />';
}
add_action( 'add_meta_boxes', 'dimaan_add_meta_box');

function dimaan_save_post_data( $post_id ) {

    if (! isset( $_POST['dimaan_post_data_nonce'] ) ) {
        return;
    }

    if (! wp_verify_nonce( $_POST['dimaan_post_data_nonce'], 'dimaan_save_post_data' ) ) {
        return;
    }

    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }


    $my_data = esc_attr($_POST['dimaan_post_data_audio']);
    update_post_meta( $post_id, '_post_data_value_key_audio', $my_data);
    
    $my_data = esc_attr($_POST['dimaan_post_data_video']);
    update_post_meta( $post_id, '_post_data_value_key_video', $my_data);
    
    $my_data = esc_attr($_POST['dimaan_post_data_more']);
    update_post_meta( $post_id, '_post_data_value_key_more', $my_data);
    
    $my_data = esc_attr($_POST['dimaan_post_data_gallery1']);
    update_post_meta( $post_id, '_post_data_value_key_gallery1', $my_data);

    $my_data = esc_attr($_POST['dimaan_post_data_gallery2']);
    update_post_meta( $post_id, '_post_data_value_key_gallery2', $my_data);
    
    $my_data = esc_attr($_POST['dimaan_post_data_gallery3']);
    update_post_meta( $post_id, '_post_data_value_key_gallery3', $my_data);
    
    $my_data = esc_attr($_POST['dimaan_post_data_gallery4']);
    update_post_meta( $post_id, '_post_data_value_key_gallery4', $my_data);
    
    $my_data = esc_attr($_POST['dimaan_post_data_gallery5']);
    update_post_meta( $post_id, '_post_data_value_key_gallery5', $my_data);
}
add_action( 'save_post', 'dimaan_save_post_data');