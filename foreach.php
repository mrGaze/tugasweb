<?php

$mhs = [
    [
        "nama"=> "Rizky",
        "nim"=> "123456",
        "Jurusan"=> "Teknik Info",
        "nilai" => 75,
    ],
    [
        "nama"=> "Ahmad",
        "nim"=> "654321",
        "Jurusan"=> "Teknik Info",
        "nilai" => 85,
    ],
    [
        "nama"=> "Zae",
        "nim"=> "987654",
        "Jurusan"=> "Teknik Elektro",
        "nilai" => 60,
    ],
];
foreach ($mhs as $mh => $value)
{
echo "<br>Nama      : {$value['nama']}";
echo "<br>NIM       : {$value['nim']}";
echo "<br>Jurusan   : {$value['Jurusan']}";
echo "<br>Nilai     : {$value['nilai']}";
if ($value['nilai'] > 70){
    echo "<br>Keterangan : Lulus";
}else{
    echo "<br>Keterangan : Tidak Lulus";
}
echo "<br>";
}
?>
<br>
<table border="1" cellpadding ="10" cell spacing="0">
<tr>
    <td>NAMA</td>
    <td>NIM</td>
    <td>JURUSAN</td>
    <td>NILAI</td>
    <td>KETERANGAN</td>
</tr>    
<?php foreach ($mhs as $mh => $value) { ?>
<tr>
    <td><?php echo $value['nama'] ?></td>
    <td><?php echo $value['nim'] ?></td>
    <td><?php echo $value['Jurusan'] ?></td>
    <td><?php echo $value['nilai'] ?></td>
    <td><?php 
    if ($value['nilai'] > 70){
        echo "Lulus";
    }else{
        echo "Tidak Lulus";
    }
    ?></td>
</tr>
<?php } ?>
</table>
