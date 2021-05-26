<?php 

    function custom_post_types() {

        // Trustees post type
        register_post_type('Trustees',[
            'supports' => ['title'],
            'public' => true,
            'labels' => [
                'name' => 'Trustees',
                'add_new_item' => 'Add New Trustee',
                'edit_item' => 'Edit Trustee',
                'all_items' => 'All Trustees', 
                'singular_name' => 'Trustee', 
            ],
            'menu_icon' => 'dashicons-businessman'
        ]);

         // Projects post type
         register_post_type('Projects',[
            'supports' => ['title'],
            'public' => true,
            'labels' => [
                'name' => 'Projects',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project',
                'all_items' => 'All Projects', 
                'singular_name' => 'Project', 
            ],
            'menu_icon' => 'dashicons-portfolio'
        ]);

         // Gallery post type
         register_post_type('Gallery',[
            'supports' => ['title'],
            'public' => true,
            'labels' => [
                'name' => 'Galleries',
                'add_new_item' => 'Add New Gallery',
                'edit_item' => 'Edit Gallery',
                'all_items' => 'All Galleries', 
                'singular_name' => 'Gallery', 
            ],
            'menu_icon' => 'dashicons-format-gallery'
        ]);

         // Video post type
         register_post_type('Videos',[
            'supports' => ['title'],
            'public' => true,
            'labels' => [
                'name' => 'Videos',
                'add_new_item' => 'Add New Video',
                'edit_item' => 'Edit Video',
                'all_items' => 'All Videos', 
                'singular_name' => 'Video', 
            ],
            'menu_icon' => 'dashicons-format-video'
        ]);

        // Newsletters post type
        register_post_type('Newsletters',[
            'supports' => ['title'],
            'public' => true,
            'labels' => [
                'name' => 'Newsletters',
                'add_new_item' => 'Add New Newsletter',
                'edit_item' => 'Edit Newsletter',
                'all_items' => 'All Newsletters', 
                'singular_name' => 'Newsletter', 
            ],
            'menu_icon' => 'dashicons-media-document'
        ]);

    }

    add_action('init', 'custom_post_types');

?>