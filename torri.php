<?php
function asw($a, $reff) {
	$operator[0] = '62817';
                $operator[1] = '62818';
                $operator[2] = '62819';
                $operator[3] = '62859';
                $operator[4] = '62877';
                $operator[5] = '62878';
                $operator[6] = '62896';
                $operator[7] = '62897';
                $operator[8] = '62898';
                $operator[9] = '62899';
                $operator[10] = '62811';
                $operator[11] = '62812';
                $operator[12] = '62813';
                $operator[13] = '62821';
                $operator[14] = '62822';
                $operator[15] = '62823';
                $operator[16] = '62852';
                $operator[17] = '62851';
                $operator[18] = '62855';
                $operator[19] = '62856';
                $operator[20] = '62857';
                $operator[21] = '62858';
                $operator[22] = '62814';
                $operator[23] = '62815';
                $operator[24] = '62816';
                $kartu = $operator[rand(0,24)];
                $get = file_get_contents("https://api.randomuser.me");
                $j = json_decode($get, true);
                $getName = $j['results'][0]['name']['first'];
                $getName2 = $j['results'][0]['name']['last'];
                $rand = rand(0000,9999);
                $password = '911'.rand(000000,999999);
                $gmail = $getName.$rand."@gmail.com";
                $huruf = '012345678910abcdefghijklmnopqrstuvwxyz';
    	$device = '';
    	for ($i = 0; $i < 16; $i++) {
        $device .= $huruf[mt_rand(0, strlen($huruf) - 1)];
    	}
                 $data = base64_encode('{"sign":"bdcaac434242400c0e647136208ad541","salt":"154","package_name":"com.torriapp.app","method_name":"user_register","type":"normal","name":"'.$getName.' '.$getName2.'","email":"'.$gmail.'","password":"'.$password.'","phone":"+'.$kartu.'10'.$rand.'74","device_id":"'.$device.'","user_refrence_code":"'.$reff.'"}');
                $body = 'data='.$data.'';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://torriapp.com/admin/api.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			$headers[] = "Host: torriapp.com";
			$headers[] = "Connection: Keep-Alive";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;

}
print "Nabila Tools - Torriapp\n";
print "Thanks To : Vj Rusmayana\n\n";
echo "Reff : ";
$reff = trim(fgets(STDIN));
for($a=0;$a<100;$a++){
$res = json_decode(asw($a, $reff));
        //get data
        $data  = $res->ANDROID_REWARDS_APP->msg;
    echo "Duaaar Memek $data\n";
}
?>