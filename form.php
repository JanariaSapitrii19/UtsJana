<?php
    include "database.php";
?>
<form method="post" action="insert.php">
<ul class="list-group list-group-flush">
  <li class="list-group-item">Nama Dokter</li><input type="text" name="namadokter"/><br/>
  <li class="list-group-item">Nama Pasien</li><input type="text" name="namapasien"/><br/>
  <li class="list-group-item">Status Penyakit</li><input type="text"name="statuspenyakit"/><br/>
  <li class="list-group-item">Alamat</li><textarea name="alamat"></textarea><br/>
  <button type="submit">Simpan</button>
</ul>
   
    
</form>

<hr/>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Dokter</th>
            <th>Nama Pasien</th>
            <th>Status Penyakit</th>
            <th>Alamat</th>
            <th>Hapus</th>
            <th>Ubah</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM person";
    $data = $db->prepare($query);
    $data->execute();

    $no = 1;
    while($person = $data->fetch(PDO::FETCH_LAZY)){
    ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $person->namadokter ?></td>
            <td><?php echo $person['namapasien'] ?></td>
            <td><?php echo $person->statuspenyakit ?></td>
            <td><?php echo $person->alamat ?></td>
            <td><a href="delete.php?xyz=<?php echo $person->id ?>">Hapus</a></td>
            <td><a href="form-ubah.php?xyz=<?php echo $person->id ?>">Ubah</a></td>
        </tr>

    <?php 
        $no++;
} ?>
       
    </tbody>
</table>