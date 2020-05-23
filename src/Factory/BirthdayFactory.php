<?php

namespace App\Factory;

use App\Entity\Events\Birthday;
use DateTime;

class BirthdayFactory
{
    public function create(DateTime $date, string $firstName, string $lastName, string $additionalNotes): Birthday
    {
        return (new Birthday())
            ->setDate($date)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setAdditionalNotes($additionalNotes)
        ;
    }
}
