<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Attributes\Label;
use ATStudio\Enums\HasLabels;

enum HasConvertedLabelsEnum: int
{
    use HasLabels;

    #[Label('Square Shape')]
    case SquareShape = 1;

    case RectangularShape = 2;
}
