<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/plugins/git-sync.yaml',
    'modified' => 1561704831,
    'data' => [
        'enabled' => true,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'user' => 'admin',
        'password' => '020594Claudia',
        'webhook' => '/_git-sync-eff7067e98d4',
        'webhook_enabled' => '0',
        'webhook_secret' => '24d374595919e48faf24cd388f882804f63215df13250404',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
