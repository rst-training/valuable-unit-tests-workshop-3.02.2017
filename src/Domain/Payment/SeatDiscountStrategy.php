<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;

use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

interface SeatDiscountStrategy
{
    /**
     * @param $seat
     * @param $price
     * @return mixed discount
     */
    public function calculate(Seat $seat, $price);
}
