<?php

return [
    /*
    | Comma-separated addresses that receive a copy of every contact-form and
    | audit enquiry. Example: person@example.com,another@example.com
    */
    'copy_recipients' => array_values(array_filter(array_map(
        'trim',
        explode(',', (string) env('ENQUIRY_NOTIFICATION_CC', ''))
    ))),
];
