<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Main page setings' )
    ->show_on_template('page-mine.php')
    ->add_fields( array(
       Field::make( 'text', 'my_text', 'Текстовое поле' ),
    ));

Container::make('post_meta', 'First')
    ->show_on_post_type ('page')
    ->add_fields( array(
        Field::make( 'textarea', 'slogan', 'Слоган' ),
        Field::make( 'textarea', 'text2', 'Описание' ),
    ));

