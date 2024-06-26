<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
<table>
    <tr>
        <th >No</th>
        <th >Nama</th>
        <th >Email</th>
        <th >No Telpon</th>
        <th >Tanggal Pernikahan</th>
        <th >Status</th>
    </tr>
        <?php
        $no = 1;
        foreach ((array)$laporan as $laporan ): ?>
        <tr>
            <td ><?= $no++; ?></td>
            <td><?= $laporan->name; ?></td>
            <td ><?= $laporan->email; ?></td>
            <td ><?= $laporan->phone_number; ?></td>
            <td ><?= $laporan->wedding_date; ?></td>
            <td ><?= $laporan->status; ?></td>
        </tr>
        <?php endforeach; ?>
</table>
</body></html>
