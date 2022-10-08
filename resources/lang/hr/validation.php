<?php

return array(

    'accepted' => 'Moraju se prihvatiti :attribute .',
    'active_url' => 'The :attribute nije važeći URL.',
    'after' => ':attribute mora biti datum nakon :date .',
    'alpha' => ':attribute može sadržavati samo slova.',
    'alpha_dash' => ':attribute može sadržavati samo slova, brojeve i crtice.',
    'alpha_num' => ':attribute može sadržavati samo slova i brojeve.',
    'array' => ':attribute mora biti niz.',
    'before' => ':attribute mora biti datum prije :date .',
    'between'  => array(
        'numeric' => ':attribute mora biti između :min i :max .',
        'file' => ':attribute mora biti između :min i :max kilobajta.',
        'string' => ':attribute mora biti između :min i :max znakova.',
        'array' => ':attribute mora imati između :min i :max stavki.',
    ),
    'confirmed' => 'Potvrda :attribute ne odgovara.',
    'date' => ':attribute nije važeći datum.',
    'date_format' => 'The :attribute ne odgovara formatu :format .',
    'different' => ':attribute :other moraju biti različiti.',
    'digits' => ':attribute mora biti :digits znamenki.',
    'digits_between' => ':attribute mora biti između :min i :max znamenki.',
    'email' => ':attribute mora biti važeća adresa e-pošte.',
    'exists' => 'Odabrani :attribute nije važeći.',
    'image' => 'The :attribute mora biti slika.',
    'in' => 'Odabrani :attribute nije važeći.',
    'integer' => ':attribute mora biti cijeli broj.',
    'ip' => 'The :attribute mora biti važeća IP adresa.',
    'max'  => array(
        'numeric' => ':attribute ne smije biti veći od :max .',
        'file' => ':attribute ne smije biti veći od :max . Kilobajta.',
        'string' => ':attribute ne smije biti veći od :max znakova.',
        'array' => 'The :attribute ne smije imati više od :max stavki.',
    ),
    'mimes' => ':attribute mora biti datoteka tipa :values .',
    'min'  => array(
        'numeric' => ':attribute mora biti najmanje :min .',
        'file' => ':attribute mora biti najmanje :min kilobajta.',
        'string' => ':attribute mora biti najmanje :min znakova.',
        'array' => ':attribute mora imati barem :min stavke.',
    ),
    'not_in' => 'Odabrani :attribute nije važeći.',
    'numeric' => ':attribute mora biti broj.',
    'regex' => 'Format :attribute nije važeći.',
    'required' => 'Potrebno je :attribute polje :attribute .',
    'required_if' => 'Potrebno je :attribute polje :attribute .',
    'required_with' => 'Polje :attribute je obavezno kada :values .',
    'required_with_all' => 'Polje :attribute je obavezno kada :values .',
    'required_without' => 'Polje :attribute je potrebno kada :values nisu prisutne.',
    'required_without_all' => 'Polje :attribute je obavezno ako nijedna od :values nije prisutna.',
    'same' => ':attribute :other moraju odgovarati.',
    'size'  => array(
        'numeric' => ':attribute mora biti :size .',
        'file' => ':attribute mora biti :size kilobajta.',
        'string' => 'The :attribute mora biti :size znakova.',
        'array' => ':attribute mora sadržavati :size stavke :size .',
    ),
    'unique' => 'The :attribute je već snimljen.',
    'url' => 'Format :attribute nije važeći.',
    'array_max' => 'Stavke :max :attribute max :max .',
    'lesser_than' => ':attribute mora biti manji od :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'Prilagođene poruke',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Maksimalna visina logotipa naslovne stranice je 60 piksela.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon mora imati 16 x 16 piksela.',
        ),
    ),
    'attributes'  => array(
        'email' => 'E-mail',
        'password' => 'Lozinka',
        'password_confirmation' => 'Potvrda lozinke',
        'remember_me' => 'Zapamti me',
        'name' => 'Ime',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI ili identifikator uređaja',
        'fuel_measurement_type' => 'Mjerenje goriva',
        'fuel_cost' => 'Trošak goriva',
        'icon_id' => 'Ikona uređaja',
        'active' => 'Aktivan',
        'polygon_color' => 'Boja pozadine',
        'devices' => 'Uređaji',
        'geofences' => 'Geoograda',
        'overspeed' => 'Prevelike brzine',
        'fuel_consumption' => 'Potrošnja goriva',
        'description' => 'Opis',
        'map_icon_id' => 'Ikona oznake',
        'coordinates' => 'Točka karte',
        'date_from' => 'Datum od',
        'date_to' => 'Datum do',
        'code' => 'Kodirati',
        'title' => 'Titula',
        'note' => 'Sadržaj',
        'path' => 'Datoteka',
        'period_name' => 'Naziv razdoblja',
        'days' => 'Dana',
        'devices_limit' => 'Uređaji ograničavaju',
        'trial' => 'Suđenje',
        'price' => 'Cijena',
        'message' => 'Poruka',
        'tag' => 'Parametar',
        'timezone_id' => 'Vremenska zona',
        'unit_of_distance' => 'Jedinica udaljenosti',
        'unit_of_capacity' => 'Jedinica kapaciteta',
        'user' => 'Korisnik',
        'group_id' => 'Skupina',
        'permission_to_add_devices' => 'Dodaj dva uređaja',
        'unit_of_altitude' => 'Jedinica nadmorske visine',
        'sms_gateway_url' => 'SMS pristupni URL',
        'mobile_phone' => 'Mobitel',
        'permission_to_use_sms_gateway' => 'SMS pristupnik',
        'loged_at' => 'Zadnja prijava',
        'manager_id' => 'Menadžer',
        'sim_number' => 'SIM broj',
        'device_model' => 'Model uređaja',
        'rfid' => 'RFID',
        'phone' => 'Telefon',
        'device_id' => 'Uređaj',
        'tag_value' => 'Vrijednost parametra',
        'device_port' => 'Uređaj priključak',
        'event' => 'Događaj',
        'port' => 'Luka',
        'device_protocol' => 'Protokol uređaja',
        'protocol' => 'Protokol',
        'sensor_name' => 'Naziv senzora',
        'sensor_type' => 'Vrsta senzora',
        'sensor_template' => 'Predložak senzora',
        'tag_name' => 'Naziv parametra',
        'min_value' => 'Min. vrijednost',
        'max_value' => 'Maks. vrijednost',
        'on_value' => 'ON vrijednost',
        'off_value' => 'OFF vrijednost',
        'shown_value_by' => 'Prikaži vrijednost za',
        'full_tank_value' => 'Vrijednost parametra',
        'formula' => 'Formula',
        'parameters' => 'Parametri',
        'full_tank' => 'Pun spremnika u litrama / galonima',
        'fuel_tank_name' => 'Naziv spremnika goriva',
        'odometer_value' => 'Vrijednost',
        'odometer_value_by' => 'Mjerač za pređeni put',
        'unit_of_measurement' => 'Jedinica mjere',
        'plate_number' => 'Broj tablice',
        'vin' => 'VIN',
        'registration_number' => 'Registracija / broj imovine',
        'object_owner' => 'Vlasnik objekta / upravitelj',
        'additional_notes' => 'Dodatne napomene',
        'expiration_date' => 'Datum isteka roka trajanja',
        'days_to_remind' => 'Dani za podsjećanje prije isteka',
        'type' => 'Tip',
        'format' => 'Format',
        'show_addresses' => 'Prikaži adrese',
        'stops' => 'Zaustavlja',
        'speed_limit' => 'Ograničenje brzine',
        'zones_instead' => 'Zoni umjesto adresa',
        'daily' => 'Dnevno',
        'weekly' => 'Tjedni',
        'send_to_email' => 'Pošaljite e-poštu',
        'filter' => 'Filtar',
        'status' => 'Status',
        'date' => 'Datum',
        'geofence_name' => 'Geofence ime',
        'tail_color' => 'Boja repa',
        'tail_length' => 'Dužina repa',
        'engine_hours' => 'Radno vrijeme',
        'detect_engine' => 'Otkriti motor ON / OFF pomoću',
        'min_moving_speed' => 'Min. brzina kretanja u km / h',
        'min_fuel_fillings' => 'Min. razlika u gorivu za otkrivanje goriva',
        'min_fuel_thefts' => 'Min. Razlika u gorivu za otkrivanje krađe goriva',
        'expiration_by' => 'Istječe do',
        'interval' => 'Interval',
        'last_service' => 'Zadnja usluga',
        'trigger_event_left' => 'Trigger događaj kada je lijevo',
        'current_odometer' => 'Trenutni brojač kilometara',
        'current_engine_hours' => 'Trenutni sati motora',
        'renew_after_expiration' => 'Obnovi nakon isteka',
        'sms_template_id' => 'SMS predložak',
        'frequency' => 'Frekvencija',
        'unit' => 'Jedinica',
        'noreply_email' => 'Nema adrese e-pošte za odgovor',
        'signature' => 'Potpis',
        'use_smtp_server' => 'Koristite SMTP poslužitelj',
        'smtp_server_host' => 'Host SMTP poslužitelja',
        'smtp_server_port' => 'Priključak SMTP poslužitelja',
        'smtp_security' => 'SMTP sigurnost',
        'smtp_username' => 'SMTP korisničko ime',
        'smtp_password' => 'SMTP lozinku',
        'from_name' => 'Iz naziva',
        'icons' => 'Ikone',
        'server_name' => 'Naziv poslužitelja',
        'available_maps' => 'Dostupni zemljovidi',
        'default_language' => 'Zadani jezik',
        'default_timezone' => 'Zadana vremenska zona',
        'default_unit_of_distance' => 'Zadana jedinica udaljenosti',
        'default_unit_of_capacity' => 'Zadana jedinica kapaciteta',
        'default_unit_of_altitude' => 'Zadana jedinica visine',
        'default_date_format' => 'Zadani format datuma',
        'default_time_format' => 'Zadani format vremena',
        'default_map' => 'Zadana karta',
        'default_object_online_timeout' => 'Zadani online vremenski prekidni objekt',
        'logo' => 'Logo',
        'login_page_logo' => 'Logotip stranice za prijavu',
        'frontpage_logo' => 'Naslovnica logotip',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Dopusti registraciju korisnika',
        'default_maps' => 'Zadane karte',
        'subscription_expiration_after_days' => 'Isteka pretplate nakon dana',
        'gprs_template_id' => 'GPRS predložak',
        'calibrations' => 'Umjeravanja',
        'ftp_server' => 'FTP poslužitelj',
        'ftp_port' => 'FTP priključak',
        'ftp_username' => 'FTP korisničko ime',
        'ftp_password' => 'FTP lozinku',
        'ftp_path' => 'FTP put',
        'period' => 'Razdoblje',
        'hour' => 'Sat',
        'color' => 'Boja',
        'polyline' => 'Put',
        'request_method' => 'Način zahtjeva',
        'authentication' => 'Ovjera',
        'username' => 'Korisničko ime',
        'encoding' => 'Kodiranje',
        'time_adjustment' => 'Podešavanje vremena',
        'parameter' => 'Parametar',
        'export_type' => 'Vrsta izvoza',
        'groups' => 'Grupe',
        'file' => 'Datoteka',
        'extra' => 'Ekstra',
        'parameter_value' => 'Vrijednost parametra',
        'enable_plans' => 'Omogući planove',
        'payment_type' => 'Način plaćanja',
        'paypal_client_id' => 'ID klijenta Paypal',
        'paypal_secret' => 'Paypal tajna',
        'paypal_currency' => 'Paypal valuta',
        'paypal_payment_name' => 'Paypal ime plaćanja',
        'objects' => 'Objekti',
        'duration_value' => 'Trajanje',
        'permissions' => 'Dozvole',
        'plan' => 'Plan',
        'default_billing_plan' => 'Zadani plan naplate',
        'sensor_group_id' => 'Senzorska skupina',
        'daylight_saving_time' => 'Ljetno vrijeme',
        'phone_number' => 'Broj telefona',
        'action' => 'Akcijski',
        'time' => 'Vrijeme',
        'order' => 'Narudžba',
        'geocoder_api' => 'API Geocoder',
        'geocoder_cache' => 'Geokoder predmemorija',
        'geocoder_cache_days' => 'Geokoderov dani predmemorije',
        'geocoder_cache_delete' => 'Izbriši predmemoriju geokodera',
        'api_key' => 'API ključ',
        'api_url' => 'API url',
        'map_center_latitude' => 'Zemljopisna širina karte',
        'map_center_longitude' => 'Duljina središta karte',
        'map_zoom_level' => 'Razina zumiranja karte',
        'dst_type' => 'Tip',
        'provider' => 'Davatelj',
        'week_start_day' => 'Početni dan zadanog tjedna kalendara',
        'ip' => 'IP',
        'gprs_templates_only' => 'Prikaži samo naredbe GPRS predloška',
        'select_all_objects' => 'Odaberite sve objekte',
        'icon_type' => 'Vrsta ikone',
        'on_setflag_1' => 'Polazni znak',
        'on_setflag_2' => 'Broj znakova',
        'on_setflag_3' => 'Vrijednost parametra',
        'domain' => 'Domena',
        'auth_id' => 'ID autentičnosti',
        'auth_token' => 'Token za potvrdu',
        'senders_phone' => 'Telefonski broj pošiljatelja',
        'database_clear_status' => 'Automatsko čišćenje povijesti',
        'database_clear_days' => 'Dani za čuvanje',
        'ignition_detection' => 'Otkrivanje paljenja od strane',
        'here_map_id' => 'ID aplikacije HERE.com',
        'here_map_code' => 'Kôd aplikacije HERE.com',
        'login_page_panel_background_color' => 'Boja pozadine ploče stranice za prijavu',
        'login_page_panel_transparency' => 'Transparentnost ploče stranice za prijavu',
        'visible' => 'Vidljiv',
        'template_color' => 'Boja predloška',
        'background' => 'Pozadina',
        'login_page_text_color' => 'Boja teksta stranica za prijavu',
        'login_page_background_color' => 'Boja pozadine stranice za prijavu',
        'welcome_text' => 'Tekst dobrodošlice',
        'bottom_text' => 'Donji tekst',
        'apple_store_link' => 'Veza Apple trgovine',
        'google_play_link' => 'Vezu za Google Play',
        'position' => 'Položaj',
        'stop_duration_longer_than' => 'Trajanje trajanja dulje od',
        'mapbox_access_token' => 'MapBox pristupni token',
        'flag' => 'Zastava',
        'shift_start' => 'Početak pomaka',
        'shift_finish' => 'Prebacivanje stupnja prijenosa',
        'shift_start_tolerance' => 'Tolerancija početka uklopa',
        'shift_finish_tolerance' => 'Tolerancija preostalog kraja',
        'excessive_exit' => 'Prekomjerni izlaz',
        'smtp_authentication' => 'SMTP autentifikacija',
        'skip_calibration' => 'Isključite izračune izvan raspona kalibracije',
        'bing_maps_key' => 'Bing karte ključ',
        'stripe_public_key' => 'STRIPE javni ključ',
        'stripe_secret_key' => 'STRIPE tajni ključ',
        'stripe_currency' => 'STRIPE valutu',
        'priority' => 'Prioritet',
        'pickup_address' => 'Adresa podizanja',
        'delivery_address' => 'Adresa dostave',
        'schedule' => 'Raspored',
        'sound_notification' => 'Zvučna obavijest',
        'push_notification' => 'Pritisnite obavijest',
        'email_notification' => 'Obavijest e-poštom',
        'sms_notification' => 'SMS obavijest',
        'webhook_notification' => 'Obavijest Webhook',
        'offline_duration_longer_than' => 'Trajanje izvan mreže duže od',
        'sms_gateway_headers' => 'SMS zaglavlja za pristupnika',
        'forward' => 'Naprijed',
        'by_status' => 'Po statusu',
        'icon_status_online' => 'Ikona statusa na mreži',
        'icon_status_offline' => 'Ikona izvanmrežnog statusa',
        'icon_status_ack' => 'Ikona statusa Ack',
        'icon_status_engine' => 'Ikona stanja motora',
        'server_description' => 'Opis poslužitelja',
        'bypass_invalid' => 'Dopusti nevažeće koordinate',
        'installation_date' => 'Datum instalacije',
        'sim_activation_date' => 'Datum aktivacije SIM-a',
        'sim_expiration_date' => 'Datum isteka SIM-a',
        'activation_date' => 'Datum aktivacije',
        'secret_key' => 'Tajni ključ',
        'currency' => 'Valuta',
        'client_id' => 'ID klijenta',
        'secret' => 'Tajna',
        'payment_name' => 'Naziv plaćanja',
        'merchant_id' => 'ID trgovca',
        'public_key' => 'Javni ključ',
        'private_key' => 'Privatni ključ',
        'braintree_plan_ids' => 'Braintree planovi za planove poslužitelja',
        'braintree_plan_explanation' => 'Morate stvoriti plan naplate u upravljačkoj ploči Braintree, odaberite ID ovdje odgovarajući plan na vašem poslužitelju.',
        'braintree_merchant_explanation' => 'Morate stvoriti račun trgovca na upravljačkoj ploči Braintree i ovdje unijeti ID.',
        'braintree_currency_match' => 'Valuta trgovačkog računa mora odgovarati valuti plana',
        'merchant_account_id' => 'ID trgovačkog računa',
        'master_key' => 'Glavni ključ',
        'token' => 'žeton',
        'paydunya_currency_warning' => 'Jedina dostupna valuta je FCFA. Ako ga konfigurirate, provjerite odgovaraju li druge uplate istoj valuti. Inače će korisnici moći kupiti isti plan s različitim cijenama.',
        'country' => 'Zemlja',
        'merchant_account' => 'Trgovački račun',
        'origin_key' => 'Ključ porijekla',
        'test_config' => 'Testirajte konfiguraciju',
        'environment' => 'Okolina',
        'three_letter_iso' => 'Troslovni kod valute ISO',
        'exact_time'  => array(
            'time' => 'Vrijeme',
        ),
        'hourly'  => array(
            'minute' => 'Minuta',
        ),
        'monthly'  => array(
            'day' => 'Dan',
            'time' => 'Vrijeme',
        ),
        'google_maps_key' => 'API ključ za Google karte',
        'maptiler_key' => 'Tipka MapTiler',
        'streetview_api' => 'API za Streetview',
        'streetview_key' => 'API ključ za Streetview',
        'openmaptiles_url' => 'OpenMapTiles Url',
        'unit_cost' => 'Jedinični trošak',
        'supplier' => 'Dobavljač',
        'buyer' => 'Kupac',
        'expense_type' => 'Vrsta rashoda',
        'device_cameras_days' => 'Dani za čuvanje slika s kamere na uređaju',
        'api_app_id' => 'ID aplikacije',
        'api_app_code' => 'Kôd aplikacije',
        'api_app_secret' => 'App Secret',
        'invoice_number' => 'Broj fakture',
        'one_time_payment' => 'Jednokratna uplata',
        'sharing_id' => 'Dijeljenje',
        'idle_duration_longer_than' => 'Trajanje u praznom hodu duže od',
        'delete_after_expiration' => 'Izbrišite nakon isteka',
        'sharing_email' => 'Obavijest e-poštom s vezom za dijeljenje',
        'sharing_sms' => 'SMS obavijest s vezom za dijeljenje',
        'sms' => 'SMS',
        'template' => 'Predložak',
        'commands' => 'Naredbe',
        'brand' => 'Proizvođač uređaja',
        'model' => 'Model',
        'apn_name' => 'Naziv APN-a',
        'apn_username' => 'Korisničko ime za APN',
        'apn_password' => 'APN lozinka',
        'ignition_duration_longer_than' => 'Trajanje paljenja duže od',
        'tasks' => 'Zadaci',
        'id' => 'Iskaznica',
        'columns' => 'Kolumne',
        'called_at' => 'Zvati na',
        'alert_type' => 'Vrsta upozorenja',
        'response' => 'Odgovor',
        'remarks' => 'Opaske',
        'client' => 'Klijent',
        'event_type' => 'Vrsta događaja',
        'data_type' => 'Vrsta podataka',
        'slug' => 'žeton',
        'required' => 'Potreban',
        'validation' => 'Potvrđivanje',
        'text' => 'Tekst',
        'datetime' => 'Datum vrijeme',
        'boolean' => 'Booleova',
        'select' => 'Odaberi',
        'multiselect' => 'Višestruki',
        'options' => 'Opcije',
        'option' => 'Opcija',
        'default' => 'Zadano',
        'msisdn' => 'MSISDN',
        'notes' => 'Bilješke',
        'skip_empty' => 'Preskoči praznu vrijednost',
        'distance_limit' => 'Ograničenje udaljenosti',
        'distance_tolerance' => 'Tolerancija udaljenosti',
        'pois' => 'POI',
        'device_type_id' => 'Tip uređaja',
        'custom_fields' => 'Prilagodljiva Polja',
        'device_name' => 'Naziv uređaja',
        'auto_hide_notification' => 'Automatski sakrij skočni prozor',
        'continuous_duration' => 'Neprekidno trajanje',
        'captcha_provider' => 'Davatelj usluge CAPTCHA',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'Ključ mjesta reCAPTCHA',
        'recaptcha_secret_key' => 'Tajni ključ reCAPTCHA',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'API ključ HERE.com',
        'time_duration' => 'Vremensko trajanje',
        'offset' => 'Pomak',
        'geofence_device' => 'Uređaj',
        'webhook_key' => 'Ključ Webhook',
        'skip_blank_results' => 'Preskočite prazne rezultate',
        'account_sid' => 'SID računa',
        'speed_limit_tolerance' => 'Tolerancija ograničenja brzine',
        'started_at' => 'Vrijeme početka',
        'ended_at' => 'Vrijeme završetka',
        'region' => 'Regija',
        'adapted' => 'Prilagođeno',
        'silent_notification' => 'Zanemarite obavijesti ako se ponavljaju za nekoliko minuta',
        'tomtom_key' => 'TomTom ključ',
        'authorized' => 'Ovlašteni',
        'email_verification' => 'Provjera e-pošte',
        'project_id' => 'ID projekta',
        'project_psw' => 'Lozinka projekta',
        'verify_id' => 'Potvrdite id',
        'app_tracker_login' => 'Omogućena je prijava u aplikaciju Tracker',
        'count' => 'Računati',
    ),
    'same_protocol' => 'Uređaji moraju imati isti protokol.',
    'contains' => ':attribute mora sadržavati :value .',
    'ip_port' => ':attribute ne odgovara formatu IP:PORT',
    'required_unless' => 'Polje :attribute je obavezno.',
    'translation_file' => 'Datoteka s prijevodom ne postoji',
    'placeholder' => 'Atribut &quot; :placeholder &quot; nedostaje',
    'image_valid' => ':attribute mora biti slika.',
    'missing_configuration_value' => 'Nedostaje :attribute vrijednost konfiguracije :attribute .',
    'sms_gateway_error' => 'Poruka se ne može poslati. Pogreška SMS prolaza.',
    'cant_configure_device' => 'Nije moguće konfigurirati uređaj',
    'field_does_not_exist' => 'Polje :attribute ne postoji',
    'unsupported_rules' => 'Nepodržana pravila:',
    'unsupported_parameterized_rules' => 'Nepodržana parametrizirana pravila:',
    'cant_update_custom_field' => 'Nije moguće ažurirati polje &quot; :field &quot; jer postoje postojeći zapisi koji koriste ovo prilagođeno polje',
    'strong_password' => 'Jaka lozinka',
    'uppercase_character' => 'Potreban je veliki znak',
    'lowercase_character' => 'Potreban je mali znak',
    'digit_character' => 'Potreban je znamenkasti znak',
    'wrong_captcha' => 'Pogrešna CAPTCHA',
    'dimensions' => ':attribute ima nevažeće dimenzije slike.',
    'mimetypes' => ':attribute mora biti datoteka tipa :values .',
    'in_array' => 'Polje :attribute ne postoji u :other .',
);