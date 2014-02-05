<?php
include_once "/raid/hub/knit/include/role.inc";
print_r($ROLES);

/*
 * Displays a message
 * 
 * @param $message Message to display
 * @param $size Header html tag for the welcome message (ex. h3)
 * @return Message formatted with HTML tags
 * @note Not a great idea to print HTML from PHP
 * @todo Make this do more formatting
 */
function display($message = "Welcome!", $size = "h2") {
    if (!preg_match('/^h[1-6]$/', $size)) {
        $size = 'h2';
    }

    return "<$size>$message</$size>";
}

echo display("Welcome to the sample project!", "h3");
