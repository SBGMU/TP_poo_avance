<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class HelloWorld
{
    private $renderer;

    private $validators;

    public function __construct(Environment $renderer, array $validators)
    {
        $this->renderer = $renderer;
        $this->validators = $validators;
    }

    public function handle(Request $request): Response
    {
        $value = $request->query->get('param1');

        foreach ($this->validators as $validator) {
            $validator->validate($value);
        }

        return new Response($this->renderer->render('helloworld.html.twig'));
    }
}