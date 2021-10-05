<?php

return [
    'category' => [
        'id' => 'id_category',
        'fields' => [
            'id_category', 'cName'
        ],
    ],
    'tag' => [
        'id' => 'id_tag',
        'fields' => [
            'id_tag', 'tName'
        ],
    ],
    'product' => [
        'id' => 'id_product',
        'fields' => [
            'id_product', 'category_id', 'tag_id', 'pName', 'price', 'qty'
        ],
        'relation' => [
            'category_id' => ['id_category', 'cName'],
            'tag_id' => ['id_tag', 'tName']
        ]
    ],
];
