<?php

if (!class_exists('cyn_register')) {
    class cyn_register
    {

        function __construct()
        {
            add_action('init', [$this, 'register_jobseeker_post_type']);
            add_action('init', [$this, 'cyn_add_jobseeker_cat_taxonomy']);
            add_action('init', [$this, 'register_service_post_type']);
        }



        public function register_jobseeker_post_type()
        {
            $jobseeker_labels = [
                'name' => 'کارجویان',
                'singular_name' => 'کارجو'
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
                'show_in_rest' => true
            ];

            register_post_type('jobseeker', $jobseeker_args);
        }

        function cyn_add_jobseeker_cat_taxonomy()
        {
            $labels = [
                'name' => 'دسته ها'
            ];

            $args = [
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => ['slug' => 'jobseeker-cat'],
            ];

            register_taxonomy('jobseeker-cat', ['jobseeker'], $args);
        }

        public function register_service_post_type()
        {
            $service_labels = [
                'name' => 'خدمات',
                'singular_name' => 'خدمت'
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
                'show_in_rest' => true
            ];

            register_post_type('service', $service_args);
        }
    }
}
