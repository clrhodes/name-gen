# Name Generator

```php
<?php require_once 'vendor/autoload.php';

use Clrhodes\NameGen\Generator;
use Clrhodes\NameGen\Recipes\Fantasy;

$generator = new Generator(new Fantasy);
echo $generator->name(2);
```

LICENSE MIT