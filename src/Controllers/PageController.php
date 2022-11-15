<?php

namespace App\Controllers;


class PageController
{

    public function index () {
        echo "Hello";
    }

    public function contact()
    {
        echo "This is contact page!";
    }
    public function contactPost()
    {
        echo "This is a contact post";
    }
}