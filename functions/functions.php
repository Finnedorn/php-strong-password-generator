<?php

function pswGenerator() {
    $specialChrts = '!£$%&/()=?^@#_-';
    $numbers = '0123456789';
    $characters ='qwertyuiopasdfghjklzxcvbnm';
    $upperChrts = strtoupper($characters);
    if (isset($_GET['pswLength'])) {
        $pswLenght = $_GET['pswLength'];
        $newPsw = '';
        while (strlen($newPsw) < $pswLenght) {
            $allChrts = $specialChrts . $numbers . $characters . $upperChrts;
            $pswChrt = $allChrts[rand(0, strlen($allChrts) -1)];
            if (!strpos($newPsw, $pswChrt)) {
                $newPsw .= $pswChrt;
            }
        }
        return $newPsw;
    }
}

?>