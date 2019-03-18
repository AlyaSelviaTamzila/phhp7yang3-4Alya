<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect,$query);

?>

<!DOCTYPE html>
<html>
<h3>Tambah Data Dosen</h3>
 
<form action="creat.php" method="post">
	<table>
    <tr>
    <td><label for="kode">Kode</label></td> <td> : </td>
    <td><input type="text" name="kode" id="kode"></td>
    </tr>
    <tr>
    <td><label for="nama_matkul">Matakuliah</label></td> <td> : </td>
    <td><input type="text" name="nama_matkul" id="nama_matkul"></td>
    </tr>
    <tr>
    <td><label for="sks">SKS</label></td> <td> : </td>
    <td><input  type="text" name="sks" id="sks" ></td>
    </tr>
    <tr>
    <td><label for="semester">Semester</label></td> <td> : </td>
    <td><input  type="text" name="semester" id="semester" ></td>
    </tr>
    <tr>
    <td><label for="nama_dosen">Dosen Pengajar</label></td> <td> : </td>
       <td><select name="id_dosen" id="nama_dosen">
        <option value="-">--Pilih salah satu--</option>
        <?php
            while ($data = mysqli_fetch_assoc($result)){
            ?>
            <option value="<?php echo $data['id_dosen']; ?>">
                <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
            }
        ?>
        </td>
        </select>
    </tr>
    <tr>
	<td></td> <td></td> <td><input type="submit" value="Simpan"></td>
    </tr>
    </table>
</form>
