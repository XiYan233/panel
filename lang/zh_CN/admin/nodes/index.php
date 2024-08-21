<?php

return [
    'create_node' => '创建节点',
    'create_modal' => [
        'title' => '创建一个节点',
    ],

    'location_group' => '位置组',
    'pve_name' => 'Proxmox 中的节点名称',
    'override_creds' => 'API令牌',
    'creds_warning' => '请禁用权限分离并授予 root 权限',
    'token_id' => '令牌ID',
    'secret' => '密钥',
    'memory_allocation' => '内存分配',
    'memory_overallocation' => '内存过度分配',
    'disk_allocation' => '磁盘分配',
    'disk_overallocation' => '磁盘过度分配',
    'vm_storage' => '虚拟机存储',
    'backup_storage' => '备份存储',
    'iso_storage' => 'ISO镜像存储',

    'create_template_modal' => [
        'title' => '创建一个模板',
    ],
    'new_template' => '新建模板',
    'create_template_group_modal' => [
        'title' => '创建一个模板组',
    ],
    'new_template_group' => '新建模板组',

    'node_info' => [
        'title' => '节点信息',
    ],
    'delete_node' => [
        'title' => '删除节点',
        'description' => '该节点将从 Convoy 中永久删除。此操作不可逆转且无法撤消。',
        'has_servers_error' => '您无法删除已分配了服务器的节点。',
    ],
];
