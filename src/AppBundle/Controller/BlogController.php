<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class BlogController extends Controller
{
    /**
     * @Route("/blog/{page}", defaults={"page" = 1}, requirements={ * "page": "\d+"})
     */
    public function indexAction($page)
    {

        return new Response('Page '.$page);

    }


    /**
     * @Route("/blog/{name}")
     */
    public function showAction($name)
    {

      return new Response('Show '.$name);

    }

}
