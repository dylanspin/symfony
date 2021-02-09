<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */

    //////routes moeten nog anders moet ik nog even naar kijken 

    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request)
    {
        $name = $request->get('name');
        return $this->render('home/custom.html.twig',[
            'name' => $name
        ]);
    }

    /**
     * @Route("/installs", name="installs")
     */
    public function installs()
    {
        return $this->render('home/installs.html.twig',[
           
        ]);
    }

    /**
     * @Route("/setUp", name="setUp")
     */
    public function setUp()
    {
        return $this->render('home/setUp.html.twig',[
           
        ]);
    }

    /**
     * @Route("/style", name="style")
     */
    public function style()
    {
        return $this->render('home/style.html.twig',[
           
        ]);
    }

    /**
     * @Route("/code", name="code")
     */
    public function Code()
    {
        return $this->render('home/code.html.twig',[
           
        ]);
    }

      /**
     * @Route("/bootrap", name="bootrap")
     */
    public function bootrap()
    {
        return $this->render('home/bootrap.html.twig',[
           
        ]);
    }
}
 