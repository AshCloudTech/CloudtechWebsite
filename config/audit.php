<?php

return [
    // where admin notifications go
    'leads_to' => env('AUDIT_LEADS_TO'),

    // whether to email user confirmation
    'send_user_confirmation' => env('AUDIT_SEND_USER_CONFIRMATION', true),
];
