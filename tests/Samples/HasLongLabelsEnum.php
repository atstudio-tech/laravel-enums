<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Attributes\Label;
use ATStudio\Enums\Attributes\LongLabel;
use ATStudio\Enums\Attributes\ShortLabel;
use ATStudio\Enums\HasLabels;

enum HasLongLabelsEnum: int
{
    use HasLabels;

    #[Label('Diamond Shape')]
    case Diamond = 1;

    #[Label('Heart Shape')]
    #[LongLabel('This is a heart shape')]
    case Heart = 2;

    #[ShortLabel('This is a pyramid')]
    case Pyramid = 3;
}
