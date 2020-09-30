<?php

namespace App\Controller;

use App\Data\GetText;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexController
{
    private $getText;

    public function __construct(GetText $getText)
    {
        $this->getText = $getText;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        return new JsonResponse([
            'text' => $this->getText->get(),
        ]);
    }
}
