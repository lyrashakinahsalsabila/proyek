<h1>servis</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?menu=tambah-servis-kendaraan" class="btn btn-light">Tambah Data Servis</a>
        <br>
        </br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Servis</th>
                    <th scope="col">Tipe/Merek</th>
                    <th scope="col">Servis</th>
                    <th scope="col">Total</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Keterangan</th>

                </tr>
            </thead>

            <?php
            $q = mysqli_query($con, "select * from servis");
            $nomor = 1;
            while ($row = mysqli_fetch_assoc($q)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?= $row['tanggal_servis']; ?></td>
                    <td><?= $row['merek']; ?></td>
                    <td><?= $row['servis']; ?></td>
                    <td><?= $row['Total']; ?></td>
                    <td><?= $row['photo']; ?></td>
                    <td><?= $row['keterangan']; ?></td>

                </tr>

            <?php } ?>

        </table>
    </div>
</div>