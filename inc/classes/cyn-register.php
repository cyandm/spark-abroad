<?php

if (!class_exists('cyn_register')) {
    class cyn_register
    {

        function __construct()
        {
            add_action('init', [$this, 'register_jobseeker_post_type']);
            add_action('init', [$this, 'register_service_post_type']);
            add_action('init', [$this, 'register_faq_post_type']);
            add_action('init', [$this, 'cyn_add_faq_cat_taxonomy']);
        }



        public function register_jobseeker_post_type()
        {
            $jobseeker_labels = [
                'name' => 'کارجویان',
                'singular_name' => 'کارجو',
                'add_new' => 'افزودن کارجو',
                'add_new_item' => 'افزودن کارجو جدید',
                'new_item' => 'کارجو جدید',
                'edit_item' => 'ویرایش اطلاعات کارجو',
                'view_item' => 'دیدن کارجو',
                'all_items' => 'همه کارجو ها',
                'search_items' => 'جستجو کارجو',
                'not_found' => 'کارجو پیدا نشد',
                'not_found_in_trash' => 'کارجو پیدا نشد'
            ];

            $jobseeker_args = [
                'labels' => $jobseeker_labels,
                'description' => 'jobseeker custom post type.',
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'jobseeker'),
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 20,
                'supports' => array('author', 'thumbnail', 'title'),
                'taxonomies' => array('jobseeker-cat'),
                'menu_icon' => 'dashicons-groups',
                'show_in_rest' => true,
            ];

            register_post_type('jobseeker', $jobseeker_args);
        }



        public function register_service_post_type()
        {
            $service_labels = [
                'name' => 'خدمات',
                'singular_name' => 'خدمت',
                'menu_name' => 'خدمت',
                'name_admin_bar' => 'خدمت',
                'add_new' => 'افزودن خدمت',
                'add_new_item' => 'افزودن خدمت جدید',
                'new_item' => 'خدمت جدید',
                'edit_item' => 'ویرایش خدمت',
                'view_item' => 'دیدن خدمت',
                'all_items' => 'همه خدمات',
                'search_items' => 'جستجو خدمت',
                'not_found' => 'خدمت پیدا نشد',
                'not_found_in_trash' => 'خدمت پیدا نشد'
            ];

            $service_args = [
                'labels' => $service_labels,
                'description' => 'service custom post type.',
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'service'),
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 20,
                'supports' => array('author', 'thumbnail', 'title'),
                'taxonomies' => array('service-cat'),
                'menu_icon' => 'dashicons-megaphone',
                'show_in_rest' => true,
            ];

            register_post_type('service', $service_args);
        }


        public function register_faq_post_type()
        {
            $faq_labels = [
                'name' => 'سوالات',
                'singular_name' => 'سوال',
                'add_new' => 'افزودن سوال',
                'add_new_item' => 'افزودن سوال جدید',
                'new_item' => 'سوال جدید',
                'edit_item' => 'ویرایش سوال',
                'view_item' => 'دیدن سوال',
                'all_items' => 'همه سوال ها',
                'search_items' => 'جستجو سوال',
                'not_found' => 'سوال پیدا نشد',
                'not_found_in_trash' => 'سوال پیدا نشد'
            ];

            $faq_args = [
                'labels' => $faq_labels,
                'description' => 'faq custom post type.',
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'faq'),
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 20,
                'supports' => array('author', 'title', 'editor'),
                'taxonomies' => array('faq-cat'),
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-format-status',
            ];

            register_post_type('faq', $faq_args);
        }

        function cyn_add_faq_cat_taxonomy()
        {
            $labels = [
                'name' => 'دسته بندی سوالات'
            ];

            $args = [
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => ['slug' => 'faq-cat'],
            ];

            register_taxonomy('faq-cat', ['faq'], $args);
        }
    }
}
