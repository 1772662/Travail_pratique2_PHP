<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;

class BreuvageController extends AppController {

    public $paginate = [
        'page' => 1,
        'limit' => 50,
        'maxLimit' => 150,
/*        'fields' => [
            'id', 'name', 'description'
        ],
*/        'sortWhitelist' => [
            'id', 'name', 'description'
        ]
    ];

}
