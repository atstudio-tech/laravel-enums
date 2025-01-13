<?php

namespace ATStudio\Enums;

trait ToValue
{
    public function toValue(): int|string
    {
        return $this->value;
    }
}
