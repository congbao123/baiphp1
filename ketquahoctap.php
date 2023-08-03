<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       #diemtongket{
        background-color: red;
        width: 300px;
         padding-left:20px;
         margin-top:50px;
       }
       h1{
        background-color: yellow;
        margin-right:20px;
        text-align: center;
}

    </style>
</head>
<body>
    <?php
if (isset($_POST["hk1"]) && isset($_POST["hk2"])) {
    $hk1 = $_POST["hk1"];
    $hk2 = $_POST["hk2"];
    $tb  = ($hk1 + $hk2*2)/3;
    $tb  = round($tb,2);
    if($tb>=8){
         $kq = "được lên lớp";
         $xl ="hoc sinh gioi";
    }
    else if(6.5<$tb && $tb<8) {
        $kq = "được lên lớp";
        $xl ="hoc sinh kha";
    }
    else if(5<$tb && $tb<6.5) {
        $kq = "được lên lớp";
        $xl ="hoc sinh trung binh";
    }
    else{
        $kq = "ở lại lớp";
        $xl ="hoc sinh yeu";
    }
}
 else {
    $hk1 = "";
    $hk2 = "";
    $tb  = "";
    $kq  = "";
    $xl  = "";
}
?>
<form id="diemtongket" name="diemtongket" method="post" action="">
    <h1>Kết Quả Học Tập</h1>
    <label> diem hk1:<br/>
        <input name="hk1" type="text" id="hk1" value="<?php echo $hk1; ?>"/>
    </label><br/>
    <label>diem hk2:</br>
        <input name="hk2" type="text" id="hk2" value="<?php echo $hk2; ?>"/>
    </label><br/>
    <label>diem trung binh:</br>
        <input name="dt" type="text" id="dt" value="<?php echo $tb; ?>" size="20"/>
    </label><br/>
    <label>ket qua:</br>
        <input name="kq" type="text" id="kq" value="<?php echo $kq; ?>" size="20"/>
    </label><br/>
    <label>xep loai hoc luc:</br>
        <input name="xl" type="text" id="xl" value="<?php echo $xl; ?>" size="20"/>
    </label><br/> <br/>
    <input type="submit" name="submit" value="xem ket qua">
</body>
</html>