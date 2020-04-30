<?php
include "database.php";

$query = "SELECT * FROM person WHERE id='$_GET[xyz]'";
$data = $db->prepare($query);
$data->execute();

$person = $data->fetch(PDO::FETCH_LAZY);
?>

<h3>Form Ubah</h3>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $person->id ?>"/>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Dokter</label><br/>
        <input type="text" name="namadokter" value="<?php echo $person['namadokter'] ?>"/><br/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Pasien</label><br/>
        <input type="text" name="namapasien" value="<?php echo $person->namapasien ?>"/><br/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Status Penyakit</label><br/>
        <input type="text"name="statuspenyakit" value="<?php echo $person->statuspenyakit ?>"/><br/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label><br/>
        <textarea name="alamat"><?php echo $person->alamat ?></textarea><br/>
    </div>
    <button type="submit">Simpan</button>
        
           
</form>