<?php

declare(strict_types=1);

namespace SandFox\MonsterID;

use Arokettu\MonsterID\Randomizer\FactoryInterface;

const MONSTER_DEFAULT_SIZE = 120; // same as image parts size

function build_monster(
    ?string $string = null,
    int $size = MONSTER_DEFAULT_SIZE,
    ?FactoryInterface $rngFactory = null
): string {
    return \Arokettu\MonsterID\build_monster($string, $size, $rngFactory);
}

function stream_monster(
    $stream,
    ?string $string = null,
    int $size = MONSTER_DEFAULT_SIZE,
    ?FactoryInterface $rngFactory = null
) {
    return \Arokettu\MonsterID\stream_monster($stream, $string, $size, $rngFactory);
}

function build_monster_gd(
    ?string $string = null,
    int $size = MONSTER_DEFAULT_SIZE,
    ?FactoryInterface $rngFactory = null
): \GdImage {
    return \Arokettu\MonsterID\build_monster_gd($string, $size, $rngFactory);
}
