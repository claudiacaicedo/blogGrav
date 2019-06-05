<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/plugins/email/languages.yaml',
    'modified' => 1559760897,
    'data' => [
        'en' => [
            'PLUGIN_EMAIL' => [
                'MAIL_ENGINE' => 'Mail Engine',
                'MAIL_ENGINE_DISABLED' => 'Disabled',
                'CONTENT_TYPE' => 'Content type',
                'CONTENT_TYPE_PLAIN_TEXT' => 'Plain text',
                'CHARSET' => 'Charset',
                'CHARSET_PLACEHOLDER' => 'Defaults to UTF-8',
                'EMAIL_FORM' => 'From address',
                'EMAIL_FORM_PLACEHOLDER' => 'Default email from address',
                'EMAIL_FROM_NAME' => 'From name',
                'EMAIL_FROM_NAME_PLACEHOLDER' => 'Default email from name',
                'EMAIL_TO' => 'To address',
                'EMAIL_TO_PLACEHOLDER' => 'Default email to address',
                'EMAIL_TO_NAME' => 'To name',
                'EMAIL_TO_NAME_PLACEHOLDER' => 'Default email to name',
                'EMAIL_CC' => 'CC address',
                'EMAIL_CC_PLACEHOLDER' => 'Default email CC address',
                'EMAIL_CC_NAME' => 'CC name',
                'EMAIL_CC_NAME_PLACEHOLDER' => 'Default email CC name',
                'EMAIL_BCC' => 'BCC address',
                'EMAIL_BCC_PLACEHOLDER' => 'Default email BCC address',
                'EMAIL_REPLY_TO' => 'Reply-to address',
                'EMAIL_REPLY_TO_PLACEHOLDER' => 'Default email reply-to address',
                'EMAIL_REPLY_TO_NAME' => 'Reply-to name',
                'EMAIL_REPLY_TO_NAME_PLACEHOLDER' => 'Default email reply-to name',
                'EMAIL_BODY' => 'Body',
                'EMAIL_BODY_PLACEHOLDER' => 'Defaults to a table of all form fields',
                'SMTP_SERVER' => 'SMTP server',
                'SMTP_SERVER_PLACEHOLDER' => 'e.g. smtp.google.com',
                'SMTP_PORT' => 'SMTP port',
                'SMTP_PORT_PLACEHOLDER' => 'Defaults to 25 (plaintext) / 587 (encrypted)',
                'SMTP_ENCRYPTION' => 'SMTP encryption',
                'SMTP_ENCRYPTION_NONE' => 'None',
                'SMTP_LOGIN_NAME' => 'SMTP login name',
                'SMTP_PASSWORD' => 'SMTP password',
                'PATH_TO_SENDMAIL' => 'Path to sendmail',
                'DEBUG' => 'Debug',
                'EMAIL_NOT_CONFIGURED' => 'Email not configured',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Please configure a \'to\' address in the Email Plugin settings, or in the form',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Please configure a \'from\' address in the Email Plugin settings, or in the form',
                'TEST_EMAIL_BODY' => '<h1>Testing Email</h1><p>This test email has been sent based on the following configuration:</p>  <p><pre>%1$s</pre></p>',
                'EMAIL_DEFAULTS' => 'Email Defaults',
                'SMTP_CONFIGURATION' => 'SMTP Configuration',
                'SENDMAIL_CONFIGURATION' => 'Sendmail Configuration',
                'ADVANCED' => 'Advanced',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'QUEUE_TITLE' => 'Email Queue',
                'QUEUE_DESC' => 'When you enable the email queue, email is not <i>sent immediately</i>, rather the email is sent to the queue, and then the Grav <strong>scheduler will flush the queue</strong> and actually send the email based on the configured frequency.  This ensures Grav is not waiting around for email connections to complete.',
                'QUEUE_ENABLED' => 'Enabled',
                'QUEUE_FLUSH_FREQUENCY' => 'Flush Frequency',
                'QUEUE_FLUSH_FREQUENCY_HELP' => 'Use \'cron\' format',
                'QUEUE_FLUSH_MSG_LIMIT' => 'Messages per flush',
                'QUEUE_FLUSH_MSG_LIMIT_APPEND' => 'Messages',
                'QUEUE_FLUSH_TIME_LIMIT' => 'Flush time limit',
                'QUEUE_FLUSH_TIME_LIMIT_APPEND' => 'Seconds'
            ]
        ],
        'da' => [
            'PLUGIN_EMAIL' => [
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Konfigurere venligst en \'til\' email adresse i Email Plugin indstillingerne eller her i formularen',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Konfigurere venligst en \'fra\' email adresse i Email Plugin indstillingerne eller her i formularen'
            ]
        ],
        'de' => [
            'PLUGIN_EMAIL' => [
                'EMAIL_NOT_CONFIGURED' => 'E-Mail ist nicht konfiguriert',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Bitte konfigurieren sie eine \'An\' (\'to\') Adresse in den Email-Plugin-Einstellungen oder im Formular.',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Bitte konfigurieren sie eine \'Von\' (\'from\') Adresse in den Email-Plugin-Einstellungen oder im Formular.'
            ]
        ],
        'es' => [
            'PLUGIN_EMAIL' => [
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Por favor configura una dirección de \'remitente\' en la configuración del Plugin de Email o en el formulario',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Por favor configura una dirección de \'destinatario\' en la configuración del Plugin de Email o en el formulario'
            ]
        ],
        'fr' => [
            'PLUGIN_EMAIL' => [
                'EMAIL_NOT_CONFIGURED' => 'L’e-mail n’est pas configuré',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Veuillez configurer une adresse de \'destinataire\' dans les paramètres du Plugin ou dans le formulaire.',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Veuillez configurer une adresse \'d\'expéditeur\' dans les paramètres du Plugin ou dans le formulaire.',
                'TEST_EMAIL_BODY' => '<h1>E-mail de test</h1><p>Cet e-mail de test est basé sur la configuration suivante :</p>  <p><pre>%1$s</pre></p>',
                'EMAIL_FOOTER' => 'GetGrav.org'
            ]
        ],
        'hr' => [
            'PLUGIN_EMAIL' => [
                'EMAIL_NOT_CONFIGURED' => 'Email nije konfiguriran',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Konfigurirajte \'za\' (\'to\') adresu u postavkama Email dodatka ili u obrascu',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Konfigurirajte \'od\' (\'from\') adresu u postavkama Email dodatka ili u obrascu'
            ]
        ],
        'it' => [
            'PLUGIN_EMAIL' => [
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Per favore, configura l\'indirizzo di destinazione (\'to\') nella configurazione del Plugin Email, oppure direttamente nella form.',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Per favore, configura l\'indirizzo di provenienza (\'from\') nella configurazione del Plugin Email, oppure direttamente nella form'
            ]
        ],
        'ro' => [
            'PLUGIN_EMAIL' => [
                'EMAIL_NOT_CONFIGURED' => 'Adresa de email nu este configurată',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Vă rugam setați o adresă \'către\' în setările modulului Email sau în formular',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Vă rugam setați o adresă \'de la\' în setările modulului Email sau în formular'
            ]
        ],
        'ru' => [
            'PLUGIN_EMAIL' => [
                'MAIL_ENGINE' => 'Почтовая система',
                'MAIL_ENGINE_DISABLED' => 'Отключена',
                'CONTENT_TYPE' => 'Тип контента',
                'CONTENT_TYPE_PLAIN_TEXT' => 'Простой текст',
                'CHARSET' => 'Кодировка',
                'CHARSET_PLACEHOLDER' => 'По умолчанию UTF-8',
                'EMAIL_DEFAULTS' => 'Email настройки по умолчанию',
                'EMAIL_FORM' => 'Почта отправителя',
                'EMAIL_FORM_PLACEHOLDER' => 'Email адрес отправителя по умолчанию',
                'EMAIL_FROM_NAME' => 'Имя почты отправителя',
                'EMAIL_FROM_NAME_PLACEHOLDER' => 'Email имя отправителя по умолчанию',
                'EMAIL_TO' => 'Почта получателя',
                'EMAIL_TO_PLACEHOLDER' => 'Email адрес получателя по умолчанию',
                'EMAIL_TO_NAME' => 'Имя почты получателя',
                'EMAIL_TO_NAME_PLACEHOLDER' => 'Email имя получателя по умолчанию',
                'EMAIL_CC' => 'Почта CC',
                'EMAIL_CC_PLACEHOLDER' => 'Email CC адрес по умолчанию',
                'EMAIL_CC_NAME' => 'Имя почты CC',
                'EMAIL_CC_NAME_PLACEHOLDER' => 'Email CC имя по умолчанию',
                'EMAIL_BCC' => 'Почта BCC',
                'EMAIL_BCC_PLACEHOLDER' => 'Email BCC адрес по умолчанию',
                'EMAIL_REPLY_TO' => 'Почта для ответов',
                'EMAIL_REPLY_TO_PLACEHOLDER' => 'Email для ответов адрес по умолчанию',
                'EMAIL_REPLY_TO_NAME' => 'Имя почты для ответов',
                'EMAIL_REPLY_TO_NAME_PLACEHOLDER' => 'Email для ответов имя по умолчанию',
                'EMAIL_BODY' => 'Тело сообщения',
                'EMAIL_BODY_PLACEHOLDER' => 'По умолчанию используется таблица всех полей формы',
                'SMTP_CONFIGURATION' => 'Конфигурация SMTP',
                'SMTP_SERVER' => 'SMTP сервер',
                'SMTP_SERVER_PLACEHOLDER' => 'e.g. smtp.google.com',
                'SMTP_PORT' => 'SMTP порт',
                'SMTP_PORT_PLACEHOLDER' => 'По умолчанию 25 (plaintext) / 587 (encrypted)',
                'SMTP_ENCRYPTION' => 'SMTP шифрование',
                'SMTP_ENCRYPTION_NONE' => 'Нет',
                'SMTP_LOGIN_NAME' => 'SMTP логин',
                'SMTP_PASSWORD' => 'SMTP пароль',
                'SENDMAIL_CONFIGURATION' => 'Конфигурация Sendmail',
                'PATH_TO_SENDMAIL' => 'Путь к sendmail',
                'QUEUE_TITLE' => 'Очередь Email',
                'QUEUE_DESC' => 'Когда вы включаете очередь email, электронная почта не <i>отправляется немедленно</i>, а отправляется в очередь, затем планировщик Grav <strong>обрабатывает очередь</strong> и на основе настроенной частоты фактически отправляет электронную почту. Это гарантирует, что Grav не ждет завершения подключения к электронной почте.',
                'QUEUE_ENABLED' => 'Включено',
                'QUEUE_FLUSH_FREQUENCY' => 'Частота обраблтки',
                'QUEUE_FLUSH_FREQUENCY_HELP' => 'Использовать формат \'cron\'',
                'QUEUE_FLUSH_MSG_LIMIT' => 'Количество сообщений на задачу',
                'QUEUE_FLUSH_MSG_LIMIT_APPEND' => 'Сообщений',
                'QUEUE_FLUSH_TIME_LIMIT' => 'Ограничение времени обработки',
                'QUEUE_FLUSH_TIME_LIMIT_APPEND' => 'Секунд',
                'ADVANCED' => 'Расширенные',
                'DEBUG' => 'Отладка',
                'EMAIL_NOT_CONFIGURED' => 'Электронная почта не настроена',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Пожалуйста настройте адрес получателя (\'to\') в настройках плагина Email Plugin, или на форме',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Пожалуйста настройте адрес отправителя (\'from\') в настройках плагина Email Plugin, или на форме',
                'TEST_EMAIL_BODY' => '<h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>%1$s</pre></p>',
                'EMAIL_FOOTER' => 'GetGrav.org'
            ]
        ],
        'uk' => [
            'PLUGIN_EMAIL' => [
                'EMAIL_NOT_CONFIGURED' => 'Електронна пошта не налаштована',
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Будь ласка налаштуйте адресу одержувача (\'to\') в налаштуваннях плагіна Email Plugin, або на формі',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Будь ласка налаштуйте адресу відправника (\'from\') в налаштуваннях плагіна Email Plugin, або на формі',
                'TEST_EMAIL_BODY' => '<h1>Тестування електронної пошти</h1><p>Це тестовий лист відправлено на основі такої конфігурації:</p>  <p><pre>%1$s</pre></p>',
                'EMAIL_FOOTER' => 'GetGrav.org'
            ]
        ]
    ]
];
