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
            Field::make( 'image', 'main_background_img', __( 'Фоновая картика хедера "Время Есть"' ) )
                ->set_value_type( 'url' )
                ->help_text('Это главная картинка шапки сайта'),
            Field::make( 'image', 'main_background_img2', __( 'Картинка по центру "Время Есть"' ) )
                ->set_value_type( 'url' )
                ->help_text('Эта картинка в центре хедера'),
            Field::make( 'image', 'main_logo', __( 'Логотип сайта "Время Есть"' ) )
                ->help_text('Логотип сайта')
                ->set_value_type( 'url' ),
            Field::make( 'text', 'addres', 'Адрес "Время Есть"' ),
            Field::make( 'text', 'phone', 'Телефон "Время Есть"' ),
        ) );
