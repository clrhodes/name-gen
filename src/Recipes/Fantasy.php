<?php namespace Eklundchristopher\NameGen\Recipes;

use Eklundchristopher\NameGen\Contracts\Recipe;

class Fantasy implements Recipe {

	/**
	 * Holds all the available characters.
	 *
	 * @var array
	 */
	protected $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z'];

	/**
	 * Holds all the vowels.
	 *
	 * @var array
	 */
	protected $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];

	/**
	 * Holds the previously used character.
	 *
	 * @var string
	 */
	protected $previous;

	/**
	 * Build the recipe.
	 *
	 * @param  integer  $words  null
	 * @return string
	 */
	public function build($words = null)
	{
		list($output, $words) = [null, (int) $words];

		for ($i = 0; $i < $words; $i++)
		{
			$output .= $this->word() . ' ';
		}

		return ucwords(trim($output));
	}

	/**
	 * Generate a word.
	 *
	 * @param  integer  $length  null
	 * @return string
	 */
	private function word($length = null)
	{
		list($string, $length) = [null, $length ?: rand(4, 9)];

		for ($i = 0; $i < $length; $i++)
		{
			$character = $this->character();

			$string .= $character;
		}

		return $string;
	}

	/**
	 * Get a character.
	 *
	 * @param  array  $from  []
	 * @return string
	 */
	private function character(array $from = [])
	{
		$from = $from ?: $this->characters;

		$character = $from[array_rand($from)];

		if ($this->percentage(80) and strtolower($this->previous) === strtolower($character))
		{
			return $this->character();
		}

		if ($this->percentage(10) and ! in_array($character, $this->vowels))
		{
			return $this->character($this->vowels);
		}
		
		$this->previous = $character;
		
		return $character;
	}

	/**
	 * Match only a certain percentage and higher.
	 *
	 * @param  integer  $percent
	 * @return boolean
	 */
	private function percentage($percent)
	{
		return rand(0, 100) <= $percent;
	}

}
