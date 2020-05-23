<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendarPageController extends AbstractController
{
    /**
     * @Route("/", name="calendar")
     */
    public function index(): Response
    {
        // ToDo start coding here
        return $this->render('calendar/index.html.twig');
    }

    /**
     * This is an example.
     *
     * @Route("/example", name="example")
     */
    public function example(): Response
    {
        return $this->render('example.html.twig');
    }
}
