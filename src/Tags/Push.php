<?php

namespace JoeTannenbaum\Stack\Tags;

use JoeTannenbaum\Stack\Util\Stack;
use Statamic\Tags\Tags;

class Push extends Tags
{
    /**
     * The {{ push }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    public function __call($method, $args)
    {
        app(Stack::class)->push(
            $method ?? 'default',
            (string) $this->parse([$this->content]),
            $this->params->get('once') === true,
        );
    }
}
