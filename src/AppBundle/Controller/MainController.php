<?php
// src/AppBundle/Controller/MainController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class MainController extends Controller
{
    /**
     * @Route("/", name="main_list")
     */
    public function index()
    {
        $number = mt_rand(0, 100);
        return $this->render('main/index.html.twig', array(
            'number' => $number
        ));
    }

    /**
     * Matches /show/*
     *
     * @Route("/show/{slug}", name="main_show")
     */
    public function showAction($slug)
    {

        // ...
    }
}