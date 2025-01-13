<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Attributes\LongLabel;
use ATStudio\Enums\Attributes\ShortLabel;
use ATStudio\Enums\HasLabels;

enum HasShortLabelsEnum: int
{
    use HasLabels;

    case Diamond = 1;

    #[ShortLabel('HRT')]
    case Heart = 2;

    #[LongLabel('This is a pyramid')]
    #[ShortLabel('PRM')]
    case Pyramid = 3;
}
