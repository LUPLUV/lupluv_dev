<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageCon extends AbstractController{

    #[Route('/', name: 'con')]
    public function homepage(): Response
    {
        return new Response(
            'test'
        );
    }

}

?>