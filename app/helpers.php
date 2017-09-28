<?php  


if(! function_exists('page_title') )
{
     function page_title($title)
    {
      $base_title = 'Laracarte-List of Artisans';

      return $title. ' | '. $base_title ;
    }
}