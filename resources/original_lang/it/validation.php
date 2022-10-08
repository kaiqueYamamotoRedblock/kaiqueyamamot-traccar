<?php

return array(

    'accepted' => 'L :attribute deve essere accettato.',
    'active_url' => 'L\' :attribute non è un URL valido.',
    'after' => 'L\' :attribute deve essere una data successiva :date.',
    'alpha' => 'L\' :attribute può contenere solo lettere.',
    'alpha_dash' => 'L\' :attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num' => 'L\' :attribute può contenere solo lettere e numeri.',
    'array' => 'L\' :attribute deve essere un insieme.',
    'before' => 'L\' :attribute deve essere una data antecedente :date.',
    'between'  => array(
        'numeric' => 'L\' :attribute deve essere compreso tra :min e :max.',
        'file' => 'L\' :attribute deve essere compreso tra :min e :max KB.',
        'string' => 'L\' :attribute deve essere compreso tra :min e :max personaggi.',
        'array' => 'L\' :attribute deve avere tra :min e :max elementi.',
    ),
    'confirmed' => 'L\' :attribute la conferma non corrisponde.',
    'date' => 'L\' :attribute non è una data valida.',
    'date_format' => 'L\' :attribute non corrisponde al formato :format.',
    'different' => 'L\' :attribute e :altri devono essere diversi.',
    'digits' => 'L\' :attribute deve essere :digita cifre.',
    'digits_between' => 'L\' :attribute deve essere fra :min e :max cifre.',
    'email' => ' :attribute deve essere un indirizzo email valido.',
    'exists' => 'Il selezionato :attribute è invalido.',
    'image' => 'L\' :attribute deve essere un\'immagine.',
    'in' => 'Il selezionato :attribute è invalido.',
    'integer' => 'L\' :attribute deve essere un numero intero.',
    'ip' => 'L\' :attribute deve essere un indirizzo IP valido.',
    'max'  => array(
        'numeric' => 'L\' :attribute non può essere superiore :max.',
        'file' => 'L\' :attribute non può essere superiore :max kilobyte.',
        'string' => 'L\' :attribute non può essere superiore :max personaggi.',
        'array' => 'L\' :attribute non possono avere più di :max elementi.',
    ),
    'mimes' => 'L\' :attribute deve essere un file di tipo: :valore.',
    'min'  => array(
        'numeric' => 'L\' :attribute deve essere almeno :min.',
        'file' => 'L\' :attribute deve essere almeno :min KB.',
        'string' => 'L\' :attribute deve essere almeno :min personaggi.',
        'array' => 'L\' :attribute deve essere almeno :min elementi.',
    ),
    'not_in' => 'Il selezionato :attribute non è valido.',
    'numeric' => 'L\' :attribute deve essere un numero.',
    'regex' => 'L\' :attribute formato non valido.',
    'required' => 'L\' :attribute è un campo obbligatorio.',
    'required_if' => 'L\' :attribute è un campo obbligatorio quando altro è il :valore.',
    'required_with' => 'L\' :attribute è un campo obbligatorio quando :valore è presente.',
    'required_with_all' => 'L\' :attribute è un campo obbligatorio quando :valore è presente.',
    'required_without' => 'L\' :attribute è un campo obbligatorio quando :valore non è presente.',
    'required_without_all' => 'L\' :attribute è un campo obbligatorio quando nessuno dei :valori sono presenti.',
    'same' => 'L\' :attribute e :altro dispositivo deve combaciare.',
    'size'  => array(
        'numeric' => 'L\' :attribute deve essere :dimensione.',
        'file' => 'L\' :attribute deve essere :dimensione KB.',
        'string' => 'L\' :attribute deve essere :dimensione personaggi.',
        'array' => 'L\' :attribute deve contenere :dimensione elementi.',
    ),
    'unique' => 'L\' :attribute è già stata presa.',
    'url' => 'L\' :attribute formato non valido.',
    'array_max' => 'L\' :attribute articoli max :max.',
    'lesser_than' => ':attribute deve essere minore di :altro',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'messaggio personalizzato',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'L&#39;altezza massima del logo in prima pagina è 60 px.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon deve essere 16px per 16px.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Conferma password',
        'remember_me' => 'Ricordami',
        'name' => 'Nome',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI o identificatore dispositivo',
        'fuel_measurement_type' => 'Misurazione del carburante',
        'fuel_cost' => 'Costo del carburante',
        'icon_id' => 'Icona del dispositivo',
        'active' => 'Attivo',
        'polygon_color' => 'Colore di sfondo',
        'devices' => 'Dispositivi',
        'geofences' => 'Geofences',
        'overspeed' => 'Velocità eccessiva',
        'fuel_consumption' => 'Consumo di carburante',
        'description' => 'Descrizione',
        'map_icon_id' => 'Icona',
        'coordinates' => 'Punto mappa',
        'date_from' => 'Dati da',
        'date_to' => 'Dati da',
        'code' => 'Codice',
        'title' => 'Titolo',
        'note' => 'Contenuto',
        'path' => 'File',
        'period_name' => 'Nome periodo',
        'days' => 'Giorni',
        'devices_limit' => 'Limite dispositivi',
        'trial' => 'Processo',
        'price' => 'Prezzo',
        'message' => 'Messaggio',
        'tag' => 'Parametro',
        'timezone_id' => 'time zone',
        'unit_of_distance' => 'Unità di distanza',
        'unit_of_capacity' => 'Unità di capacità',
        'unit_of_altitude' => 'Unità di altitudine',
        'icons' => 'Icone',
        'sms_gateway_url' => 'SMS gateway URL',
        'mobile_phone' => 'numero cellulare',
        'sim_number' => 'Numero di SIM',
        'device_model' => 'Modello di dispositivo',
        'group_id' => 'Gruppo',
        'rfid' => 'RFID',
        'phone' => 'Telefono',
        'device_id' => 'Dispositivo',
        'tag_value' => 'Il valore del parametro',
        'device_port' => 'Porta del dispositivo',
        'event' => 'Evento',
        'port' => 'Porta',
        'device_protocol' => 'Protocollo del dispositivo',
        'protocol' => 'Protocollo',
        'sensor_name' => 'Nome sensoree',
        'sensor_type' => 'Tipo di sensore',
        'sensor_template' => 'Modello di sensore',
        'tag_name' => 'Nome parametro',
        'min_value' => 'Min. valore',
        'max_value' => 'Max. valore',
        'on_value' => 'Valore ON',
        'off_value' => 'Valore OFF',
        'shown_value_by' => 'Mostra valore',
        'full_tank_value' => 'Il valore del parametro',
        'formula' => 'Formula',
        'parameters' => 'Parametri',
        'full_tank' => 'Serbatoio pieno in litri/galloni',
        'fuel_tank_name' => 'nome serbatoio',
        'odometer_value' => 'Valore',
        'odometer_value_by' => 'Contachilometri',
        'unit_of_measurement' => 'Unità di misura',
        'plate_number' => 'Targa',
        'vin' => 'Telaio VIN',
        'registration_number' => 'Registrazione/Numero Asset',
        'object_owner' => 'Proprietario del veicolo/',
        'additional_notes' => 'Note aggiuntive',
        'expiration_date' => 'Data di scadenza',
        'days_to_remind' => 'avviso di scadenza in giorni',
        'type' => 'Tipo',
        'format' => 'Formato',
        'show_addresses' => 'Mostra indirizzi',
        'stops' => 'Fermato',
        'speed_limit' => 'Limite di velocità',
        'zones_instead' => 'Zone invece di indirizzi',
        'daily' => 'Quotidiano',
        'weekly' => 'Settimanale',
        'send_to_email' => 'Invia per e-mail',
        'filter' => 'Filtro',
        'status' => 'Stato',
        'date' => 'Data',
        'geofence_name' => 'Nome Geofence',
        'tail_color' => 'Colore del traffico',
        'tail_length' => 'Lunghezza del traffico',
        'engine_hours' => 'Ore del motore',
        'detect_engine' => 'Rileva motore ON/OFF',
        'min_moving_speed' => 'Min. velocità di movimento in km/h',
        'min_fuel_fillings' => 'Min. differenza di carburante per rilevare riempimento',
        'min_fuel_thefts' => 'Min. differenza di carburante per rilevare furti',
        'expiration_by' => 'Scadenza per',
        'interval' => 'Intervallo',
        'last_service' => 'Ultimo servizio',
        'trigger_event_left' => 'evento occorso',
        'current_odometer' => 'chilometri attuali',
        'current_engine_hours' => 'Ore di lavoro attuali',
        'renew_after_expiration' => 'Rinnovare dopo la scadenza',
        'sms_template_id' => 'Modello di SMS',
        'frequency' => 'Frequenza',
        'unit' => 'Unità',
        'noreply_email' => 'Nessun indirizzo email di risposta',
        'signature' => 'Firma',
        'use_smtp_server' => 'Utilizza server SMTP',
        'smtp_server_host' => 'Host del server SMTP',
        'smtp_server_port' => 'Porta del server SMTP',
        'smtp_security' => 'Sicurezza SMTP',
        'smtp_username' => 'Nome utente SMTP',
        'smtp_password' => 'Password SMTP',
        'from_name' => 'Dal nome',
        'server_name' => 'Nome del server',
        'available_maps' => 'Mappe disponibili',
        'default_language' => 'Lingua di Default',
        'default_timezone' => 'Fuso orario predefinito',
        'default_unit_of_distance' => 'Unità predefinita di distanza',
        'default_unit_of_capacity' => 'Unità predefinita della capacità',
        'default_unit_of_altitude' => 'Unità predefinita di altitudine',
        'default_date_format' => 'Formato di data predefinito',
        'default_time_format' => 'Formato ora predefinito',
        'default_map' => 'Mappa predefinita',
        'default_object_online_timeout' => 'tempo predefinito di localizzatore in linea',
        'logo' => 'Logo',
        'login_page_logo' => 'Entra logo pagina ',
        'frontpage_logo' => 'Frontpage logo',
        'favicon' => 'Icone favorite',
        'allow_users_registration' => 'Consenti registrazione utenti',
        'default_maps' => 'Mappe predefinite',
        'subscription_expiration_after_days' => 'Scadenza abbonamento giorni',
        'gprs_template_id' => 'Modello GPRS',
        'calibrations' => 'Calibrazioni',
        'ftp_server' => 'FTP server',
        'ftp_port' => 'FTP porta',
        'ftp_username' => 'FTP nome utente',
        'ftp_password' => 'FTP password',
        'ftp_path' => 'FTP percorso',
        'period' => 'Periodo',
        'hour' => 'Ora',
        'color' => 'Colore',
        'polyline' => 'Percorso',
        'request_method' => 'Metodo di richiesta',
        'authentication' => 'Autenticazione',
        'username' => 'Nome utente',
        'encoding' => 'Codifica',
        'time_adjustment' => 'Regolazione del tempo',
        'parameter' => 'Parametro',
        'export_type' => 'Tipo di esportazione',
        'groups' => 'Gruppi',
        'file' => 'File',
        'extra' => 'Extra',
        'parameter_value' => 'Il valore del parametro',
        'enable_plans' => 'Abilita piani',
        'payment_type' => 'Modalità di pagamento',
        'paypal_client_id' => 'Paypal cliente ID',
        'paypal_secret' => 'Paypal segreto',
        'paypal_currency' => 'Valuta Paypal',
        'paypal_payment_name' => 'Paypal nome pagamento',
        'objects' => 'Oggetti',
        'duration_value' => 'Durata',
        'permissions' => 'Permessi',
        'plan' => 'Piano',
        'default_billing_plan' => 'Piano di fatturazione predefinito',
        'sensor_group_id' => 'Gruppo sensore',
        'daylight_saving_time' => 'Ora legale',
        'phone_number' => 'Numero di telefono',
        'action' => 'Azione',
        'time' => 'Tempo',
        'order' => 'Ordine',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'Delete geocoder cache',
        'api_key' => 'API key',
        'api_url' => 'API url',
        'map_center_latitude' => 'Mappa centro di latitudine',
        'map_center_longitude' => 'Mappa Centro longitudine',
        'map_zoom_level' => 'Mappa livello di zoom',
        'dst_type' => 'Digitare',
        'provider' => 'Provider',
        'week_start_day' => 'Calendario predefinito giorno di inizio della settimana',
        'ip' => 'IP',
        'gprs_templates_only' => 'Mostra solo i modelli GPRS',
        'select_all_objects' => 'Selezionare tutti gli oggetti',
        'icon_type' => 'tipo icone',
        'on_setflag_1' => 'Carattere iniziale',
        'on_setflag_2' => 'numero di caratteri',
        'on_setflag_3' => 'Valore dei parametri',
        'domain' => 'Domain',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'Invia numero telefono',
        'database_clear_status' => 'cancello il database percorsi',
        'database_clear_days' => 'Giorni di conservazione',
        'ignition_detection' => 'Rilevamento accensione',
        'template_color' => 'Colore del modello',
        'background' => 'Sfondo',
        'login_page_text_color' => 'Colore di testo della pagina di accesso',
        'login_page_background_color' => 'Colore di sfondo della pagina di accesso',
        'welcome_text' => 'Testo di benvenuto',
        'bottom_text' => 'Testo in basso',
        'apple_store_link' => 'Collegamento AppleStore',
        'google_play_link' => 'Collegamento GooglePlay',
        'here_map_id' => 'ID dell\'applicazione HERE.com',
        'here_map_code' => 'Codice dell\'applicazione HERE.com',
        'login_page_panel_background_color' => 'Colore di sfondo del pannello di pagina di accesso',
        'login_page_panel_transparency' => 'Transparenza del pannello pagina di accesso',
        'visible' => 'Visibile',
        'user' => 'Utente',
        'permission_to_add_devices' => 'Aggiungi dispositivi uno due',
        'permission_to_use_sms_gateway' => 'Gateway SMS',
        'loged_at' => 'Ultimo accesso',
        'manager_id' => 'Manager',
        'position' => 'Posizione',
        'stop_duration_longer_than' => 'Termina la durata più a lungo di',
        'mapbox_access_token' => 'Token di accesso MapBox',
        'flag' => 'Bandiera',
        'shift_start' => 'Inizio turno',
        'shift_finish' => 'Shift finish',
        'shift_start_tolerance' => 'Shift start tolerance',
        'shift_finish_tolerance' => 'Shift finish tolerance',
        'excessive_exit' => 'Uscita eccessiva',
        'smtp_authentication' => 'Autenticazione SMTP',
        'skip_calibration' => 'Escludere i calcoli dall&#39;intervallo di calibrazione',
        'bing_maps_key' => 'Chiave delle mappe di Bing',
        'stripe_public_key' => 'STRIPE chiave pubblica',
        'stripe_secret_key' => 'STRIPE chiave segreta',
        'stripe_currency' => 'Valuta STRIPE',
        'priority' => 'Priorità',
        'pickup_address' => 'Indirizzo di ritiro',
        'delivery_address' => 'Indirizzo di consegna',
        'schedule' => 'Programma',
        'sound_notification' => 'Notifica sonora',
        'push_notification' => 'Notifica push',
        'email_notification' => 'Notifica per email',
        'sms_notification' => 'Notifica SMS',
        'webhook_notification' => 'Notifica Webhook',
        'offline_duration_longer_than' => 'Durata offline più lunga di',
        'sms_gateway_headers' => 'Intestazioni gateway SMS',
        'forward' => 'Inoltrare',
        'by_status' => 'Per stato',
        'icon_status_online' => 'Icona di stato online',
        'icon_status_offline' => 'Icona di stato offline',
        'icon_status_ack' => 'Icona di stato Ack',
        'icon_status_engine' => 'Icona di stato del motore',
        'server_description' => 'Descrizione del server',
        'bypass_invalid' => 'Consenti le coordinate non valide',
        'installation_date' => 'Data di installazione',
        'sim_activation_date' => 'Data di attivazione della SIM',
        'sim_expiration_date' => 'Data di scadenza della SIM',
        'activation_date' => 'Data di attivazione',
        'secret_key' => 'Chiave segreta',
        'currency' => 'Moneta',
        'client_id' => 'Identificativo cliente',
        'secret' => 'Segreto',
        'payment_name' => 'Nome di pagamento',
        'merchant_id' => 'ID Commerciante',
        'public_key' => 'Chiave pubblica',
        'private_key' => 'Chiave privata',
        'braintree_plan_ids' => 'ID piano Braintree per piani server',
        'braintree_plan_explanation' => 'È necessario creare un piano di fatturazione reccurent nel pannello di controllo Braintree, selezionare l&#39;ID qui piano di fatturazione corrispondente sul proprio server.',
        'braintree_merchant_explanation' => 'È necessario creare un account commerciante nel pannello di controllo Braintree e inserire l&#39;ID qui.',
        'braintree_currency_match' => 'La valuta dell&#39;account commerciante deve corrispondere alla valuta del piano',
        'merchant_account_id' => 'ID account commerciante',
        'master_key' => 'Chiave principale',
        'token' => 'Gettone',
        'paydunya_currency_warning' => 'L&#39;unica valuta disponibile è FCFA. Se lo configuri, assicurati che gli altri pagamenti corrispondano alla stessa valuta. Altrimenti gli utenti avranno la possibilità di acquistare lo stesso piano con prezzi diversi.',
        'country' => 'Nazione',
        'merchant_account' => 'Conto del commerciante',
        'origin_key' => 'Chiave di origine',
        'test_config' => 'Test di configurazione',
        'environment' => 'Ambiente',
        'three_letter_iso' => 'Codice valuta ISO a tre lettere',
        'exact_time'  => array(
            'time' => 'Tempo',
        ),
        'hourly'  => array(
            'minute' => 'Minuto',
        ),
        'monthly'  => array(
            'day' => 'Giorno',
            'time' => 'Tempo',
        ),
        'google_maps_key' => 'Chiave API di Google Maps',
        'maptiler_key' => 'Tasto MapTiler',
        'streetview_api' => 'API Streetview',
        'streetview_key' => 'Chiave API Streetview',
        'openmaptiles_url' => 'OpenMapTiles Url',
        'unit_cost' => 'Costo unitario',
        'supplier' => 'Fornitore',
        'buyer' => 'Acquirente',
        'expense_type' => 'Tipo di spesa',
        'device_cameras_days' => 'Giorni per conservare le immagini della fotocamera del dispositivo',
        'api_app_id' => 'ID app',
        'api_app_code' => 'Codice app',
        'api_app_secret' => 'App Secret',
        'invoice_number' => 'Numero di fattura',
        'one_time_payment' => 'Pagamento unico',
        'sharing_id' => 'Compartecipazione',
        'idle_duration_longer_than' => 'Durata inattiva più lunga di',
        'delete_after_expiration' => 'Elimina dopo la scadenza',
        'sharing_email' => 'Notifica e-mail con link di condivisione',
        'sharing_sms' => 'Notifica SMS con link di condivisione',
        'sms' => 'Sms',
        'template' => 'Modello',
        'commands' => 'Comandi',
        'brand' => 'Produttore del dispositivo',
        'model' => 'Modello',
        'apn_name' => 'Nome APN',
        'apn_username' => 'Nome utente APN',
        'apn_password' => 'Password APN',
        'ignition_duration_longer_than' => 'Durata dell&#39;accensione più lunga di',
        'tasks' => 'Compiti',
        'id' => 'ID',
        'columns' => 'Colonne',
        'called_at' => 'Chiama a',
        'alert_type' => 'Tipo di avviso',
        'response' => 'Risposta',
        'remarks' => 'Osservazioni',
        'client' => 'Cliente',
        'event_type' => 'Tipo di evento',
        'data_type' => 'Tipo di dati',
        'slug' => 'Lumaca',
        'required' => 'Necessario',
        'validation' => 'Validazione',
        'text' => 'Testo',
        'datetime' => 'Appuntamento',
        'boolean' => 'Booleano',
        'select' => 'Selezionare',
        'multiselect' => 'Selezione multipla',
        'options' => 'Opzioni',
        'option' => 'Opzione',
        'default' => 'Predefinito',
        'msisdn' => 'MSISDN',
        'notes' => 'Appunti',
        'skip_empty' => 'Salta valore vuoto',
        'distance_limit' => 'Limite di distanza',
        'distance_tolerance' => 'Tolleranza sulla distanza',
        'pois' => 'POI',
        'device_type_id' => 'Tipo di dispositivo',
        'custom_fields' => 'Campi personalizzati',
        'device_name' => 'Nome del dispositivo',
        'auto_hide_notification' => 'Nascondi automaticamente popup',
        'continuous_duration' => 'Durata continua',
        'captcha_provider' => 'Fornitore CAPTCHA',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'Chiave del sito reCAPTCHA',
        'recaptcha_secret_key' => 'Chiave segreta reCAPTCHA',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'Chiave API HERE.com',
        'time_duration' => 'Durata',
        'offset' => 'Compensare',
        'geofence_device' => 'Dispositivo',
        'webhook_key' => 'Tasto webhook',
        'skip_blank_results' => 'Salta risultati vuoti',
        'account_sid' => 'SID conto',
        'speed_limit_tolerance' => 'Tolleranza limite di velocità',
        'started_at' => 'Ora di inizio',
        'ended_at' => 'Tempo scaduto',
        'region' => 'Regione',
        'adapted' => 'Adattato',
        'silent_notification' => 'Ignora le notifiche se ripetute in pochi minuti',
        'tomtom_key' => 'Chiave TomTom',
        'authorized' => 'Autorizzato',
        'email_verification' => 'Verifica email',
        'project_id' => 'ID progetto',
        'project_psw' => 'Password del progetto',
        'verify_id' => 'Verifica ID',
        'app_tracker_login' => 'Accesso all&#39;app tracker abilitato',
        'count' => 'Contare',
    ),
    'same_protocol' => 'I dispositivi devono essere dello stesso protocollo.',
    'contains' => 'L&#39; :attribute deve contenere :value .',
    'ip_port' => 'L&#39; :attribute non corrisponde al formato IP:PORT',
    'required_unless' => 'Il campo :attribute è obbligatorio.',
    'translation_file' => 'Il file di traduzione non esiste',
    'placeholder' => 'Attributo &quot; :placeholder &quot; mancante',
    'image_valid' => 'L&#39; :attribute deve essere un&#39;immagine.',
    'missing_configuration_value' => 'Mancante :attribute valore di configurazione :attribute .',
    'sms_gateway_error' => 'Il messaggio non può essere inviato Errore gateway SMS.',
    'cant_configure_device' => 'Impossibile configurare il dispositivo',
    'field_does_not_exist' => 'Campo :attribute non esiste',
    'unsupported_rules' => 'Regole non supportate:',
    'unsupported_parameterized_rules' => 'Regole parametriche non supportate:',
    'cant_update_custom_field' => 'Impossibile aggiornare il campo &quot; :field &quot; perché esistono record esistenti che utilizzano questo campo personalizzato',
    'strong_password' => 'Password sicura',
    'uppercase_character' => 'Carattere maiuscolo obbligatorio',
    'lowercase_character' => 'Carattere minuscolo obbligatorio',
    'digit_character' => 'Carattere numerico richiesto',
    'wrong_captcha' => 'Captcha errato',
    'dimensions' => 'L&#39; :attribute ha dimensioni dell&#39;immagine non valide.',
    'mimetypes' => 'L&#39; :attribute deve essere un file di tipo: :values .',
    'in_array' => 'Il :attribute non esiste in :other .',
);