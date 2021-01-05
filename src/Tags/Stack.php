<?php

namespace JoeTannenbaum\Stack\Tags;

use JoeTannenbaum\Stack\Util\Stack as StackUtil;
use Statamic\Tags\Tags;

class Stack extends Tags
{
    protected $stacks = [];

    /**
     * The {{ stack }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    public function __call($method, $args)
    {
        return app(StackUtil::class)->get($method ?? 'default')->implode("\n");
    }
}
