<?php

use function Jerrylopez\Classnames\{classnames};

it('can ignore empty strings', function () {
    $classnames = classnames([
        '',
        'bg-blue md:px-6 md:py-6',
        '',
        'text-xl semibold'
    ]);

    expect($classnames)
        ->toBeString()
        ->toBe('bg-blue md:px-6 md:py-6 text-xl semibold');
});

it('can ignore an empty strings in an array', function () {
    $classnames = classnames([
        'bg-blue md:px-6 md:py-6',
        ['' => true],
        'text-xl semibold',
        ['' => true]
    ]);

    expect($classnames)
        ->toBeString()
        ->toBe('bg-blue md:px-6 md:py-6 text-xl semibold');
});