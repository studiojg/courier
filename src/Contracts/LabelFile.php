<?php

declare(strict_types=1);

namespace Sylapi\Courier\Contracts;

interface LabelFile extends Response
{
    public function __toString(): string;
}
