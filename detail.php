<?php 
    require_once('data.php');
    $id = $_GET['id'];

    foreach( $mahasiswa as $m)
    {
        if($m['id'] == $id)
        {
            echo $m['nama']. "<br>";
            echo $m['nim']. "<br>";
            echo $m['alamat']. "<br>";
            echo $m['jurusan']. "<br>";
        }
    }

?>