<?php
date_default_timezone_set('Asia/Jakarta');
$biru = "[1;34m";
$turkis = "[1;36m";
$ijo = "[92m";
$putih = "[1;37m";
$pink = "[1;35m";
$red = "[1;31m";
$kuning = "[1;33m";

$t = "
";
$tt = "

";

echo$kuning.$t;
$tanggal = mktime(date("m"), date("d"), date("Y"));
echo "Tanggal : ".date("d-M-Y", $tanggal)." ".$t;
$jam = date("H:i:s");
echo "Pukul : ". $jam." ".$t;
$a = date ("H");
if (($a >= 6) && ($a <= 11)) {
        echo "Selamat Pagi !!";
} else if (($a > 11) && ($a <= 15)) {
        echo "Selamat siang !!";
} else if (($a > 15) && ($a <= 18)) {
        echo "Selamat sore !!";
} else {
        echo "Selamat Malam !!";
}
echo$tt;
echo $biru."=========================================".$t;
echo $tt.$ijo."╔═══╗╔═══╗╔═══╗╔══╗╔═╗─╔╗╔═══╗
║╔═╗║║╔═╗║║╔═╗║╚╣─╝║║╚╗║║║╔═╗║
║║─╚╝║║─║║║╚═╝║─║║─║╔╗╚╝║║║─╚╝
║║─╔╗║╚═╝║║╔══╝─║║─║║╚╗║║║║╔═╗
║╚═╝║║╔═╗║║║───╔╣─╗║║─║║║║╚╩═║
╚═══╝╚╝─╚╝╚╝───╚══╝╚╝─╚═╝╚═══╝".$tt;
echo $biru."=========================================".$t;

echo$t.$putih."[*]".$ijo." BOT CAPING ".$putih." [ ".$biru."✓ ".$putih."]".$t;
echo$putih."[#]".$ijo." Creator : ".$pink." Armin Gandi".$t.$t;
echo $biru."=========================================".$t;





