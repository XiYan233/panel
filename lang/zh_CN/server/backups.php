<?php

return [
    'create_backup' => '创建备份',
    'empty_state' => '没有备份',
    'counter_tooltip' => '您已经创建 :count 个备份，最多可创建 :max 个备份',
    'create_modal' => [
        'title' => '创建一个备份',
        'description' => '创建备份将获取服务器文件的副本。这可能需要一段时间，具体取决于服务器的大小。',
        'compression_type' => '压缩类型',
        'mode' => '模式',
        'modes' => [
            'snapshot' => '快照',
            'suspend' => '挂起',
            'kill' => '杀掉',
        ],
    ],
    'delete_modal' => [
        'title' => '删除 :name?',
        'description' => '您确定要删除此备份吗？',
    ],
    'restore_modal' => [
        'title' => '恢复自 :name?',
        'description' => '您确定要从此备份中还原吗？',
    ],
    'notices' => [
        'backup_deleted' => '已删除 :name',
        'backup_restored' => '已开始从 :name 恢复服务器',
    ],
];
