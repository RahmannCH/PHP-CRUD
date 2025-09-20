<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Negeri 1</title>
    <link rel="stylesheet" href="styledb.css">
</head>

<body>
    <?php include "Layout/header.html" ?>

    <div class="form-container">
        <form action="proses-daftar.php" method="POST" class="formulir-pendaftaran">

            <fieldset>
                <legend class="legend1">Formulir Pendaftaran Siswa Baru</legend>

                <div class="form-group">
                    <label for="Nama">Nama: </label>
                    <input type="text" name="Nama" placeholder="Nama Lengkap" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat: </label>
                    <textarea name="Alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="Jenis_Kelamin">Jenis Kelamin: </label>
                    <div class="radio-group">
                        <label><input type="radio" name="Jenis_Kelamin" value="Pria">Pria</label>
                        <label><input type="radio" name="Jenis_Kelamin" value="Wanita">Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Agama">Agama: </label>
                    <select name="Agama" class="form-control">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Sekolah_Asal">Sekolah Asal: </label>
                    <input type="text" name="Sekolah_Asal" placeholder="Nama Sekolah" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Daftar" name="Daftar" class="btn-submit" />
                </div>

            </fieldset>

        </form>
    </div>
</body>
<?php include "Layout/footer.html" ?>
</html>
