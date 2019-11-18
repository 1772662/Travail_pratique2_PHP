<?php

namespace App\Controller;

use App\Controller\AppController;

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
