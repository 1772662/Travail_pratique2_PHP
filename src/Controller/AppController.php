<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
 class AppController extends Controller {
     use \Crud\Controller\ControllerTrait;
     public $components = [
         'RequestHandler',
         'Crud.Crud' => [
             'actions' => [
                 'Crud.Index',
                 'Crud.View',
                 'Crud.Add',
                 'Crud.Edit',
                 'Crud.Delete'
             ],
             'listeners' => [
                 'Crud.Api',
                 'Crud.ApiPagination',
                 'Crud.ApiQueryLog'
             ]
         ]
     ];

// ADDED by Amina

public function initialize() {

parent::initialize();
I18n::setLocale($this->request->session()->read('Config.language'));
$this->loadComponent('RequestHandler', [
    'enableBeforeRedirect' => false,
]);

  $this->loadComponent('Flash');
  $this->loadComponent('Auth',[
    'authenticate' => [
      'Form'=>[
        'fields' => [
          'username' => 'email',
          'password' => 'password'
        ]
      ]
    ],
    'loginAction' => [
      'controller' => 'Users',
      'action' => 'login'
    ]
   ]);
  /*
   * Enable the following component for recommended CakePHP security settings.
   * see https://book.cakephp.org/3.0/en/controllers/components/security.html
   */
  //$this->loadComponent('Security');

   $this->Auth->allow(['display', 'view', 'index', 'changelang']);
}

public function beforeRender(Event $event)
{
if (!array_key_exists('_serialize' , $this->viewVars) &&
in_array($this->response->type(), ['application/json' ,'application/xml' ])
)
{
$this->set('_serialize',true);
}
// login check
if ($this->request->session()->read('Auth.User'))
{
$this->set('loggedIn', true) ;
$role = $this->request->session()->read('Auth.User.role');

if (isset($role) && $role === 'admin')
 {
   $this->set('isAdmin', true) ;
 }
 else
 {
   $this->set('isAdmin', false) ;
 }
} else
{
$this->set('loggedIn', false) ;
$this->set('isAdmin', false) ;
}


}

public function changeLang($lang = 'en_US') {
I18n::setLocale($lang);
$this->request->session()->write('Config.language', $lang);

return $this->redirect($this->request->referer());
}




 }


//
