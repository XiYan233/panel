<?php

return [
    'node_info' => [
        'title' => '节点信息',
    ],
    'coterm' => [
        'title' => 'Coterm',
        'description' => 'Coterm 允许您在用户访问 Web 控制台时向他们隐藏节点的来源。',
        'enable' => '启用 Coterm',
        'tls' => '启用 TLS/SSL',
        'token_created' => [
            'title' => '已创建令牌',
            'description' => '这是您新创建的令牌。请注意令牌的值，因为这将是您最后一次看到它。',
            'action' => '好的，我明白了'
        ],
        'reset' => [
            'title' => '重置令牌?',
            'description' => '您确定要重置此节点的 Coterm 令牌吗？任何依赖于此令牌的 Coterm 实例都将失败。',
            'action' => '重置令牌',
        ]
    ]
];
