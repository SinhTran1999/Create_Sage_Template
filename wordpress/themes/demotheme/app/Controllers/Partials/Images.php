<?php

namespace App\Controllers\Partials;
trait Images
{
  public function images(){
    return get_field('images');
  }
}

?>