<?php

declare(strict_types=1);

namespace Jerrylopez\Classnames;

if (! function_exists('classnames')) {
    function classnames(array $classes): string
    {
        $string = [];

        foreach($classes as $value) {
            if (is_array($value)) {
                foreach($value as $key => $val) {
                    if ($val && !empty($key)) {
                        $string[] = $key;
                    }
                }

                continue;
            }

            if (empty($value)) {
                continue;
            }

            $string[] = $value;
        }

        return implode(' ', $string);
    }
}

if (! function_exists('cn')) {
    /**
     * An alias for the classnames function.
     */
    function cn(array $classes): string
    {
        return classnames($classes);
    }
}
