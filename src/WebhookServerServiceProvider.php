<?php

namespace Jmsfwk\WebhookServer;

use Spatie\WebhookServer\WebhookServerServiceProvider as SpatieServiceProvider;

class WebhookServerServiceProvider extends SpatieServiceProvider
{
    public function boot()
    {
        // don't try to publish config, Lumen doesn't have the config_path() function
    }
}
