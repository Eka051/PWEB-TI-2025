<?php
$isLulus = true; // boolean

function sapaOrang($nama)
{
    echo "Halo $nama";
}

class Hewan
{
    public $tinggi;
    public $berat;

    public function __construct($tinggi, $berat)
    {
        $this->tinggi =  $tinggi;
        $this->berat = $berat;
    }

    public function Makan()
    {
        echo "<h1>Hewan dengan tinggi $this->tinggi m dan berat $this->berat kg sedang makan</h1>";
    }
}

$hewan1 = new Hewan(1.7, 25);
// $hewan1->tinggi = 1.5;
// $hewan1->berat = 20;
$hewan1->Makan();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo 'Website dari PHP';
    $nama = "Alya"; // string
    $umur = 18; // int
    $hobi = ['menyanyi', 'memasak', 'healing']; // array

    echo "Halo nama saya $nama <br>";
    echo 'Halo nama saya <br> ' . $nama;
    echo 'Umur saya ' . $umur . '<br>';
    echo 'Hobi saya ' . $hobi[0] . '<br>';


    foreach ($hobi as $h) {
        echo "Hobi saya $h <br>";
    };

    for ($i = 0; $i <= 10; $i++) {
        echo "$i ";
    }

    echo "<br>";
    sapaOrang("Andre");
    echo "<br>";
    sapaOrang($nama);
    ?>

    <h1>Kamu Lulus atau Tidak? <?php if ($isLulus) {
                                    echo "Lulus";
                                } else {
                                    echo "Tidak";
                                } ?>
    </h1>


    <form action="" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama_orang">
    </form>

    <?php
    // if (isset($_GET["nama_orang"])) {
    //     $nama = $_GET["nama_orang"];
    //     echo "$nama";
    // }

    if (isset($_POST["nama_orang"])) {
        $nama = $_POST["nama_orang"];
        echo "$nama";
    }

    setcookie("theme", "dark");
    echo "<br>";
    echo $_COOKIE["theme"];
    session_start();

    $_SESSION["nama"] = "Pweb";   

    ?>

</body>

</html>