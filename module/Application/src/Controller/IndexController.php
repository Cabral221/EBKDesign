<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->view = new ViewModel();
        $this->layout()->setVariable('page', 'accueil');
        return $this->view;
    }
    public function aproposAction(){
        $this->view = new ViewModel();
        $this->layout()->setVariable('page', 'apropos');
        return $this->view;
    }
    public function contactAction(){
        $this->view = new ViewModel();
        $this->layout()->setVariable('page', 'contact');
        return $this->view;
    }
    public function serviceAction(){
        $this->view = new ViewModel();
        $this->layout()->setVariable('page', 'service');
        return $this->view;
    }
}
