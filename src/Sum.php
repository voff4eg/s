<?php

namespace Egorov;

class Sum
{
    /**
     * @param mixed ...$arguments
     *
     * @return float|int
     */
    public function __invoke(...$arguments)
    {
        return array_sum($arguments);
    }
}
