<?php

namespace ATStudio\Enums\Tests\Samples;

use ATStudio\Enums\HasLabels;

enum HasLabelsMissingAttributeEnum: int
{
    use HasLabels;

    case MissingLabel = 1;
}
