<?php

namespace App\Factory;

use App\Entity\Events\Meeting;
use DateTime;

class MeetingFactory
{
    public function create(DateTime $date, string $title, string $description): Meeting
    {
        return (new Meeting())
            ->setDate($date)
            ->setTitle($title)
            ->setDescription($description)
        ;
    }
}
