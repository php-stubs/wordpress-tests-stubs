<?php

return \StubsGenerator\Finder::create()
    ->in('source/includes')
    // Exclude tests for PHPUnit 6.
    ->notPath('phpunit6/')
    ->notPath('object-cache.php')
    ->sortByName()
;
