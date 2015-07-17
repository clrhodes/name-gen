<?php

namespace Eklundchristopher\NameGen\Recipes;

use Eklundchristopher\NameGen\Contracts\Recipe;

class Fantasy implements Recipe
{
    /**
     * Holds all the available symbols.
     *
     * Based off of http://rinkworks.com/namegen/
     *
     * @var array
     */
    protected $symbols = [
        's' => [
            'ach', 'ack', 'ad', 'age', 'ald', 'ale', 'an', 'ang', 'ar', 'ard',
            'as', 'ash', 'at', 'ath', 'augh', 'aw', 'ban', 'bel', 'bur', 'cer',
            'cha', 'che', 'dan', 'dar', 'del', 'den', 'dra', 'dyn', 'ech', 'eld',
            'elm', 'em', 'en', 'end', 'eng', 'enth', 'er', 'ess', 'est', 'et',
            'gar', 'gha', 'hat', 'hin', 'hon', 'ia', 'ight', 'ild', 'im', 'ina',
            'ine', 'ing', 'ir', 'is', 'iss', 'it', 'kal', 'kel', 'kim', 'kin',
            'ler', 'lor', 'lye', 'mor', 'mos', 'nal', 'ny', 'nys', 'old', 'om',
            'on', 'or', 'orm', 'os', 'ough', 'per', 'pol', 'qua', 'que', 'rad',
            'rak', 'ran', 'ray', 'ril', 'ris', 'rod', 'roth', 'ryn', 'sam', 'say',
            'ser', 'shy', 'skel', 'sul', 'tai', 'tan', 'tas', 'ther', 'tia', 'tin',
            'ton', 'tor', 'tur', 'um', 'und', 'unt', 'urn', 'usk', 'ust', 'ver',
            'ves', 'vor', 'war', 'wor', 'yer',
        ],
        'v' => [
            'a', 'e', 'i', 'o', 'u', 'y',
        ],
        'V' => [
            'a', 'e', 'i', 'o', 'u', 'y', 'ae', 'ai', 'au', 'ay', 'ea', 'ee', 'ei',
            'eu', 'ey', 'ia', 'ie', 'oe', 'oi', 'oo', 'ou', 'ui',
        ],
        'c' => [
            'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r',
            's', 't', 'v', 'w', 'x', 'y', 'z',
        ],
        'B' => [
            'b', 'bl', 'br', 'c', 'ch', 'chr', 'cl', 'cr', 'd', 'dr', 'f', 'g', 'h',
            'j', 'k', 'l', 'll', 'm', 'n', 'p', 'ph', 'qu', 'r', 'rh', 's', 'sch',
            'sh', 'sl', 'sm', 'sn', 'st', 'str', 'sw', 't', 'th', 'thr', 'tr', 'v',
            'w', 'wh', 'y', 'z', 'zh',
        ],
        'C' => [
            'b', 'c', 'ch', 'ck', 'd', 'f', 'g', 'gh', 'h', 'k', 'l', 'ld', 'll', 'lt',
            'm', 'n', 'nd', 'nn', 'nt', 'p', 'ph', 'q', 'r', 'rd', 'rr', 'rt', 's',
            'sh', 'ss', 'st', 't', 'th', 'v', 'w', 'y', 'z',
        ],
        'i' => [
            'air', 'ankle', 'ball', 'beef', 'bone', 'bum', 'bumble', 'bump', 'cheese',
            'clod', 'clot', 'clown', 'corn', 'dip', 'dolt', 'doof', 'dork', 'dumb',
            'face', 'finger', 'foot', 'fumble', 'goof', 'grumble', 'head', 'knock',
            'knocker', 'knuckle', 'loaf', 'lump', 'lunk', 'meat', 'muck', 'munch',
            'nit', 'numb', 'pin', 'puff', 'skull', 'snark', 'sneeze', 'thimble', 'twerp',
            'twit', 'wad', 'wimp', 'wipe',
        ],
        'm' => [
            'baby', 'booble', 'bunker', 'cuddle', 'cuddly', 'cutie', 'doodle', 'foofie',
            'gooble', 'honey', 'kissie', 'lover', 'lovey', 'moofie', 'mooglie', 'moopie',
            'moopsie', 'nookum', 'poochie', 'poof', 'poofie', 'pookie', 'schmoopie',
            'schnoogle', 'schnookie', 'schnookum', 'smooch', 'smoochie', 'smoosh',
            'snoogle', 'snoogy', 'snookie', 'snookum', 'snuggy', 'sweetie', 'woogle',
            'woogy', 'wookie', 'wookum', 'wuddle', 'wuddly', 'wuggy', 'wunny',
        ],
        'M' => [
            'boo', 'bunch', 'bunny', 'cake', 'cakes', 'cute', 'darling', 'dumpling',
            'dumplings', 'face', 'foof', 'goo', 'head', 'kin', 'kins', 'lips', 'love',
            'mush', 'pie', 'poo', 'pooh', 'pook', 'pums',
        ],
        'D' => [
            'b', 'bl', 'br', 'cl', 'd', 'f', 'fl', 'fr', 'g', 'gh', 'gl', 'gr', 'h',
            'j', 'k', 'kl', 'm', 'n', 'p', 'th', 'w',
        ],
        'd' => [
            'elch', 'idiot', 'ob', 'og', 'ok', 'olph', 'olt', 'omph', 'ong', 'onk',
            'oo', 'oob', 'oof', 'oog', 'ook', 'ooz', 'org', 'ork', 'orm', 'oron', 'ub',
            'uck', 'ug', 'ulf', 'ult', 'um', 'umb', 'ump', 'umph', 'un', 'unb', 'ung',
            'unk', 'unph', 'unt', 'uzz',
        ],
    ];

    /**
     * Holds the template.
     *
     * @var string
     */
    protected $template = '(|(<B>|s|h|ty|ph|r))(i|ae|ya|ae|eu|ia|i|eo|ai|a)(lo|la|sri|da|dai|the|sty|lae|due|li|lly|ri|na|ral|sur|rith)(|(su|nu|sti|llo|ria|))(|(n|ra|p|m|lis|cal|deu|dil|suir|phos|ru|dru|rin|raap|rgue))';

    /**
     * Build the recipe.
     *
     * @param  integer  $words  1
     * @return string
     */
    public function build($words = 1)
    {
        $name = [];

        for ($i = 0; $i < $words; $i++) {
            $name[] = $this->generate();
        }
        
        return ucfirst(implode(' ', $name));
    }

    /**
     * Find all available groups.
     *
     * @param  string  $base
     * @return array
     */
    protected function findGroups($base)
    {
        preg_match_all('/\(([^()]|(?R))*\)/i', $base, $groups);

        return $groups[0];
    }

    /**
     * Find all the alternatives within a group.
     *
     * @param  string  $group
     * @return array
     */
    protected function findAlternatives($group)
    {
        preg_match_all('/([a-z<>|]+)/i', $group, $alternatives);

        array_walk($alternatives[0], function (&$item) {
            $item = trim($item, '|');
        });

        return $alternatives[0];
    }

    /**
     * Selects a character from an alternative group.
     *
     * @param  string  $alternative
     * @return string
     */
    protected function selectCharacter($alternative)
    {
        $characters = explode('|', $alternative);

        $character = $characters[array_rand($characters)];

        if (preg_match('/<(.+)>/', $character, $matches)) {
            $symbols = $this->symbols[$matches[1]];

            $character = $symbols[array_rand($symbols)];
        }

        return $character;
    }

    /**
     * Generates a name.
     *
     * @return string
     */
    protected function generate()
    {
        list($name, $groups) = [null, $this->findGroups($this->template)];

        foreach ($groups as $group) {
            $alternatives = $this->findAlternatives($group);

            $alternative = $alternatives[array_rand($alternatives)];

            if (empty($alternative)) {
                continue;
            }

            $name .= $this->selectCharacter($alternative);
        }

        return $name;
    }
}
