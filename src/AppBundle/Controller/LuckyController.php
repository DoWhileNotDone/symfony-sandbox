<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{count}", defaults={"count" = 1})
     */
    public function numberAction($count)
    {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
          $numbers[] = rand(0, 100);
        }

        $this->addFlash( 'notice',
        'Ace!'
        );

        $numbersList = implode(', ', $numbers);
        $testMessage = 'Test Message';

        return $this->render(
          'lucky/number.html.twig',
          array(
            'luckyNumberList' => $numbersList,
            'testMessage' => $testMessage,
          )
        );

    }


    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array(
          'lucky_number' => rand(0,100),
          );

        return new JsonResponse($data);

    }

}
