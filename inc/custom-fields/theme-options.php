<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.07.2019
 * Time: 16:42
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

    Container::make( 'theme_options', __( 'Main setings theme' ) )
        ->set_page_parent ('themes.php')
        ->add_fields( array(
            Field::make( 'image', 'main_logo', __( 'Логотип в шапке сайта' ) ),
            Field::make( 'text', 'addres', 'Адрес на главной' ),
            Field::make( 'text', 'phone', 'Телефон' ),
        ) );
