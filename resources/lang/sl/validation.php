<?php

return array(

    'accepted' => ':attribute je treba sprejeti.',
    'active_url' => ':attribute ni veljaven URL.',
    'after' => ':attribute mora biti datum za :date .',
    'alpha' => ':attribute lahko vsebuje samo črke.',
    'alpha_dash' => ':attribute lahko vsebuje samo črke, številke in pomišljaje.',
    'alpha_num' => ':attribute lahko vsebuje samo črke in številke.',
    'array' => ':attribute mora biti matrika.',
    'before' => ':attribute mora biti datum pred :date .',
    'between'  => array(
        'numeric' => ':attribute mora biti med :min in :max .',
        'file' => ':attribute mora biti med :min in :max kilobajtov.',
        'string' => ':attribute mora biti med znaki :min in :max',
        'array' => ':attribute mora imeti med :min in :max elementi.',
    ),
    'confirmed' => ':attribute se ne ujema.',
    'date' => ':attribute ni veljaven datum.',
    'date_format' => ':attribute se ne ujema z format :format .',
    'different' => ':attribute in :other morata razlikovati.',
    'digits' => ':attribute mora biti :digits števke.',
    'digits_between' => ':attribute mora biti med :min in :max številkami.',
    'email' => ':attribute mora biti veljaven e -poštni naslov.',
    'exists' => 'Izbrani :attribute je neveljaven.',
    'image' => ':attribute mora biti slika.',
    'in' => 'Izbrani :attribute je neveljaven.',
    'integer' => ':attribute mora biti celo število.',
    'ip' => ':attribute mora biti veljaven naslov IP.',
    'max'  => array(
        'numeric' => ':attribute ne sme biti večji od :max .',
        'file' => ':attribute ne sme biti večji od :max kilobajtov.',
        'string' => ':attribute ne sme biti večji od :max znakov.',
        'array' => ':attribute ne sme imeti več kot :max elementov.',
    ),
    'mimes' => ':attribute mora biti datoteka vrste :values .',
    'min'  => array(
        'numeric' => ':attribute mora biti najmanj :min .',
        'file' => ':attribute mora biti najmanj :min kilobajtov.',
        'string' => ':attribute mora biti sestavljen iz najmanj :min znakov.',
        'array' => ':attribute mora imeti vsaj :min elementov.',
    ),
    'not_in' => 'Izbrani :attribute je neveljaven.',
    'numeric' => ':attribute mora biti številka.',
    'regex' => 'Oblika :attribute neveljavna.',
    'required' => 'Polje :attribute je obvezno.',
    'required_if' => 'Polje :attribute je obvezno.',
    'required_with' => 'Polje :attribute je obvezno, kadar so prisotne :values',
    'required_with_all' => 'Polje :attribute je obvezno, kadar so prisotne :values',
    'required_without' => 'Polje :attribute je obvezno, kadar :values ni.',
    'required_without_all' => 'Polje :attribute je obvezno, če ni prisotnih :values',
    'same' => ':attribute in :other se morajo ujemati.',
    'size'  => array(
        'numeric' => ':attribute mora biti :size .',
        'file' => ':attribute mora biti :size kilobajtov.',
        'string' => ':attribute morajo biti znaki :size',
        'array' => ':attribute mora vsebovati elemente :size',
    ),
    'unique' => ':attribute je že sprejet.',
    'url' => 'Oblika :attribute neveljavna.',
    'array_max' => ':attribute max predmeti :max .',
    'lesser_than' => ':attribute mora biti manjši od :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'Sporočilo po meri',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Največja višina logotipa na prvi strani je 60 slikovnih pik.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon mora biti 16 x 16 slikovnih pik.',
        ),
    ),
    'attributes'  => array(
        'email' => 'E-naslov',
        'password' => 'Geslo',
        'password_confirmation' => 'Potrditev gesla',
        'remember_me' => 'Zapomni si me',
        'name' => 'Ime',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI ali identifikator naprave',
        'fuel_measurement_type' => 'Merjenje goriva',
        'fuel_cost' => 'Stroški goriva',
        'icon_id' => 'Ikona naprave',
        'active' => 'Aktivno',
        'polygon_color' => 'Barva ozadja',
        'devices' => 'Naprave',
        'geofences' => 'Geofence',
        'overspeed' => 'Previsoka hitrost',
        'fuel_consumption' => 'Poraba goriva',
        'description' => 'Opis',
        'map_icon_id' => 'Ikona označevalca',
        'coordinates' => 'Točka zemljevida',
        'date_from' => 'Datum, od',
        'date_to' => 'Datum do',
        'code' => 'Koda',
        'title' => 'Naslov',
        'note' => 'Vsebina',
        'path' => 'Mapa',
        'period_name' => 'Ime obdobja',
        'days' => 'Dnevi',
        'devices_limit' => 'Omejitev naprav',
        'trial' => 'Sojenje',
        'price' => 'Cena',
        'message' => 'Sporočilo',
        'tag' => 'Parameter',
        'timezone_id' => 'Časovni pas',
        'unit_of_distance' => 'Enota razdalje',
        'unit_of_capacity' => 'Enota zmogljivosti',
        'user' => 'Uporabnik',
        'group_id' => 'Skupina',
        'permission_to_add_devices' => 'Dodajte dve napravi',
        'unit_of_altitude' => 'Enota višine',
        'sms_gateway_url' => 'URL prehoda SMS',
        'mobile_phone' => 'Mobilni telefon',
        'permission_to_use_sms_gateway' => 'Prehod SMS',
        'loged_at' => 'Zadnja prijava',
        'manager_id' => 'Upravitelj',
        'sim_number' => 'Številka SIM',
        'device_model' => 'Model naprave',
        'rfid' => 'RFID',
        'phone' => 'Telefon',
        'device_id' => 'Naprava',
        'tag_value' => 'Vrednost parametra',
        'device_port' => 'Vrata za napravo',
        'event' => 'Dogodek',
        'port' => 'Pristanišče',
        'device_protocol' => 'Protokol naprave',
        'protocol' => 'Protokol',
        'sensor_name' => 'Ime senzorja',
        'sensor_type' => 'Tip senzorja',
        'sensor_template' => 'Predloga senzorja',
        'tag_name' => 'Ime parametra',
        'min_value' => 'Min. vrednost',
        'max_value' => 'Maks. vrednost',
        'on_value' => 'Vrednost ON',
        'off_value' => 'OFF vrednost',
        'shown_value_by' => 'Prikaži vrednost po',
        'full_tank_value' => 'Vrednost parametra',
        'formula' => 'Formula',
        'parameters' => 'Parametri',
        'full_tank' => 'Poln rezervoar v litrih/galonah',
        'fuel_tank_name' => 'Ime rezervoarja za gorivo',
        'odometer_value' => 'Vrednost',
        'odometer_value_by' => 'Odometer',
        'unit_of_measurement' => 'Merska enota',
        'plate_number' => 'Številka registrske tablice',
        'vin' => 'VIN',
        'registration_number' => 'Registracija/številka sredstva',
        'object_owner' => 'Lastnik/upravitelj objekta',
        'additional_notes' => 'Dodatne opombe',
        'expiration_date' => 'Rok trajanja',
        'days_to_remind' => 'Dnevi, ki jih je treba opomniti pred iztekom',
        'type' => 'Vrsta',
        'format' => 'Oblika',
        'show_addresses' => 'Pokaži naslove',
        'stops' => 'Ustavi',
        'speed_limit' => 'Omejitev hitrosti',
        'zones_instead' => 'Območja namesto naslovov',
        'daily' => 'Dnevno',
        'weekly' => 'Tedensko',
        'send_to_email' => 'Pošlji na e -pošto',
        'filter' => 'Filter',
        'status' => 'Stanje',
        'date' => 'Datum',
        'geofence_name' => 'Ime geografije',
        'tail_color' => 'Barva repa',
        'tail_length' => 'Dolžina repa',
        'engine_hours' => 'Ure motorja',
        'detect_engine' => 'Zaznaj VKLOP/IZKLOP motorja z',
        'min_moving_speed' => 'Min. hitrost premikanja v km/h',
        'min_fuel_fillings' => 'Min. razlika v gorivu za zaznavanje polnjenja goriva',
        'min_fuel_thefts' => 'Min. razlika v gorivu za odkrivanje tatvin goriva',
        'expiration_by' => 'Potek do',
        'interval' => 'Interval',
        'last_service' => 'Zadnji servis',
        'trigger_event_left' => 'Sproži dogodek, ko je levo',
        'current_odometer' => 'Trenutni števec kilometrov',
        'current_engine_hours' => 'Trenutne delovne ure motorja',
        'renew_after_expiration' => 'Obnovite po poteku',
        'sms_template_id' => 'Predloga SMS',
        'frequency' => 'Pogostost',
        'unit' => 'Enota',
        'noreply_email' => 'E -poštni naslov brez odgovora',
        'signature' => 'Podpis',
        'use_smtp_server' => 'Uporabite strežnik SMTP',
        'smtp_server_host' => 'Gostitelj strežnika SMTP',
        'smtp_server_port' => 'Vrata strežnika SMTP',
        'smtp_security' => 'Varnost SMTP',
        'smtp_username' => 'Uporabniško ime SMTP',
        'smtp_password' => 'Geslo SMTP',
        'from_name' => 'Od imena',
        'icons' => 'Ikone',
        'server_name' => 'Ime strežnika',
        'available_maps' => 'Razpoložljivi zemljevidi',
        'default_language' => 'Privzeti jezik',
        'default_timezone' => 'Privzeti časovni pas',
        'default_unit_of_distance' => 'Privzeta enota razdalje',
        'default_unit_of_capacity' => 'Privzeta enota zmogljivosti',
        'default_unit_of_altitude' => 'Privzeta enota nadmorske višine',
        'default_date_format' => 'Privzeta oblika datuma',
        'default_time_format' => 'Privzeta oblika zapisa časa',
        'default_map' => 'Privzeti zemljevid',
        'default_object_online_timeout' => 'Privzeta časovna omejitev spletnega objekta',
        'logo' => 'Logotip',
        'login_page_logo' => 'Logotip strani za prijavo',
        'frontpage_logo' => 'Logotip naslovne strani',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Dovoli registracijo uporabnikov',
        'default_maps' => 'Privzeti zemljevidi',
        'subscription_expiration_after_days' => 'Naročnina poteče po nekaj dneh',
        'gprs_template_id' => 'Predloga GPRS',
        'calibrations' => 'Kalibracije',
        'ftp_server' => 'FTP strežnik',
        'ftp_port' => 'Vrata FTP',
        'ftp_username' => 'Uporabniško ime za FTP',
        'ftp_password' => 'Geslo za FTP',
        'ftp_path' => 'Pot FTP',
        'period' => 'Obdobje',
        'hour' => 'Ura',
        'color' => 'Barva',
        'polyline' => 'Pot',
        'request_method' => 'Način zahteve',
        'authentication' => 'Preverjanje pristnosti',
        'username' => 'Uporabniško ime',
        'encoding' => 'Kodiranje',
        'time_adjustment' => 'Prilagoditev časa',
        'parameter' => 'Parameter',
        'export_type' => 'Vrsta izvoza',
        'groups' => 'Skupine',
        'file' => 'Mapa',
        'extra' => 'Dodatno',
        'parameter_value' => 'Vrednost parametra',
        'enable_plans' => 'Omogočite načrte',
        'payment_type' => 'Način plačila',
        'paypal_client_id' => 'ID odjemalca Paypal',
        'paypal_secret' => 'Skrivnost Paypala',
        'paypal_currency' => 'Paypal valuta',
        'paypal_payment_name' => 'Paypal ime plačila',
        'objects' => 'Predmeti',
        'duration_value' => 'Trajanje',
        'permissions' => 'Dovoljenja',
        'plan' => 'Načrt',
        'default_billing_plan' => 'Privzeti načrt obračunavanja',
        'sensor_group_id' => 'Skupina senzorjev',
        'daylight_saving_time' => 'Poletni čas',
        'phone_number' => 'Telefonska številka',
        'action' => 'Dejanje',
        'time' => 'Čas',
        'order' => 'Naročite',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Predpomnilnik geokoderja',
        'geocoder_cache_days' => 'Dnevi predpomnilnika geokoderja',
        'geocoder_cache_delete' => 'Izbrišite predpomnilnik geokoderja',
        'api_key' => 'Ključ API',
        'api_url' => 'URL API -ja',
        'map_center_latitude' => 'Zemljepisna širina zemljevida',
        'map_center_longitude' => 'Dolžina središča zemljevida',
        'map_zoom_level' => 'Raven povečave zemljevida',
        'dst_type' => 'Vrsta',
        'provider' => 'Ponudnik',
        'week_start_day' => 'Privzeti začetni dan koledarskega tedna',
        'ip' => 'IP',
        'gprs_templates_only' => 'Pokaži samo ukaze predlog GPRS',
        'select_all_objects' => 'Izberite vse predmete',
        'icon_type' => 'Vrsta ikone',
        'on_setflag_1' => 'Začetni lik',
        'on_setflag_2' => 'Količina znakov',
        'on_setflag_3' => 'Vrednost parametra',
        'domain' => 'Domena',
        'auth_id' => 'ID za preverjanje pristnosti',
        'auth_token' => 'Žeton za preverjanje pristnosti',
        'senders_phone' => 'Telefonska številka pošiljatelja',
        'database_clear_status' => 'Samodejno čiščenje zgodovine',
        'database_clear_days' => 'Dneve za ohranjanje',
        'ignition_detection' => 'Zaznavanje vžiga z',
        'here_map_id' => 'ID aplikacije HERE.com',
        'here_map_code' => 'Koda aplikacije HERE.com',
        'login_page_panel_background_color' => 'Barva ozadja podokna strani za prijavo',
        'login_page_panel_transparency' => 'Preglednost podokna strani za prijavo',
        'visible' => 'Vidno',
        'template_color' => 'Barva predloge',
        'background' => 'Ozadje',
        'login_page_text_color' => 'Barva besedila strani za prijavo',
        'login_page_background_color' => 'Barva ozadja strani za prijavo',
        'welcome_text' => 'Besedilo dobrodošlice',
        'bottom_text' => 'Spodnje besedilo',
        'apple_store_link' => 'Povezava do trgovine Apple',
        'google_play_link' => 'Povezava do Googla Play',
        'position' => 'Položaj',
        'stop_duration_longer_than' => 'Trajanje ustavitve dlje kot',
        'mapbox_access_token' => 'Žeton za dostop do MapBox',
        'flag' => 'Zastava',
        'shift_start' => 'Zagon premika',
        'shift_finish' => 'Zaključek premika',
        'shift_start_tolerance' => 'Toleranca pri zagonu premika',
        'shift_finish_tolerance' => 'Toleranca končnega premika',
        'excessive_exit' => 'Prekomerni izhod',
        'smtp_authentication' => 'Preverjanje pristnosti SMTP',
        'skip_calibration' => 'Izključite izračune iz območja umerjanja',
        'bing_maps_key' => 'Ključ zemljevidov Bing',
        'stripe_public_key' => 'STRIPE javni ključ',
        'stripe_secret_key' => 'Skrivni ključ STRIPE',
        'stripe_currency' => 'STRIPE valuta',
        'priority' => 'Prednost',
        'pickup_address' => 'Naslov prevzema',
        'delivery_address' => 'Dostavni naslov',
        'schedule' => 'Urnik',
        'sound_notification' => 'Zvočno obvestilo',
        'push_notification' => 'Potisno obvestilo',
        'email_notification' => 'Obvestilo po e -pošti',
        'sms_notification' => 'Obvestilo SMS',
        'webhook_notification' => 'Obvestilo Webhook',
        'offline_duration_longer_than' => 'Trajanje brez povezave je daljše od',
        'sms_gateway_headers' => 'Glave prehoda SMS',
        'forward' => 'Naprej',
        'by_status' => 'Po statusu',
        'icon_status_online' => 'Ikona stanja na spletu',
        'icon_status_offline' => 'Ikona stanja brez povezave',
        'icon_status_ack' => 'Ikona stanja ack',
        'icon_status_engine' => 'Ikona stanja motorja',
        'server_description' => 'Opis strežnika',
        'bypass_invalid' => 'Dovoli neveljavne koordinate',
        'installation_date' => 'Datum namestitve',
        'sim_activation_date' => 'Datum aktivacije kartice SIM',
        'sim_expiration_date' => 'Datum poteka SIM',
        'activation_date' => 'Datum aktivacije',
        'secret_key' => 'Skrivni ključ',
        'currency' => 'Valuta',
        'client_id' => 'ID odjemalca',
        'secret' => 'Skrivnost',
        'payment_name' => 'Ime plačila',
        'merchant_id' => 'ID trgovca',
        'public_key' => 'Javni ključ',
        'private_key' => 'Zasebni ključ',
        'braintree_plan_ids' => 'ID -ji načrta Braintree za strežniške načrte',
        'braintree_plan_explanation' => 'Na nadzorni plošči Braintree morate ustvariti načrt obračunavanja računa, tukaj izberite ID ustreznega načrta zaračunavanja na svojem strežniku.',
        'braintree_merchant_explanation' => 'Na nadzorni plošči Braintree morate ustvariti račun trgovca in tukaj vnesti ID.',
        'braintree_currency_match' => 'Valuta računa trgovca se mora ujemati z valuto načrta',
        'merchant_account_id' => 'ID računa trgovca',
        'master_key' => 'Glavni ključ',
        'token' => 'Žeton',
        'paydunya_currency_warning' => 'Edina razpoložljiva valuta je FCFA. Če ga konfigurirate, se prepričajte, da se vaša druga plačila ujemajo z isto valuto. V nasprotnem primeru bodo imeli uporabniki možnost kupiti isti načrt po različnih cenah.',
        'country' => 'Država',
        'merchant_account' => 'Račun trgovca',
        'origin_key' => 'Izvorni ključ',
        'test_config' => 'Preizkusite konfiguracijo',
        'environment' => 'Okolje',
        'three_letter_iso' => 'Tričrkovna oznaka valute ISO',
        'exact_time'  => array(
            'time' => 'čas',
        ),
        'hourly'  => array(
            'minute' => 'Minuto',
        ),
        'monthly'  => array(
            'day' => 'Dan',
            'time' => 'čas',
        ),
        'google_maps_key' => 'Ključ API -ja za Google Zemljevide',
        'maptiler_key' => 'Ključ MapTiler',
        'streetview_api' => 'API za ogled ulic',
        'streetview_key' => 'Ključ API -ja Streetview',
        'openmaptiles_url' => 'URL OpenMapTiles',
        'unit_cost' => 'Cena enote',
        'supplier' => 'Dobavitelj',
        'buyer' => 'Kupec',
        'expense_type' => 'Vrsta stroškov',
        'device_cameras_days' => 'Dnevi za shranjevanje slik fotoaparata naprave',
        'api_app_id' => 'ID aplikacije',
        'api_app_code' => 'Koda aplikacije',
        'api_app_secret' => 'Skrivnost aplikacije',
        'invoice_number' => 'Številka računa',
        'one_time_payment' => 'Enkratno plačilo',
        'sharing_id' => 'Skupna raba',
        'idle_duration_longer_than' => 'Trajanje mirovanja daljše od',
        'delete_after_expiration' => 'Izbriši po poteku',
        'sharing_email' => 'Obvestilo po e -pošti s povezavo za skupno rabo',
        'sharing_sms' => 'Obvestilo SMS s povezavo za skupno rabo',
        'sms' => 'SMS',
        'template' => 'Predloga',
        'commands' => 'Ukazi',
        'brand' => 'Proizvajalec naprave',
        'model' => 'Model',
        'apn_name' => 'Ime APN',
        'apn_username' => 'Uporabniško ime APN',
        'apn_password' => 'Geslo APN',
        'ignition_duration_longer_than' => 'Trajanje vžiga daljše od',
        'tasks' => 'Naloge',
        'id' => 'ID',
        'columns' => 'Stolpci',
        'called_at' => 'Pokličite na',
        'alert_type' => 'Vrsta opozorila',
        'response' => 'Odziv',
        'remarks' => 'Opombe',
        'client' => 'Odjemalec',
        'event_type' => 'Vrsta dogodka',
        'data_type' => 'Vrsta podatkov',
        'slug' => 'Polž',
        'required' => 'Obvezno',
        'validation' => 'Potrditev',
        'text' => 'Besedilo',
        'datetime' => 'Datum čas',
        'boolean' => 'Logično',
        'select' => 'Izberite',
        'multiselect' => 'Več izbir',
        'options' => 'Opcije',
        'option' => 'Možnost',
        'default' => 'Privzeto',
        'msisdn' => 'MSISDN',
        'notes' => 'Opombe',
        'skip_empty' => 'Preskoči prazno vrednost',
        'distance_limit' => 'Omejitev razdalje',
        'distance_tolerance' => 'Toleranca razdalje',
        'pois' => 'POI',
        'device_type_id' => 'Vrsta naprave',
        'custom_fields' => 'Polja po meri',
        'device_name' => 'Ime naprave',
        'auto_hide_notification' => 'Samodejno skrij pojavno okno',
        'continuous_duration' => 'Neprekinjeno trajanje',
        'captcha_provider' => 'Ponudnik CAPTCHA',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'Ključ spletnega mesta reCAPTCHA',
        'recaptcha_secret_key' => 'Tajni ključ reCAPTCHA',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'HERE.com ključ API',
        'time_duration' => 'Trajanje časa',
        'offset' => 'Odmik',
        'geofence_device' => 'Naprava',
        'webhook_key' => 'Ključ Webhook',
        'skip_blank_results' => 'Preskoči prazne rezultate',
        'account_sid' => 'SID računa',
        'speed_limit_tolerance' => 'Toleranca omejitve hitrosti',
        'started_at' => 'Začetni čas',
        'ended_at' => 'Končni čas',
        'region' => 'Regija',
        'adapted' => 'Prilagojeno',
        'silent_notification' => 'Prezri obvestila, če se ponovijo v nekaj minutah',
        'tomtom_key' => 'Ključ TomTom',
        'authorized' => 'Pooblaščeno',
        'email_verification' => 'Preverjanje po e-pošti',
        'project_id' => 'ID projekta',
        'project_psw' => 'Geslo projekta',
        'verify_id' => 'Preverite id',
        'app_tracker_login' => 'Prijava v aplikacijo Tracker je omogočena',
        'count' => 'štetje',
    ),
    'same_protocol' => 'Naprave morajo biti istega protokola.',
    'contains' => ':attribute mora vsebovati :value .',
    'ip_port' => ':attribute se ne ujema z obliko IP :PORT',
    'required_unless' => 'Polje :attribute je obvezno.',
    'translation_file' => 'Prevajalska datoteka ne obstaja',
    'placeholder' => 'Manjka atribut &quot; :placeholder',
    'image_valid' => ':attribute mora biti slika.',
    'missing_configuration_value' => 'Manjka :attribute vrednost konfiguracije atributa.',
    'sms_gateway_error' => 'Sporočila ni mogoče poslati. Napaka prehoda SMS.',
    'cant_configure_device' => 'Naprave ni bilo mogoče konfigurirati',
    'field_does_not_exist' => 'Polje :attribute ne obstaja',
    'unsupported_rules' => 'Nepodprta pravila:',
    'unsupported_parameterized_rules' => 'Nepodprta parametrizirana pravila:',
    'cant_update_custom_field' => ':field &quot; ni mogoče posodobiti, ker obstajajo obstoječi zapisi, ki uporabljajo to polje po meri',
    'strong_password' => 'Močno geslo',
    'uppercase_character' => 'Zahtevan je velik znak',
    'lowercase_character' => 'Potrebne so male črke',
    'digit_character' => 'Zahtevan je številski znak',
    'wrong_captcha' => 'Napačna koda',
    'dimensions' => ':attribute ima neveljavne dimenzije slike.',
    'mimetypes' => ':attribute mora biti datoteka vrste :values .',
    'in_array' => 'Polje :attribute ne obstaja v :other .',
);