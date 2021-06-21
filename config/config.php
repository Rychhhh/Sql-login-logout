<?php 
    $koneksi = mysqli_connect("localhost","root","","db_login");

    session_start();


    function query($query) {
        global $koneksi;

        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function delete($id) {
        global $koneksi;

        mysqli_query($koneksi, "DELETE FROM tbl_user WHERE id = $id");

        return mysqli_affected_rows($koneksi);
    }

    function search($key) {
        $user = "SELECT * FROM tbl_user WHERE 
        username Like '%$key%' OR
        name Like '%$key%' OR
        password Like '%$key%' OR
        email Like '%$key%' 
        ";
        return query($user);
    }
?>