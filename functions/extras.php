<?php

/* Standard Pager
------------------------------------------------------------------------------------- */
function pagination($pages = '', $range = 1) {

     $showitems = ($range * 2) + 1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {

        echo '<ul class="pagination">';

            for ($i=1; $i <= $pages; $i++) {

                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {

                    if ($paged == $i) :

                        echo    '<li class="pagination__item active">
                                    <a href="' . get_pagenum_link($i) . '">' . $i . '</a>
                                </li>';
                    else :
                        echo    '<li class="pagination__item">
                                    <a href="' . get_pagenum_link($i) . '">' . $i . '</a>
                                </li>
                        ';

                    endif;
                }
            }

            // Paged = current page
            // Pages = Total pages

            // Next page
            if($paged < $pages) echo '
                <li class="pagination__item pagination__item--next">
                    <a href="'. get_pagenum_link(($paged + 1)) .'" >
                      Next page
                      <span class="screen-reader-text">Next page</span>
                    </a>
                </li>
            ';

            // Previous page
            if($paged > 1) echo '
                <li class="pagination__item pagination__item--previous">
                    <a href="' . get_pagenum_link(($paged - 1)) . '">
                      Previous page
                      <span class="screen-reader-text">Previous page</span>
                    </a>
                </li>
                ';

            // First page
            // if($paged > 1) echo '
            //     <li class="pagination__item pagination__item--arrow spin-right">
            //         <a href="' . get_pagenum_link(1) . '">
            //           First
            //           <span class="screen-reader-text">First page</span>
            //         </a>
            //     </li>
            //     ';

            // Last page
            // if($paged < $pages) echo '
            //     <li class="pagination__item pagination__item--arrow spin-left">
            //         <a href="'. get_pagenum_link($pages) .'" >
            //           Last
            //           <span class="screen-reader-text">Last page</span>
            //         </a>
            //     </li>
            // ';

        echo '</ul>';

     }
}

// Menus
function navigation($navgiation) {
    $args = array(
        'theme_location' => $navgiation, 
        'container' => 'ul', 
        'menu_class' => 'navigation navigation--'.$navgiation.''
    );

    return wp_nav_menu($args);
}

// Date range
function date_range($startDate, $endDate) {

    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    if ($startDate == $endDate) {
      return date("jS", $endDate) . " " . date("F Y", $startDate);
    }

    if (date("n", $startDate) == date("n", $endDate)) {
        return date("F", $startDate) . " " . date("jS", $startDate) . " - " . date("jS", $endDate) . " " . date("Y", $startDate);
    }

    if (date("Y", $startDate) != date("Y", $endDate)) {
        return date("F", $startDate) . " " . date("jS", $startDate) . " " . date("Y", $startDate) . " - " . date("F", $endDate) . " " . date("jS", $endDate) . " " . date("Y", $endDate);
    }

    return date("F", $startDate) . " " . date("jS", $startDate) . " - " . date("F", $endDate) . " " . date("jS", $endDate) . " " . date("Y", $endDate);
}