<?php
class Sanda_Walker extends WAlker_Nav_Menu {

  function start_el(&$output, $item, $depth=0, $args=array(), $id=0) {
  
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $permalink = $item->url;
    

    echo '<pre>';
    echo '</pre>';

    $output .= "<li class='".implode(" ", $item->classes) ."'>";

    $output .= '<a href="' .$permalink. '">';

    $output .= $title;
  }
  
}
