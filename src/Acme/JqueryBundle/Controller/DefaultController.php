<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Acme\JqueryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeJqueryBundle:Default:index.html.twig');
    }
    
    public function basicsAction()
    {
        return $this->render('AcmeJqueryBundle:Default:basics.html.twig');        
    }
    
    public function hideAction()
    {
        return $this->render('AcmeJqueryBundle:Default:hide.html.twig');
    }
    
    public function hideParentAction() 
    {
        return $this->render('AcmeJqueryBundle:Default:hideParent.html.twig');
    }
    
    public function slideAction() 
    {
        return $this->render('AcmeJqueryBundle:Default:slide.html.twig');
    }
    
    public function fadeAction() 
    {
        return $this->render('AcmeJqueryBundle:Default:fade.html.twig');
    }
    
    public function animateAction()
    {
        return $this->render('AcmeJqueryBundle:Default:animate.html.twig');
    }
}
