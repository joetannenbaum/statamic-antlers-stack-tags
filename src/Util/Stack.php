<?php

namespace JoeTannenbaum\Stack\Util;

class Stack
{
    protected $stacks = [];

    public function push($name, $value, $once = false)
    {
        $this->addToStack($name, $value, $once, 'push');
    }

    public function prepend($name, $value, $once = false)
    {
        $this->addToStack($name, $value, $once, 'prepend');
    }

    protected function addToStack($name, $value, $once, $method)
    {

        if ($once && $this->initStack($name)->contains($value)) {
            return;
        }

        $this->initStack($name)->{$method}($value);
    }

    public function get($name)
    {
        if (!array_key_exists($name, $this->stacks)) {
            return collect();
        }

        return $this->stacks[$name];
    }

    protected function initStack($name)
    {
        if (!array_key_exists($name, $this->stacks)) {
            $this->stacks[$name] = collect();
        }

        return $this->stacks[$name];
    }
}
