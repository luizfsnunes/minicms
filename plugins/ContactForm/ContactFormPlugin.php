<?php
/**
 * Copyright (c). Endurance International Group.
 * All rights reserved.
 */

declare(strict_types=1);

use Slim\Interfaces\RouteCollectorInterface;

class ContactFormPlugin implements PluginInterface
{
    /**
     * ContactFormPlugin constructor.
     */
    public function __construct()
    {
    }

    public function widgets(): array
    {
        return [
            'form' => [$this, 'widgetForm'],
        ];
    }

    public function routes(RouteCollectorInterface $collector): void
    {
        // TODO: Implement routes() method.
    }

    private function form(string $a): string
    {
        return file_get_contents(__DIR__ . 'templates/contact_form.twig');
    }
}