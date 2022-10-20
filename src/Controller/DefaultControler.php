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

    if($operation ==='subtract'){
        $result = $operatorA - $operatorB;
        return new Response("El resultado de restar $operatorA - $operatorB es $result");
    }

    if($operation ==='multiply'){
        $result = $operatorA * $operatorB;
        return new Response("El resultado de multiplicar $operatorA * $operatorB es $result");
    }

    if($operation ==='divide'){
        $result = $operatorA / $operatorB;
        return new Response("El resultado de dividir $operatorA / $operatorB es $result");
    }


return new Response("Datos erroneos, asegurese de introducir operación válida.");
}
}