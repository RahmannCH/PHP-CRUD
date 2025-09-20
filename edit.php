<?php

include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE Id=$id";
$query = mysqli_query($ch, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Negeri 1</title>
    <link rel="stylesheet" href="styledb.css">
</head>

<body>
    <?php include "Layout/header.html"; ?>

    <div class="form-container">
        <form action="proses-edit.php" method="POST" class="formulir-pendaftaran">
            <fieldset>
                <legend class="legend1">Formulir Edit Siswa</legend>

                <input type="hidden" name="Id" value="<?php echo $siswa['Id']; ?>" />

                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" name="Nama" placeholder="Nama Lengkap" value="<?php echo $siswa['Nama']; ?>" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat:</label>
                    <textarea name="Alamat" class="form-control"><?php echo $siswa['Alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                    <div class="radio-group">
                        <?php $jk = $siswa['Jenis_Kelamin']; ?>
                        <label><input type="radio" name="Jenis_Kelamin" value="Pria" <?php echo ($jk == 'Pria') ? "checked" : ""; ?>> Pria</label>
                        <label><input type="radio" name="Jenis_Kelamin" value="Wanita" <?php echo ($jk == 'Wanita') ? "checked" : ""; ?>> Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Agama">Agama:</label>
                    <?php $agama = $siswa['Agama']; ?>
                    <select name="Agama" class="form-control">
                        <option <?php echo ($agama == 'Islam') ? "selected" : ""; ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : ""; ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : ""; ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : ""; ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected" : ""; ?>>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sekolah_Asal">Sekolah Asal:</label>
                    <input type="text" name="Sekolah_Asal" placeholder="Nama Sekolah" value="<?php echo $siswa['Sekolah_Asal']; ?>" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" name="Simpan" class="btn-submit" />
                </div>
            </fieldset>
        </form>
    </div>
    <?php include "Layout/footer.html"; ?>
</body>
</html>
