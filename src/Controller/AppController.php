<?php

namespace App\Controller;

use Cake\Controller\Controller;


class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'Bookmarks',
                'action' => 'index',
            ],
            'authorize' => 'Controller',
        ]);
        $this->Auth->allow(['display']);
    }

    public function isAuthorized($user)
    {
        return false;
    }
}
