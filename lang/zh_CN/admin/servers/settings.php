<?php

return [
    'server_info' => [
        'title' => '服务器信息',
        'statuses' => [
            'ready' => '已就绪',
            'installing' => '安装进行中',
            'install_failed' => '安装失败',
            'suspended' => '已挂起',
            'restoring_backup' => '正在从备份还原',
            'restoring_snapshot' => '正在从快照还原',
        ]
    ],
    'suspension' => [
        'title' => '挂起',
        'description' => '切换服务器的挂起状态',
        'statuses' => [
            'suspended' => '此服务器已挂起',
            'not_suspended' => '此服务器未挂起'
        ],
        'suspend' => '已挂起',
        'unsuspend' => '未挂起',
    ],
    'deletion' => [
        'title' => '删除服务器',
        'description' => '服务器将从 Convoy 中删除。备份和其他相关数据将会摧毁。但是，您可以勾选下面的复选框以保留虚拟机和数据在 Proxmox 节点上。',
        'deleting_status' => '当前正在删除此服务器',
        'no_purge' => '不清除虚拟机及相关文件',
        'confirmation' => [
            'title' => '删除 :name',
            'description' => '您确定要删除 :name?'
        ]
    ],
    'build' => [
        'title' => '服务器构建',

    ]
];