<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
ini_set('date.timezone','America/Mexico_City');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        //'Cbac.Cbac',
        //'Acl',
        'Auth' => array(
            'authError' => 'No tienes acceso a esta secci&oacute;n',
                        'authenticate' => array(
                                                'Form' => array(
                                                                'fields' => array('username' => 'email')
                                                                )
                                                ),
            //'authorize' => array(
                //'Actions' => array('actionPath' => 'controllers')
            //)
        ),
        'Session'
    );
     public $helpers = array('Html', 'Form', 'Session','Js');
     public function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
        
        $this->set('isSession',$this->isSession());
        $this->set('isAdmin',$this->isAdmin());
        $this->set('isSuperAdmin',$this->isSuperAdmin());
        $this->set('isUser',$this->isUser());
        $this->set('user',$this->user());
    }
    public function isSession(){
        if($this->Auth->login())
            return true;
        return false;    
    }
     public function isSuperAdmin(){
        if($this->Auth->login()){
            if($this->Auth->user('Group.id')==1)
                return true;
        }
        return false;    
    }
     public function isAdmin(){
        if($this->Auth->login()){
            if($this->Auth->user('Group.id')==2)
                return true;
        }
        return false;    
    }
     public function isUser(){
        if($this->Auth->login()){
            if($this->Auth->user('Group.id')==3)
                return true;
        }
        return false;    
    }
     public function user(){
        if($this->Auth->login())
            return $this->Auth->user();
        return "";    
    }
    
}
