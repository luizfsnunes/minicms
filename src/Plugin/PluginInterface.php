<?php
/**
 * Copyright (c). Endurance International Group.
 * All rights reserved.
 */

declare(strict_types=1);

use Slim\Interfaces\RouteCollectorInterface;

interface PluginInterface
{
    /**
     * @param RouteCollectorInterface $collector
     */
    public function routes(RouteCollectorInterface $collector): void;

    public function widgets(): array;
}