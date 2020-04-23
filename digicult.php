<?php
    // Reads the variables sent via POST from our gateway
    $sessionId   = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text        = $_POST["text"];
    if ( $text == "" ) {
        // Start menu
        $response  = "CON Welcome to Digicult\nSelect Language / Chagua Lugha\n";
        $response .= "1. English\n";
        $response .= "2. Kiswahili";
    }
    else if ( $text == "1" ) {
        // Select the service
        $response = "CON Select Service \n";
        $response .= "1. Subscribe to Digicult \n";
        $response .= "2. Report FAW attack\n";
        $response .= "3. About Digicult\n";
        $response .= "0. Back";
    }
    else if($text == "2") {
        //Chagua huduma
        $response = "CON Chagua Huduma \n";
        $response .= "1. Subscribe kwa Digicult \n";
        $response .= "2. Repoti uvamizi wa FAW\n";
        $response .= "3. Kuhusu Digicult\n";
        $response .= "0. nyuma";
    }
    else if($text == "1*1") {
        // Select Region
        $response = "CON Select Region \n";
        $response .= "1. Coast \n";
        $response .= "2. Eastern\n";
        $response .= "3. Nairobi\n";
        $response .= "4. Central\n";
        $response .= "5. Rift Valley\n";
        $response .= "6. Western\n";
        $response .= "7. Nyanza\n";
        $response .= "0. Back";
    }

    else if ( $text == "1*2" ) {
        // Confirm attack
        $response = "CON Do you have a possible attack of FAW in your farm?\n";
        $response .= "1. Yes \n";
        $response .= "0. Back\n";
    }

    else if ( $text == "1*3" ) {
        // About
        $response = "END You will receive a message with all information about digicult shortly\n";
    }

    else if( $text == "1*1*1"){
        //regions in Coast
        $response = "CON Select Town \n";
        $response .= "1. Malindi \n";
        $response .= "2. Mombasa\n";
        $response .= "3. Kilifi\n";
        $response .= "4. Mtwapa\n";
    }

    else if( $text == "1*1*2"){
        //regions in Eastern
        $response = "CON Select Town \n";
        $response .= "1. Embu \n";
        $response .= "2. Meru\n";
        $response .= "3. Machakos\n";
        $response .= "4. Marsabit\n";
    }

    else if( $text == "1*1*3"){
        //regions in Nairobi
        $response = "CON Select Town \n";
        $response .= "1. Rongai \n";
        $response .= "2. Kibera\n";
        $response .= "3. Umoja\n";
        $response .= "4. West Lands\n";
    }

    else if( $text == "1*1*4"){
        //regions in Central
        $response = "CON Select Town \n";
        $response .= "1. Nyeri \n";
        $response .= "2. Kiambu\n";
        $response .= "3. Muranga\n";
        $response .= "4. Kirinyaga\n";
    }

    else if( $text == "1*1*5"){
        //regions in Rift Valley
        $response = "CON Select Town \n";
        $response .= "1. Eldoret \n";
        $response .= "2. Nakuru\n";
        $response .= "3. Lodwar\n";
        $response .= "4. Nandi\n";
    }

    else if( $text == "1*1*6"){
        //regions in Western
        $response = "CON Select Town \n";
        $response .= "1. Kakamega \n";
        $response .= "2. Mumias\n";
        $response .= "3. Bungoma\n";
        $response .= "4. Webuye\n";
    }

    else if( $text == "1*1*7"){
        //regions in Nyanza
        $response = "CON Select Town \n";
        $response .= "1. Kisumu \n";
        $response .= "2. Homabay\n";
        $response .= "3. Siaya\n";
        $response .= "4. Bondo\n";
    }

    else if( $text != 1 || $text != 2) {
        $response = "You have entered an invalid choice";
    }
    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
    // DONE!!!
?>
