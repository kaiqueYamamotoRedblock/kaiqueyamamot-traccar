<?php

return array(

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'between'  => array(
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ),
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email' => ' :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'max'  => array(
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ),
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'  => array(
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ),
    'not_in' => 'The selected :attribute is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size'  => array(
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ),
    'unique' => 'The :attribute has already been taken.',
    'url' => 'The :attribute format is invalid.',
    'array_max' => 'The :attribute max items :max.',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'custom-message',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Maxim??lna v????ka loga Frontpage je 60 pixlov.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon mus?? ma?? ve??kos?? 16 x 16 pixlov.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Email',
        'password' => 'Heslo',
        'password_confirmation' => 'Potvrdenie hesla',
        'remember_me' => 'Zapam??ta?? prihl??senie',
        'name' => 'N??zov',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI alebo ID zariadenia',
        'fuel_measurement_type' => 'Spotreba paliva',
        'fuel_cost' => 'Cena paliva',
        'icon_id' => 'Ikona zariadenia',
        'active' => 'Akt??vne',
        'polygon_color' => 'Farba pozadia',
        'devices' => 'Zariadenia',
        'geofences' => 'GEOhranice',
        'overspeed' => 'Prekro??enie r??chlosti',
        'fuel_consumption' => 'Spotreba paliva',
        'description' => 'Popis',
        'map_icon_id' => 'Ikona ID',
        'coordinates' => 'S??radnice',
        'date_from' => 'D??tum od',
        'date_to' => 'D??tum do',
        'code' => 'K??d',
        'title' => 'Titulok',
        'note' => 'Obsah',
        'path' => 'S??bor',
        'period_name' => 'N??zov intervalu',
        'days' => 'Dni',
        'devices_limit' => 'Limit zariaden??',
        'trial' => 'Trial',
        'price' => 'Cena',
        'message' => 'Spr??va',
        'tag' => 'Tag',
        'timezone_id' => '??asov?? z??na',
        'unit_of_distance' => 'Jednotka vzdialenosti',
        'unit_of_capacity' => 'Jednotka objemu',
        'unit_of_altitude' => 'Jednotka nadmorskej v????ky',
        'icons' => 'Ikony',
        'sms_gateway_url' => 'SMS br??na URL',
        'mobile_phone' => '????slo GSM',
        'sim_number' => 'SIM ????slo',
        'device_model' => 'Typ zariadenia',
        'group_id' => 'Skupina',
        'rfid' => 'RFID',
        'phone' => 'Telef??n',
        'device_id' => 'Zariadenie',
        'tag_value' => 'Tag value',
        'device_port' => 'port zariadenia',
        'event' => 'Udalos??',
        'port' => 'Port',
        'device_protocol' => 'Protokol zariadenia',
        'protocol' => 'Protokol',
        'sensor_name' => 'N??zov senzoru',
        'sensor_type' => 'Typ senzoru',
        'sensor_template' => '??abl??na senzoru',
        'tag_name' => 'Tag name',
        'min_value' => 'Min. hodnota',
        'max_value' => 'Max. hodnota',
        'on_value' => 'ON hodnota',
        'off_value' => 'OFF hodnota',
        'shown_value_by' => 'Zobrazi?? hodnotu pod??a',
        'full_tank_value' => 'Tag value',
        'formula' => 'Vzorec',
        'parameters' => 'Parameters',
        'full_tank' => 'Objem n??dr??e v litroch',
        'fuel_tank_name' => 'N??zov n??dr??e',
        'odometer_value' => 'Hodnota',
        'odometer_value_by' => 'Stav Km',
        'unit_of_measurement' => 'Jednotka',
        'plate_number' => 'E??V',
        'vin' => 'VIN',
        'registration_number' => 'Pozn??mka',
        'object_owner' => 'Pozn??mka 2',
        'additional_notes' => 'Dopl??uj??ce Pozn??mky',
        'expiration_date' => 'D??tum expir??cie',
        'days_to_remind' => 'Po??et dn?? do expir??cie',
        'type' => 'Typ',
        'format' => 'Form??t',
        'show_addresses' => 'Zobrazi?? adresy',
        'stops' => 'Zast??vky',
        'speed_limit' => 'R??chlostn?? limit',
        'zones_instead' => 'Zobrazi?? krajiny v adres??ch',
        'daily' => 'Denne',
        'weekly' => 'T????denne',
        'send_to_email' => 'Automanicky posla?? na e-mail',
        'filter' => 'Filter',
        'status' => 'Stav',
        'date' => 'D??tum',
        'geofence_name' => 'N??zov GEOhranice',
        'tail_color' => 'Farba stopy',
        'tail_length' => 'D????ka stopy',
        'engine_hours' => 'Motohodiny',
        'detect_engine' => 'Rozpoznanie motohodiny pod??a ON/OFF',
        'min_moving_speed' => 'Min. r??chlos?? pohybu v km/h',
        'min_fuel_fillings' => 'Minim??lny rozdiel pre rozpoznanie tankovania',
        'min_fuel_thefts' => 'Minim??lny rozdiel pre rozpoznanie kr??de??e',
        'expiration_by' => 'Vypr????',
        'interval' => 'Interval',
        'last_service' => 'Posledn?? servis',
        'trigger_event_left' => 'Pripomenutie pred servisom',
        'current_odometer' => 'Aktu??lny stav km',
        'current_engine_hours' => 'Aktu??lny stav motohod??n',
        'renew_after_expiration' => 'Obnovi?? po expir??ci??',
        'sms_template_id' => '??abl??na SMS',
        'frequency' => 'Frekvencia',
        'unit' => 'Jednotka',
        'noreply_email' => '??iadna odpove?? e - mailov?? adresa',
        'signature' => 'Podpis',
        'use_smtp_server' => 'Pou??i?? SMTP server',
        'smtp_server_host' => 'Hostite?? SMTP server',
        'smtp_server_port' => 'Port SMTP server',
        'smtp_security' => 'Bezpe??nos?? SMTP',
        'smtp_username' => 'SMTP u????vate??sk?? meno',
        'smtp_password' => 'SMTP heslo',
        'from_name' => 'Z n??zvu',
        'server_name' => 'N??zov servera',
        'available_maps' => 'Dostupn?? mapy',
        'default_language' => 'Predvolen?? jazyk',
        'default_timezone' => 'Predvolen?? ??asov?? p??smo',
        'default_unit_of_distance' => 'Predvolen?? jednotka vzdialenosti',
        'default_unit_of_capacity' => 'Predvolen?? jednotka kapacity',
        'default_unit_of_altitude' => 'V??chodz?? jednotka nadmorskej v????ky',
        'default_date_format' => 'Predvolen?? form??t d??tumu',
        'default_time_format' => 'Predvolen?? form??t ??asu',
        'default_map' => 'V??chodiskov?? mapu',
        'default_object_online_timeout' => 'V??chodz?? objekt line timeout',
        'logo' => 'Logo',
        'login_page_logo' => 'Prihlasovacia str??nka logo',
        'frontpage_logo' => 'Frontpage logo',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Povoli?? u????vate??om registr??ciu',
        'default_maps' => 'Predvolen?? mapy',
        'subscription_expiration_after_days' => 'Subscription platnosti po d??och',
        'gprs_template_id' => 'GPRS ??abl??na',
        'calibrations' => 'Kalibr??cia',
        'ftp_server' => 'FTP server',
        'ftp_port' => 'FTP Port',
        'ftp_username' => 'FTP u????vate??sk?? meno',
        'ftp_password' => 'FTP heslo',
        'ftp_path' => 'FTP cesta',
        'period' => 'Lehota',
        'hour' => 'Hodina',
        'color' => 'Farba',
        'polyline' => 'Trasa',
        'request_method' => 'Met??da Dopyt',
        'authentication' => 'Overovanie',
        'username' => 'U????vate??sk?? meno',
        'encoding' => 'K??dovanie',
        'time_adjustment' => 'Nastavenie ??asu',
        'parameter' => 'Parameter',
        'export_type' => 'Typ Export',
        'groups' => 'Skupiny',
        'file' => 'S??bor',
        'extra' => 'Navy??e',
        'parameter_value' => 'Hodnota parametra',
        'enable_plans' => 'Aktivova?? pl??ny',
        'payment_type' => 'Typ platby',
        'paypal_client_id' => 'Paypal ID klienta',
        'paypal_secret' => 'Paypal tajomstvo',
        'paypal_currency' => 'Paypal mena',
        'paypal_payment_name' => 'Paypal n??zov platba',
        'objects' => 'Objekty',
        'duration_value' => 'Trvania',
        'permissions' => 'Opr??vnenie',
        'plan' => 'Pl??n',
        'default_billing_plan' => '??vodn?? pl??n faktur??cie',
        'sensor_group_id' => 'Skupina Sensor',
        'daylight_saving_time' => 'Letn?? ??as',
        'phone_number' => 'Telef??nne ????slo',
        'action' => 'Ak??n??',
        'time' => '??as',
        'order' => 'Objedn??vka',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'Delete geocoder cache',
        'api_key' => 'API key',
        'api_url' => 'API url',
        'map_center_latitude' => 'Mapa centrum ????rky',
        'map_center_longitude' => 'Mapa centrum d????ky',
        'map_zoom_level' => '??rove?? mapa zoom',
        'dst_type' => 'Typ',
        'provider' => 'Poskytovate??',
        'week_start_day' => 'Predvolen?? kalend??rny t????de?? po??iato??n??ho d??a',
        'ip' => 'IP',
        'gprs_templates_only' => 'Show GPRS ??abl??ny iba pr??kazy',
        'select_all_objects' => 'Vybra?? v??etky objekty',
        'icon_type' => 'Icon type',
        'on_setflag_1' => 'Starting character',
        'on_setflag_2' => 'Amount of characters',
        'on_setflag_3' => 'Value of parameter',
        'domain' => 'Domain',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'Sender\'s phone number',
        'database_clear_status' => 'Automatick?? hist??ria vy??istenie',
        'database_clear_days' => 'Dni zachova??',
        'ignition_detection' => 'Detekcia zapa??ovanie',
        'template_color' => 'Farba ??abl??ny',
        'background' => 'Pozadie',
        'login_page_text_color' => 'Farba textu prihlasovacej str??nky',
        'login_page_background_color' => 'Farba pozadia prihlasovacej str??nky',
        'welcome_text' => 'Vitaj text',
        'bottom_text' => 'Spodn?? text',
        'apple_store_link' => 'Odkaz na AppleStore',
        'google_play_link' => 'Odkaz GooglePlay',
        'here_map_id' => 'ID aplik??cie HERE.com',
        'here_map_code' => 'K??d aplik??cie HERE.com',
        'login_page_panel_background_color' => 'Farba pozadia panelu prihl??senia',
        'login_page_panel_transparency' => 'Prihl??senie transparentnosti panelu str??nok',
        'visible' => 'Vidite??n??',
        'user' => 'U????vate??',
        'permission_to_add_devices' => 'Pridajte zariadenia dve',
        'permission_to_use_sms_gateway' => 'SMS br??na',
        'loged_at' => 'Posledn?? prihl??senie',
        'manager_id' => 'Mana????r',
        'position' => 'Poz??cie',
        'stop_duration_longer_than' => 'Trvanie trvania dlh??ie ako',
        'mapbox_access_token' => 'Access Token MapBox',
        'flag' => 'Vlajka',
        'shift_start' => 'Spusti?? posun',
        'shift_finish' => 'Shift finish',
        'shift_start_tolerance' => 'Tolerancia za??iatku posunu',
        'shift_finish_tolerance' => 'Tolerancia dokon??enia posunu',
        'excessive_exit' => 'Nadmern?? odchod',
        'smtp_authentication' => 'Overenie SMTP',
        'skip_calibration' => 'Vyl????te v??po??ty z rozsahu kalibr??cie',
        'bing_maps_key' => 'Bing mapy k??????',
        'stripe_public_key' => 'STRIPE verejn?? k??????',
        'stripe_secret_key' => 'STRIPE tajn?? k??????',
        'stripe_currency' => 'STRIPE mena',
        'priority' => 'Priorita',
        'pickup_address' => 'Pickup adresa',
        'delivery_address' => 'Adresa dodania',
        'schedule' => 'Pl??n',
        'sound_notification' => 'Zvukov?? upozornenie',
        'push_notification' => 'Push notification',
        'email_notification' => 'E-mailov?? ozn??menie',
        'sms_notification' => 'Ozn??menie SMS',
        'webhook_notification' => 'Webhook upozornenie',
        'offline_duration_longer_than' => 'Trvanie offline dlh??ie ako',
        'sms_gateway_headers' => 'Hlavi??ky SMS br??ny',
        'forward' => 'Vpred',
        'by_status' => 'Pod??a stavu',
        'icon_status_online' => 'Ikona stavu online',
        'icon_status_offline' => 'Ikona stavu stavu offline',
        'icon_status_ack' => 'Ikona stavu Ack',
        'icon_status_engine' => 'Ikona stavu motora',
        'server_description' => 'Popis servera',
        'bypass_invalid' => 'Povoli?? neplatn?? s??radnice',
        'installation_date' => 'D??tum in??tal??cie',
        'sim_activation_date' => 'D??tum aktiv??cie karty SIM',
        'sim_expiration_date' => 'D??tum vypr??ania platnosti karty SIM',
        'activation_date' => 'D??tum aktiv??cie',
        'secret_key' => 'Tajn?? k??????',
        'currency' => 'Mena',
        'client_id' => 'ID klienta',
        'secret' => 'Tajomstvo',
        'payment_name' => '',
        'merchant_id' => 'ID obchodn??ka',
        'public_key' => 'Verejn?? k??????',
        'private_key' => 'S??kromn?? k??????',
        'braintree_plan_ids' => 'ID Braintree pl??nu pre serverov?? pl??ny',
        'braintree_plan_explanation' => 'V ovl??dacom paneli aplik??cie Braintree mus??te vytvori?? rekurentn?? pl??n faktur??cie, tu vyberte ID zodpovedaj??ce pl??nu faktur??cie na va??om serveri.',
        'braintree_merchant_explanation' => 'Mus??te vytvori?? obchodn?? ????et v ovl??dacom paneli Braintree a zada?? ID tu.',
        'braintree_currency_match' => 'Mena obchodn??ho ????tu sa mus?? zhodova?? s menou pl??nu',
        'merchant_account_id' => 'ID obchodn??ho ????tu',
        'master_key' => 'Hlavn?? k??????',
        'token' => '??et??n',
        'paydunya_currency_warning' => 'Jedinou dostupnou menou je FCFA. Ak ho nakonfigurujete, uistite sa, ??e ostatn?? platby zodpovedaj?? rovnakej mene. V opa??nom pr??pade bud?? ma?? u????vatelia mo??nos?? k??pi?? si rovnak?? pl??n s r??znymi cenami.',
        'country' => 'Krajina',
        'merchant_account' => 'Obchodn?? ????et',
        'origin_key' => 'K?????? p??vodu',
        'test_config' => 'Test config',
        'environment' => 'Prostredie',
        'three_letter_iso' => 'Trojmiestny k??d meny ISO',
        'exact_time'  => array(
            'time' => '??as',
        ),
        'hourly'  => array(
            'minute' => 'Min??ta',
        ),
        'monthly'  => array(
            'day' => 'De??',
            'time' => '??as',
        ),
        'google_maps_key' => 'K?????? Google API API',
        'maptiler_key' => 'Kl??ves MapTiler',
        'streetview_api' => 'API aplik??cie Streetview',
        'streetview_key' => 'K?????? API aplik??cie Streetview',
        'openmaptiles_url' => 'OpenMapTiles Url',
        'unit_cost' => 'Jednotkov?? n??klady',
        'supplier' => 'Dod??vate??',
        'buyer' => 'Kupuj??ci',
        'expense_type' => 'Typ n??kladov',
        'device_cameras_days' => 'Dni na uchov??vanie obr??zkov z kamery zariadenia',
        'api_app_id' => '',
        'api_app_code' => 'K??d aplik??cie',
        'api_app_secret' => 'Tajomstvo aplik??cie',
        'invoice_number' => '????slo fakt??ry',
        'one_time_payment' => 'Jednorazov?? platba',
        'sharing_id' => 'Zdie??anie',
        'idle_duration_longer_than' => 'Trvanie ne??innosti dlh??ie ako',
        'delete_after_expiration' => 'Odstr??ni?? po uplynut?? platnosti',
        'sharing_email' => 'E-mailov?? ozn??menie s odkazom na zdie??anie',
        'sharing_sms' => 'SMS notifik??cia s odkazom na zdie??anie',
        'sms' => 'SMS',
        'template' => '??abl??na',
        'commands' => 'Pr??kazy',
        'brand' => 'V??robca zariadenia',
        'model' => 'Model',
        'apn_name' => 'N??zov APN',
        'apn_username' => 'Pou????vate??sk?? meno APN',
        'apn_password' => 'Heslo APN',
        'ignition_duration_longer_than' => 'Trvanie zapa??ovania dlh??ie ako',
        'tasks' => '??lohy',
        'id' => 'ID',
        'columns' => 'St??pce',
        'called_at' => 'Vola?? na',
        'alert_type' => 'Typ v??strahy',
        'response' => 'Odpove??',
        'remarks' => 'Pozn??mky',
        'client' => 'Z??kazn??k',
        'event_type' => 'Typ udalosti',
        'data_type' => 'D??tov?? typ',
        'slug' => 'Slim??k',
        'required' => 'Po??adovan??',
        'validation' => 'Overenie',
        'text' => 'Text',
        'datetime' => 'D??tum ??as',
        'boolean' => 'Boolean',
        'select' => 'Vybra??',
        'multiselect' => 'Multiselect',
        'options' => 'Mo??nosti',
        'option' => 'Vo??ba',
        'default' => '??tandardn??',
        'msisdn' => 'MSISDN',
        'notes' => 'Pozn??mky',
        'skip_empty' => 'Presko??i?? pr??zdnu hodnotu',
        'distance_limit' => 'Vzdialenos??',
        'distance_tolerance' => 'Tolerancia vzdialenosti',
        'pois' => 'POI',
        'device_type_id' => 'Typ zariadenia',
        'custom_fields' => 'Vlastn?? polia',
        'device_name' => 'N??zov zariadenia',
        'auto_hide_notification' => 'Automatick?? skrytie vyskakovacieho okna',
        'continuous_duration' => 'Nepretr??it?? trvanie',
        'captcha_provider' => 'Poskytovate?? CAPTCHA',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'K?????? webu reCAPTCHA',
        'recaptcha_secret_key' => 'Tajn?? k?????? reCAPTCHA',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'K?????? API HERE.com',
        'time_duration' => '??asov?? trvanie',
        'offset' => 'Ofset',
        'geofence_device' => 'Zariadenie',
        'webhook_key' => 'K?????? Webhook',
        'skip_blank_results' => 'Vynecha?? pr??zdne v??sledky',
        'account_sid' => '????et SID',
        'speed_limit_tolerance' => 'Tolerancia obmedzenia r??chlosti',
        'started_at' => 'Doba spustenia',
        'ended_at' => '??as ukon??enia',
        'region' => 'Regi??n',
        'adapted' => 'Prisp??soben??',
        'silent_notification' => 'Ignorova?? upozornenia, ak sa opakuj?? v priebehu nieko??k??ch min??t',
        'tomtom_key' => 'K?????? TomTom',
        'authorized' => 'Autorizovan??',
        'email_verification' => 'Overenie e-mailom',
        'project_id' => 'ID projektu',
        'project_psw' => 'Heslo projektu',
        'verify_id' => 'Overi?? id',
        'app_tracker_login' => 'Prihl??senie do aplik??cie sledovania je povolen??',
        'count' => 'Po????ta??',
    ),
    'same_protocol' => 'Zariadenia musia ma?? rovnak?? protokol.',
    'lesser_than' => ':attribute mus?? by?? men???? ako :other',
    'contains' => ':attribute mus?? obsahova?? :value .',
    'ip_port' => ':attribute nezodpoved?? form??tu IP:PORT',
    'required_unless' => 'Vy??aduje sa pole :attribute .',
    'translation_file' => 'Prekladov?? s??bor neexistuje',
    'placeholder' => 'Ch??ba atrib??t &quot; :placeholder &quot;',
    'image_valid' => ':attribute mus?? by?? obr??zok.',
    'missing_configuration_value' => 'Ch??ba :attribute hodnota konfigur??cie :attribute .',
    'sms_gateway_error' => 'Spr??vu nie je mo??n?? odosla??. Chyba br??ny SMS.',
    'cant_configure_device' => 'Zariadenie sa nepodarilo nakonfigurova??',
    'field_does_not_exist' => 'Pole :attribute neexistuje',
    'unsupported_rules' => 'Nepodporovan?? pravidl??:',
    'unsupported_parameterized_rules' => 'Nepodporovan?? parametrizovan?? pravidl??:',
    'cant_update_custom_field' => 'Nemo??no aktualizova?? pole ??? :field ???, preto??e u?? existuj?? z??znamy, ktor?? pou????vaj?? toto vlastn?? pole',
    'strong_password' => 'Siln?? heslo',
    'uppercase_character' => 'Vy??aduje sa ve??k?? p??smeno',
    'lowercase_character' => 'Vy??aduj?? sa mal?? p??smen??',
    'digit_character' => 'Vy??aduje sa znak ????slice',
    'wrong_captcha' => 'Nespr??vny obr??zok CAPTCHA',
    'dimensions' => ':attribute m?? neplatn?? rozmery obr??zka.',
    'mimetypes' => ':attribute mus?? by?? s??bor typu :values .',
    'in_array' => 'Pole :attribute v :other neexistuje.',
);