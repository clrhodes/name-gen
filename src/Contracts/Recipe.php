<?php

namespace Clrhodes\NameGen\Contracts;

interface Recipe
{
    /**
     * Build the recipe.
     *
     * @param  integer  $words  null
     * @return string
     */
    public function build($words = null);
}
