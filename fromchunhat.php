<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST["dai"]) && isset($_POST["rong"])) {
    $dai = $_POST["dai"];
    $rong = $_POST["rong"];
    $dt = $dai * $rong;
} else {
    $dai = "";
    $rong = "";
    $dt = "";
}
?>
<form id="chunhat" name="chunhat" method="post" action="fromchunhat.php">
    <label>chieudai:<br/>
        <input name="dai" type="text" id="dai" value="<?php echo $dai; ?>"/>
    </label><br/>
    <label>chieurong:</br>
        <input name="rong" type="text" id="rong" value="<?php echo $rong; ?>"/>
    </label><br/>
    <label>dientich:</br>
        <input name="dt" type="text" id="dt" value="<?php echo $dt; ?>" size="20"/>
    </label><br/>
    <input type="submit" name="submit" value="tinhketqua">
</form>
</body>
</html>