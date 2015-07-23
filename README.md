# Name Generator

```php
<?php require_once 'vendor/autoload.php';

use Eklundchristopher\NameGen\Generator;
use Eklundchristopher\NameGen\Recipes\Fantasy;

$generator = new Generator(new Fantasy);
echo $generator->name(2);
```
