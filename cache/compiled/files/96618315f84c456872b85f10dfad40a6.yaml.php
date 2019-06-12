<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/site.yaml',
    'modified' => 1559765319,
    'data' => [
        'title' => 'Graficación & Animación',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Claudia Caicedo',
            'email' => 'claudia.sce@gmail.com',
            'url' => 'http://getgrav.org/',
            'gravatar' => 'contact@getgrav.org',
            'description' => 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
        ],
        'metadata' => [
            'description' => 'Receptar is a minimal Theme designed for blogger, converted to Grav.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 100,
            'delimiter' => '===',
            'striptags' => true
        ],
        'blog' => [
            'route' => ''
        ],
        'description' => 'Graficación & Animación',
        'global_featured_image' => 'featured.jpg',
        'social' => [
            0 => [
                'text' => 'facebook',
                'url' => 'http://www.facebook.com/getgrav'
            ],
            1 => [
                'text' => 'twitter',
                'url' => 'http://www.twitter.com/getgrav'
            ],
            2 => [
                'text' => 'youtube-play',
                'url' => 'http://www.youtube.com/getgrav'
            ]
        ],
        'slider' => [
            0 => [
                'image' => 'slide3.jpg',
                'title' => 'Graficación & Animación',
                'url' => '#'
            ],
            1 => [
                'image' => 'slide1.jpg',
                'title' => 'Html, CSS y JavaScript',
                'url' => '#'
            ],
            2 => [
                'image' => 'slide2.jpg',
                'title' => 'Docker',
                'url' => '#'
            ]
        ],
        'menu' => [
            0 => [
                'url' => 'error',
                'text' => 'Error Page'
            ]
        ]
    ]
];
