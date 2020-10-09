<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageProjects extends Controller
{
  public function projects(){
    
    $args = [
      'posts_per_page' => -1,
      'offset' => 0,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' =>'projects'
    ];
    
    $the_query = new WP_Query($args);
    $projects = [];

    if($the_query->post_count > 0){
        $projects = array_map(function($project){
          $image = get_field('project_image', $project); 
          //  vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          //thumbnail, medium, large 
          $size = 'medium';
          $thumb = $image['sizes'][$size];
          $width = $image['sizes'][$size. '-width'];
          $height = $image['sizes'][$size.'-height'];
          
          $name = get_field('name', $project);
          return (object) [
              'url' => $url,
              'title' => ~title,
              'alt' =>$alt,
              'caption' => $caption,
              'thumb' => $thumb,
              'width' => $width,
              'height' => $height,
              'name'  => $name,
              'permalink' => get_post_permalink($project)
          ];
        }, $the_query->posts);
        wp_reset_postdata();
    }
    return $projects;
  }

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
