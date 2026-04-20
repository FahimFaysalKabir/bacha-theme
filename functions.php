<?php

  function basic_function(){

    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support( 'custom-header' );
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array(
     
      'main-menu'             => 'Main Menu',
      'footer-menu'           => 'Footer Menu',

    ));

    register_post_type('notice',array(

        'public'     => true,
        'labels'     => array(
           'name'    => 'Notice Board',
           'add_new_item' => 'Add New Notice',
           'all_items' => 'All notice' 

        ),
        'menu_icon'    => 'dashicons-megaphone'



    ));

    register_post_type('slider',array(

        'public'     => true,
        'labels'     => array(
           'name'    => 'slider',
           'add_new_item' => 'Add New Slider',
           'all_items' => 'All slider',
           'featured_image' => 'slider image',
           'set_featured_image' => 'Set Slider Image',
           'remove_featured_image' => 'Remove Slider Image'

        ),
        'menu_icon'    => 'dashicons-desktop',
        'supports'     =>  array('title','thumbnail'),



    ));

    register_post_type('teacher',array(

        'public'     => true,
        'labels'     => array(
           'name'    => 'teacher',
           'add_new_item' => 'Add New teacher',
           'all_items' => 'All teacher',
           'featured_image' => 'teacher image',
           'set_featured_image' => 'Set teacher Image',
           'remove_featured_image' => 'Remove teacher Image'

        ),
        'menu_icon'    => 'dashicons-desktop',
        'supports'     =>  array('title','thumbnail','editor'),



    ));


  
  }

  add_action('after_setup_theme','basic_function');

?>