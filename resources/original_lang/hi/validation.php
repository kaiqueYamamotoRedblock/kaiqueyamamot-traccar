<?php

return array(

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'active_url' => ':attribute एक मान्य URL नहीं है।',
    'after' => ':attribute के बाद कोई तिथि होनी चाहिए :date',
    'alpha' => ':attribute केवल अक्षर हो सकते हैं।',
    'alpha_dash' => ':attribute केवल अक्षर, संख्याएं और डैश शामिल हो सकते हैं।',
    'alpha_num' => 'The :attribute केवल अक्षर और संख्याएँ हो सकती हैं।',
    'array' => ':attribute एक सरणी होनी चाहिए।',
    'before' => ':attribute से पहले कोई तिथि होनी चाहिए :date',
    'between'  => array(
        'numeric' => 'ए :attribute बीच होना चाहिए :min और :max ।',
        'file' => 'ए :attribute बीच होना चाहिए :min और :max किलोबाइट।',
        'string' => 'ए :attribute बीच होना चाहिए :min और :max वर्ण।',
        'array' => ':attribute बीच होना चाहिए :min और :max आइटम।',
    ),
    'confirmed' => ':attribute पुष्टि मेल नहीं खाती।',
    'date' => ':attribute मान्य दिनांक नहीं है।',
    'date_format' => ':attribute प्रारूप से मेल नहीं खाती :format ।',
    'different' => ':attribute और :other अलग होना चाहिए।',
    'digits' => ':attribute होना चाहिए :digits अंक।',
    'digits_between' => ':attribute बीच होना चाहिए :min और :max अंक।',
    'email' => ':attribute एक मान्य ईमेल पता होना चाहिए।',
    'exists' => 'चयनित :attribute अमान्य है।',
    'image' => ':attribute एक छवि होनी चाहिए।',
    'in' => 'चयनित :attribute अमान्य है।',
    'integer' => 'ए :attribute पूर्णांक होनी चाहिए।',
    'ip' => ':attribute एक मान्य IP पता होना चाहिए।',
    'max'  => array(
        'numeric' => ':attribute :max से अधिक नहीं हो सकती है।',
        'file' => ':attribute :max किलोबाइट से अधिक नहीं हो सकती है।',
        'string' => ':attribute से अधिक नहीं हो सकता है :max वर्ण।',
        'array' => ':attribute :max आइटम से अधिक नहीं हो सकता है।',
    ),
    'mimes' => ':attribute प्रकार की एक फ़ाइल होनी चाहिए :values ।',
    'min'  => array(
        'numeric' => 'ए :attribute कम से कम :min होनी चाहिए।',
        'file' => ':attribute कम से कम होना चाहिए :min किलोबाइट।',
        'string' => 'ए :attribute कम से कम होनी चाहिए :min वर्ण।',
        'array' => ':attribute में कम से कम :min आइटम होना चाहिए।',
    ),
    'not_in' => 'चयनित :attribute अमान्य है।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'regex' => ':attribute प्रारूप अमान्य है।',
    'required' => ':attribute फ़ील्ड आवश्यक है।',
    'required_if' => ':attribute फ़ील्ड आवश्यक है।',
    'required_with' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद है।',
    'required_with_all' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद है।',
    'required_without' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद नहीं है।',
    'required_without_all' => ':values मौजूद होने पर :attribute फ़ील्ड की आवश्यकता होती है।',
    'same' => ':attribute और :other मेल खाना चाहिए।',
    'size'  => array(
        'numeric' => 'ए :attribute होनी चाहिए :size ।',
        'file' => 'ए :attribute होनी चाहिए :size किलोबाइट।',
        'string' => ':attribute होना चाहिए :size वर्ण।',
        'array' => ':attribute में :size आइटम होना चाहिए।',
    ),
    'unique' => 'The :attribute को पहले ही लिया जा चुका है।',
    'url' => ':attribute प्रारूप अमान्य है।',
    'array_max' => 'ए :attribute अधिकतम आइटम :max ।',
    'lesser_than' => ':attribute :other तुलना में कम होना चाहिए',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'सीमा शुल्क संदेश',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'फ्रंटपेज लोगो की अधिकतम ऊंचाई 60px है।',
        ),
        'favicon'  => array(
            'dimensions' => 'फ़ेविकॉन 16px गुणा 16px होना चाहिए।',
        ),
    ),
    'attributes'  => array(
        'email' => 'ईमेल',
        'password' => 'कुंजिका',
        'password_confirmation' => 'पासवर्ड पुष्टि',
        'remember_me' => 'मुझे याद रखना',
        'name' => 'नाम',
        'imei' => 'आईएमईआई',
        'imei_device' => 'IMEI या डिवाइस पहचानकर्ता',
        'fuel_measurement_type' => 'ईंधन की माप',
        'fuel_cost' => 'ईंधन खर्चा',
        'icon_id' => 'डिवाइस आइकन',
        'active' => 'सक्रिय',
        'polygon_color' => 'पीछे का रंग',
        'devices' => 'उपकरण',
        'geofences' => 'भू-बाड़े',
        'overspeed' => 'Overspeed',
        'fuel_consumption' => 'ईंधन की खपत',
        'description' => 'विवरण',
        'map_icon_id' => 'मार्कर आइकन',
        'coordinates' => 'नक्शा बिंदु',
        'date_from' => 'तारीख से',
        'date_to' => 'की तारीख',
        'code' => 'कोड',
        'title' => 'शीर्षक',
        'note' => 'सामग्री',
        'path' => 'फ़ाइल',
        'period_name' => 'काल नाम',
        'days' => 'दिन',
        'devices_limit' => 'उपकरणों की सीमा',
        'trial' => 'ट्रायल',
        'price' => 'कीमत',
        'message' => 'संदेश',
        'tag' => 'पैरामीटर',
        'timezone_id' => 'समय क्षेत्र',
        'unit_of_distance' => 'दूरी की इकाई',
        'unit_of_capacity' => 'क्षमता की इकाई',
        'user' => 'उपयोगकर्ता',
        'group_id' => 'समूह',
        'permission_to_add_devices' => 'उपकरणों को एक दो में जोड़ें',
        'unit_of_altitude' => 'ऊंचाई की इकाई',
        'sms_gateway_url' => 'एसएमएस गेटवे URL',
        'mobile_phone' => 'मोबाइल फोन',
        'permission_to_use_sms_gateway' => 'एसएमएस गेटवे',
        'loged_at' => 'अंतिम लॉगइन',
        'manager_id' => 'मैनेजर',
        'sim_number' => 'सिम नंबर',
        'device_model' => 'डिवाइस का मॉडल',
        'rfid' => 'आरएफआईडी',
        'phone' => 'फ़ोन',
        'device_id' => 'युक्ति',
        'tag_value' => 'पैरामीटर मान',
        'device_port' => 'डिवाइस पोर्ट',
        'event' => 'प्रतिस्पर्धा',
        'port' => 'बंदरगाह',
        'device_protocol' => 'डिवाइस प्रोटोकॉल',
        'protocol' => 'मसविदा बनाना',
        'sensor_name' => 'सेंसर का नाम',
        'sensor_type' => 'सेंसर प्रकार',
        'sensor_template' => 'सेंसर का खाका',
        'tag_name' => 'मापदण्ड नाम',
        'min_value' => 'मिन। मूल्य',
        'max_value' => 'मैक्स। मूल्य',
        'on_value' => 'मूल्य पर',
        'off_value' => 'ऑफ वैल्यू',
        'shown_value_by' => 'द्वारा मूल्य दिखाएं',
        'full_tank_value' => 'पैरामीटर मान',
        'formula' => 'सूत्र',
        'parameters' => 'पैरामीटर',
        'full_tank' => 'लीटर / गैलन में पूर्ण टैंक',
        'fuel_tank_name' => 'ईंधन टैंक का नाम',
        'odometer_value' => 'मूल्य',
        'odometer_value_by' => 'ओडोमीटर',
        'unit_of_measurement' => 'माप की इकाई',
        'plate_number' => 'थाली संख्या',
        'vin' => 'VIN',
        'registration_number' => 'पंजीकरण / संपत्ति संख्या',
        'object_owner' => 'वस्तु स्वामी / प्रबंधक',
        'additional_notes' => 'अतिरिक्त नोट्स',
        'expiration_date' => 'समाप्ति तिथि',
        'days_to_remind' => 'समाप्ति से पहले याद दिलाने के लिए दिन',
        'type' => 'प्रकार',
        'format' => 'स्वरूप',
        'show_addresses' => 'पते दिखाओ',
        'stops' => 'बंद हो जाता है',
        'speed_limit' => 'गति सीमा',
        'zones_instead' => 'पते के बजाय ज़ोन',
        'daily' => 'रोज',
        'weekly' => 'साप्ताहिक',
        'send_to_email' => 'ईमेल पर भेजें',
        'filter' => 'फ़िल्टर',
        'status' => 'स्थिति',
        'date' => 'दिनांक',
        'geofence_name' => 'जिओफेंस नाम',
        'tail_color' => 'पूंछ का रंग',
        'tail_length' => 'पूंछ की लंबाई',
        'engine_hours' => 'इंजन के घंटे',
        'detect_engine' => 'इंजन का पता लगाएं चालू / बंद करके',
        'min_moving_speed' => 'मिन। किमी / घंटा में गतिमान',
        'min_fuel_fillings' => 'मिन। ईंधन भराव का पता लगाने के लिए ईंधन का अंतर',
        'min_fuel_thefts' => 'मिन। ईंधन की चोरी का पता लगाने के लिए ईंधन का अंतर',
        'expiration_by' => 'द्वारा समाप्ति',
        'interval' => 'मध्यान्तर',
        'last_service' => 'अंतिम सेवा',
        'trigger_event_left' => 'जब छोड़ दिया ट्रिगर घटना',
        'current_odometer' => 'वर्तमान ओडोमीटर',
        'current_engine_hours' => 'वर्तमान इंजन घंटे',
        'renew_after_expiration' => 'समाप्ति के बाद नवीनीकृत करें',
        'sms_template_id' => 'एसएमएस टेम्पलेट',
        'frequency' => 'आवृत्ति',
        'unit' => 'इकाई',
        'noreply_email' => 'कोई उत्तर ईमेल पता नहीं',
        'signature' => 'हस्ताक्षर',
        'use_smtp_server' => 'SMTP सर्वर का उपयोग करें',
        'smtp_server_host' => 'SMTP सर्वर होस्ट',
        'smtp_server_port' => 'SMTP सर्वर पोर्ट',
        'smtp_security' => 'SMTP सुरक्षा',
        'smtp_username' => 'SMTP उपयोगकर्ता नाम',
        'smtp_password' => 'SMTP पासवर्ड',
        'from_name' => 'नाम से',
        'icons' => 'प्रतीक',
        'server_name' => 'सर्वर का नाम',
        'available_maps' => 'उपलब्ध नक्शे',
        'default_language' => 'डिफ़ॉल्ट भाषा',
        'default_timezone' => 'डिफ़ॉल्ट समयक्षेत्र',
        'default_unit_of_distance' => 'दूरी की डिफ़ॉल्ट इकाई',
        'default_unit_of_capacity' => 'क्षमता की डिफ़ॉल्ट इकाई',
        'default_unit_of_altitude' => 'ऊंचाई की डिफ़ॉल्ट इकाई',
        'default_date_format' => 'डिफ़ॉल्ट तिथि प्रारूप',
        'default_time_format' => 'डिफ़ॉल्ट समय प्रारूप',
        'default_map' => 'डिफ़ॉल्ट नक्शा',
        'default_object_online_timeout' => 'डिफ़ॉल्ट ऑब्जेक्ट ऑनलाइन टाइमआउट',
        'logo' => 'प्रतीक चिन्ह',
        'login_page_logo' => 'लॉग इन पेज लोगो',
        'frontpage_logo' => 'फ्रंटपेज लोगो',
        'favicon' => 'फ़ेविकॉन',
        'allow_users_registration' => 'उपयोगकर्ताओं को पंजीकरण की अनुमति दें',
        'default_maps' => 'डिफ़ॉल्ट नक्शे',
        'subscription_expiration_after_days' => 'सदस्यता समाप्ति दिनों के बाद',
        'gprs_template_id' => 'जीपीआरएस टेम्पलेट',
        'calibrations' => 'Calibrations',
        'ftp_server' => 'एफ़टीपी सर्वर',
        'ftp_port' => 'एफ़टीपी पोर्ट',
        'ftp_username' => 'एफ़टीपी उपयोगकर्ता नाम',
        'ftp_password' => 'एफ़टीपी पासवर्ड',
        'ftp_path' => 'एफ़टीपी पथ',
        'period' => 'अवधि',
        'hour' => 'घंटा',
        'color' => 'रंग',
        'polyline' => 'मार्ग',
        'request_method' => 'अनुरोध विधि',
        'authentication' => 'प्रमाणीकरण',
        'username' => 'उपयोगकर्ता नाम',
        'encoding' => 'एन्कोडिंग',
        'time_adjustment' => 'समय समायोजन',
        'parameter' => 'पैरामीटर',
        'export_type' => 'निर्यात प्रकार',
        'groups' => 'समूह',
        'file' => 'फ़ाइल',
        'extra' => 'अतिरिक्त',
        'parameter_value' => 'पैरामीटर मान',
        'enable_plans' => 'योजनाओं को सक्षम करें',
        'payment_type' => 'भुगतान के प्रकार',
        'paypal_client_id' => 'पेपैल ग्राहक आईडी',
        'paypal_secret' => 'पेपैल रहस्य',
        'paypal_currency' => 'पेपैल मुद्रा',
        'paypal_payment_name' => 'पेपैल भुगतान नाम',
        'objects' => 'वस्तुओं',
        'duration_value' => 'अवधि',
        'permissions' => 'अनुमतियां',
        'plan' => 'योजना',
        'default_billing_plan' => 'डिफ़ॉल्ट बिलिंग योजना',
        'sensor_group_id' => 'सेंसर समूह',
        'daylight_saving_time' => 'दिन के समय को बचाना',
        'phone_number' => 'फ़ोन नंबर',
        'action' => 'कार्य',
        'time' => 'समय',
        'order' => 'गण',
        'geocoder_api' => 'जियोकोडर एपीआई',
        'geocoder_cache' => 'जियोकोडर कैश',
        'geocoder_cache_days' => 'जियोकोडर कैश दिनों',
        'geocoder_cache_delete' => 'जियोकोडर कैश हटाएं',
        'api_key' => 'एपीआई कुंजी',
        'api_url' => 'एपीआई यूआरएल',
        'map_center_latitude' => 'नक्शा केंद्र अक्षांश',
        'map_center_longitude' => 'नक्शा केंद्र देशांतर',
        'map_zoom_level' => 'मानचित्र ज़ूम स्तर',
        'dst_type' => 'प्रकार',
        'provider' => 'प्रदाता',
        'week_start_day' => 'डिफ़ॉल्ट कैलेंडर सप्ताह प्रारंभ दिन',
        'ip' => 'आईपी',
        'gprs_templates_only' => 'केवल GPRS टेम्प्लेट कमांड दिखाएं',
        'select_all_objects' => 'सभी ऑब्जेक्ट का चयन करें',
        'icon_type' => 'चिह्न प्रकार',
        'on_setflag_1' => 'चरित्र शुरू करना',
        'on_setflag_2' => 'पात्रों की मात्रा',
        'on_setflag_3' => 'पैरामीटर का मान',
        'domain' => 'डोमेन',
        'auth_id' => 'प्रामाणिक आईडी',
        'auth_token' => 'प्रामाणिक टोकन',
        'senders_phone' => 'प्रेषक का फोन नंबर',
        'database_clear_status' => 'स्वचालित इतिहास सफाई',
        'database_clear_days' => 'रखने के दिन',
        'ignition_detection' => 'द्वारा इग्निशन का पता लगाना',
        'here_map_id' => 'HERE.com ऐप की आईडी',
        'here_map_code' => 'HERE.com ऐप कोड',
        'login_page_panel_background_color' => 'लॉग इन पेज पैनल पृष्ठभूमि का रंग',
        'login_page_panel_transparency' => 'लॉग इन पेज पैनल पारदर्शिता',
        'visible' => 'दर्शनीय',
        'template_color' => 'खाका रंग',
        'background' => 'पृष्ठभूमि',
        'login_page_text_color' => 'पेज टेक्स्ट का रंग लॉगिन करें',
        'login_page_background_color' => 'पृष्ठ पृष्ठभूमि रंग लॉगिन करें',
        'welcome_text' => 'आपका स्वागत है पाठ',
        'bottom_text' => 'नीचेके लब्ज',
        'apple_store_link' => 'Apple स्टोर लिंक',
        'google_play_link' => 'गूगल प्ले लिंक',
        'position' => 'पद',
        'stop_duration_longer_than' => 'से अधिक समय तक रुकें',
        'mapbox_access_token' => 'मैपबॉक्स एक्सेस टोकन',
        'flag' => 'झंडा',
        'shift_start' => 'पारी शुरू',
        'shift_finish' => 'शिफ्ट खत्म',
        'shift_start_tolerance' => 'पारी की सहनशीलता शुरू करें',
        'shift_finish_tolerance' => 'शिफ्ट फिनिश टॉलरेंस',
        'excessive_exit' => 'अत्यधिक बाहर निकलना',
        'smtp_authentication' => 'SMTP प्रमाणीकरण',
        'skip_calibration' => 'अंशांकन सीमा से बाहर की गणना को बाहर करें',
        'bing_maps_key' => 'बिंग मैप्स कुंजी',
        'stripe_public_key' => 'स्ट्रिप सार्वजनिक कुंजी',
        'stripe_secret_key' => 'स्ट्रिप गुप्त कुंजी',
        'stripe_currency' => 'स्ट्रिप मुद्रा',
        'priority' => 'प्राथमिकता',
        'pickup_address' => 'पता चुनें',
        'delivery_address' => 'डिलिवरी का पता',
        'schedule' => 'अनुसूची',
        'sound_notification' => 'ध्वनि की सूचना',
        'push_notification' => 'अधिसूचना करें',
        'email_notification' => 'ई - मेल अधिसूचना',
        'sms_notification' => 'एसएमएस अधिसूचना',
        'webhook_notification' => 'वेबहुक अधिसूचना',
        'offline_duration_longer_than' => 'ऑफ़लाइन अवधि से अधिक',
        'sms_gateway_headers' => 'एसएमएस गेटवे हेडर',
        'forward' => 'आगे',
        'by_status' => 'स्थिति से',
        'icon_status_online' => 'ऑनलाइन स्थिति आइकन',
        'icon_status_offline' => 'ऑफ़लाइन स्थिति आइकन',
        'icon_status_ack' => 'स्टेटस आइकन',
        'icon_status_engine' => 'इंजन स्थिति आइकन',
        'server_description' => 'सर्वर विवरण',
        'bypass_invalid' => 'अवैध निर्देशांक की अनुमति दें',
        'installation_date' => 'स्थापना दिवस',
        'sim_activation_date' => 'सिम सक्रियण तिथि',
        'sim_expiration_date' => 'सिम समाप्ति की तारीख',
        'activation_date' => 'सक्रियण की तारीख',
        'secret_key' => 'गुप्त कुंजी',
        'currency' => 'मुद्रा',
        'client_id' => 'ग्राहक ID',
        'secret' => 'गुप्त',
        'payment_name' => 'भुगतान नाम',
        'merchant_id' => 'व्यापारी आइडी',
        'public_key' => 'सार्वजनिक कुंजी',
        'private_key' => 'निजी चाबी',
        'braintree_plan_ids' => 'सर्वर प्लान के लिए ब्रेंट्री प्लान आईडी',
        'braintree_plan_explanation' => 'आपको ब्रेंट्री कंट्रोल पैनल में रीक्रिएट बिलिंग प्लान बनाना होगा, अपने सर्वर पर इसी बिलिंग प्लान के लिए आईडी चुनें।',
        'braintree_merchant_explanation' => 'आपको ब्रेंट्री कंट्रोल पैनल में मर्चेंट अकाउंट बनाना होगा और यहां आईडी दर्ज करनी होगी।',
        'braintree_currency_match' => 'मर्चेंट अकाउंट करेंसी को प्लान करेंसी से मेल खाना चाहिए',
        'merchant_account_id' => 'व्यापारी खाता संख्या',
        'master_key' => 'मास्टर चाबी',
        'token' => 'टोकन',
        'paydunya_currency_warning' => 'केवल उपलब्ध मुद्रा FCFA है। यदि आप इसे कॉन्फ़िगर करते हैं तो कृपया सुनिश्चित करें कि आपके अन्य भुगतान समान मुद्रा से मेल खाते हैं। अन्यथा उपयोगकर्ताओं के पास अलग-अलग कीमतों के साथ एक ही योजना खरीदने का मौका होगा।',
        'country' => 'देश',
        'merchant_account' => 'व्यापारी खाता',
        'origin_key' => 'मूल कुंजी',
        'test_config' => 'टेस्ट कॉन्फिग',
        'environment' => 'वातावरण',
        'three_letter_iso' => 'तीन-अक्षर आईएसओ मुद्रा कोड',
        'exact_time'  => array(
            'time' => 'समय',
        ),
        'hourly'  => array(
            'minute' => 'मिनट',
        ),
        'monthly'  => array(
            'day' => 'दिन',
            'time' => 'समय',
        ),
        'google_maps_key' => 'Google ने API कुंजी को मैप किया है',
        'maptiler_key' => 'MapTiler कुंजी',
        'streetview_api' => 'स्ट्रीटव्यू एपीआई',
        'streetview_key' => 'स्ट्रीटव्यू एपीआई कुंजी',
        'openmaptiles_url' => 'OpenMapTiles Url',
        'unit_cost' => 'इकाई लागत',
        'supplier' => 'प्रदायक',
        'buyer' => 'क्रेता',
        'expense_type' => 'व्यय प्रकार',
        'device_cameras_days' => 'डिवाइस कैमरा की छवियों को रखने के लिए दिन',
        'api_app_id' => 'ऐप आईडी',
        'api_app_code' => 'ऐप कोड',
        'api_app_secret' => 'ऐप सीक्रेट',
        'invoice_number' => 'बीजक संख्या',
        'one_time_payment' => 'एक - बारगी भुगतान',
        'sharing_id' => 'शेयरिंग',
        'idle_duration_longer_than' => 'की तुलना में निष्क्रिय अवधि',
        'delete_after_expiration' => 'समाप्ति के बाद हटाएं',
        'sharing_email' => 'शेयरिंग लिंक के साथ ईमेल अधिसूचना',
        'sharing_sms' => 'शेयरिंग लिंक के साथ एसएमएस अधिसूचना',
        'sms' => 'एसएमएस',
        'template' => 'खाका',
        'commands' => 'आदेश',
        'brand' => 'डिवाइस निर्माता',
        'model' => 'नमूना',
        'apn_name' => 'APN नाम',
        'apn_username' => 'APN उपयोगकर्ता नाम',
        'apn_password' => 'APN पासवर्ड',
        'ignition_duration_longer_than' => 'इग्निशन अवधि की तुलना में लंबे समय तक',
        'tasks' => 'कार्य',
        'id' => 'आईडी',
        'columns' => 'कॉलम',
        'called_at' => 'इस पर फोन करें',
        'alert_type' => 'अलर्ट प्रकार',
        'response' => 'प्रतिक्रिया',
        'remarks' => 'टिप्पणियों',
        'client' => 'ग्राहक',
        'event_type' => 'घटना प्रकार',
        'data_type' => 'डाटा प्रकार',
        'slug' => 'काउंटर',
        'required' => 'अपेक्षित',
        'validation' => 'मान्यकरण',
        'text' => 'टेक्स्ट',
        'datetime' => 'दिनांक और समय',
        'boolean' => 'बूलियन',
        'select' => 'चुनते हैं',
        'multiselect' => 'बहु का चयन',
        'options' => 'विकल्प',
        'option' => 'विकल्प',
        'default' => 'चूक',
        'msisdn' => 'MSISDN',
        'notes' => 'टिप्पणियाँ',
        'skip_empty' => 'खाली मूल्य छोड़ें',
        'distance_limit' => 'दूरी की सीमा',
        'distance_tolerance' => 'दूरी सहिष्णुता',
        'pois' => 'POIs',
        'device_type_id' => 'उपकरण का प्रकार',
        'custom_fields' => 'कस्टम फील्ड्स',
        'device_name' => 'डिवाइस का नाम',
        'auto_hide_notification' => 'ऑटो छुपाएँ पॉपअप',
        'continuous_duration' => 'निरंतर अवधि',
        'captcha_provider' => 'कैप्चा प्रदाता',
        'google_recaptcha' => 'गूगल रीकैप्चा',
        'recaptcha_site_key' => 'रीकैप्चा साइट कुंजी',
        'recaptcha_secret_key' => 'रीकैप्चा गुप्त कुंजी',
        'g-recaptcha-response' => 'Recaptcha',
        'here_api_key' => 'HERE.com एपीआई कुंजी',
        'time_duration' => 'समय अवधि',
        'offset' => 'ओफ़्सेट',
        'geofence_device' => 'युक्ति',
        'webhook_key' => 'वेबहुक कुंजी',
        'skip_blank_results' => 'रिक्त परिणाम छोड़ें',
        'account_sid' => 'खाता सिड',
        'speed_limit_tolerance' => 'गति सीमा सहिष्णुता',
        'started_at' => 'समय शुरू',
        'ended_at' => 'अंतिम समय',
        'region' => 'क्षेत्र',
        'adapted' => 'अनुकूलित',
        'silent_notification' => 'मिनटों में दोहराए जाने पर सूचनाओं पर ध्यान न दें',
        'tomtom_key' => 'टॉमटॉम कुंजी',
        'authorized' => 'अधिकार दिया गया',
        'email_verification' => 'ई - मेल सत्यापन',
        'project_id' => 'परियोजना आईडी',
        'project_psw' => 'प्रोजेक्ट पासवर्ड',
        'verify_id' => 'आईडी सत्यापित करें',
        'app_tracker_login' => 'ट्रैकर ऐप लॉगिन सक्षम',
        'count' => 'गिनती करना',
    ),
    'same_protocol' => 'डिवाइस एक ही प्रोटोकॉल के होने चाहिए।',
    'contains' => ':attribute होना चाहिए :value ।',
    'ip_port' => ':attribute प्रारूप IP से मेल नहीं खाती :PORT',
    'required_unless' => ':attribute फ़ील्ड आवश्यक है।',
    'translation_file' => 'अनुवाद फ़ाइल मौजूद नहीं है',
    'placeholder' => 'विशेषता &quot; :placeholder &quot; गायब है',
    'image_valid' => ':attribute एक छवि होनी चाहिए।',
    'missing_configuration_value' => 'गुम :attribute कॉन्फ़िगरेशन मान।',
    'sms_gateway_error' => 'संदेश नहीं भेजा जा सकता एसएमएस गेटवे त्रुटि।',
    'cant_configure_device' => 'डिवाइस को कॉन्फ़िगर नहीं किया जा सका',
    'field_does_not_exist' => 'फ़ील्ड :attribute मौजूद नहीं है',
    'unsupported_rules' => 'असमर्थित नियम:',
    'unsupported_parameterized_rules' => 'असमर्थित पैरामीटरयुक्त नियम:',
    'cant_update_custom_field' => 'फ़ील्ड &quot; :field &quot; को अपडेट नहीं किया जा सकता क्योंकि इस कस्टम फ़ील्ड का उपयोग करके मौजूदा रिकॉर्ड है',
    'strong_password' => 'मज़बूत पारण शब्द',
    'uppercase_character' => 'अपरकेस वर्ण आवश्यक',
    'lowercase_character' => 'लोअरकेस वर्ण आवश्यक',
    'digit_character' => 'अंक चरित्र की आवश्यकता है',
    'wrong_captcha' => 'गलत कैप्चा',
    'dimensions' => ':attribute में अमान्य छवि आयाम हैं।',
    'mimetypes' => ':attribute एक प्रकार की फ़ाइल होनी चाहिए: :values ।',
    'in_array' => ':attribute :other में मौजूद नहीं है।',
);