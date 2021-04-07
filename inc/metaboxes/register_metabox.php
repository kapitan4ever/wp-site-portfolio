<?php

function aletheme_metaboxes($meta_boxes) {

    $meta_boxes = array();
    $prefix = "wayup_";

    $meta_boxes[] = array(
        'id'         => 'testimonial_metaboxes',
        'title'      => 'Данные для отзыва',
        'pages'      => array( 'testimonial', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Социальная Сеть',
                'desc' => 'Введите ссылку на соц сеть',
                'id'   => $prefix . 'social_link',
                'type' => 'text',
            ),
            array(
                'name' => 'Дата отзыва',
                'desc' => 'Введите дату отзыва',
                'id'   => $prefix . 'testy_date',
                'type' => 'text_date',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'service_metaboxes',
        'title'      => 'Данные для сервиса',
        'pages'      => array( 'service', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Стоимость',
                'desc' => 'Введите цену данной услуги',
                'id'   => $prefix . 'service_cost',
                'type' => 'text',
            ),
            array(
                'name' => 'Фоновое изображение',
                'desc' => 'Выберите фон на выбор',
                'id'   => $prefix . 'service_icon',
                'type' => 'select',
                'options' => array(
                    array('name'=>'Стиль Статистика', 'value'=> 'stat'),
                    array('name' => 'Стиль Идея', 'value' => 'idea'),
                    array('name' => 'Стиль Интернет', 'value' => 'internet'),
                    array('name' => 'Стиль Инфо', 'value' => 'info'),
                    array('name' => 'Стиль Деловой', 'value' => 'busy'),
                    array('name' => 'Стиль Таргет', 'value' => 'target')
                )

            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'order_metaboxes',
        'title'      => 'Данные для Страницы Заказа',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-order.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Шорткод Формы',
                'desc' => 'Установите плагин для форм и вставьте шорткод формы',
                'id'   => $prefix . 'shortcode_order',
                'type' => 'text',
            ),
        )
    );



    $meta_boxes[] = array(
        'id'         => 'woocommerce_metaboxes',
        'title'      => 'Данные для Товара',
        'pages'      => array( 'product', ), // Post type
        'context'    => 'normal',
        'priority'   => 'low',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Короткий заголовок',
                'desc' => 'Укажите короткий заголовок',
                'id'   => $prefix . 'short_title',
                'std' => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Текст кнопки',
                'desc' => 'Укажите какой либо текст для кнопки',
                'id'   => $prefix . 'sale_button_title',
                'std' => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Цвет кнопки',
                'desc' => 'Укажите цвет для кнопки',
                'id'   => $prefix . 'sale_button_color',
                'type' => 'text',
                'std' => '#fdba4a'
            ),
            array(
                'name' => 'Фото 1',
                'desc' => 'Загрузите фото',
                'id'   => $prefix . 'photo_one',
                'type' => 'file',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'contact_metaboxes',
        'title'      => 'Данные для Страницы Контакты',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Заголовок 1',
                'desc' => 'Укажите заголовок для левой части страницы',
                'id'   => $prefix . 'contact_title_left',
                'std' => 'Как нас найти',
                'type' => 'text',
            ),
            array(
                'name' => 'Заголовок 2',
                'desc' => 'Укажите заголовок для правой части страницы',
                'id'   => $prefix . 'contact_title_right',
                'type' => 'text',
                'std' => 'Получите бесплатную консультацию уже сегодня'
            ),
            array(
                'name' => 'Шорткод для Контактной формы',
                'desc' => 'Создайте новую форму в плагине CF7 и вставьте сюда шорткод.',
                'id'   => $prefix . 'contact_shortcode',
                'type' => 'text',
            ),
            array(
                'name' => 'Адрес',
                'desc' => 'Укажите ваш адрес',
                'id'   => $prefix . 'contact_address',
                'type' => 'text',
            ),
            array(
                'name' => 'Телефон 1',
                'desc' => 'Укажите ваш телефон 1',
                'id'   => $prefix . 'contact_phone1',
                'type' => 'text',
            ),
            array(
                'name' => 'Телефон 2',
                'desc' => 'Укажите ваш телефон 2',
                'id'   => $prefix . 'contact_phone2',
                'type' => 'text',
            ),
            array(
                'name' => 'Email',
                'desc' => 'Укажите ваш Email',
                'id'   => $prefix . 'contact_email',
                'type' => 'text',
            ),
            array(
                'name' => 'График',
                'desc' => 'Укажите текст для рабочего графика',
                'id'   => $prefix . 'contact_calendar',
                'type' => 'text',
                'std' => 'Мы работаем с 9:00 до 22:00 в рабочие дни'
            ),

            array(
                'name' => 'Шорткод Карты',
                'desc' => 'Установите плагин для отображения карт и вставьте сюда шоткод',
                'id'   => $prefix . 'contact_map',
                'type' => 'text',
            ),
        )
    );

    return $meta_boxes;
}