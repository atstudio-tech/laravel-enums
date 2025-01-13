<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Snakeable;

enum SnakeableEnum
{
    use Snakeable;

    case One;
    case SecondNumber;
    case ThirdAndLastNumber;
}
