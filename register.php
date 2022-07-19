<?php

$isEmpty = false;
$isSuccess = false;
$passwordNotValid = false;
$usernameIsExist = false;

if (isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost:3306;dbname=peminjaman", "root", "");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $checkUsername = $conn->prepare("SELECT * FROM user WHERE username=?");
    $checkUsername->bindParam(1, $username);
    $checkUsername->execute();

    if ($checkUsername->fetch()) {
        $usernameIsExist = true;
    } elseif ($password !== $password2) {
        $passwordNotValid = true;
    } elseif (trim($username) == "" || trim($password) == "" || trim($password2) == "") {
        $isEmpty = true;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $statement = $conn->prepare("INSERT INTO user   VALUES('', ?, ?)");
        $statement->bindParam(1, $username);
        $statement->bindParam(2, $password);
        $statement->execute();
        $isSuccess = true;
    }
}


?>

<div class="mb-2 padding-top">
    <h1>Tambah Admin</h1>
</div>
<div class="mb-5">
    <?php if ($isEmpty) : ?>
    <div class='alert alert-danger' role='alert'>
        Masih Ada Data yang Kosong
    </div>
    <?php endif ?>

    <?php if ($isSuccess) : ?>
    <div class='alert alert-success' role='alert'>
        Data Berhasil Ditambahkan
    </div>
    <?php endif ?>

    <?php if ($passwordNotValid) : ?>
    <div class='alert alert-danger' role='alert'>
        Konfirmasi Password Salah
    </div>
    <?php endif ?>

    <?php if ($usernameIsExist) : ?>
    <div class='alert alert-danger' role='alert'>
        Username Sudah Ada
    </div>
    <?php endif ?>

    <form action="register.php" method="POST">
        <div>
            <div class="text-start mt-3 ms-2">
                <label for="username">Username : </label>
            </div>
            <input class="form-control" id="username" type="text" name="username" placeholder="Masukan Username"
                aria-label="default input example">
        </div>
        <div>
            <div class="text-start mt-4 ms-2">
                <label for="password">Password : </label>
            </div>
            <input class="form-control" id="password" type="password" name="password" placeholder="Masukan Password"
                aria-label="default input example">
        </div>
        <div>
            <div class="text-start mt-4 ms-2">
                <label for="password2">Konfirmasi Password : </label>
            </div>
            <input class="form-control" id="password2" type="password" name="password2"
                placeholder="Masukan Konfirmasi Password" aria-label="default input example">
        </div>
        <div class="text-end me-3 mt-4">
            <button type="submit" name="submit" class="btn btn-success">Tambah Data</button>
        </div>
    </form>

</div>