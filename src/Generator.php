<?php

namespace Eklundchristopher\NameGen;

use Eklundchristopher\NameGen\Contracts\Recipe;

class Generator
{
    /**
     * Holds the recipe implementation.
     *
     * @var \Eklundchristopher\NameGen\Recipe
     */
    protected $recipe;

    /**
     * Create a new class object.
     *
     * @param  \Eklundchristopher\NameGen\Recipe  $recipe
     */
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * Generate a name.
     *
     * @param  integer  $words
     * @return string
     */
    public function name($words = 2)
    {
        return $this->recipe->build($words);
    }
}
