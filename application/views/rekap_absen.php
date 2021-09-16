<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        td {
            border: 1px black solid;
            padding: 2px;
            text-align: center;
        }

        .rotate {
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            width: 1.5em;
        }

        .sab-ming {
            background-color: blue;
        }

        .libur-lain {
            background-color: red;
        }

        .rotate div {
            -moz-transform: rotate(-90.0deg);
            /* FF3.5+ */
            -o-transform: rotate(-90.0deg);
            /* Opera 10.5 */
            -webkit-transform: rotate(-90.0deg);
            /* Saf3.1+, Chrome */
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);
            /* IE6,IE7 */
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
            /* IE8 */
            margin-left: -10em;
            margin-right: -10em;
        }
    </style>
</head>

<body>
    <?php
    $tahun                  = date_format(date_create(2020 . '-' . 5 . '-1'), "Y"); //Mengambil tahun
    $bulan                  = date_format(date_create(2020 . '-' . 5 . '-1'), "m"); //Mengambil bulan
    $jumlah_hari_per_bulan  = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);     //Mengambil jumlah hari dalam 1 bulan
    ?>
    <table border="1" style="border-collapse: collapse; width:90%;">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">Nama</th>
                <th colspan="31">Tanggal</th>
            </tr>
            <tr>
                <?php
                $tgl_angka = 1;
                for ($i = 0; $i < $jumlah_hari_per_bulan; $i++) {
                    echo '<th>' . $tgl_angka++ . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pegawai as $p) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $p['fullname'] ?></td>
                    <?php
                    for ($i = 1; $i < $jumlah_hari_per_bulan + 1; $i++) {
                        if (hari_indo($tahun . '-' . $bulan . '-' . $i) == 'Minggu') {
                            echo '<td class="rotate sab-ming" rowspan="5"><div>M I N G G U</div></td>';
                        } else if (hari_indo($tahun . '-' . $bulan . '-' . $i) == 'Sabtu') {
                            echo '<td class="rotate sab-ming" rowspan="5"><div>S A B T U</div></td>';
                        } else {
                            echo '<td>.</td>';
                        }
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>