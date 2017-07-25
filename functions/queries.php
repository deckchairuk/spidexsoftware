<?php

/* Example query with options to set posts per page and a meta value

function get_example($post_per_page = 5, $example_meta_value) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'         => 'example',
        'posts_per_page'    => $post_per_page,
        'paged'             => $paged,
        'post_status'       => array( 'publish' ),
        'meta_query' => array(
            'relation' => 'AND',
        ),
    );

    if (isset($example_meta_value) && $example_meta_value) {
        $args['meta_query'][] = array(
            'key' => 'example_meta_key',
            'value' => $example_meta_value,
        );
    }

    $query = new WP_Query($args);

    return $query;
}
*/

function get_resources($post_per_page = 5) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $querySearch = get_query_var('search');
    $queryTag = get_query_var('tag');


    if (isset($querySearch) && $querySearch) {
        $args = array(
            's' => $querySearch,
            'post_type'         => 'resources',
            'posts_per_page'    => $post_per_page,
            'paged'             => $paged,
            'post_status'       => array( 'publish' ),
        );
    } else {
        $args = array(
            'post_type'         => 'resources',
            'posts_per_page'    => $post_per_page,
            'paged'             => $paged,
            'post_status'       => array( 'publish' ),
        );
    }

    if (isset($queryTag) && $queryTag) {
        $args['tax_query'][] = array(
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => $queryTag,
        );
    }

    $query = new WP_Query($args);

    return $query;
}

function get_resource_tags($post_per_page = 5) {
    $terms = get_terms( array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
    ));

    return $terms;
}

function get_events($post_per_page = 5) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'         => 'events',
        'posts_per_page'    => $post_per_page,
        'paged'             => $paged,
        'post_status'       => array( 'publish' ),
        'meta_key'          => 'start_date',
        'orderby'           => 'meta_value_num',
        'order'             => 'ASC',
        'meta_query'        => array(
            array(
                'key' => 'end_date',
                'value' => date("Y-m-d"),
                'compare' => '>=',
                'type' => 'DATE'
            )
        )
    );

    $query = new WP_Query($args);

    return $query;
}

function get_projects($post_per_page = 5) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'         => 'projects',
        'posts_per_page'    => $post_per_page,
        'paged'             => $paged,
        'post_status'       => array( 'publish' ),
        'orderby'           => 'menu_order',
        'order'             => 'ASC',
    );

    $query = new WP_Query($args);

    return $query;
}

function get_products($post_per_page = 5) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'         => 'products',
        'posts_per_page'    => $post_per_page,
        'paged'             => $paged,
        'post_status'       => array( 'publish' ),
        'orderby'           => 'menu_order',
        'order'             => 'ASC',
    );

    $query = new WP_Query($args);

    return $query;
}

function get_articles($post_per_page = 5) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'         => 'articles',
        'posts_per_page'    => $post_per_page,
        'paged'             => $paged,
        'post_status'       => array( 'publish' ),
    );

    $query = new WP_Query($args);

    return $query;
}

function get_partners($post_per_page = 5) {
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'         => 'partners',
        'posts_per_page'    => $post_per_page,
        'paged'             => $paged,
        'post_status'       => array( 'publish' ),
    );

    $query = new WP_Query($args);

    return $query;
}