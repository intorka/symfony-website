<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortfoliaController extends AbstractController
{
    /**
     * @Route("/portfolia", name="portfolia")
     */
    public function index()
    {
        return $this->render('portfolia/index.html.twig');
    }
}