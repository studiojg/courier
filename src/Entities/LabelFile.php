<?php

declare(strict_types=1);

namespace Sylapi\Courier\Entities;

use Sylapi\Courier\Abstracts\Response;
use Sylapi\Courier\Contracts\LabelFile as LabelFileContract;

class LabelFile extends Response implements LabelFileContract
{
    private $data;

    public function __construct(?string $data)
    {
        $this->data = $data;
    }

    public function __toString(): string
    {
        return $this->data ?? '';
    }
}
