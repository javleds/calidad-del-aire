<?php

return [
	'bot_webhook' => env('BOT_WEBHOOK', ''),

	'twilio' => [
		'account_sid' => env('TWILIO_ACCOUNT_SID', ''),
		'auth_token' => env('TWILIO_AUTH_TOKEN', ''),
	],

	'whatsapp' => [
		 'from' => env('WHATSAPP_FROM', 'whatsapp:+14155238886'),
		 'to' => env('WHATSAPP_TO', 'whatsapp:+5216672067464'),
	],
];
