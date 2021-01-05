<?php

namespace JoeTannenbaum\Stack\Tags;

use JoeTannenbaum\Stack\Util\Stack;
use Statamic\Tags\Tags;

class Prepend extends Tags
{
    /**
     * The {{ prepend }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    public function __call($method, $args)
    {
        app(Stack::class)->prepend(
            $method ?? 'default',
            (string) $this->parse([$this->content]),
            $this->params->get('once') === true,
        );
    }
}
