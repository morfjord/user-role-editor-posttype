<?php
// set-custom-role-capabilities.php

add_action('init', 'set_custom_role_capabilities');

function set_custom_role_capabilities() {
    // Your code here
    $role = get_role('custom_role');
    // ... (rest of the code)
}
