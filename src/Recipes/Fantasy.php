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
    protected $templates = [
        '(|(<B>|s|h|ty|ph|r))(i|ae|ya|ae|eu|ia|i|eo|ai|a)(lo|la|sri|da|dai|the|sty|lae|due|li|lly|ri|na|ral|sur|rith)(|(su|nu|sti|llo|ria|))(|(n|ra|p|m|lis|cal|deu|dil|suir|phos|ru|dru|rin|raap|rgue))',
        '(cham|chan|jisk|lis|frich|isk|lass|mind|sond|sund|ass|chad|lirt|und|mar|lis|il|<BVC>)(jask|ast|ista|adar|irra|im|ossa|assa|osia|ilsa|<vCv>)(|(an|ya|la|sta|sda|sya|st|nya))',
        '(ch|sh|cal|val|ell|har|shar|shal|rel|laen|ral|alr|ch|av)(|(is|al|ow|ish|ul|el|ar|iel))(aren|aeish|aith|even|adur|ulash|alith|atar|aia|erin|aera|ael|ira|iel|ahur|ishul)',
        '(ethr|qil|mal|er|eal|far|fil|fir|ing|ind|il|lam|quel|quar|quan|qar|pal|mal|yar|um|ard|enn|ey)(|(<vc>|on|us|un|ar|as|en|ir|ur|at|ol|al|an))(uard|wen|arn|on|il|ie|on|iel|rion|rian|an|ista|rion|rian|cil|mol|yon)',
        '(taith|kach|chak|kank|kjar|rak|kan|kaj|tach|rskal|kjol|jok|jor|jad|kot|kon|knir|kror|kol|tul|rhaok|rhak|krol|jan|kag|ryr)(<vc>|in|or|an|ar|och|un|mar|yk|ja|arn|ir|ros|ror)(|(mund|ard|arn|karr|chim|kos|rir|arl|kni|var|an|in|ir|a|i|as))',
        '(aj|ch|etz|etzl|tz|kal|gahn|kab|aj|izl|ts|jaj|lan|kach|chaj|qaq|jol|ix|az|biq|nam)(|(<vc>|aw|al|yes|il|ay|en|tom||oj|im|ol|aj|an|as))(aj|am|al|aqa|ende|elja|ich|ak|ix|in|ak|al|il|ek|ij|os|al|im)',
        '(yi|shu|a|be|na|chi|cha|cho|ksa|yi|shu)(th|dd|jj|sh|rr|mk|n|rk|y|jj|th)(us|ash|eni|akra|nai|ral|ect|are|el|urru|aja|al|uz|ict|arja|ichi|ural|iru|aki|esh)',
        '(syth|sith|srr|sen|yth|ssen|then|fen|ssth|kel|syn|est|bess|inth|nen|tin|cor|sv|iss|ith|sen|slar|ssil|sthen|svis|s|ss|s|ss)(|(tys|eus|yn|of|es|en|ath|elth|al|ell|ka|ith|yrrl|is|isl|yr|ast|iy))(us|yn|en|ens|ra|rg|le|en|ith|ast|zon|in|yn|ys)',
    ];

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

        if (preg_match('/<(['.preg_quote(implode(null, array_keys($this->symbols)), '/').']+)>/', $character, $matches)) {
            $character = $this->parseLiterals($matches[1]);
        }

        return $character;
    }

    /**
     * Parse a literal string.
     *
     * @param  string  $literals
     * @return string
     */
    protected function parseLiterals($literals)
    {
        list($string, $literals) = [[], str_split($literals)];

        foreach ($literals as $literal) {
            $string[] = $this->symbols[$literal][array_rand($this->symbols[$literal])];
        }

        return implode(null, $string);
    }

    /**
     * Generates a name.
     *
     * @return string
     */
    protected function generate()
    {
        list($name, $groups) = [null, $this->findGroups($this->getTemplate())];

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

    /**
     * Get a random template.
     *
     * @return string
     */
    protected function getTemplate()
    {
        return $this->templates[array_rand($this->templates)];
    }
}
