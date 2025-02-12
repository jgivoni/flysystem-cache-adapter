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
        '@Symfony' => true,
        'phpdoc_to_comment' => false,
        'concat_space' => ['spacing' => 'one'],
    ])
    ->setFinder($finder);
