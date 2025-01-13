<?php

namespace ATStudio\Enums;

use Illuminate\Support\Str;

trait Snakeable
{
    public function snake(): string
    {
        return Str::snake($this->name);
    }
}
