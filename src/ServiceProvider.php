<?php

namespace JoeTannenbaum\Stack;

use JoeTannenbaum\Stack\Tags\Prepend;
use JoeTannenbaum\Stack\Tags\Push;
use JoeTannenbaum\Stack\Tags\Stack;
use JoeTannenbaum\Stack\Util\Stack as StackUtil;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Push::class,
        Prepend::class,
        Stack::class,
    ];

    public function register()
    {
        $this->app->singleton(StackUtil::class, function ($app) {
            return new StackUtil();
        });
    }
}
