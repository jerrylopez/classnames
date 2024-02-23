<?php

use function Jerrylopez\Classnames\{classnames};

it('can merge multiple strings together', function () {
    $classes = classnames([
        'bg-blue md:px-6 md:py-6',
        'text-xl semibold'
    ]);

    expect($classes)
        ->toBeString()
        ->toBe('bg-blue md:px-6 md:py-6 text-xl semibold');
});
