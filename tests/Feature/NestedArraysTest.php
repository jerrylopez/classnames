<?php

use function Jerrylopez\Classnames\{classnames};

it('can ignore nested arrays', function () {
    $classnames = classnames([
        'bg-blue md:px-6 md:py-6',
        'text-xl semibold',
        [
            ['bg-green' => false]
        ],
    ]);

    expect($classnames)
        ->toBeString()
        ->toBe('bg-blue md:px-6 md:py-6 text-xl semibold');
});