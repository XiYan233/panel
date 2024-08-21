<?php

return [
    'power_actions' => [
        'start' => '开机',
        'restart' => '重启',
        'kill' => '杀掉',
        'shutdown' => '关机',
    ],
    'notices' => [
        'power_action_sent_success' => '已成功发送电源动作。处理可能需要一些时间。',
        'power_action_sent_fail' => '无法发送电源操作。',
    ],

    'state' => '状态',
    'states' => [
        'stopped' => '已停止',
        'running' => '运行中',
        'stopping' => '停止中',
        'starting' => '启动中',
        'shutting_down' => '关闭中',
    ],
    'uptime' => '运行时间',
    'poll_status_error' => '无法查询服务器状态。5 秒后重试...',

    'terminal' => [
        'title' => '终端',
        'description' => '从Web远程管理您的服务器。',
        'novnc_description' => '兼容性最佳，但缺乏功能和性能。',
        'xtermjs_description' => '性能最佳，但并不适用于每个操作系统。',
    ],

    'server_config' => [
        'title' => '配置此服务器',
        'description' => '您是管理员！您可以单击下面访问此服务器的构建配置并进行编辑。',
        'configure_server' => '配置服务器',
    ],
];
