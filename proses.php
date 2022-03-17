<h3 align="center">Daftar Pegawai</h3>
<table border="0" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr bgcolor="pink">
            <th>Nama </th>
            <th>Pekerjaan</th>
            <th>Hobby</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($no = 1; $no <= 10; $no++){
            //warni-warni
            $warna = $no % 2 == 0 ? 'white' : 'lightgreen';
        ?>
        <tr bgcolor="<?= $warna ?>">
            <td><?= $no ?></td>
            <td>Pekerjaan <?= $no ?></td>
            <td>Hobby. <?= $no ?></td>
       
            
        </tr>
        <?php } ?>
    </tbody>
</table>