<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat kalkulator perbandingan</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class= "box"> 
        <div class= "tanda">
            <h1>></h1>
        </div>
        

<?php
 if (isset($_POST['submit'])) {                                                                  
    $bil1= $_POST['angka_pertama'];
    $bil2= $_POST['angka_kedua'];
    
    if ($bil1 > $bil2) {
        $perbandingan = ">";
        echo "<h5 class = 'operator'>$perbandingan</h5>";
        echo "<h1>$bil1 lebih besar dari $bil2</h1>";
    }else if ($bil1 < $bil2){
        $perbandingan = "<";
        echo "<h5 class = 'operator'>$perbandingan</h5>";
        echo "<h1>$bil1 lebih kecil dari $bil2</h2>";
    } else {
        $perbandingan = "=";
        echo "<h5 class = 'operator'>$perbandingan</h5>";
        echo "<h1>$bil1 sama dengan $bil2</h2>";
    } 
}
?>
 <h3>cek perbandingan angka</h3>
        <form method="POST" >
            <input type="number" id="angka_pertama" placeholder= "angka pertama" class = "kotak1" name="angka_pertama" required>
            <input type="number" id="angka_kedua" placeholder= "angka kedua" class = "kotak2" name="angka_kedua" required>
            <input type="submit" name="submit" class = "kirim" value="Kirim">
        </form>
    </div>      
</body>
</html>