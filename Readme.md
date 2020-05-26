# Tasks
1. Write the fastest solution as possible (ugly code is welcome) and commit the changes (in one commit, squash if needed).
2. Refactor your code to be reusable, flexible and scalable and commit the changes (in one commit, squash if needed).

# Installation

1. ``composer install``
2. ``composer init-project``

# Run
In order to run the project you will need a ``symfony cli installer`` or a working web-server like nginx. 
You can install ``symfony cli installer`` via ``wget https://get.symfony.com/cli/installer -O - | bash`` command.

Then run ``symfony serve`` to run your local server and you're ready to go!

# Example
Open the ``/example`` page.

## What is done
1. Controller
2. Entities
3. Multiple databases setup 
4. Twig templates

## Codestyle
In order to fix your codestyle according to a @Symfony preset run ``composer fix-cs``

## Calendar event fields:
You can set ``$type`` with the source of data like "birthday", "order", "meeting" or "order-api"

```php
DateTimeInterface $date;

string $title;

string $description;

string $type;
```

## Order API response example:    
```php
<?php

[
    [
        'id' => 15,
        'name' => 'IPond mega',
        'delivery_information' => 'to pond use IPond! delivery is free!',
        'purchase_date' => '2050-12-01 17:59',
        'price' => '667',
    ],
    [
        'id' => 17,
        'name' => 'IPond mega XL',
        'delivery_information' => 'Delivery is not free!',
        'purchase_date' => '2050-01-31 17:30',
        'price' => '668',
    ],
];
```
