<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultControler
{
    #[Route("/{operation}/{operatorA}/{operatorB}")]
public function calculator($operation, $operatorA, $operatorB)
{
    if($operation ==='add'){
        $result = $operatorA + $operatorB;
        return new Response("El resultado de sumar $operatorA + $operatorB es $result");
    }
return new Response("Datos erroneos, asegurese de introducir operación válida.");
}
}