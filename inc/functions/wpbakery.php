<?php


//About Company Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_About_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Инфо О Компании', 'wayup' ),
        'base'                    => 'wayup_about_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные о компании', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "olins" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Почему мы –", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "olins" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Описание", "olins" ),
                "param_name"  => "desc",
                "value"       => '',
                "description" => esc_html__( "Введите описание", "olins" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Картинка Модуля", "olins" ),
                "param_name"  => "featured_image",
                "value"       => '',
                "description" => esc_html__( "Загрузите картинку", "olins" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Фото Автора", "olins" ),
                "param_name"  => "author",
                "value"       => '',
                "description" => esc_html__( "Загрузите фото", "olins" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Фото подписи", "olins" ),
                "param_name"  => "signature",
                "value"       => '',
                "description" => esc_html__( "Загрузите фото", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Цитата", "olins" ),
                "param_name"  => "quote",
                "value"       => esc_html__( "Мы здесь, чтобы помочь вам построить и поддержать свою мечту.", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Имя Автора", "olins" ),
                "param_name"  => "author_name",
                "value"       => esc_html__( "Дмитрий Львович", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__("Должность Автора", "olins" ),
                "param_name"  => "author_status",
                "value"       => esc_html__( "Директор компании", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),

        )
    ) );
}



//Progress Company Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Progress_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Прогресс Модуль', 'wayup' ),
        'base'                    => 'wayup_progress_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 3", "wayup" ),
                "param_name"  => "title3",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 4", "wayup" ),
                "param_name"  => "title4",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Значение 1", "wayup" ),
                "param_name"  => "value1",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Значение 2", "wayup" ),
                "param_name"  => "value2",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Значение 3", "wayup" ),
                "param_name"  => "value3",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Значение 4", "wayup" ),
                "param_name"  => "value4",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),

            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Фото для фона", "olins" ),
                "param_name"  => "bg",
                "value"       => '',
                "description" => esc_html__( "Загрузите фото", "olins" )
            ),
        )
    ) );
}


//Contact Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Contact_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Свяжитесь', 'wayup' ),
        'base'                    => 'wayup_contact_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок", "wayup" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Ссылка", "wayup" ),
                "param_name"  => "link",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}


//Contact Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Office_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Офисы', 'wayup' ),
        'base'                    => 'wayup_office_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные для модуля', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "wayup" ),
                "param_name"  => "title1",
                "value"       => "Наши офисы расположены по",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "wayup" ),
                "param_name"  => "title2",
                "value"       => "всей России",
                "description" => esc_html__( "Введите текст", "wayup" )
            ),


            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Главный офис (Адрес)", "wayup" ),
                "param_name"  => "office1",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Главный офис (Фото)", "wayup" ),
                "param_name"  => "office1photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),

            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Калининграде (Адрес)", "wayup" ),
                "param_name"  => "office2",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Калининграде (Фото)", "wayup" ),
                "param_name"  => "office2photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Казани (Адрес)", "wayup" ),
                "param_name"  => "office3",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Казани (Фото)", "wayup" ),
                "param_name"  => "office3photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Тюмени (Адрес)", "wayup" ),
                "param_name"  => "office4",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Тюмени (Фото)", "wayup" ),
                "param_name"  => "office4photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Благовещенске (Адрес)", "wayup" ),
                "param_name"  => "office5",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Благовещенске (Фото)", "wayup" ),
                "param_name"  => "office5photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Норильске (Адрес)", "wayup" ),
                "param_name"  => "office6",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Норильске (Фото)", "wayup" ),
                "param_name"  => "office6photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Офис в Владивостоке (Адрес)", "wayup" ),
                "param_name"  => "office7",
                "value"       => 'г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Офис в Владивостоке (Фото)", "wayup" ),
                "param_name"  => "office7photo",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "wayup" )
            ),
        )
    ) );
}







//Team Slider Slider Extension
if(class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Wayup_Team_Slider extends WPBakeryShortCodesContainer {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        "name"                    => 'Наша Команда',
        "base"                    => "wayup_team_slider",
        "as_parent"               => array( 'only' => 'wayup_team_slider_item' ),
        'description'             => 'Описание для модуля',
        "content_element"         => true,
        "category"                => 'Wayup',
        "icon"                    => '',
        "show_settings_on_create" => false,
        "params"                  => array(),
        "js_view"                 => 'VcColumnView'
    ) );
}
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Team_Slider_Item extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Член Команды', 'olins' ),
        'base'                    => 'wayup_team_slider_item',
        'category'                => 'Wayup',
        'description'             => esc_html__( 'Тест', 'olins' ),
        'show_settings_on_create' => true,
        "as_child"                => array('only' => 'wayup_team_slider'),
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => 'Фото Человека',
                "param_name"  => "photo",
                "description" => esc_html__( "Select or Upload an image.", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Имя", "olins" ),
                "param_name"  => "name",
                "value"       => '',
                "description" => 'Введите имя'
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Должность", "olins" ),
                "param_name"  => "status",
                "value"       => '',
                "description" => 'Введите должность'
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Описание", "olins" ),
                "param_name"  => "desc",
                "value"       => '',
                "description" => 'Введите Описание'
            ),

            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "ВК Линк", "olins" ),
                "param_name"  => "vklink",
                "value"       => '',
                "description" => 'Введите'
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "FB Линк", "olins" ),
                "param_name"  => "fblink",
                "value"       => '',
                "description" => 'Введите'
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "TW Линк", "olins" ),
                "param_name"  => "twlink",
                "value"       => '',
                "description" => 'Введите'
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "IG Линк", "olins" ),
                "param_name"  => "iglink",
                "value"       => '',
                "description" => 'Введите'
            ),
        )
    ) );
}




//Help Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Help_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Помощи', 'wayup' ),
        'base'                    => 'wayup_help_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные ', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "olins" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Кому мы", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "olins" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПОМОГАЕМ", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Описание", "olins" ),
                "param_name"  => "desc",
                "value"       => esc_html__( "Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),

            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Ссылка", "olins" ),
                "param_name"  => "link",
                "value"       => esc_html__( "#", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Блок 1 Заголовок", "olins" ),
                "param_name"  => "block1title",
                "value"       => esc_html__( "Стартапам", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),

            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Блок 1 Описание", "olins" ),
                "param_name"  => "block1desc",
                "value"       => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы
помочь вам расти',
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Блок 2 Заголовок", "olins" ),
                "param_name"  => "block2title",
                "value"       => esc_html__( "Фрилансеру", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Блок 2 Описание", "olins" ),
                "param_name"  => "block2desc",
                "value"       => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы
помочь вам расти',
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Блок 3 Заголовок", "olins" ),
                "param_name"  => "block3title",
                "value"       => esc_html__( "Малому бизнесу", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Блок 3 Описание", "olins" ),
                "param_name"  => "block3desc",
                "value"       => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы
помочь вам расти',
                "description" => esc_html__( "Введите текст", "olins" )
            ),
        )
    ) );
}



//Why we Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Why_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Почему Мы?', 'wayup' ),
        'base'                    => 'wayup_why_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные ', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "olins" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Почему мы –", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "olins" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Описание", "olins" ),
                "param_name"  => "content",
                "value"       => '',
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Ссылка", "olins" ),
                "param_name"  => "link",
                "value"       => esc_html__( "#", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
        )
    ) );
}


//Features Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Features_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Кейсы', 'wayup' ),
        'base'                    => 'wayup_features_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные ', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "olins" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "Наши", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "olins" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "КЕЙСЫ", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textarea",
                "heading"     => esc_html__( "Описание", "olins" ),
                "param_name"  => "desc",
                "value"       => esc_html__( "Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
        )
    ) );
}


//Testimonials Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Testimonials_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Отзывы', 'wayup' ),
        'base'                    => 'wayup_testimonials_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные ', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 1", "olins" ),
                "param_name"  => "title1",
                "value"       => esc_html__( "За нас говорят", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Заголовок 2", "olins" ),
                "param_name"  => "title2",
                "value"       => esc_html__( "НАШИ КЛИЕНТЫ", "olins" ),
                "description" => esc_html__( "Введите текст", "olins" )
            ),
        )
    ) );
}

//Services Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_Services_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Услуги', 'wayup' ),
        'base'                    => 'wayup_services_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные ', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array()
    ) );
}

//News Shortcode
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Wayup_News_Module extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Блок Новости', 'wayup' ),
        'base'                    => 'wayup_news_module',
        'category'                => esc_html__( 'Wayup', 'wayup' ),
        'description'             => esc_html__( 'Введите данные ', 'wayup' ),
        'show_settings_on_create' => true,
        'icon'                    => '',
        'weight'                  => - 5,
        'params'                  => array()
    ) );
}
