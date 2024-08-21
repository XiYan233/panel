<?php

return [
    'create_server' => '创建服务器',
    'backup_limit' => '备份配额',
    'bandwidth_limit' => '流量配额',
    'bandwidth_usage' => '已使用流量',
    'snapshot_limit' => '快照配额',
    'limit_placeholder' => '留空则无限制',
    'should_create_vm' => '需要创建虚拟机',
    'start_server_after_installing' => '完成安装后启动服务器',
    'vmid_placeholder' => '留空则使用随机VMID',
    'create_modal' => [
        'title' => '创建一个服务器',
    ],
    'manage_server' => '管理服务器',
    'server_build' => [
        'title' => '服务器构建',
    ],
    'server_info' => [
        'title' => '服务器信息',
    ],
    'suspension' => [
        'title' => '挂起',
        'description' => '切换服务器的挂起状态',
        'not_suspended' => '此服务器未挂起',
        'suspended' => '此服务器已挂起',
    ],
    'delete_server' => [
        'title' => '删除服务器',
        'description' => '服务器将从 Convoy 中删除。备份和其他相关数据将被销毁。但是，您可以勾选下面的复选框，将虚拟机和数据保留在 Proxmox 节点上。',
        'dont_purge' => '不清除虚拟机及相关文件',
    ],
    'no_servers_found_one' => '未找到服务器',
];
