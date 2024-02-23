<?php

use function Jerrylopez\Classnames\{classnames};

it('can exclude strings with false condition', function () {
    $classes = classnames([
        'bg-blue md:px-6 md:py-6',
        'text-xl semibold',
        ['bg-green' => false]
    ]);

    expect($classes)
        ->toBeString()
        ->toBe('bg-blue md:px-6 md:py-6 text-xl semibold');
});

it('can include strings with truthy condition', function () {
    $classes = classnames([
        'bg-blue md:px-6 md:py-6',
        'text-xl semibold',
        ['bg-green' => true]
    ]);

    expect($classes)
        ->toBeString()
        ->toBe('bg-blue md:px-6 md:py-6 text-xl semibold bg-green');
});
