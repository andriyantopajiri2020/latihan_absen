<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('hari_indo')) {
    function hari_indo($tanggal)
    {
        // variabel pecahkan 0 = tahun
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tanggal

        $hari = date_format(date_create($tanggal), 'D');
        switch ($hari) {
            case 'Sun':
                $hari_indo = "Minggu";
                break;

            case 'Mon':
                $hari_indo = "Senin";
                break;

            case 'Tue':
                $hari_indo = "Selasa";
                break;

            case 'Wed':
                $hari_indo = "Rabu";
                break;

            case 'Thu':
                $hari_indo = "Kamis";
                break;

            case 'Fri':
                $hari_indo = "Jumat";
                break;

            case 'Sat':
                $hari_indo = "Sabtu";
                break;

            default:
                $hari_indo = "Tidak di ketahui";
                break;
        }

        return $hari_indo;
    }
}
