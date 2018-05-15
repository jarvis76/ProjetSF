<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 14/05/2018
 * Time: 10:37
 */
//src/Contoller/PatrickController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PatrickController extends Controller
{
    /**
     * @Route("/patrick/display/{toto}")
     */
    public function display($toto)
    {
        return $this->render('patrick/display.html.twig',
            array('prenom' => 'Jean-Patrick'));
    }
}
