<?php

declare(strict_types=1);

namespace Axleus\PluginManager;

interface PluginInterface
{
    public const PLUGIN_PIPED_MIDDLEWARE_PRIORITY = 10000;
    public const ROUTE_RESULT_MIDDLEWARE_PRIORITY = 8000; // todo: maybe rename this..
    public function pluginVersion(): string;
}
