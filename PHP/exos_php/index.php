<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$sql = "SELECT * FROM classes";
$statmnt = $link -> prepare($sql);
$statmnt = execute();
$data = $statmnt -> FetchAll();
foreach($data as $i) {

    echo $i["libelle"]
    echo "<a href= classe.php?id="$i["id]"]">voir les eleves</a>";


}
</body>
</html>


