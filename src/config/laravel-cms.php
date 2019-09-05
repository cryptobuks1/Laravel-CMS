<?php

return [
    /*
    |--------------------------------------------------------------------------
    | CMS frontend global settings
    |--------------------------------------------------------------------------
    | need to run "php artisan config:cache" after make a change
    |
    */
    'top_logo' => env('LARAVEL_CMS_TOP_LOGO', 'https://raw.githubusercontent.com/AlexStack/Laravel-CMS/master/src/assets/frontend/images/top-logo.png'),

    'page_top' => '<div class="row justify-content-end">
        <div class="col-md text-right text-secondary page_top">
            <i class="fab fa-facebook-square mr-3"></i>
            <i class="fab fa-twitter-square mr-3"></i>
            <i class="fas fa-envelope mr-4"></i>

        </div>
    </div>',

    'page_footer' => '<div class="row justify-content-center">
        <div class="col-md pt-5 pb-5 text-center bg-light footer">
            <span class="small  text-secondary">Made with <i class="fas fa-heart"></i> by <a href="https://github.com/AlexStack/Laravel-CMS" target="_blank" class=" text-secondary">LaravelCms</a> @ ' . date('Y') . '</span>
        </div>
    </div>',

    'favicon_url' => '/favicon.ico',

    /*
    |--------------------------------------------------------------------------
    | Custom page routes
    |--------------------------------------------------------------------------
    */
    'homepage_route'    => env('LARAVEL_CMS_HOMEPAGE_ROUTE', '/cms-home'),

    'page_route_prefix' => env('LARAVEL_CMS_PAGE_PREFIX', '/cms-'),

    'admin_route'       => env('LARAVEL_CMS_BACKEND_ROUTE', '/cmsadmin'),


    /*
    |--------------------------------------------------------------------------
    | Default slug format and suffix for page URL
    |--------------------------------------------------------------------------
    | 'slug_format' can be from_title, id, pinyin
    | 'slug_suffix' can be anything you want, empty means no suffix
    */
    'slug_format'   => 'from_title',
    'slug_suffix'   => '.html',
    'slug_separate' => '-',


    /*
    |--------------------------------------------------------------------------
    | User id in admin_id_ary can access the cms backend
    |--------------------------------------------------------------------------
    */
    'admin_id_ary' => [1, 1, 1],


    /*
    |--------------------------------------------------------------------------
    | File Upload Folder Name: /public/storage/xxx
    |--------------------------------------------------------------------------
    */
    'upload_dir' => env('LARAVEL_CMS_UPLOAD_DIR', 'laravel-cms-uploads'),

    /*
    |--------------------------------------------------------------------------
    | Image Re-optimize Time (seconds)
    |--------------------------------------------------------------------------
    |
    | How long the optimized image will re-create for an existing one
    | By default it's no need to recreate for 10 years
    |
    */

    'image_reoptimize_time' => env('LARAVEL_CMS_IMAGE_REOPTIMIZE_TIME', 360000000),

    'image_encode' => env('LARAVEL_CMS_IMAGE_ENCODE', 'jpg'),

    /*
    |--------------------------------------------------------------------------
    | Database Table Name
    |--------------------------------------------------------------------------
    |
    | Here you may configure a different table name for each table
    |
    */

    'table_name' => [

        'pages' => 'laravelcms_pages',
        'files' => 'laravelcms_files',
        'settings' => 'laravelcms_settings',
        'inquiries' => 'laravelcms_inquiries',
        'inquiry_settings' => 'laravelcms_inquiry_settings',
    ],

    /*
    |--------------------------------------------------------------------------
    | Blade template directory
    |--------------------------------------------------------------------------
    |
    | Here you may configure a different template them
    |
    */
    'template_frontend_dir' => 'frontend',
    'template_backend_dir'  => 'backend',
    'template_language'     => 'en',
];
