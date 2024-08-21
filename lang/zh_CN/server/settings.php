<?php

return [
    'ip_allocation' => [
        'empty_state' => '没有与此服务器关联的IP地址。',
    ],
    'display_info' => [
        'title' => '服务器名称',
    ],
    'reinstall' => [
        'title' => '重新安装服务器',
        'description' => '使用全新的系统启动您的服务器。',
        'start_server_after_installing' => '完成安装后启动服务器',
        'modal' => [
            'title' => '确认重新安装',
            'description' => '您确定要重新安装此服务器吗？所有数据都将丢失。',
        ],
    ],
    'isos' => [
        'title' => '可安装的ISO镜像',
        'empty' => '没有ISO镜像',
    ],
    'device_config' => [
        'title' => '设备配置',
        'current' => '当前启动顺序(最高优先级的将优先使用)',
        'unused' => '未使用的设备',
        'unused_empty' => '没有未使用的设备。',
        'no_boot_device_warning' => '尚未配置启动设备。您的虚拟机不会启动。',
    ],
    'nameservers' => [
        'title' => '名称服务器',
        'nameserver' => '名称服务器 :index',
        'add' => '新建名称服务器',
    ],
    'auth' => [
        'title' => '验证',
    ],
    'hardware' => [
        'bandwidth_used' => '已使用流量',
        'bandwidth_alloted' => '流量总额',
    ],
];
