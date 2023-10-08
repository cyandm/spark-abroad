<?php

/*Template Name: Contact Us Page */
?>

<?php get_header() ?>
<main class="contact-us">
    <h1>اگه جواب سوالتو پیدا نکردی یا میخوای بیشتر بدونی </h1>
    <p>تماس با ما</p>
    <form>
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
</main>

<?php get_footer() ?>