<?php
$namaSaya = "Cindy"; //nama saya digunakan untuk menandai di jadwal piket

// jadwal pelajaran
$jadwal = [
    "Senin" => ["Matematika","Matematika","Sejarah","PABP","PABP","PABP","Bahasa Inggris","Bahasa Inggris","Bahasa Indonesia","Bahasa Indonesia"],
    "Selasa" => ["IPAS","IPAS","IPAS","IPAS","PPS","PPS","Bahasa Jawa","Bahasa Jawa","Seni Musik","Seni Musik"],
    "Rabu" => ["PGD","PGD","PGD","PGD","PGD","PGD","GIM","GIM","GIM","GIM"],
    "Kamis" => ["Olahraga","Olahraga","Olahraga","Sejarah","Bahasa Inggris","Bahasa Inggris","Matematika","Matematika","Bahasa Indonesia","Bahasa Indonesia"],
    "Jumat" => ["Doa Pagi","Informatika","Informatika","KKA","KKA","IPAS","IPAS","PGD","PGD","Pulang"]
];

// jadwal piket
$piket = [
    "Senin" => ["Cindy,", "Shesanata,", "Tsabita,", "Naila,", "Kartika,","Rasya,", "Yusuf,","Habibi."],
    "Selasa" => ["keisha","Shafanira,", "Aurora", "Sila", "Syauqi," , "Nail,", "Wahyu."],
    "Rabu" => ["Anin,", "Shifa,", "Tania," , "Fasya,","Eka,","Dzaky,","Vino."],
    "Kamis" => ["Aida,", "Maharani,","Alyaa,","Denia,","Ravid,","Ibnu,","Tegar."],
    "Jumat" => ["Aqila,", "Alais,", "Gendhis,","Cloudya,","Aziz,","Raka,","Rayhan."]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Cindy</title>

<style>
body{
    font-family: Verdana;
    background:#ffe6f0;
}

.container{
    width:90%;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:12px;
}

h2{
    text-align:center;
    background:#ff66b2;
    color:white;
    padding:10px;
    border-radius:8px;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

th{
    background:#ffb3d9;
}

th,td{
    border:1px solid #444;
    padding:8px;
    text-align:center;
}

.highlight{
    background:yellow;
    font-weight:bold;
}

a{
    background:#ff66b2;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:6px;
}
</style>

</head>

<body>

<div class="container">

<h2>Jadwal Pelajaran</h2>

<table>
<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
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

<br>

<h2>Jadwal Piket</h2>

<table>
<tr>
<th>Hari</th>
<th>Petugas</th>
</tr>

<?php
foreach($jadwalPiket as $hari => $anggota){

echo "<tr>";
echo "<td>$hari</td>";
echo "<td>";

foreach($anggota as $orang){
    if($orang == $namaSaya){
        echo "<span class='highlight'>$orang</span> ";
    }else{
        echo "$orang ";
    }
}

echo "</td>";
echo "</tr>";
}
?>

</table>

<br>
<a href="biodata.php">Kembali ke Biodata</a>

</div>

</body>
</html>