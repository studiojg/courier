<?php

declare(strict_types=1);

namespace Sylapi\Courier\Contracts;

interface CourierGetLabels
{
    public function getLabel(string $shipmentId): Label;
    public function getLabelFile(string $shipmentId, string $format = 'pdf'): LabelFile;
}
