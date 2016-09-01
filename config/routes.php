<?php

return array(
    'categoryByID' =>
    [
        'pattern' => '/category/{id}',
        'method' => 'GET',
        'controller' => 'CategoryController',
        'action' => 'getCategoryByID',
        'preg' => '[0-9]+'
    ],
    'category' =>
    [
        'pattern' => '/category',
        'method' => 'GET',
        'controller' => 'CategoryController',
        'action' => 'getCategories'
    ],
    'product' =>
    [
        'pattern' => '/category/{id}/product',
        'method' => 'GET',
        'controller' => 'ProductController',
        'action' => 'getProducts',
        'preg' => '[0-9]+'
    ],
    'productByID' =>
    [
        'pattern' => '/category/{id}/product/{id}',
        'method' => 'GET',
        'controller' => 'ProductController',
        'action' => 'getProductByID',
        'preg' => '[0-9]+'
    ]
)

?>