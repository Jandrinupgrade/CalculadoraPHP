<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultControler
{
    #[Route("/saludo")]
public function saludo()
{
return new Response("Hola mundo");
}
}