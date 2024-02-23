<h3 align="center">Classnames</h3>

<p align="center">A utility to construct HTML class name strings.</p>

<hr />

## Installation

Install the package via Composer

```bash
composer require jerrylopez/classnames
```

## Usage

### Concatenating class names

Adding multiple sets of class name strings into the array will be concatenated in the output. 

```php
<?php

use function Jerrylopez\Classnames\{classnames}

?>

<div class="<?= classnames([
    'bg-blue md:px-6 md:py-6',
    'text-xl semibold',
]) ?>">
    ...
</div>


<!-- Output -->
<div class="bg-blue md:px-6 md:py-6 text-xl semibold">
    ...
</div>
```

### Include class names based on condition

Adding an array with the class names as the key and a true returning condition as the value will include the class names in the output.


```php
<?php

use function Jerrylopez\Classnames\{classnames}

?>

<div class="<?= classnames([
    'bg-blue md:px-6 md:py-6',
    'text-xl semibold',
    ['bg-green' => $this->someMethodThatReturnsTrue()]
]) ?>">
    ...
</div>

<!-- Output -->
<div class="bg-blue md:px-6 md:py-6 text-xl semibold bg-green">
    ...
</div>
```

### Exclude class names based on condition

Adding an array with the class names as the key and a false returning condition as the value will exclude the class names from the output.

```php
<?php

use function Jerrylopez\Classnames\{classnames}

?>

<div class="<?= classnames([
    'bg-blue md:px-6 md:py-6',
    'text-xl semibold',
    ['bg-green' => $this->someMethodThatReturnsFalse()]
]) ?>">
    ...
</div>

<!-- Output -->
<div class="bg-blue md:px-6 md:py-6 text-xl semibold">
    ...
</div>
```

### Using the alias

This utility also comes with an alias `cn` that can be used as a shorthand for the `classnames` function.

```php
<?php

use function Jerrylopez\Classnames\{cn}

?>

<div class="<?= cn([
    'bg-blue md:px-6 md:py-6',
    'text-xl semibold'
]) ?>">
    ...
</div>

<!-- Output -->
<div class="bg-blue md:px-6 md:py-6 text-xl semibold">
    ...
</div>
```

