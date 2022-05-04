<?php 
return [
    [
        'route' => 'admin',
        'title' => 'Trang chủ',
        'icon' => 'fa fa-home'
    ],
    [   
        'route' => 'category.index',
        'title' => 'Danh Mục',
        'icon' => 'fa fa-th',
        'items' => [
            [
                'route'=> 'category.index',
            'title' => 'Chi tiết Danh Mục'
            ]
        ]
    ],
    [
        'route' => 'product.index',
        'title' => 'Sản Phẩm',
        'icon' => 'fa fa-product-hunt',
        'items' => [
           [
            'route'=> 'product.index',
            'title' => 'Chi tiết Danh Mục'
           ]
        ]
    ],

];
?>