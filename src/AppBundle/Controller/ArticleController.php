<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends Controller
{
    /**
     * @Route("/articles/{max}", defaults={"max" = 5})
     */
    public function recentArticlesAction($max)
    {
        $articles = array();
        for ($i = 0; $i < $max; $i++) {
          $articles[$i] = "Article $i of $max";
        }

        return $this->render(
          'article/recentarticles.html.twig',
          array(
            'articleList' => $articles,
          )
        );

    }
}
