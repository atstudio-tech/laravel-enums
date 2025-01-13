<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Attributes\Label;
use ATStudio\Enums\HasLabels;

enum HasLabelsEnum: int
{
    use HasLabels;

    #[Label('Diamond Shape')]
    case Diamond = 1;

    #[Label('Heart Shape')]
    case Heart = 2;

    #[Label('Pyramid Shape')]
    case Pyramid = 3;
}
