<?php

$flag = "LFI{b4s1c_lf1_n0_f1lt3r_1s_d4ng3r0us}";

$database_config = [
    'host' => 'localhost',
    'username' => 'admin',
    'password' => 'super_secret_password_123',
    'database' => 'lfi_lab_db'
];

$api_keys = [
    'google_maps' => 'AIzaSyC_example_key_12345',
    'stripe' => 'sk_test_example_stripe_key'
];

// Debug info
error_log("Config loaded at: " . date('Y-m-d H:i:s'));
?>