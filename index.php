
<?php
//1. sukurkite forma kuri irasinetu duomenis i .txt faila. (vardas, pavarde, amzius, spalva)
//2. atvaizduokite duomenis is .txt failo i lentele.

//$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
//$txt = $_POST['user_name'] . ' ' . $_POST['user_surname'] . ' ' . $_POST['user_age'] . ' ' . $_POST['user_color'] . "\n";
//fwrite($myfile, $txt);
//fclose($myfile);

//nuskaitymas txt failo duomenu-atvaizduojama ekrane kaip stringas//
$fileopen = fopen('newfile.txt', 'r');
$txt_string = fread($fileopen,filesize('newfile.txt'));
var_dump($txt_string);

//isskirstymas i zmoniu masyvus//
$array_zmones = explode("\n",$txt_string);
var_dump($array_zmones);

//isskirstymas stringo i zmogaus data masyva
foreach ($array_zmones as $array_zmogus){
    $array_zmogus_data = explode(' ', $array_zmogus);
    var_dump($array_zmogus_data);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
<!--  1. sukurkite forma kuri irasinetu duomenis i .txt faila. (vardas, pavarde, amzius, spalva)-->
    <form method="post">
        <input type="text" placeholder="Name" name="user_name">
        <input type="text" placeholder="Surname" name="user_surname">
        <input type="text" placeholder="Age" name="user_age">
        <input type="text" placeholder="Color" name="user_color">
        <input type="submit" value="Submit">
    </form>
<!--     2. atvaizduokite duomenis is .txt failo i lentele.-->
    <table class="d-flex justify-content-center align-items-center text-center">
        <tr>
            <th class="p-2 border">User name</th>
            <th class="p-2 border">Surname</th>
            <th class="p-2 border">Age</th>
            <th class="p-2 border">Color</th>
        </tr>
        <?php foreach ($array_zmones as $array_zmogus) : ?>
            <?php $array_zmogus_data = explode(' ', $array_zmogus); ?>
            <tr>
                <td class="p-2 border"><?php print $array_zmogus_data[0] ?></td>
                <td class="p-2 border"><?php print $array_zmogus_data[1] ?></td>
                <td class="p-2 border"><?php print $array_zmogus_data[2] ?></td>
                <td class="p-2 border"><?php print $array_zmogus_data[3] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
