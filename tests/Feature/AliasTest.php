<?php

use function Jerrylopez\Classnames\{classnames, cn};

it('can be used via the cn alias', function () {
    $classnames = classnames([
        'bg-blue md:px-6 md:py-6',
        'text-xl semibold'
    ]);

    $alias = cn([
        'bg-blue md:px-6 md:py-6',
        'text-xl semibold'
    ]);

    expect($alias)
        ->toBeString()
        ->toBe($classnames);
});