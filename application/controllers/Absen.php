<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{

    public function index()
    {
        $data['pegawai'] = [
            0 => [
                "username" => "pegawai1",
                "password" => "1234",
                "fullname" => "Pegawai 1",
                "gender" => "Laki-laki",
                "nip" => "196808261993021001"
            ],
            1 => [
                "username" => "pegawai2",
                "password" => "1234",
                "fullname" => "Pegawai 2",
                "gender" => "Laki-laki",
                "nip" => "196808261993021002"
            ],
            2 => [
                "username" => "pegawai3",
                "password" => "1234",
                "fullname" => "Pegawai 3",
                "gender" => "Laki-laki",
                "nip" => "196808261993021003"
            ],
            3 => [
                "username" => "pegawai4",
                "password" => "1234",
                "fullname" => "Pegawai 4",
                "gender" => "Laki-laki",
                "nip" => "196808261993021004"
            ],
            4 => [
                "username" => "pegawai5",
                "password" => "1234",
                "fullname" => "Pegawai 5",
                "gender" => "Laki-laki",
                "nip" => "196808261993021005"
            ],
        ];
        // $this->load->view('rekap_absen', $data);
        $this->load->view('rekap_absen_contoh', $data);
    }
}
