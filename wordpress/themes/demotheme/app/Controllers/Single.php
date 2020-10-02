<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    /**
     * Return images from Advanced Custom Fields
     *
     * @return array
     */
    public function images()
    {
        return get_field('images');
    }

    use Partials\Images;
}