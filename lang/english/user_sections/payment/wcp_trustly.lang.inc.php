<?php
/**
    Shop System Plugins - Terms of use

    This terms of use regulates warranty and liability between Wirecard
    Central Eastern Europe (subsequently referred to as WDCEE) and it's
    contractual partners (subsequently referred to as customer or customers)
    which are related to the use of plugins provided by WDCEE.

    The Plugin is provided by WDCEE free of charge for it's customers and
    must be used for the purpose of WDCEE's payment platform integration
    only. It explicitly is not part of the general contract between WDCEE
    and it's customer. The plugin has successfully been tested under
    specific circumstances which are defined as the shopsystem's standard
    configuration (vendor's delivery state). The Customer is responsible for
    testing the plugin's functionality before putting it into production
    enviroment.
    The customer uses the plugin at own risk. WDCEE does not guarantee it's
    full functionality neither does WDCEE assume liability for any
    disadvantage related to the use of this plugin. By installing the plugin
    into the shopsystem the customer agrees to the terms of use. Please do
	not use this plugin if you do not agree to the terms of use!
*/

$t_language_text_section_content_array = array
(

	'MODULE_PAYMENT_WCP_TRUSTLY_TEXT_DESCRIPTION' => 'You will be redirected to the Wirecard payment page when you place an order.',
	'MODULE_PAYMENT_WCP_TRUSTLY_TEXT_TITLE' => 'Trustly',
	'MODULE_PAYMENT_WCP_TRUSTLY_TEXT_INFO','',

	'MODULE_PAYMENT_WCP_TRUSTLY_STATUS_TITLE' => 'Active',
	'MODULE_PAYMENT_WCP_TRUSTLY_STATUS_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_PLUGIN_MODE_TITLE' => 'plugin mode',
	'MODULE_PAYMENT_WCP_TRUSTLY_PLUGIN_MODE_DESC' => 'Switch the plugin mode between live, demo or test. <strong>Attention</strong>: Be aware that there will no payment be processed in demo or test mode!',

	'MODULE_PAYMENT_WCP_TRUSTLY_PRESHARED_KEY_TITLE' => 'Secret',
	'MODULE_PAYMENT_WCP_TRUSTLY_PRESHARED_KEY_DESC' => 'Preshared secret key',

	'MODULE_PAYMENT_WCP_TRUSTLY_CUSTOMER_ID_TITLE' => 'Customer ID',
	'MODULE_PAYMENT_WCP_TRUSTLY_CUSTOMER_ID_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_LOGO_TITLE' => 'Include Shop-Logo URL',
	'MODULE_PAYMENT_WCP_TRUSTLY_LOGO_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_SHOP_ID_TITLE' => 'Shop ID',
	'MODULE_PAYMENT_WCP_TRUSTLY_SHOP_ID_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_SERVICE_URL_TITLE' => 'Service URL',
	'MODULE_PAYMENT_WCP_TRUSTLY_SERVICE_URL_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_DUPLICATE_REQUEST_CHECK_TITLE' => 'Activate Duplicate-Request-Check',
	'MODULE_PAYMENT_WCP_TRUSTLY_DUPLICATE_REQUEST_CHECK_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_STATEMENT_TITLE' => 'Customer Statement prefix',
	'MODULE_PAYMENT_WCP_TRUSTLY_STATEMENT_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_DISPLAY_TEXT_TITLE' => 'Display Text',
	'MODULE_PAYMENT_WCP_TRUSTLY_DISPLAY_TEXT_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_ORDER_DESCRIPTION_TITLE' => 'Order Description prefix',
	'MODULE_PAYMENT_WCP_TRUSTLY_ORDER_DESCRIPTION_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_USE_IFRAME_TITLE' => 'use iFrame?',
	'MODULE_PAYMENT_WCP_TRUSTLY_USE_IFRAME_DESC' => '',

	'MODULE_PAYMENT_WCP_TRUSTLY_SORT_ORDER_TITLE' => 'Sort order of display',
	'MODULE_PAYMENT_WCP_TRUSTLY_SORT_ORDER_DESC' => 'Lowest is displayed first',

	'MODULE_PAYMENT_WCP_TRUSTLY_ALLOWED_TITLE' , 'Allowed Zones',
	'MODULE_PAYMENT_WCP_TRUSTLY_ALLOWED_DESC' , 'Insert Allowed Zones (e.g. AT,DE)',

	'MODULE_PAYMENT_WCP_TRUSTLY_CHECKOUT_TITLE' => 'Payment process',
	'MODULE_PAYMENT_WCP_TRUSTLY_CHECKOUT_HEADER' => '',
	'MODULE_PAYMENT_WCP_TRUSTLY_CHECKOUT_CONTENT' => '<center>You will be redirected.</center>',

	'MODULE_PAYMENT_WCP_TRUSTLY_REDIRECT_TIMEOUT_SECOUNDS' => 2,
	'MODULE_PAYMENT_WCP_TRUSTLY_DEVICE_DETECTION_TITLE' => 'automatic device detection',
	'MODULE_PAYMENT_WCP_TRUSTLY_DEVICE_DETECTION_DESC' => 'If activated, the buyers device will be auto detected to optimise payment page.',

	'MODULE_PAYMENT_WCP_TRUSTLY_SEND_BASKET_TITLE' => 'Forward basket data',
	'MODULE_PAYMENT_WCP_TRUSTLY_SEND_BASKET_DESC' => 'Forwarding basket data to the respective financial service provider.',

	'MODULE_PAYMENT_WCP_TRUSTLY_SEND_SHIPPING_DATA_TITLE' => 'Forward consumer shipping data',
	'MODULE_PAYMENT_WCP_TRUSTLY_SEND_SHIPPING_DATA_DESC' => 'Forwarding shipping data about your consumer to the respective financial service provider.',

	'MODULE_PAYMENT_WCP_TRUSTLY_SEND_BILLING_DATA_TITLE' => 'Forward consumer billing data',
	'MODULE_PAYMENT_WCP_TRUSTLY_SEND_BILLING_DATA_DESC' => 'Forwarding billing data about your consumer to the respective financial service provider.',
);