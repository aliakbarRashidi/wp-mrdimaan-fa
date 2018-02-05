jQuery(document).ready(function($){
    
    var mediaUploader;
    $('#upload_profile_pic').on( 'click' ,function(e){
        e.preventDefault();
        if ( mediaUploader ) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'یک تصویر پروفایل انتخاب کنید:',
            button: {
                text: 'انتخاب پروفایل'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#profile_pic_input').val(attachment.url);
            $('.dimaan-header-form').submit();
        });

        mediaUploader.open();
    });

    $('#remove_profile_pic').on('click', function(e){
        e.preventDefault();
        var answer = confirm("آیا برای حذف تصویر پروفایل مطمئن هستید؟");
        if (answer == true){
            $('#profile_pic_input').val('');
            $('.dimaan-header-form').submit();
        }
        return;
    });

    //‌Back pro
    $('#upload_backpro_pic').on( 'click' ,function(e){
        e.preventDefault();
        if ( mediaUploader ) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'یک تصویر پس زمینه پروفایل انتخاب کنید:',
            button: {
                text: 'انتخاب پس زمینه'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#backpro_pic_input').val(attachment.url);
            $('.dimaan-header-form').submit();
        });

        mediaUploader.open();
    });

    $('#remove_backpro_pic').on('click', function(e){
        e.preventDefault();
        var answer = confirm("آیا برای حذف تصویر پس زمینه پروفایل مطمئن هستید؟");
        if (answer == true){
            $('#backpro_pic_input').val('');
            $('.dimaan-header-form').submit();
        }
        return;
    });

        //‌logo
        $('#upload_logo_pic').on( 'click' ,function(e){
            e.preventDefault();
            if ( mediaUploader ) {
                mediaUploader.open();
                return;
            }
    
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'لوگوی خود را انتخاب کنید',
                button: {
                    text: 'انتخاب لوگو'
                },
                multiple: false
            });
    
            mediaUploader.on('select', function(){
                attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#logo_pic_input').val(attachment.url);
                $('.dimaan-header-form').submit();
            });
    
            mediaUploader.open();
        });
    
        $('#remove_logo_pic').on('click', function(e){
            e.preventDefault();
            var answer = confirm("آیا برای حذف تصویر لوگو مطمئن هستید؟");
            if (answer == true){
                $('#logo_pic_input').val('');
                $('.dimaan-header-form').submit();
            }
            return;
        });

});