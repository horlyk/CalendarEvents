# Tasks
1. Write the fastest solution as possible (ugly code is welcome) and commit the changes (in one commit, squash if needed).
2. Refactor your code to be reusable, flexible and scalable and commit the changes (in one commit, squash if needed).

# Installation without docker

1. ``composer install``
2. ``composer init-project``

# Installation with docker
1. ``composer start``
2. ``cd docker && docker exec -it calendar_events_php bash``
3. ``composer install``
4. ``composer init-project``
5. Add to your hosts file ``127.0.0.1	calendar-events``

# Run without docker
In order to run the project you will need a ``symfony cli installer`` or a working web-server like nginx. 
You can install ``symfony cli installer`` via ``wget https://get.symfony.com/cli/installer -O - | bash`` command.

Then run ``symfony serve`` to run your local server and you're ready to go!

# Run with docker
If you've just installed the app - docker containers should be already up.  
If not - execute ``composer start`` to run your docker server and you're ready to go!  
Site url is ``http://calendar-events:85/``

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
        'purchase_date' => '2050-12-31 19:30',
        'price' => '668',
    ],
    [
        'id' => 19,
        'name' => 'IPond M',
        'delivery_information' => 'No delivery!',
        'purchase_date' => '2050-12-31 17:30',
        'price' => '665',
    ],
];
```
