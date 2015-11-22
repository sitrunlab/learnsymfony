<?php

namespace AppBundle\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zend\Diactoros\Response\HtmlResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(ServerRequestInterface $request)
    {
        $renderView = $this->renderView(
            'default/index.html.twig',
            ['base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..')]
        );

        $response = new HtmlResponse($renderView);

        return $response;
    }
}
