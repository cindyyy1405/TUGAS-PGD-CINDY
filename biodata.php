<?php
// ================== SISTEM HALAMAN ==================
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// ================== DATA DIRI ==================
$nama_lengkap = "Cindy Cahya Amika Pambudi";
$nama_panggilan = "Cindy";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tgl = 5;
$bln = 2;
$thn = 2010;
$alamat = "Jl. Taman Kelud Selatan No.19, RT 03 RW 05, Kel. Petompon, Kec. Gajahmungkur, Kota Semarang";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$wa = "0895322184674";
$email = "cinvan0829@gmail.com";
$motto = "Kunci untuk mewujudkan impian bukanlah dengan fokus pada kesuksesan tapi pada arti. Bahkan langkah kecil dan kemenangan kecil sepanjang perjalananmu bisa memberikan arti yang lebih hebat.";
$foto = "foto.jpg";

// ================== ARRAY DATA ==================
$hobi = ["Menari", "Bermain Game", "Bermain Voli"];

$skill = [
    "HTML" => 80,
    "CSS" => 70,
    "PHP" => 70
];

$makanan = ["Bakso", "Nasi Goreng", "Mie Ayam"];
$minuman = ["Matcha", "Jus Alpukat", "Good Day Coklat"];

$pendidikan = [
    ["SD", "SDN Petompon 02 Semarang", 2016, 2022],
    ["SMP", "SMP Negeri 10 Semarang", 2022, 2025],
    ["SMK", "SMK Negeri 08 Semarang", 2025, 2028]
];

// ================== PERHITUNGAN ==================
$sekarang = date("Y");
$umur = $sekarang - $thn;
$tahun_10 = $sekarang + 10;
$umur_10 = $umur + 10;
$profesi_sekarang = "Pelajar";
$profesi_10 = "Dokter Spesialis Anak";
$rencana = "Bekerja di rumah sakit ibu & anak dan membantu banyak orang";

// ================== JADWAL ==================
$namaSaya = "Cindy";

$jadwal = [
    "Senin" => ["Matematika","Matematika","Sejarah","PABP","PABP","PABP","Bahasa Inggris","Bahasa Inggris","Bahasa Indonesia","Bahasa Indonesia"],
    "Selasa" => ["IPAS","IPAS","IPAS","IPAS","PPS","PPS","Bahasa Jawa","Bahasa Jawa","Seni Musik","Seni Musik"],
    "Rabu" => ["PGD","PGD","PGD","PGD","PGD","PGD","GIM","GIM","GIM","GIM"],
    "Kamis" => ["Olahraga","Olahraga","Olahraga","Sejarah","Bahasa Inggris","Bahasa Inggris","Matematika","Matematika","Bahasa Indonesia","Bahasa Indonesia"],
    "Jumat" => ["Doa Pagi","Informatika","Informatika","KKA","KKA","IPAS","IPAS","PGD","PGD","Pulang"]
];

$piket = [
    "Senin" => ["Cindy","Shesanata","Tsabita","Naila","Kartika","Rasya","Yusuf","Habibi"],
    "Selasa" => ["Keisha","Shafanira","Aurora","Sila","Syauqi","Nail","Wahyu"],
    "Rabu" => ["Anin","Shifa","Tania","Fasya","Eka","Dzaky","Vino"],
    "Kamis" => ["Aida","Maharani","Alyaa","Denia","Ravid","Ibnu","Tegar"],
    "Jumat" => ["Aqila","Alais","Gendhis","Cloudya","Aziz","Raka","Rayhan"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Project Biodata Cindy</title>
<style>
body{
    font-family: Arial;
    background:#3399ff;
}
.kotak{
    width:90%;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:12px;
}
h2{
    background:#3399ff;
    color:white;
    padding:10px;
    text-align:center;
    border-radius:8px;
}
.foto{
    text-align:center;
    margin-bottom:15px;
}
.bar{
    display:flex;
    margin:6px 0;
}
.label{
    width:220px;
    font-weight:bold;
}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}
th,td{
    border:1px solid black;
    padding:8px;
    text-align:center;
}
th{
    background:#99ccff;
}
.btn{
    text-decoration:none;
    background:#ff66b2;
    color:white;
    padding:10px 18px;
    border-radius:8px;
    margin:10px;
    display:inline-block;
    font-weight:bold;
}
.nav{
    text-align:center;
    margin-top:20px;
}
.highlight{
    background:yellow;
    font-weight:bold;
}
marquee{
    background:#99ccff;
    padding:8px;
    margin-top:15px;
    font-weight:bold;
}
</style>

<script>
function updateSkillValue(slider,id){
    document.getElementById(id).innerText = slider.value + "%";
}
</script>
</head>

<body>
<div class="kotak">

<?php if($page == 1){ ?>
    <!-- ================= BIODATA LENGKAP ================= -->
    <h2>BIODATA SISWA</h2>

    <div class="foto">
        <img src="<?= $foto ?>" width="180" style="border-radius:50%; border:4px solid #ff66b2;">
    </div>

    <div class="bar"><div class="label">Nama Lengkap</div>: <?= $nama_lengkap ?></div>
    <div class="bar"><div class="label">Nama Panggilan</div>: <?= $nama_panggilan ?></div>
    <div class="bar"><div class="label">Agama</div>: <?= $agama ?></div>
    <div class="bar"><div class="label">TTL</div>: <?= $tempat_lahir ?>, <?= "$tgl/$bln/$thn" ?></div>
    <div class="bar"><div class="label">Umur</div>: <?= $umur ?> Tahun</div>
    <div class="bar"><div class="label">Alamat</div>: <?= $alamat ?></div>
    <div class="bar"><div class="label">Gender</div>: <?= $gender ?></div>
    <div class="bar"><div class="label">Kewarganegaraan</div>: <?= $kewarganegaraan ?></div>
    <div class="bar"><div class="label">No WA</div>: <?= $wa ?></div>
    <div class="bar"><div class="label">Email</div>: <?= $email ?></div>

    <h3>Hobi</h3>
    <ol>
        <?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
    </ol>

    <h3>Skill</h3>
    <?php foreach($skill as $s => $n){ ?>
        <?= $s ?><br>
        <input type="range" min="0" max="100" value="<?= $n ?>" 
        oninput="updateSkillValue(this,'val_<?= $s ?>')">
        <span id="val_<?= $s ?>"><?= $n ?>%</span><br><br>
    <?php } ?>

    <h3>Makanan Favorit</h3>
    <ul>
        <?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
    </ul>

    <h3>Minuman Favorit</h3>
    <ol type="A">
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
        <?php foreach($pendidikan as $p){ ?>
        <tr>
            <td><?= $p[0] ?></td>
            <td><?= $p[1] ?></td>
            <td><?= $p[2] ?></td>
            <td><?= $p[3] ?></td>
        </tr>
        <?php } ?>
    </table>

    <h3>Harapan 10 Tahun Kedepan</h3>
    <p>
    Hai namaku <?= $nama_panggilan ?>, saat ini tahun <?= $sekarang ?> aku adalah <?= $profesi_sekarang ?> 
    yang berumur <?= $umur ?> tahun. 10 tahun lagi di tahun <?= $tahun_10 ?> di umur <?= $umur_10 ?> 
    aku ingin menjadi <?= $profesi_10 ?> dan <?= $rencana ?>.
    </p>

    <marquee><?= $motto ?></marquee>

    <div class="nav">
        <a class="btn" href="?page=2">Selanjutnya ➜ (Jadwal Pelajaran)</a>
    </div>

<?php } elseif($page == 2){ ?>
    <!-- ================= JADWAL PELAJARAN ================= -->
    <h2>JADWAL PELAJARAN</h2>

    <table>
        <tr>
            <th>Jam</th>
            <?php foreach($jadwal as $hari => $mapel){ ?>
                <th><?= $hari ?></th>
            <?php } ?>
        </tr>

        <?php
        for($i=0;$i<10;$i++){
            echo "<tr>";
            echo "<td>".($i+1)."</td>";
            foreach($jadwal as $hari){
                echo "<td>".$hari[$i]."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <div class="nav">
        <a class="btn" href="?page=1">⬅ Sebelumnya (Biodata)</a>
        <a class="btn" href="?page=3">Selanjutnya ➜ (Jadwal Piket)</a>
    </div>

<?php } elseif($page == 3){ ?>
    <!-- ================= JADWAL PIKET ================= -->
    <h2>JADWAL PIKET</h2>

    <table>
        <tr>
            <th>Hari</th>
            <th>Petugas</th>
        </tr>

        <?php
        foreach($piket as $hari => $anggota){
            echo "<tr>";
            echo "<td>$hari</td>";
            echo "<td>";
            foreach($anggota as $orang){
                if($orang == $namaSaya){
                    echo "<span class='highlight'>$orang</span> ";
                } else {
                    echo "$orang ";
                }
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="nav">
        <a class="btn" href="?page=2">⬅ Sebelumnya (Jadwal Pelajaran)</a>
        <a class="btn" href="?page=1">Kembali ke Biodata</a>
    </div>

<?php } ?>

</div>
</body>
</html>
