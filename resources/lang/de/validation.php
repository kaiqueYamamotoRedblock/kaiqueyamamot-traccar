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
    'lesser_than' => ':attribute muss kleiner als sein :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'custom-message',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Die maximale H??he des Frontpage-Logos betr??gt 60??Pixel.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon muss 16 x 16 Pixel gro?? sein.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Email',
        'password' => 'Passwort',
        'password_confirmation' => 'Passwort Best??tigung',
        'remember_me' => 'Erinnere dich an mich',
        'name' => 'Name',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI oder Ger??tekennung',
        'fuel_measurement_type' => 'Kraftstoffmessung',
        'fuel_cost' => 'Kraftstoffkosten',
        'icon_id' => 'Ger??tesymbol',
        'active' => 'Aktiv',
        'polygon_color' => 'Hintergrundfarbe',
        'devices' => 'Ger??te',
        'geofences' => 'Geofences',
        'overspeed' => '??berdrehzahl',
        'fuel_consumption' => 'Kraftstoffverbrauch',
        'description' => 'Beschreibung',
        'map_icon_id' => 'Marker Symbol',
        'coordinates' => 'Kartenpunkt',
        'date_from' => 'Stammen aus',
        'date_to' => 'Datum bis',
        'code' => 'Code',
        'title' => 'Titel',
        'note' => 'Inhalt',
        'path' => 'Datei',
        'period_name' => 'Periodenname',
        'days' => 'Tage',
        'devices_limit' => 'Ger??tebegrenzung',
        'trial' => 'Versuch',
        'price' => 'Preis',
        'message' => 'Nachricht',
        'tag' => 'Parameter',
        'timezone_id' => 'Zeitzone',
        'unit_of_distance' => 'Einheit der Entfernung',
        'unit_of_capacity' => 'Einheit der Kapazit??t',
        'unit_of_altitude' => 'H??heneinheit',
        'user' => 'Benutzer',
        'group_id' => 'Gruppe',
        'permission_to_add_devices' => 'Ger??te hinzuf??gen',
        'sms_gateway_url' => 'SMS Gateway URL',
        'mobile_phone' => 'Mobiltelefon',
        'permission_to_use_sms_gateway' => 'SMS Gateway',
        'loged_at' => 'Letzte Anmeldung',
        'manager_id' => 'Manager',
        'sim_number' => 'SIM-Nummer',
        'device_model' => 'Ger??temodell',
        'rfid' => 'RFID',
        'phone' => 'Telefon',
        'device_id' => 'Ger??t',
        'tag_value' => 'Parameterwert',
        'device_port' => 'Ger??teanschluss',
        'event' => 'Event',
        'port' => 'Hafen',
        'device_protocol' => 'Ger??teprotokoll',
        'protocol' => 'Protokoll',
        'sensor_name' => 'Sensornamen',
        'sensor_type' => 'Sensortyp',
        'sensor_template' => 'Sensorvorlage',
        'tag_name' => 'Parametername',
        'min_value' => 'Minute Wert',
        'max_value' => 'Max. Wert',
        'on_value' => 'EIN Wert',
        'off_value' => 'AUS Wert',
        'shown_value_by' => 'Zeige Wert',
        'full_tank_value' => 'Parameterwert',
        'formula' => 'Formel',
        'parameters' => 'Parameter',
        'full_tank' => 'Voller Tank in Liter/Gallonen',
        'fuel_tank_name' => 'Kraftstofftank Namen',
        'odometer_value' => 'Wert',
        'odometer_value_by' => 'Entfernungsmesser',
        'unit_of_measurement' => 'Ma??einheit',
        'plate_number' => 'Kennzeichen',
        'vin' => 'VIN',
        'registration_number' => 'Registrierung/Inventarnummer',
        'object_owner' => 'Object Owner/Manager',
        'additional_notes' => 'Zus??tzliche Bemerkungen',
        'expiration_date' => 'Ablaufdatum',
        'days_to_remind' => 'Tage vor Ablauf erinnern',
        'type' => 'Type',
        'format' => 'Formatieren',
        'show_addresses' => 'Adressen anzeigen',
        'stops' => 'Anschl??ge',
        'speed_limit' => 'Geschwindigkeitsbegrenzung',
        'zones_instead' => 'Zonen anstelle von Adressen',
        'daily' => 'T??glich',
        'weekly' => 'W??chentlich',
        'send_to_email' => 'An Email schicken',
        'filter' => 'Filter',
        'status' => 'Status',
        'date' => 'Datum',
        'geofence_name' => 'Geofence Namen',
        'tail_color' => 'Schwanz Farbe',
        'tail_length' => 'Schwanzl??nge',
        'engine_hours' => 'Motorstunden',
        'detect_engine' => 'Detect Motor EIN/AUS durch',
        'min_moving_speed' => 'Minute Bewegungsgeschwindigkeit in km/h',
        'min_fuel_fillings' => 'Minute Kraftstoff Unterschied zum Kraftstofff??llungenerkennen',
        'min_fuel_thefts' => 'Minute Kraftstoff Unterschied zum Kraftstoffdiebst??hlezu erkennen',
        'expiration_by' => 'Ablauf von',
        'interval' => 'Intervall',
        'last_service' => 'Letzter Service',
        'trigger_event_left' => 'Trigger-Ereignis, wenn links',
        'current_odometer' => 'Aktuelle Kilometer',
        'current_engine_hours' => 'Aktuelle Betriebsstunden',
        'renew_after_expiration' => 'Erneuern nach Ablauf',
        'sms_template_id' => 'SMS template',
        'frequency' => 'Frequenz',
        'unit' => 'Aggregat',
        'noreply_email' => 'Keine Antwort E-Mail Adresse',
        'signature' => 'Unterschrift',
        'use_smtp_server' => 'Verwenden Sie SMTP-Server',
        'smtp_server_host' => 'SMTP -Server-Host',
        'smtp_server_port' => 'SMTP-Server -Port',
        'smtp_security' => 'SMTP- Sicherheit',
        'smtp_username' => 'SMTP- Benutzernamen',
        'smtp_password' => 'SMTP-Passwort',
        'from_name' => 'Vom Namen',
        'server_name' => 'Servername',
        'available_maps' => 'Verf??gbare Karten',
        'default_language' => 'Standard-Sprache',
        'default_timezone' => 'Standard-Zeitzone',
        'default_unit_of_distance' => 'StandardeinheitDistanz',
        'default_unit_of_capacity' => 'Standardkapazit??tseinheit',
        'default_unit_of_altitude' => 'Standardeinheit der H??hen',
        'default_date_format' => 'Standard-Datumsformat',
        'default_time_format' => 'Standard Zeitformat',
        'default_map' => 'Standard- Karte',
        'default_object_online_timeout' => 'Standard Objekt Online- Timeout',
        'logo' => 'Logo',
        'login_page_logo' => 'Login-Seite logo',
        'frontpage_logo' => 'Startseite logo',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Benutzern erlauben Registrierung',
        'default_maps' => 'Standard- Karten',
        'subscription_expiration_after_days' => 'Subskriptionsablaufdatum nach Tagen',
        'gprs_template_id' => 'GPRS -Vorlage',
        'calibrations' => 'Kalibrierungen',
        'ftp_server' => 'FTP-Server',
        'ftp_port' => 'FTP-Port',
        'ftp_username' => 'FTP-Benutzernamen',
        'ftp_password' => 'FTP-Passwort',
        'ftp_path' => 'FTP-Pfad',
        'period' => 'Periode',
        'hour' => 'Stunde',
        'color' => 'Farbe',
        'polyline' => 'Route',
        'request_method' => 'Anforderungsmethode',
        'authentication' => 'Authentication',
        'username' => 'Benutzername',
        'encoding' => 'Codierung',
        'time_adjustment' => 'Zeiteinstellung',
        'parameter' => 'Parameter',
        'export_type' => 'Export -Typ',
        'groups' => 'Gruppen',
        'file' => 'Datei',
        'extra' => 'Extra',
        'parameter_value' => 'Parameterwert ',
        'enable_plans' => 'Aktivieren Pl??ne',
        'payment_type' => 'Zahlungsart',
        'paypal_client_id' => 'Paypal-Client-ID',
        'paypal_secret' => 'Paypal Geheimnis',
        'paypal_currency' => 'Paypal W??hrung',
        'paypal_payment_name' => 'Paypal Zahlung Name',
        'objects' => 'Objekte',
        'duration_value' => 'Dauer',
        'permissions' => 'Berechtigungen',
        'plan' => 'Planen',
        'default_billing_plan' => 'Standardfakturierungsplan',
        'sensor_group_id' => 'Sensor Gruppe',
        'daylight_saving_time' => 'Sommerzeit',
        'phone_number' => 'Telefonnummer',
        'action' => 'Aktion',
        'time' => 'Zeit',
        'order' => 'Auftrag',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'Delete geocoder cache',
        'api_key' => 'API key',
        'api_url' => 'API url',
        'map_center_latitude' => 'Karte Zentrum Breite',
        'map_center_longitude' => 'Karte Zentrum L??nge',
        'map_zoom_level' => 'Karte Zoom-Stufe',
        'dst_type' => 'Art',
        'provider' => 'Versorger',
        'week_start_day' => 'Standard-Kalenderwochenstarttag',
        'ip' => 'IP',
        'gprs_templates_only' => 'Anzeigen GPRS Vorlagen nur Befehle',
        'select_all_objects' => 'W??hlen Sie alle Objekte',
        'icon_type' => 'Icon type',
        'on_setflag_1' => 'Starting character',
        'on_setflag_2' => 'Amount of characters',
        'on_setflag_3' => 'Value of parameter',
        'domain' => 'Domain',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'Sender\'s phone number',
        'database_clear_status' => 'Automatische Verlaufsbereinigung',
        'database_clear_days' => 'Tage zu halten',
        'ignition_detection' => 'Z??ndungserkennung durch',
        'template_color' => 'Vorlagenfarbe',
        'background' => 'Hintergrund',
        'login_page_text_color' => 'Anmeldeseite Textfarbe',
        'login_page_background_color' => 'Login-Seiten-Hintergrundfarbe',
        'welcome_text' => 'Begr????ungstext',
        'bottom_text' => 'Fu??zeile',
        'apple_store_link' => 'AppleStore Link',
        'google_play_link' => 'GooglePlay Link',
        'here_map_id' => 'HERE.com App ID',
        'here_map_code' => 'HERE.com App Code',
        'login_page_panel_background_color' => 'Login-Seitenbereich Hintergrundfarbe',
        'login_page_panel_transparency' => 'Anmeldeseiten-Panel-Transparenz',
        'visible' => 'Sichtbar',
        'icons' => 'Symbole',
        'position' => 'Position',
        'stop_duration_longer_than' => 'Stoppdauer l??nger als',
        'mapbox_access_token' => 'MapBox-Zugriffstoken',
        'flag' => 'Flagge',
        'shift_start' => 'Umschaltbeginn',
        'shift_finish' => 'Schichtende',
        'shift_start_tolerance' => 'Starttoleranz verschieben',
        'shift_finish_tolerance' => 'Verschiebungstoleranz',
        'excessive_exit' => '??berm????iger Ausgang',
        'smtp_authentication' => 'SMTP-Authentifizierung',
        'skip_calibration' => 'Schlie??en Sie Berechnungen au??erhalb des Kalibrierungsbereichs aus',
        'bing_maps_key' => 'Bing Karten Schl??ssel',
        'stripe_public_key' => 'STRIPE ??ffentlicher Schl??ssel',
        'stripe_secret_key' => 'STRIPE geheimer Schl??ssel',
        'stripe_currency' => 'STREIFEN W??hrung',
        'priority' => 'Priorit??t',
        'pickup_address' => 'Abholadresse',
        'delivery_address' => 'Lieferadresse',
        'schedule' => 'Zeitplan',
        'sound_notification' => 'Tonbenachrichtigung',
        'push_notification' => 'Push-Benachrichtigung',
        'email_notification' => 'Email Benachrichtigung',
        'sms_notification' => 'SMS-Benachrichtigung',
        'webhook_notification' => 'Webhook-Benachrichtigung',
        'offline_duration_longer_than' => 'Offline-Dauer l??nger als',
        'sms_gateway_headers' => 'SMS-Gateway-Header',
        'forward' => 'Nach vorne',
        'by_status' => 'Nach Status',
        'icon_status_online' => 'Online-Status-Symbol',
        'icon_status_offline' => 'Offline-Statussymbol',
        'icon_status_ack' => 'Best??tigen Sie das Statussymbol',
        'icon_status_engine' => 'Symbol f??r den Motorstatus',
        'server_description' => 'Serverbeschreibung',
        'bypass_invalid' => 'Erlaube ung??ltige Koordinaten',
        'installation_date' => 'Installationsdatum',
        'sim_activation_date' => 'SIM-Aktivierungsdatum',
        'sim_expiration_date' => 'SIM-Ablaufdatum',
        'activation_date' => 'Aktivierungs-Datum',
        'secret_key' => 'Geheimer Schl??ssel',
        'currency' => 'W??hrung',
        'client_id' => 'Kunden ID',
        'secret' => 'Geheimnis',
        'payment_name' => 'Name der Zahlung',
        'merchant_id' => 'H??ndler-ID',
        'public_key' => '??ffentlicher Schl??ssel',
        'private_key' => 'Privat Schl??ssel',
        'braintree_plan_ids' => 'Braintree-Plan-IDs f??r Serverpl??ne',
        'braintree_plan_explanation' => 'Sie m??ssen einen neuen Abrechnungsplan in Braintree Control Panel erstellen. W??hlen Sie hier die ID aus, die dem Abrechnungsplan auf Ihrem Server entspricht.',
        'braintree_merchant_explanation' => 'Sie m??ssen ein H??ndlerkonto im Braintree-Kontrollfeld erstellen und hier die ID eingeben.',
        'braintree_currency_match' => 'Die W??hrung des H??ndlerkontos muss mit der Planw??hrung ??bereinstimmen',
        'merchant_account_id' => 'H??ndler-Kontonummer',
        'master_key' => 'Hauptschl??ssel',
        'token' => 'Zeichen',
        'paydunya_currency_warning' => 'Die einzige verf??gbare W??hrung ist FCFA. Wenn Sie dies konfigurieren, stellen Sie sicher, dass Ihre anderen Zahlungen der gleichen W??hrung entsprechen. Andernfalls haben Benutzer die M??glichkeit, denselben Plan zu unterschiedlichen Preisen zu kaufen.',
        'country' => 'Land',
        'merchant_account' => 'H??ndler-Konto',
        'origin_key' => 'Herkunftsschl??ssel',
        'test_config' => 'Test config',
        'environment' => 'Umgebung',
        'three_letter_iso' => 'Drei-Buchstaben-ISO-W??hrungscode',
        'exact_time'  => array(
            'time' => 'Zeit',
        ),
        'hourly'  => array(
            'minute' => 'Minute',
        ),
        'monthly'  => array(
            'day' => 'Tag',
            'time' => 'Zeit',
        ),
        'google_maps_key' => 'Google Maps API-Schl??ssel',
        'maptiler_key' => 'MapTiler-Schl??ssel',
        'streetview_api' => 'Streetview API',
        'streetview_key' => 'Streetview-API-Schl??ssel',
        'openmaptiles_url' => 'OpenMapTiles-URL',
        'unit_cost' => 'Kosten pro Einheit',
        'supplier' => 'Lieferant',
        'buyer' => 'K??ufer',
        'expense_type' => 'Kostenart',
        'device_cameras_days' => 'Tage, um die Bilder der Ger??tekamera zu speichern',
        'api_app_id' => 'App-ID',
        'api_app_code' => 'App-Code',
        'api_app_secret' => 'App Geheimnis',
        'invoice_number' => 'Rechnungsnummer',
        'one_time_payment' => 'Einmalige Zahlung',
        'sharing_id' => 'Teilen',
        'idle_duration_longer_than' => 'Leerlaufdauer l??nger als',
        'delete_after_expiration' => 'Nach Ablauf l??schen',
        'sharing_email' => 'E-Mail-Benachrichtigung mit Link zum Teilen',
        'sharing_sms' => 'SMS Benachrichtigung mit Sharing Link',
        'sms' => 'SMS',
        'template' => 'Vorlage',
        'commands' => 'Befehle',
        'brand' => 'Ger??tehersteller',
        'model' => 'Modell',
        'apn_name' => 'APN-Name',
        'apn_username' => 'APN-Benutzername',
        'apn_password' => 'APN-Passwort',
        'ignition_duration_longer_than' => 'Z??nddauer l??nger als',
        'tasks' => 'Aufgaben',
        'id' => 'ICH W??RDE',
        'columns' => 'S??ulen',
        'called_at' => 'Ruf an bei',
        'alert_type' => 'Alarmtyp',
        'response' => 'Antwort',
        'remarks' => 'Bemerkungen',
        'client' => 'Klient',
        'event_type' => 'Ereignistyp',
        'data_type' => 'Datentyp',
        'slug' => 'Schnecke',
        'required' => 'Erforderlich',
        'validation' => 'Validierung',
        'text' => 'Text',
        'datetime' => 'Terminzeit',
        'boolean' => 'Boolescher Wert',
        'select' => 'W??hlen',
        'multiselect' => 'Mehrfachauswahl',
        'options' => 'Optionen',
        'option' => 'M??glichkeit',
        'default' => 'Standard',
        'msisdn' => 'MSISDN',
        'notes' => 'Anmerkungen',
        'skip_empty' => 'Leeren Wert ??berspringen',
        'distance_limit' => 'Entfernungsgrenze',
        'distance_tolerance' => 'Abstandstoleranz',
        'pois' => 'POIs',
        'device_type_id' => 'Ger??tetyp',
        'custom_fields' => 'Benutzerdefinierte Felder',
        'device_name' => 'Ger??tename',
        'auto_hide_notification' => 'Popup automatisch ausblenden',
        'continuous_duration' => 'Kontinuierliche Dauer',
        'captcha_provider' => 'CAPTCHA-Anbieter',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'ReCAPTCHA-Site-Schl??ssel',
        'recaptcha_secret_key' => 'ReCAPTCHA geheimer Schl??ssel',
        'g-recaptcha-response' => 'ReCaptcha',
        'here_api_key' => 'HERE.com API-Schl??ssel',
        'time_duration' => 'Zeitdauer',
        'offset' => 'Versatz',
        'geofence_device' => 'Ger??t',
        'webhook_key' => 'Webhook-Schl??ssel',
        'skip_blank_results' => 'Leere Ergebnisse ??berspringen',
        'account_sid' => 'Konto-SID',
        'speed_limit_tolerance' => 'Toleranz der Geschwindigkeitsbegrenzung',
        'started_at' => 'Startzeit',
        'ended_at' => 'Endzeit',
        'region' => 'Region',
        'adapted' => 'Angepasst',
        'silent_notification' => 'Benachrichtigungen ignorieren, wenn sie sich innerhalb von Minuten wiederholen',
        'tomtom_key' => 'TomTom-Schl??ssel',
        'authorized' => 'Autorisiert',
        'email_verification' => 'E-Mail-Verifizierung',
        'project_id' => 'Projekt-ID',
        'project_psw' => 'Projektpasswort',
        'verify_id' => '??berpr??fen Sie die ID',
        'app_tracker_login' => 'Tracker-App-Login aktiviert',
        'count' => 'Z??hlen',
    ),
    'same_protocol' => 'Die Ger??te m??ssen das gleiche Protokoll haben.',
    'contains' => 'Das :attribute muss Folgendes enthalten :value .',
    'ip_port' => 'Das :attribute stimmt nicht mit dem Format IP:PORT ??berein',
    'required_unless' => 'Das :attribute ist erforderlich.',
    'translation_file' => '??bersetzungsdatei existiert nicht',
    'placeholder' => 'Attribut &quot; :placeholder &quot; fehlt',
    'image_valid' => 'Das :attribute muss ein Bild sein.',
    'missing_configuration_value' => 'Fehlend :attribute .',
    'sms_gateway_error' => 'Nachricht kann nicht gesendet werden. SMS-Gateway-Fehler.',
    'cant_configure_device' => 'Ger??t konnte nicht konfiguriert werden',
    'field_does_not_exist' => 'Feld :attribute existiert nicht',
    'unsupported_rules' => 'Nicht unterst??tzte Regeln:',
    'unsupported_parameterized_rules' => 'Nicht unterst??tzte parametrisierte Regeln:',
    'cant_update_custom_field' => 'Feld &quot; :field &quot; kann nicht aktualisiert werden, da bereits Datens??tze mit diesem benutzerdefinierten Feld vorhanden sind',
    'strong_password' => 'Sicheres Passwort',
    'uppercase_character' => 'Gro??buchstaben erforderlich',
    'lowercase_character' => 'Kleinbuchstaben erforderlich',
    'digit_character' => 'Ziffernzeichen erforderlich',
    'wrong_captcha' => 'Falsches CAPTCHA',
    'dimensions' => 'Das :attribute hat ung??ltige Bildabmessungen.',
    'mimetypes' => 'Das :attribute muss eine Datei vom Typ: :values .',
    'in_array' => 'Das :attribute existiert nicht in :other .',
);