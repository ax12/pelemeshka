<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Main page setings' )
    ->show_on_template('page-mine.php')
    ->add_fields( array(
       Field::make( 'text', 'my_text', 'Текстовое поле' ),
    ));

Container::make('post_meta', 'All pages fields')
    ->show_on_post_type ('page')
    ->add_fields( array(
        Field::make( 'text', 'text1', 'Название' ),
        Field::make( 'textarea', 'text2', 'Описание' ),
    ));

