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
            'dimensions' => 'Maximálna výška loga Frontpage je 60 pixlov.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon musí mať veľkosť 16 x 16 pixlov.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Email',
        'password' => 'Heslo',
        'password_confirmation' => 'Potvrdenie hesla',
        'remember_me' => 'Zapamätať prihlásenie',
        'name' => 'Názov',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI alebo ID zariadenia',
        'fuel_measurement_type' => 'Spotreba paliva',
        'fuel_cost' => 'Cena paliva',
        'icon_id' => 'Ikona zariadenia',
        'active' => 'Aktívne',
        'polygon_color' => 'Farba pozadia',
        'devices' => 'Zariadenia',
        'geofences' => 'GEOhranice',
        'overspeed' => 'Prekročenie rýchlosti',
        'fuel_consumption' => 'Spotreba paliva',
        'description' => 'Popis',
        'map_icon_id' => 'Ikona ID',
        'coordinates' => 'Súradnice',
        'date_from' => 'Dátum od',
        'date_to' => 'Dátum do',
        'code' => 'Kód',
        'title' => 'Titulok',
        'note' => 'Obsah',
        'path' => 'Súbor',
        'period_name' => 'Názov intervalu',
        'days' => 'Dni',
        'devices_limit' => 'Limit zariadení',
        'trial' => 'Trial',
        'price' => 'Cena',
        'message' => 'Správa',
        'tag' => 'Tag',
        'timezone_id' => 'Časová zóna',
        'unit_of_distance' => 'Jednotka vzdialenosti',
        'unit_of_capacity' => 'Jednotka objemu',
        'unit_of_altitude' => 'Jednotka nadmorskej výšky',
        'icons' => 'Ikony',
        'sms_gateway_url' => 'SMS brána URL',
        'mobile_phone' => 'Číslo GSM',
        'sim_number' => 'SIM číslo',
        'device_model' => 'Typ zariadenia',
        'group_id' => 'Skupina',
        'rfid' => 'RFID',
        'phone' => 'Telefón',
        'device_id' => 'Zariadenie',
        'tag_value' => 'Tag value',
        'device_port' => 'port zariadenia',
        'event' => 'Udalosť',
        'port' => 'Port',
        'device_protocol' => 'Protokol zariadenia',
        'protocol' => 'Protokol',
        'sensor_name' => 'Názov senzoru',
        'sensor_type' => 'Typ senzoru',
        'sensor_template' => 'Šablóna senzoru',
        'tag_name' => 'Tag name',
        'min_value' => 'Min. hodnota',
        'max_value' => 'Max. hodnota',
        'on_value' => 'ON hodnota',
        'off_value' => 'OFF hodnota',
        'shown_value_by' => 'Zobraziť hodnotu podľa',
        'full_tank_value' => 'Tag value',
        'formula' => 'Vzorec',
        'parameters' => 'Parameters',
        'full_tank' => 'Objem nádrže v litroch',
        'fuel_tank_name' => 'Názov nádrže',
        'odometer_value' => 'Hodnota',
        'odometer_value_by' => 'Stav Km',
        'unit_of_measurement' => 'Jednotka',
        'plate_number' => 'EČV',
        'vin' => 'VIN',
        'registration_number' => 'Poznámka',
        'object_owner' => 'Poznámka 2',
        'additional_notes' => 'Doplňujúce Poznámky',
        'expiration_date' => 'Dátum expirácie',
        'days_to_remind' => 'Počet dní do expirácie',
        'type' => 'Typ',
        'format' => 'Formát',
        'show_addresses' => 'Zobraziť adresy',
        'stops' => 'Zastávky',
        'speed_limit' => 'Rýchlostný limit',
        'zones_instead' => 'Zobraziť krajiny v adresách',
        'daily' => 'Denne',
        'weekly' => 'Týždenne',
        'send_to_email' => 'Automanicky poslať na e-mail',
        'filter' => 'Filter',
        'status' => 'Stav',
        'date' => 'Dátum',
        'geofence_name' => 'Názov GEOhranice',
        'tail_color' => 'Farba stopy',
        'tail_length' => 'Dĺžka stopy',
        'engine_hours' => 'Motohodiny',
        'detect_engine' => 'Rozpoznanie motohodiny podľa ON/OFF',
        'min_moving_speed' => 'Min. rýchlosť pohybu v km/h',
        'min_fuel_fillings' => 'Minimálny rozdiel pre rozpoznanie tankovania',
        'min_fuel_thefts' => 'Minimálny rozdiel pre rozpoznanie krádeže',
        'expiration_by' => 'Vyprší',
        'interval' => 'Interval',
        'last_service' => 'Posledný servis',
        'trigger_event_left' => 'Pripomenutie pred servisom',
        'current_odometer' => 'Aktuálny stav km',
        'current_engine_hours' => 'Aktuálny stav motohodín',
        'renew_after_expiration' => 'Obnoviť po expirácií',
        'sms_template_id' => 'šablóna SMS',
        'frequency' => 'Frekvencia',
        'unit' => 'Jednotka',
        'noreply_email' => 'Žiadna odpoveď e - mailová adresa',
        'signature' => 'Podpis',
        'use_smtp_server' => 'Použiť SMTP server',
        'smtp_server_host' => 'Hostiteľ SMTP server',
        'smtp_server_port' => 'Port SMTP server',
        'smtp_security' => 'Bezpečnosť SMTP',
        'smtp_username' => 'SMTP užívateľské meno',
        'smtp_password' => 'SMTP heslo',
        'from_name' => 'Z názvu',
        'server_name' => 'Názov servera',
        'available_maps' => 'Dostupné mapy',
        'default_language' => 'Predvolený jazyk',
        'default_timezone' => 'Predvolené časové pásmo',
        'default_unit_of_distance' => 'Predvolené jednotka vzdialenosti',
        'default_unit_of_capacity' => 'Predvolené jednotka kapacity',
        'default_unit_of_altitude' => 'Východzí jednotka nadmorskej výšky',
        'default_date_format' => 'Predvolený formát dátumu',
        'default_time_format' => 'Predvolený formát času',
        'default_map' => 'Východiskové mapu',
        'default_object_online_timeout' => 'Východzí objekt line timeout',
        'logo' => 'Logo',
        'login_page_logo' => 'Prihlasovacia stránka logo',
        'frontpage_logo' => 'Frontpage logo',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Povoliť užívateľom registráciu',
        'default_maps' => 'Predvolené mapy',
        'subscription_expiration_after_days' => 'Subscription platnosti po dňoch',
        'gprs_template_id' => 'GPRS šablóna',
        'calibrations' => 'Kalibrácia',
        'ftp_server' => 'FTP server',
        'ftp_port' => 'FTP Port',
        'ftp_username' => 'FTP užívateľské meno',
        'ftp_password' => 'FTP heslo',
        'ftp_path' => 'FTP cesta',
        'period' => 'Lehota',
        'hour' => 'Hodina',
        'color' => 'Farba',
        'polyline' => 'Trasa',
        'request_method' => 'Metóda Dopyt',
        'authentication' => 'Overovanie',
        'username' => 'Užívateľské meno',
        'encoding' => 'Kódovanie',
        'time_adjustment' => 'Nastavenie času',
        'parameter' => 'Parameter',
        'export_type' => 'Typ Export',
        'groups' => 'Skupiny',
        'file' => 'Súbor',
        'extra' => 'Navyše',
        'parameter_value' => 'Hodnota parametra',
        'enable_plans' => 'Aktivovať plány',
        'payment_type' => 'Typ platby',
        'paypal_client_id' => 'Paypal ID klienta',
        'paypal_secret' => 'Paypal tajomstvo',
        'paypal_currency' => 'Paypal mena',
        'paypal_payment_name' => 'Paypal názov platba',
        'objects' => 'Objekty',
        'duration_value' => 'Trvania',
        'permissions' => 'Oprávnenie',
        'plan' => 'Plán',
        'default_billing_plan' => 'Úvodný plán fakturácie',
        'sensor_group_id' => 'Skupina Sensor',
        'daylight_saving_time' => 'Letný čas',
        'phone_number' => 'Telefónne číslo',
        'action' => 'Akčná',
        'time' => 'čas',
        'order' => 'Objednávka',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'Delete geocoder cache',
        'api_key' => 'API key',
        'api_url' => 'API url',
        'map_center_latitude' => 'Mapa centrum šírky',
        'map_center_longitude' => 'Mapa centrum dĺžky',
        'map_zoom_level' => 'Úroveň mapa zoom',
        'dst_type' => 'Typ',
        'provider' => 'Poskytovateľ',
        'week_start_day' => 'Predvolené kalendárny týždeň počiatočného dňa',
        'ip' => 'IP',
        'gprs_templates_only' => 'Show GPRS Šablóny iba príkazy',
        'select_all_objects' => 'Vybrať všetky objekty',
        'icon_type' => 'Icon type',
        'on_setflag_1' => 'Starting character',
        'on_setflag_2' => 'Amount of characters',
        'on_setflag_3' => 'Value of parameter',
        'domain' => 'Domain',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'Sender\'s phone number',
        'database_clear_status' => 'Automatická história vyčistenie',
        'database_clear_days' => 'Dni zachovať',
        'ignition_detection' => 'Detekcia zapaľovanie',
        'template_color' => 'Farba šablóny',
        'background' => 'Pozadie',
        'login_page_text_color' => 'Farba textu prihlasovacej stránky',
        'login_page_background_color' => 'Farba pozadia prihlasovacej stránky',
        'welcome_text' => 'Vitaj text',
        'bottom_text' => 'Spodný text',
        'apple_store_link' => 'Odkaz na AppleStore',
        'google_play_link' => 'Odkaz GooglePlay',
        'here_map_id' => 'ID aplikácie HERE.com',
        'here_map_code' => 'Kód aplikácie HERE.com',
        'login_page_panel_background_color' => 'Farba pozadia panelu prihlásenia',
        'login_page_panel_transparency' => 'Prihlásenie transparentnosti panelu stránok',
        'visible' => 'Viditeľný',
        'user' => 'Užívateľ',
        'permission_to_add_devices' => 'Pridajte zariadenia dve',
        'permission_to_use_sms_gateway' => 'SMS brána',
        'loged_at' => 'Posledné prihlásenie',
        'manager_id' => 'Manažér',
        'position' => 'Pozície',
        'stop_duration_longer_than' => 'Trvanie trvania dlhšie ako',
        'mapbox_access_token' => 'Access Token MapBox',
        'flag' => 'Vlajka',
        'shift_start' => 'Spustiť posun',
        'shift_finish' => 'Shift finish',
        'shift_start_tolerance' => 'Tolerancia začiatku posunu',
        'shift_finish_tolerance' => 'Tolerancia dokončenia posunu',
        'excessive_exit' => 'Nadmerný odchod',
        'smtp_authentication' => 'Overenie SMTP',
        'skip_calibration' => 'Vylúčte výpočty z rozsahu kalibrácie',
        'bing_maps_key' => 'Bing mapy kľúč',
        'stripe_public_key' => 'STRIPE verejný kľúč',
        'stripe_secret_key' => 'STRIPE tajný kľúč',
        'stripe_currency' => 'STRIPE mena',
        'priority' => 'Priorita',
        'pickup_address' => 'Pickup adresa',
        'delivery_address' => 'Adresa dodania',
        'schedule' => 'Plán',
        'sound_notification' => 'Zvukové upozornenie',
        'push_notification' => 'Push notification',
        'email_notification' => 'E-mailové oznámenie',
        'sms_notification' => 'Oznámenie SMS',
        'webhook_notification' => 'Webhook upozornenie',
        'offline_duration_longer_than' => 'Trvanie offline dlhšie ako',
        'sms_gateway_headers' => 'Hlavičky SMS brány',
        'forward' => 'Vpred',
        'by_status' => 'Podľa stavu',
        'icon_status_online' => 'Ikona stavu online',
        'icon_status_offline' => 'Ikona stavu stavu offline',
        'icon_status_ack' => 'Ikona stavu Ack',
        'icon_status_engine' => 'Ikona stavu motora',
        'server_description' => 'Popis servera',
        'bypass_invalid' => 'Povoliť neplatné súradnice',
        'installation_date' => 'Dátum inštalácie',
        'sim_activation_date' => 'Dátum aktivácie karty SIM',
        'sim_expiration_date' => 'Dátum vypršania platnosti karty SIM',
        'activation_date' => 'Dátum aktivácie',
        'secret_key' => 'Tajný kľúč',
        'currency' => 'Mena',
        'client_id' => 'ID klienta',
        'secret' => 'Tajomstvo',
        'payment_name' => '',
        'merchant_id' => 'ID obchodníka',
        'public_key' => 'Verejný kľúč',
        'private_key' => 'Súkromný kľúč',
        'braintree_plan_ids' => 'ID Braintree plánu pre serverové plány',
        'braintree_plan_explanation' => 'V ovládacom paneli aplikácie Braintree musíte vytvoriť rekurentný plán fakturácie, tu vyberte ID zodpovedajúce plánu fakturácie na vašom serveri.',
        'braintree_merchant_explanation' => 'Musíte vytvoriť obchodný účet v ovládacom paneli Braintree a zadať ID tu.',
        'braintree_currency_match' => 'Mena obchodného účtu sa musí zhodovať s menou plánu',
        'merchant_account_id' => 'ID obchodného účtu',
        'master_key' => 'Hlavný kľúč',
        'token' => 'žetón',
        'paydunya_currency_warning' => 'Jedinou dostupnou menou je FCFA. Ak ho nakonfigurujete, uistite sa, že ostatné platby zodpovedajú rovnakej mene. V opačnom prípade budú mať užívatelia možnosť kúpiť si rovnaký plán s rôznymi cenami.',
        'country' => 'Krajina',
        'merchant_account' => 'Obchodný účet',
        'origin_key' => 'Kľúč pôvodu',
        'test_config' => 'Test config',
        'environment' => 'Prostredie',
        'three_letter_iso' => 'Trojmiestny kód meny ISO',
        'exact_time'  => array(
            'time' => 'čas',
        ),
        'hourly'  => array(
            'minute' => 'Minúta',
        ),
        'monthly'  => array(
            'day' => 'Deň',
            'time' => 'čas',
        ),
        'google_maps_key' => 'Kľúč Google API API',
        'maptiler_key' => 'Kláves MapTiler',
        'streetview_api' => 'API aplikácie Streetview',
        'streetview_key' => 'Kľúč API aplikácie Streetview',
        'openmaptiles_url' => 'OpenMapTiles Url',
        'unit_cost' => 'Jednotkové náklady',
        'supplier' => 'Dodávateľ',
        'buyer' => 'Kupujúci',
        'expense_type' => 'Typ nákladov',
        'device_cameras_days' => 'Dni na uchovávanie obrázkov z kamery zariadenia',
        'api_app_id' => '',
        'api_app_code' => 'Kód aplikácie',
        'api_app_secret' => 'Tajomstvo aplikácie',
        'invoice_number' => 'Číslo faktúry',
        'one_time_payment' => 'Jednorazová platba',
        'sharing_id' => 'Zdieľanie',
        'idle_duration_longer_than' => 'Trvanie nečinnosti dlhšie ako',
        'delete_after_expiration' => 'Odstrániť po uplynutí platnosti',
        'sharing_email' => 'E-mailové oznámenie s odkazom na zdieľanie',
        'sharing_sms' => 'SMS notifikácia s odkazom na zdieľanie',
        'sms' => 'SMS',
        'template' => 'šablóna',
        'commands' => 'Príkazy',
        'brand' => 'Výrobca zariadenia',
        'model' => 'Model',
        'apn_name' => 'Názov APN',
        'apn_username' => 'Používateľské meno APN',
        'apn_password' => 'Heslo APN',
        'ignition_duration_longer_than' => 'Trvanie zapaľovania dlhšie ako',
        'tasks' => 'úlohy',
        'id' => 'ID',
        'columns' => 'Stĺpce',
        'called_at' => 'Volať na',
        'alert_type' => 'Typ výstrahy',
        'response' => 'Odpoveď',
        'remarks' => 'Poznámky',
        'client' => 'Zákazník',
        'event_type' => 'Typ udalosti',
        'data_type' => 'Dátový typ',
        'slug' => 'Slimák',
        'required' => 'Požadovaný',
        'validation' => 'Overenie',
        'text' => 'Text',
        'datetime' => 'Dátum Čas',
        'boolean' => 'Boolean',
        'select' => 'Vybrať',
        'multiselect' => 'Multiselect',
        'options' => 'Možnosti',
        'option' => 'Voľba',
        'default' => 'štandardné',
        'msisdn' => 'MSISDN',
        'notes' => 'Poznámky',
        'skip_empty' => 'Preskočiť prázdnu hodnotu',
        'distance_limit' => 'Vzdialenosť',
        'distance_tolerance' => 'Tolerancia vzdialenosti',
        'pois' => 'POI',
        'device_type_id' => 'Typ zariadenia',
        'custom_fields' => 'Vlastné polia',
        'device_name' => 'Názov zariadenia',
        'auto_hide_notification' => 'Automatické skrytie vyskakovacieho okna',
        'continuous_duration' => 'Nepretržité trvanie',
        'captcha_provider' => 'Poskytovateľ CAPTCHA',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'Kľúč webu reCAPTCHA',
        'recaptcha_secret_key' => 'Tajný kľúč reCAPTCHA',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'Kľúč API HERE.com',
        'time_duration' => 'Časové trvanie',
        'offset' => 'Ofset',
        'geofence_device' => 'Zariadenie',
        'webhook_key' => 'Kľúč Webhook',
        'skip_blank_results' => 'Vynechať prázdne výsledky',
        'account_sid' => 'Účet SID',
        'speed_limit_tolerance' => 'Tolerancia obmedzenia rýchlosti',
        'started_at' => 'Doba spustenia',
        'ended_at' => 'Čas ukončenia',
        'region' => 'Región',
        'adapted' => 'Prispôsobené',
        'silent_notification' => 'Ignorovať upozornenia, ak sa opakujú v priebehu niekoľkých minút',
        'tomtom_key' => 'Kľúč TomTom',
        'authorized' => 'Autorizované',
        'email_verification' => 'Overenie e-mailom',
        'project_id' => 'ID projektu',
        'project_psw' => 'Heslo projektu',
        'verify_id' => 'Overiť id',
        'app_tracker_login' => 'Prihlásenie do aplikácie sledovania je povolené',
        'count' => 'Počítať',
    ),
    'same_protocol' => 'Zariadenia musia mať rovnaký protokol.',
    'lesser_than' => ':attribute musí byť menší ako :other',
    'contains' => ':attribute musí obsahovať :value .',
    'ip_port' => ':attribute nezodpovedá formátu IP:PORT',
    'required_unless' => 'Vyžaduje sa pole :attribute .',
    'translation_file' => 'Prekladový súbor neexistuje',
    'placeholder' => 'Chýba atribút &quot; :placeholder &quot;',
    'image_valid' => ':attribute musí byť obrázok.',
    'missing_configuration_value' => 'Chýba :attribute hodnota konfigurácie :attribute .',
    'sms_gateway_error' => 'Správu nie je možné odoslať. Chyba brány SMS.',
    'cant_configure_device' => 'Zariadenie sa nepodarilo nakonfigurovať',
    'field_does_not_exist' => 'Pole :attribute neexistuje',
    'unsupported_rules' => 'Nepodporované pravidlá:',
    'unsupported_parameterized_rules' => 'Nepodporované parametrizované pravidlá:',
    'cant_update_custom_field' => 'Nemožno aktualizovať pole „ :field “, pretože už existujú záznamy, ktoré používajú toto vlastné pole',
    'strong_password' => 'Silné heslo',
    'uppercase_character' => 'Vyžaduje sa veľké písmeno',
    'lowercase_character' => 'Vyžadujú sa malé písmená',
    'digit_character' => 'Vyžaduje sa znak číslice',
    'wrong_captcha' => 'Nesprávny obrázok CAPTCHA',
    'dimensions' => ':attribute má neplatné rozmery obrázka.',
    'mimetypes' => ':attribute musí byť súbor typu :values .',
    'in_array' => 'Pole :attribute v :other neexistuje.',
);