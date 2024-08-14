<?php

test('Testa se existe comandos dd, dump, ray, ds')
    ->expect(['dump', 'dd', 'ray', 'ds'])
    ->not->toBeUsed();