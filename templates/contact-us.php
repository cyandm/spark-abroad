<?php

/*Template Name: Contact Us Page */
?>

<?php get_header() ?>
<main class="contact-us container">
    <h1>اگه جواب سوالتو پیدا نکردی یا میخوای بیشتر بدونی </h1>
    <p>تماس با ما</p>
    <div class="container-form-image">
        <form class="contact-us-form">
            <label>نام و نام خانوادگی</label>
            <div class="container-border">
                <i class="icon-user"></i>
                <input type="text" placeholder="نام خود را وارد کنید" />
            </div>
            <label>ایمیل</label>
            <div class="container-border">
                <i class="icon-email"></i>
                <input type="email" placeholder="ایمیل خود را وارد کنید" />
            </div>
            <label>توضیحات</label>
            <div class="container-border">
                <i class="icon-cmessage"></i>
                <textarea rows="5" class="text-area-contact-us" placeholder="توضیحات"></textarea>
            </div>
            <div class="primary-btn"><i class="icon-send2"></i><a href="#">ارسال</a></div>
        </form>
        <div class="image-contact-us">
            <img src="<?php echo get_stylesheet_directory_uri() . "/assets/imgs/contact-us-image.png" ?>" alt="image contact us" />
        </div>
    </div>
</main>

<?php get_footer() ?>