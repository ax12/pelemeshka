<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Main page setings' )
    ->show_on_template('page-mine.php')
    ->add_fields( array(
       Field::make( 'text', 'my_text', 'Текстовое поле' ),
    ));

Container::make('post_meta', 'First part')
    ->show_on_post_type ('page')
    ->add_fields( array(
        Field::make( 'textarea', 'slogan', 'Слоган' ),

    ));

Container::make('post_meta', 'Second part')
    ->show_on_post_type ('page')
    ->add_fields( array(
        Field::make( 'text', 'part2_name', 'Название второго раздела' ),

    ));

Container::make('post_meta', 'Third part')
    ->show_on_post_type ('page')
    ->add_fields( array(
        Field::make( 'text', 'part3_name', 'Название третьего раздела' ),
        Field::make( 'image', 'first_img', __( 'Картинка заказ пельменей 1"' ) )
            ->set_value_type( 'url' )
            ->help_text('Это первая картинка'),
        Field::make( 'image', 'second_img', __( 'Картинка заказ пельменей 2"' ) )
            ->set_value_type( 'url' )
            ->help_text('Это вторая картинка'),
    ));