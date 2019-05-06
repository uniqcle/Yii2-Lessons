<?php

use miloschuman\highcharts\Highcharts;

echo Highcharts::widget([
    'options' => [
        'title' => ['text' => 'Fruit Consumption'],
        'xAxis' => [
            'categories' => ['Apples', 'Bananas', 'Oranges', 'Potato', 'Mandarin']
        ],
        'yAxis' => [
            'title' => ['text' => 'Fruit eaten']
        ],
        'series' => [
            ['name' =>'Fedor', 'data' =>[4000,2000,3000,1000,6000]],
            ['name' => 'Jane', 'data' => $sale ]
        ]
    ]
]);
