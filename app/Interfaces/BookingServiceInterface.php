<?php
namespace App\Interfaces;

interface BookingServiceInterface
{
    public function createBooking(array $data);
    public function getBooking(array $data);
}
