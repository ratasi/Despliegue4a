<?php

namespace AUCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AUCBundle:Default:index.html.twig');
    }
    public function futbolconvencionalAction()
    {
        return $this->render('AUCBundle:Default:futbolconvencional.html.twig');
    }
    public function futbolonceAction()
    {
        return $this->render('AUCBundle:Default:futbolonce.html.twig');
    }
    public function futbolsillaAction()
    {
        return $this->render('AUCBundle:Default:futbolsilla.html.twig');
    }
    public function contactoAction()
    {
        return $this->render('AUCBundle:Default:contacto.html.twig');
    }
    public function extraAction()
    {
        return $this->render('AUCBundle:Default:extra.html.twig');
    }
    public function quienesAction()
    {
        return $this->render('AUCBundle:Default:quienes.html.twig');
    }
}
