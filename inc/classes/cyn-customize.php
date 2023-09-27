<?php

if (!class_exists('cyn_customize')) {
    class cyn_customize
    {
        function __construct()
        {
            add_action('customize_register', [$this, 'basic_settings']);
        }

        public function basic_settings($wp_customize)
        {


            $wp_customize->add_section('basic_settings', [
                'title' => 'تنظیمات سایت',
                'priority' => 1
            ]);


            //ADD Phone Numbers
            $wp_customize->add_setting(
                'cyn_phone_number_one',
                [
                    'type' => 'option'
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_phone_number_one',
                array(
                    'label' => 'شماره تلفن 1',
                    'section' => 'basic_settings',
                    'type' => 'tel',
                    'settings' => 'cyn_phone_number_one'
                )
            ));
            $wp_customize->add_setting(
                'cyn_phone_number_two',
                [
                    'type' => 'option',
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_phone_number_two',
                array(
                    'label' => 'شماره تلفن 2',
                    'section' => 'basic_settings',
                    'type' => 'tel',
                    'settings' => 'cyn_phone_number_two'
                )
            ));
            //ADD Slogan Footer
            $wp_customize->add_setting(
                'cyn_slogan_footer',
                [
                    'type' => 'option'
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_slogan_footer',
                array(
                    'label' => 'شعار',
                    'section' => 'basic_settings',
                    'type' => 'text',
                    'settings' => 'cyn_slogan_footer'
                )
            ));
            //ADD Social Media
            $wp_customize->add_setting(
                'cyn_socialmedia_twitter',
                [
                    'type' => 'option'
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_socialmedia_twitter',
                array(
                    'label' => 'آدرس توییتر',
                    'section' => 'basic_settings',
                    'type' => 'url',
                    'settings' => 'cyn_socialmedia_twitter'
                )
            ));
            $wp_customize->add_setting(
                'cyn_socialmedia_youtube',
                [
                    'type' => 'option'
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_socialmedia_youtube',
                array(
                    'label' => 'آدرس یوتوب',
                    'section' => 'basic_settings',
                    'type' => 'url',
                    'settings' => 'cyn_socialmedia_youtube'
                )
            ));
            $wp_customize->add_setting(
                'cyn_socialmedia_linkedin',
                [
                    'type' => 'option'
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_socialmedia_linkedin',
                array(
                    'label' => 'آدرس لینکدین',
                    'section' => 'basic_settings',
                    'type' => 'url',
                    'settings' => 'cyn_socialmedia_linkedin'
                )
            ));
            $wp_customize->add_setting(
                'cyn_socialmedia_instagram',
                [
                    'type' => 'option'
                ]
            );

            $wp_customize->add_control(new WP_Customize_Upload_Control(
                $wp_customize,
                'cyn_socialmedia_instagram',
                array(
                    'label' => 'آدرس اینستاگرام',
                    'section' => 'basic_settings',
                    'type' => 'url',
                    'settings' => 'cyn_socialmedia_instagram'
                )
            ));
        }
    }
}
