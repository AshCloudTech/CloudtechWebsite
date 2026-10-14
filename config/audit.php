<?php

return [
    // Comma-separated primary recipients for audit notifications.
    'leads_to' => env('AUDIT_LEADS_TO'),
    'lead_recipients' => array_values(array_filter(array_map(
        'trim',
        explode(',', (string) env('AUDIT_LEADS_TO', ''))
    ))),

    // whether to email user confirmation
    'send_user_confirmation' => env('AUDIT_SEND_USER_CONFIRMATION', true),
];
