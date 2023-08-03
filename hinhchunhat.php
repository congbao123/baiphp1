<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baitap</title>
</head>
<body>
<?php 
if (isset($_POST['dai']) && isset($_POST['rong'])){
     $dai = $_POST['dai'] ;
     $rong=$_POST['rong'] ;  
     $dt = $dai * $rong;
}
    ?>
<from id="chunhat" name="chunhat"method="post" action="$_SERVER['PHP_SELF']">
       <label>chieudai:<br/>
       <input name="dai" type="text" id="dai" value="<?php echo isset($_POST['dai']) ? $_POST['dai'] :"";?>"/>
       </label></br>
       <label>chieurong:</br>
       <input name="rong" type="text" id="rong" value="<?php echo isset($_POST['rong'])? $_POST['rong'] :"";?>"/>
       </label></br>
       <label>dientich:</br>
         <p> <?php echo isset($dt) ? $dt : ''?></p>
       </label></br>
       <input type="submit" name="submit" value="tinhketqua">
    </from>
</body>
</html>