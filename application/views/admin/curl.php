<?php 

// buat fungsi http request
function http_request($url){

	// persiapkan CURL
	$ch = curl_init();

	// set URL
	curl_setopt($ch, CURLOPT_URL, $url);

	// aktifkan fungsi transfer nilai berupa string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// seting agar dapat dijalankan pada localhost
	// matikan ssl verify (https)
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	// tampung hasil kedalam variabel
	$output = curl_exec($ch);

	// tutup curl
	curl_close($ch);

	// mengembalikan hasil curl
	return $output;

}

// panggil fungsi http request(url/api)
 $data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

// ubah format json
$data = json_decode($data, TRUE);

// echo "<pre>";

// print_r($data);
// echo "</pre>";

// tampung jumlah data
$jumlah = count($data);
$nomor = 1;

for($i = 0; $i < $jumlah; $i++){

	$hasil = $data[$i]['attributes'];
	if($hasil['Kode_Provi'] == 31){
?>
	<tr>
		<td><?= $nomor++ ?></td>
		<td><?= $hasil['Provinsi'] ?></td>
		<td><?= $hasil['Kasus_Posi'] ?></td>
		<td><?= $hasil['Kasus_Semb'] ?></td>
		<td><?= $hasil['Kasus_Meni'] ?></td>
	</tr>
<?php
	}
}
?>

