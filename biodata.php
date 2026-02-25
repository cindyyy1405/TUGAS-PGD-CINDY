<?php
// data diri
$nama_lengkap = "Cindy Cahya Amika Pambudi";
$nama_panggilan = "Cindy";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tgl = 5;
$bln = 2;
$thn = 2010;
$alamat = "Jl. Taman Kelud Selatan No.19, RT 03 RW 05, 
Kel. petompon , Kec. Gajahmungkur, Kota Semarang";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$wa = "0895322184674";
$email = "cinvan0829@email.com";
$motto= "Kunci untuk mewujudkan impian bukanlah dengan fokus pada kesuksesan tapi pada arti.
Bahkan langkah kecil dan kemenangan kecil sepanjang perjalananmu bisa memberikan arti yang lebih hebat.";
$foto = "foto.jpg";

// array (menyimpan daftar hobi)
$hobi = ["Menari","Bermain Game","Bermain voly"];
// skill
$skill = [
"HTML"=>80,
"CSS"=>70,
"PHP"=>70
];
// array (favorit)
$makanan = ["Bakso","Nasi Goreng","mie ayam"];
$minuman = ["Matcha","Jus Alpukat","Gooday coklat"];
// array 2 dimensi dengan format (tingkat, nama sekolah, thn masuk - lulus)
$pendidikan = [
["SD","SDN Petompon 02 Semarang",2016,2022],
["SMP","SMP Negeri 10 Semarang",2022,2025],
["SMK","SMK Negeri 08 Semarang",2025,2028]
];
// tahun skrng
$sekarang = date("Y");
// hitung berdasarkan thn lahir
$umur = $sekarang - $thn;
// umur 10 thn kedepan
$tahun_10 = $sekarang + 10;
$umur_10 = $umur + 10;

$profesi_sekarang = "Pelajar";
$profesi_10_thn = "Dokter Spesialis Anak";
$rencana = "bekerja di rumah sakit umum/khusus ibu&anak";
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata Denia</title>
<!-- link awesome untuk icon// referensi : dari kode orang-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body{
    font-family: Arial;
    background:#3399ff;
}
/*kotak utama*/
.kotak{
    width:85%;
    margin:auto;
    background:white;
    padding:30px;
}
/*judul*/
h2{
    background:#3399ff;
    color:white;
    padding:8px;
    text-align:center;
}

.foto{
    text-align:center;
}
/*data diri)*/
.data{
    width:80%;
    margin:auto;
    margin-top:30px;
}

.bar{
    display:flex;
    margin:8px;
}

.label{
    width: 220px;
}

.titik{
    width:10px;
}

.isi{
    flex:1;
}

.list-persegi {
    list-style-type: square;
}

.list-abc {
    list-style-type: upper-alpha;
}

/*tabelll*/
table{
    width:100%;
    border-collapse:collapse;
    margin-top:10px;
}

th{
    background:#99ccff;
}

th,td{
    border:1px solid black;
    padding:6px;
}

a{
    text-decoration:none;
    background:#3399ff;
    color:white;
    padding:6px 10px;
}
/*styling untuk teks jalan*/
marquee{
    background:#99ccff;
    padding:6px;
    margin-top:10px;
}
</style>

<script>
// js
function updateSkillValue(slider,id){
    document.getElementById(id).innerText = slider.value + "%";
}
</script>

</head>

<body>

<div class="kotak">

<h2>BIODATA SISWA</h2>

<div class="foto">
    <img src="<?= $foto ?>" width="200">
</div>

<div class="data">
<div class="bar">
<div class="label"><i class="fa fa-user"></i> Nama Lengkap</div>
<div class="titik">:</div>
<div class="isi"><?= $nama_lengkap ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-id-badge"></i> Nama Panggilan</div>
<div class="titik">:</div>
<div class="isi"><?= $nama_panggilan ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-mosque"></i> Agama</div>
<div class="titik">:</div>
<div class="isi"><?= $agama ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-calendar"></i> TTL</div>
<div class="titik">:</div>
<div class="isi"><?= $tempat_lahir ?>, <?= "$tgl/$bln/$thn" ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-hourglass-half"></i> Umur</div>
<div class="titik">:</div>
<div class="isi"><?= $umur ?> Tahun</div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-map-marker-alt"></i> Alamat</div>
<div class="titik">:</div>
<div class="isi"><?= $alamat ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-venus"></i> Gender</div>
<div class="titik">:</div>
<div class="isi"><?= $gender ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-flag"></i> Kewarganegaraan</div>
<div class="titik">:</div>
<div class="isi"><?= $kewarganegaraan ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-phone"></i> No WA</div>
<div class="titik">:</div>
<div class="isi"><?= $wa ?></div>
</div>

<div class="bar">
<div class="label"><i class="fa fa-envelope"></i> Email</div>
<div class="titik">:</div>
<div class="isi"><?= $email ?></div>
</div>

</div>
<h3>Hobi</h3>
<ol>
<?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
</ol>
<h3>Skill</h3>
<?php
foreach($skill as $s => $n){
echo "$s <br>";
echo "<input type='range' min='0' max='100' value='$n' oninput='updateSkillValue(this,\"val_$s\")'> <span id='val_$s'>$n%</span><br><br>";
}
?>
<h3>Makanan Favorit</h3>
<ul class="list-persegi">
<?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
</ul>

<h3>Minuman Favorit</h3>
<ol class="list-abc">
<?php foreach($minuman as $m){ echo "<li>$m</li>"; } ?>
</ol>
<h3>Riwayat Pendidikan</h3>
<table>
<tr>
<th>Tingkat</th>
<th>Nama Sekolah</th>
<th>Tahun Masuk</th>
<th>Tahun Lulus</th>
</tr>

<?php
foreach($pendidikan as $p){
echo "<tr>
<td>$p[0]</td>
<td>$p[1]</td>
<td>$p[2]</td>
<td>$p[3]</td>
</tr>";
}
?>
</table>

<h3>Keinginan 10 Tahun Lagi</h3>
<p>
Hai namaku <?= $nama_panggilan ?>, saat ini tahun <?= $sekarang ?>, 
aku adalah <?= $profesi_sekarang ?> yang berumur <?= $umur ?> tahun, 
10 tahun lagi di tahun <?= $tahun_10 ?>, di umur <?= $umur_10 ?> 
aku adalah <?= $profesi_10_thn ?>, aku ingin menciptakan aplikasi yang bermanfaat, rencana yang akan aku tempuh adalah belajar
 pemrograman lebih dalam, mengikuti kursus online dan magang diperusahaan teknologi ternama, aku breharap dengan usaha yang konsisten dan tekad
  yang kuat, aku bisa mencapai impianku untuk bekerja diperusahanan teknologi ternama dan menciptakan aplikasi yang bremanfaat bagi banyak orang.
</p>
<marquee direction="left"><?= $motto ?></marquee>

<br><br>
<a href="jadwal.php">Lihat Jadwal Pelajaran</a>
</div>

</body>

</html>

