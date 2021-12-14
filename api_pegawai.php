<?php

    include "koneksi.php";

    $dataPegawai = "SELECT * FROM tb_pegawai";
    $query = mysqli_query($conn, $dataPegawai);

    while($data = mysqli_fetch_array($query)){
        // echo $data["nama"];

        $item[] = array(
            'nama' => $data["nama"],
            'nik'  => $data["nik"],
            'alamat'  => $data["alamat"],
            'nohp'  => $data["nohp"],
        );
    }

    $responese = array(
        'status' => 'OK',
        'data'   => $item
    );

    echo json_encode($responese);
?>