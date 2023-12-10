<?
system ("clear");
echo @color('purple',"\n>>> NOMOR\t\t\t:");
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo @color('purple', ">>> OTP (Cek Sms)\t\t:");
$otp = trim(fgets(STDIN));
$login = otplogin($nomor,$otp);
if (strpos(json_encode($login), '"status":true')) {
	$secret = $login['secretKey'];
	$plan = $login['callPlan'];
    $nomor = $login['msisdn'];
    $profil = profil($nomor,$plan,$secret);
    $balance = $profil['creditBalance'];
    $aktif = $profil['activeUntil'];
    $sisakuota = $profil['sumOfInternet'];
    $poin = $profil['stotalPoin'];

	echo @color('purple', ">> PULSA\t\t\t:");
	echo @color('blue', "$balance\n");
	echo @color('purple', ">> MASA AKTIF\t\t\t:");
	echo @color('blue', "$aktif\n");
    echo @color('purple', ">> SISA KUOTA\t\t\t:");
    echo @color('blue', "$sisakuota\n");
    echo @color('purple', ">> POINT\t\t\t:");
    echo @color('blue', "$poin\n");
    cek:
    echo @color("nevy", "\n ╔════════════════꧁ঔৣ☬⫸༒•ೋೋ•༒⫷☬ঔৣ꧂════════════════╗");
    echo @color('nevy', "\n ║ ");
    echo @color('purple'," [ v 2 ] ");
    echo @color('green'," PAKET 3 TRI  ");
    echo @color('white'," { EFFATA }:");
    echo @color('nevy',"           ║\n");
    echo @color("nevy", " ╠══════════════════☬⫸༒•ೋೋ•༒⫷☬══════════════════╝");
    echo @color('yellow', "\n ║
1 >> (PROMO) 65GB 30 Hari \t\t:Rp 100.000,-
2 >> (PROMO) 90GB 30 Hari \t\t:Rp 130.000,-
3 >> (NEW) 42GB 30 Hari \t\t:Rp 60.000,-
4 >> (NEW) 24GB 30 Hari \t\t:Rp 40.000,-
5 >> (NEW) 16GB 30 Hari \t\t:Rp 30.000.-
6 >> (NEW) 3GB 30 Hari \t\t\t:Rp 10.000,-
7 >> 25GB 30 Hari [NEW] \t\t:Rp 50.000,-
8 >> (NEW) 35GB 30 Hari \t\t:Rp 50.000,-
9 >> (NEW) 20GB 30 Hari \t\t:Rp 40.000,-
10 >> (NEW) 105GB 30 Hari \t\t:Rp 150.000,-
11 >> 70GB 30 Hari [NEW] \t\t:Rp 100.000,-
12 >> 70GB 30 Hari [NEW] \t\t:Rp 100.000,-
13 >> 130GB 30 Hari [HOT] \t\t:Rp 150.000,-
14 >> Paket Chatting 30 hari \t\t:Rp 6.000,-
15 >> Puas Nelpon Tri & IM3 (30 Hari) \t:Rp 5.000.-
16 >> (NEW) 22GB 30 Hari \t\t:Rp 50.000,-
17 >> (NEW) 33GB 30 Hari \t\t:Rp 50.000,-
18 >> (NEW) 9GB 30 Hari \t\t:Rp 25.000,-
19 >> (NEW) 13GB 30 Hari \t\t:Rp 40.000,-
20 >> (NEW) 8GB 30 Hari \t\t:Rp 20.000,-
21 >> (NEW) 28GB 30 Hari \t\t:Rp 50.000,-
22 >> 60GB 30 Hari 2GB/hari \t\t;Rp 30.000,-
23 >> (POP) 60GB 30 Hari 2GB/Hari \t;Rp 60.000,-
24 >> 10GB 30 Hari 350MB/hari \t\t;Rp 10.000,-
25 >> 30GB 30 Hari 1GB/hari \t\t;Rp 20.000,- 
26 >> (NEW) 40GB 30 Hari \t\t;Rp 50.000,-

 \n ║\n ║");
    
    echo @color('nevy', "\n ╚══════❨ PILIH PAKET ❩════╾꧁ঔৣ☬⫸ : ");
    $pilih = trim(fgets(STDIN));
    switch ($pilih) {
            case '1':
            $prodid = '30474';
            break;
            case '2':
            $prodid = '30475';
            break;
            case '3':
            $prodid = '30478';
            break;
            case '4':
            $prodid = '29689';
            break;
            case '5':
            $prodid = '29688';
            break;
            case '6':
            $prodid = '29686';
            break;
            case '7':
            $prodid = '27517';
            break;
            case '8':
            $prodid = '27524';
            break;
            case '9':
            $prodid = '30289';
            break;
            case '10':
            $prodid = '30476';
            break;
            case '11':
            $prodid = '30576';
            break;
            case '12':
            $prodid = '1910547';
            break;
            case '13':
            $prodid = '30475';
            break;
            case '14':
            $prodid = '1937582';
            break;
            case '15':
            $prodid = '1907595';
            break;
            case '16':
            $prodid = '29814';
            break;
            case '17':
            $prodid = '30292';
            break;
            case '18':
            $prodid = '29738';
            break;
            case '19':
            $prodid = '30286';
            break;
            case '20':
            $ptodid = '30283';
            break;
            case '21':
            $prodid = '27521';
            break;
            case '22':
            $prodid = '28038';
            break;
            case '23':
            $ptodid = '28039';
            break;
            case '24':
            $ptodid = '28037';
            break;
            case '25':
            $ptodid = '28036';
            break;
            case '26':
            $ptodid = '29679';
            break;
            case '27':
            $ptodid = '63021';
            break;
            
        
        default:
            echo @color('red', "\r\n[❔] PILIH PAKET TERLEBIH DAHULU ❕❕❕\n");
            goto cek;
            break;
    }
    $cek = cek($prodid);
    $name = $cek['product']['productName'];
    $price = $cek['product']['productPrice'];
    $deskripsi = $cek['product']['productDescription'];
    echo @color('purple', "\nNAMA PAKET\t\t:");
    echo @color('green', "$name\n");
    echo @color('purple', "HARGA\t\t\t:");
    echo @color('yellow', "$price\n");
    echo @color('purple', "DESKRIPSI\t\t:");
    echo @color('white', "\n$deskripsi\n");
    echo @color('nevy', "\n╚══════❨ LANJUTKAN ? ❩══꧁ঔৣ☬⫸ (Y/N) : ");
    $aa = trim(fgets(STDIN));
    if(strtolower($aa) !== 'y') {
        goto cek;
    }
    $beli = beli($nomor,$plan,$secret,$prodid);
    if ($beli['status'] == true) {
        echo @color('green', "\r\n╚══════❨ SUKSES ❩══꧁ঔৣ☬⫸༒Cek SMS༒⫷☬ঔৣ꧂\n\n");
    } else {
        echo @color('red', "\r\n╚══════❨ GAGAL ! ❩══꧁ঔৣ☬⫸༒Coba yang Lain༒⫷☬ঔৣ꧂\n\n");
    }


} else {
    echo @color('red', $login['message']."\n");
    
}

function login($nomor){
	$host = "bimaplus.tri.co.id";        
    $data = '{"imei":"Android 85e754950ad87eed","language":1,"msisdn":"'.$nomor.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/otp-request', $data);
        return $ceknom;
}
function otplogin($nomor,$otp){
	$host = "bimaplus.tri.co.id";        
    $data = '{"deviceManufactur":"Xiaomi","deviceModel":"Redmi Note 8","deviceOs":"Android","imei":"Android 85e754950ad87eed","msisdn":"'.$nomor.'","otp":"'.$otp.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/login-with-otp', $data);
        return $ceknom;
}
function profil($nomor,$plan,$secret){
    $host = "bimaplus.tri.co.id";        
    $data = '{"callPlan":"'.$plan.'","deviceManufactur":"Xiaomi","deviceModel":"Redmi Note 8","deviceOs":"Android","imei":"Android 85e754950ad87eed","language":0,"msisdn":"'.$nomor.'","page":1,"secretKey":"'.$secret.'","subscriberType":"Prepaid"}';
    $ceknom = rekuest($host,"POST",'/api/v1/homescreen/profile', $data);
        return $ceknom;
}

function cek($prodid){
	$host = "my.tri.co.id";        
    $data = '{"imei":"WebSelfcare","language":"","callPlan":"","msisdn":"","secretKey":"","subscriberType":"","productId":"'.$prodid.'"}';
    $ceknom = rekuest($host,"POST",'/apibima/product/product-detail', $data);
        return $ceknom;
}

function beli($nomor,$plan,$secret,$prodid){
    $host = "bimaplus.tri.co.id";        
    $data = '{"addonMenuCategory":"","addonMenuSubCategory":"","balance":"","callPlan":"'.$plan.'","deviceManufactur":"Xiaomi","deviceModel":"Redmi Note 8","deviceOs":"Android","imei":"Android 85e754950ad87eed","language":0,"menuCategory":"3","menuCategoryName":"TriProduct","menuIdSource":"","menuSubCategory":"","menuSubCategoryName":"","msisdn":"'.$nomor.'","paymentMethod":"00","productAddOnId":"","productId":"'.$prodid.'","secretKey":"'.$secret.'","servicePlan":"Default","sms":true,"subscriberType":"Prepaid","totalProductPrice":"","utm":"","utmCampaign":"","utmContent":"","utmMedium":"","utmSource":"","utmTerm":"","vendorId":"11"}';
    $ceknom = rekuest($host,"POST",'/api/v1/purchase/purchase-product', $data);
        return $ceknom;
}

function rekuest($host, $method, $url, $data = null){ 
        $headers[] = 'Host: '.$host;
		$headers[] = 'App-Version: 4.2.6';
        $headers[] = 'Content-Type: application/json; charset=UTF-8';
        $headers[] = 'User-Agent: okhttp/4.9.0';
        
        $c = curl_init("https://".$host.$url);  
        switch ($method){
            case "GET":
            curl_setopt($c, CURLOPT_POST, false);
            break;
            case "POST":               
            curl_setopt($c, CURLOPT_POST, true);
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
            case "PUT":               
            curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
        }
        
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($c, CURLOPT_TIMEOUT, 20);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode){
            return false;
        }
        else {
            $headers = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        
        curl_close($c);
        $json = json_decode($body, true);
        return $json;
    }


function color($color = "default" , $text = "")
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }

?>
