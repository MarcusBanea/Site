<?php
function connectToDatabase() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $databbase = "proiect";

    $connection = mysqli_connect($host, $user, $password, $databbase);

    if (mysqli_connect_error()) {
        echo "Error, cannot connect to database " . mysqli_connect_error();
        return 0;
    } else {
        echo "Connection succesful";
        return $connection;
    }
}


function test_input($data): string
{ // testare si curatire data intrare
    $data = trim($data); // elimina spatii inceput si sfarsit
    $data = stripslashes($data); // elimina backslash
    $data = htmlspecialchars($data); // pune caractere speciale conform html
    return $data;
}

function cleanInput($input):string {
    // curatire pt. atacuri XSS cros site scripting
    $search = array(
        '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );
    $output = preg_replace($search, '', $input);
    return $output;
}
function curata($data): string
{ // curatire contra SQL Injection si XSS(cross site scripting)
    $data  = cleanInput($data); // curatire pt. atacuri XSS cros site scripting
    // a mySQL connection is required before using this function
    // transforma caracterele speciale in escape (\x00, \n, \r, \, ', " and \x1a.)
    // $data = mysql_real_escape_string($data);
    return $data;
}