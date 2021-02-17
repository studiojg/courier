<?php

declare(strict_types=1);

namespace Sylapi\Courier\Abstracts;

use Sylapi\Courier\Contracts\Booking as BookingContract;

abstract class Booking implements BookingContract
{
    private $shipmentId;

    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    public function setShipmentId(string $shipmentId): BookingContract
    {
        $this->shipmentId = $shipmentId;

        return $this;
    }
}
