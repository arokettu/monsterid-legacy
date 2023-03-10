<?php

declare(strict_types=1);

namespace SandFox\MonsterID\Future;

const NS = 'Arokettu\\MonsterID\\';
const PREFIX = 'SandFox\\MonsterID\\';
const PREFIX_LEN = 18;

spl_autoload_register(function (string $class_name) {
    if (strncmp($class_name, PREFIX, PREFIX_LEN) === 0) {
        $realName = NS . substr($class_name, PREFIX_LEN);
        class_alias($realName, $class_name);
        return true;
    }

    return null;
});
