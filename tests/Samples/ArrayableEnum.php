<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\Attributes\Label;
use ATStudio\Enums\HasLabels;
use ATStudio\Enums\ToArray;

enum ArrayableEnum: int
{
    use HasLabels;
    use ToArray;

    #[Label('Member')]
    case Member = 0;

    #[Label('Admin')]
    case Admin = 5;
}
