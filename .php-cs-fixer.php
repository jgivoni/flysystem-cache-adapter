<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->in(__DIR__);

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'concat_space' => ['spacing' => 'one'],
        'new_with_parentheses' => false,
    ])
    ->setFinder($finder);
