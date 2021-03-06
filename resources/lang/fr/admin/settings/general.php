<?php

return array(
    'ad'				        => 'Service d\'annuaire',
    'ad_domain'				    => 'Domaine du service d\'annuaire',
    'ad_domain_help'			=> 'C\'est parfois le même que votre domaine d\'e-mail, mais pas toujours.',
    'is_ad'				        => 'C\'est un serveur Active Directory',
	'alert_email'				=> 'Envoyer les alertes à',
	'alerts_enabled'			=> 'Alertes activées',
	'alert_interval'			=> 'Seuil d\'expiration des alertes (en jours)',
	'alert_inv_threshold'		=> 'Seuil d\'alerte d\'inventaire',
	'asset_ids'					=> 'ID de l\'actif',
	'auto_increment_assets'		=> 'Générer des identifiants d\'actifs auto-incrémentés',
	'auto_increment_prefix'		=> 'Préfixe (optionnel)',
	'auto_incrementing_help'    => 'Activer l\'auto-incrémentation des ID d\'actif avant de sélectionner cette option',
	'backups'					=> 'Sauvegardes',
	'barcode_settings'			=> 'Configuration des codes à barres',
    'confirm_purge'			    => 'Confirmer la purge',
    'confirm_purge_help'		=> 'Entrer le texte "DELETE" dans la boite ci-dessous pour purger les enregistrements supprimés. Cette action est irréversible.',
	'custom_css'				=> 'CSS personnalisé',
	'custom_css_help'			=> 'Entrez les codes CSS personnalisé que vous souhaitez utiliser . Ne pas inclure les balises &lt;style&gt;&lt;/style&gt;.',
	'default_currency'  		=> 'Devise par défaut',
	'default_eula_text'			=> 'Licence d\'utilisation par défaut',
  'default_language'					=> 'Langue par défaut',
	'default_eula_help_text'	=> 'Vous pouvez également associer les licences d\'utilisations personnalisés à des catégories spécifiques d\'actifs .',
    'display_asset_name'        => 'Afficher le nom des actifs',
    'display_checkout_date'     => 'Afficher la date d\'association',
    'display_eol'               => 'Afficher la fin de vie dans les tables',
    'display_qr'                => 'Affiche les QR codes',
	'display_alt_barcode'		=> 'Affiche le code-barres 1D',
	'barcode_type'				=> 'Type du code-barres 2D',
	'alt_barcode_type'			=> 'Type du code-barres 1D',
    'eula_settings'				=> 'Configuration pour les licences d\'utilisation',
    'eula_markdown'				=> 'Cette licence d\'utilisation permet l\'utilisation des <a href="https://help.github.com/articles/github-flavored-markdown/">"Github flavored markdown"</a>.',
    'general_settings'			=> 'Configuration générale',
	'generate_backup'			=> 'Générer une sauvegarde',
    'header_color'              => 'Couleur de l\'en-tête',
    'info'                      => 'Ces paramètres vous permettent de personnaliser certains aspects de votre installation.',
    'laravel'                   => 'Version de Laravel',
    'ldap_enabled'              => 'LDAP activé',
    'ldap_integration'          => 'Intégration LDAP',
    'ldap_settings'             => 'Paramètres LDAP',
    'ldap_server'               => 'Serveur LDAP',
    'ldap_server_help'          => 'Ca devrait commencer par ldap:// (non crypté ou TLS) ou ldaps:// (SSL)',
	'ldap_server_cert'			=> 'Validation du certificat SSL LDAP',
	'ldap_server_cert_ignore'	=> 'Autorise un certificat SSL invalide',
	'ldap_server_cert_help'		=> 'Sélectionnez cette case à cocher si vous utilisez un certificat SSL auto-signé et voudriez accepter un certificat SSL invalide.',
    'ldap_tls'                  => 'Utilisez TLS',
    'ldap_tls_help'             => 'A cocher seulement si vous utilisez STARTTLS sur votre serveur LDAP. ',
    'ldap_uname'                => 'Nom d\'utilisateur bind LDAP',
    'ldap_pword'                => 'Mot de passe bind LDAP',
    'ldap_basedn'               => 'Bind de base DN',
    'ldap_filter'               => 'Filtre LDAP',
    'ldap_pw_sync'              => 'Synchronisation du mot de passe LDAP',
    'ldap_pw_sync_help'         => 'Décochez cette case si vous ne souhaitez pas conserver les mots de passe LDAP synchronisés avec les mots de passe locaux. Cette désactivation signifie que vos utilisateurs ne pourront plus se connecter si votre serveur LDAP est injoignable pour une raison quelconque.',
    'ldap_username_field'       => 'Champ nom d\'utilisateur',
    'ldap_lname_field'          => 'Nom de famille',
    'ldap_fname_field'          => 'Prénom LDAP',
    'ldap_auth_filter_query'    => 'Requête d\'authentification LDAP',
    'ldap_version'              => 'Version LDAP',
    'ldap_active_flag'          => 'Signal d\'activation LDAP',
    'ldap_emp_num'              => 'Numéro d\'employé LDAP',
    'ldap_email'                => 'E-mail LDAP',
    'load_remote_text'          => 'Scripts distants',
    'load_remote_help_text'		=> 'Cette installation Snipe-IT peut charger des scripts depuis le monde extérieur.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Restreindre les utilisateurs (admins compris) assignés à des organisations aux biens de leur propre organisation.',
    'full_multiple_companies_support_text' => 'Support complet des organisations multiples',
    'optional'					=> 'facultatif',
    'per_page'                  => 'Résultats par page',
    'php'                       => 'Version de PHP',
    'php_gd_info'               => 'Vous devez installer php-gd afin d\'afficher les QR codes (voir les instructions d\'installation).',
    'php_gd_warning'            => 'Le PHP Image Processing et GD plugin n\'est PAS installé.',
    'qr_help'                   => 'Activer les QR Codes avant de définir ceci',
    'qr_text'                   => 'Texte du QR Code',
    'setting'                   => 'Paramètre',
    'settings'                  => 'Paramètres',
    'site_name'                 => 'Nom du site',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Configuration "Slack"',
    'slack_integration_help'    => 'L\'intégration de Slack est facultative, mai le "endpoint" et le "channel" sont nécessaires pour son utilisation. Pour configurer l\'intégration Slack, vous devez d\'abord <a href=":slack_link" target="_new">créer un "incoming webhook"</a> dans votre compte Slack.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'system'                    => 'Information du système',
    'update'                    => 'Mettre à jour les paramètres',
    'value'                     => 'Valeur',
    'brand'                     => 'Marque',
    'about_settings_title'      => 'A propos des réglages',
    'about_settings_text'       => 'Ces réglages vous permettent de personnaliser certains aspects de votre installation.',
    'labels_per_page'           => 'Etiquettes par page',
    'label_dimensions'          => 'Dimensions de l\'étiquette (en pouces)',
    'page_padding'             => 'Marges de la page (en pouces)',
    'purge'                    => 'Purger les enregistrements supprimés',
    'labels_display_bgutter'    => 'Etiquette de la gouttière du bas',
    'labels_display_sgutter'    => 'Etiquette de la gouttière latérale',
    'labels_fontsize'           => 'Taille de caractère de l\'étiquette',
    'labels_pagewidth'          => 'Largeur de l\'étiquette',
    'labels_pageheight'         => 'Hauteur de l\'étiquette',
    'label_gutters'        => 'Espacement de l\'étiquette (en pouces)',
    'page_dimensions'        => 'Dimensions de la page (en pouces)',
    'label_fields'          => 'Champs visibles de l\'étiquette',
    'inches'        => 'pouces',
    'width_w'        => 'l',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Selective (Users can enable or disable if permitted)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Require Signature',
    'require_accept_signature_help_text'      => 'Enabling this feature will require users to physically sign off on accepting an asset.',
    'left'        => 'gauche',
    'right'        => 'droite',
    'top'        => 'haut',
    'bottom'        => 'bas',
    'vertical'        => 'veritcal',
    'horizontal'        => 'horizontal',
    'zerofill_count'        => 'Longueur des étiquettes de bien, incluant le remplissage de zéros',
);
