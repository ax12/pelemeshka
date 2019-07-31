<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Main page setings' )
    ->where( 'post_id', '=', get_option( 'page_on_front' ) )
    ->add_fields( array(

        Field::make( 'textarea', 'slogan', 'Слоган под названием кафе' ),
        Field::make( 'text', 'part2_name', 'Название второго раздела' ),
        Field::make( 'text', 'part3_name', 'Название третьего раздела' ),

        Field::make( 'image', 'first_img', __( 'Картинка заказ пельменей 1"' ) )
            ->set_value_type( 'url' )
            ->help_text('Это первая картинка'),
            Field::make( 'image', 'second_img', __( 'Картинка заказ пельменей 2"' ) )
            ->set_value_type( 'url' )
            ->help_text('Это вторая картинка'),
        Field::make( 'text', 'part4_name', 'Название четвертого раздела' ),

        Field::make( 'image', 'first_vine_img', __( 'Карта вин 1"' ) )
            ->set_value_type( 'url' ),
        Field::make( 'image', 'second_vine_img', __( 'Карта вин 2"' ) )
            ->set_value_type( 'url' ),
        Field::make( 'image', 'third_vine_img', __( 'Карта вин 3"' ) )
            ->set_value_type( 'url' ),

    ));
