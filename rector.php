<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Laravel\Set\LaravelSetList;
use Rector\Laravel\Rector\StaticCall\RouteActionCallableRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);


    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    // $rectorConfig->rule(RemoveUnusedVariableInCatchRector::class);
    // $rectorConfig->rule(StrContainsRector::class);


    // define sets of rules
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_81,
        LaravelSetList::LARAVEL_90
    ]);
    // $rectorConfig->ruleWithConfiguration(RouteActionCallableRector::class, [
    //     RouteActionCallableRector::NAMESPACE => 'App\Http\Controllers',
    // ]);
};
