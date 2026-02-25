<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// ================= DATA BIODATA =================
$nama_lengkap = "Cindy Cahya Amika Pambudi";
$nama_panggilan = "Cindy";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tgl = 5;
$bln = 2;
$thn = 2010;
$alamat = "Semarang";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$wa = "0895322184674";
$email = "cinvan0829@email.com";
$motto = "Langkah kecil hari ini adalah kesuksesan besar di masa depan.";
$foto = "foto.jpg";

$hobi = ["Menari", "Bermain Game", "Bermain Voli"];

$skill = [
    "HTML" => 80,
    "CSS" => 70,
    "PHP" => 70
];

$makanan = ["Bakso", "Nasi Goreng", "Mie Ayam"];
$minuman = ["Matcha", "Jus Alpukat", "Good Day Coklat"];

$pendidikan = [
    ["SD", "SDN Petompon 02 Semarang", "2016 - 2022"],
    ["SMP", "SMP Negeri 10 Semarang", "2022 - 2025"],
    ["SMK", "SMK Negeri 08 Semarang", "2025 - 2028"]
];

$sekarang = date("Y");
$umur = $sekarang - $thn;
$umur_10 = $umur + 10;

// ================= JADWAL =================
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
<title>Project Cindy</title>
<style>
body{
    font-family: Arial;
    background:#ffe6f0;
}
.kotak{
    width:90%;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:12px;
    margin-top:20px;
}
h2{
    background:#ff66b2;
    color:white;
    padding:10px;
    text-align:center;
    border-radius:8px;
}
.bar{
    margin:6px 0;
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
    background:#ffb3d9;
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
</style>
</head>
<body>

<div class="kotak">

<?php if($page == 1){ ?>
    <!-- ================= BIODATA LENGKAP ================= -->
    <h2>BIODATA SISWA</h2>

    <div class="bar"><b>Nama Lengkap:</b> <?= $nama_lengkap ?></div>
    <div class="bar"><b>Nama Panggilan:</b> <?= $nama_panggilan ?></div>
    <div class="bar"><b>Agama:</b> <?= $agama ?></div>
    <div class="bar"><b>TTL:</b> <?= $tempat_lahir ?>, <?= "$tgl/$bln/$thn" ?></div>
    <div class="bar"><b>Umur:</b> <?= $umur ?> Tahun</div>
    <div class="bar"><b>Alamat:</b> <?= $alamat ?></div>
    <div class="bar"><b>Gender:</b> <?= $gender ?></div>
    <div class="bar"><b>Kewarganegaraan:</b> <?= $kewarganegaraan ?></div>
    <div class="bar"><b>No WA:</b> <?= $wa ?></div>
    <div class="bar"><b>Email:</b> <?= $email ?></div>

    <h3>Hobi</h3>
    <ul>
        <?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
    </ul>

    <h3>Skill</h3>
    <ul>
        <?php foreach($skill as $s => $nilai){ echo "<li>$s : $nilai%</li>"; } ?>
    </ul>

    <h3>Makanan Favorit</h3>
    <ul>
        <?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
    </ul>

    <h3>Minuman Favorit</h3>
    <ul>
        <?php foreach($minuman as $mn){ echo "<li>$mn</li>"; } ?>
    </ul>

    <h3>Riwayat Pendidikan</h3>
    <table>
        <tr>
            <th>Tingkat</th>
            <th>Sekolah</th>
            <th>Tahun</th>
        </tr>
        <?php foreach($pendidikan as $p){
            echo "<tr>
                    <td>$p[0]</td>
                    <td>$p[1]</td>
                    <td>$p[2]</td>
                  </tr>";
        } ?>
    </table>

    <h3>Harapan 10 Tahun Kedepan</h3>
    <p>Umur saya 10 tahun lagi adalah <?= $umur_10 ?> tahun. 
    Saya berharap menjadi orang sukses, membanggakan orang tua, 
    dan memiliki karir yang baik di bidang teknologi.</p>

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
