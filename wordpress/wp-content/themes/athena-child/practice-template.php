<?php
/* 
* Template Name: practice-template
*/
$args = array("post_type"=>"post");
get_header();
// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
        the_content();
    }
    echo '</ul>';
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
get_footer();
