<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    public array $messages = [
        "val1","val2","val3"
    ];

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
       return new Response(implode(',', $this->messages));
    }

    #[Route('/messages/{id}', name: 'app_show_one')]
    public function ShowOne($id):Response
    {
        return new Response($this->messages[$id]);

    }
}