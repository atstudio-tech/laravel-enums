<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Only;

enum OnlyEnum: string
{
    use Only;

    case NAME_1 = 'value_1';
    case NAME_2 = 'value_2';
    case NAME_3 = 'value_3';
    case NAME_4 = 'value_4';
}
