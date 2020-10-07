<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function sliders() {
    return [
      [
        'link' => '#',
        'image' => get_template_directory_uri(  ) . '/assets/images/slide1.jpg'
      ],
      [
        'link' => '#',
        'image' => get_template_directory_uri(  ) . '/assets/images/slide2.png'
      ],
      [
        'link' => '#',
        'image' => get_template_directory_uri(  ) . '/assets/images/slide3.jpg'
      ],
      [
        'link' => '#',
        'image' => get_template_directory_uri(  ) . '/assets/images/slide4.png'
      ]
    ];
  }
}
