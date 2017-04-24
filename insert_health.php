<?php include "connection.php"; 
    $cid = isset($_SESSION['id'])? $_SESSION['id']: '';
    $d = isset($_POST['date'])? $_POST['date']: '';
    $bg = isset($_POST['BloodGroup'])? $_POST['BloodGroup']: '';
    $sys = isset($_POST['SYS'])? $_POST['SYS']: '';
    $dia = isset($_POST['DIA'])? $_POST['DIA']: '';
    $fbs = isset($_POST['FBS'])? $_POST['FBS']: '';
    $w = isset($_POST['weight'])? $_POST['weight']: '';
    $h = isset($_POST['height'])? $_POST['height']: '';
    $ch = isset($_POST['chr'])? $_POST['chr']: '';
    $in = isset($_POST['into'])? $_POST['into']: '';
    $di = isset($_POST['disa'])? $_POST['disa']: '';
    $f = isset($_POST['food'])? $_POST['food']: '';
    $sm = isset($_POST['Smoke'])? $_POST['Smoke']: '';
    $dr = isset($_POST['Drink'])? $_POST['Drink']: '';
    $ex = isset($_POST['exercise'])? $_POST['exercise']: '';
    $wa = isset($_POST['homeArea1'])? $_POST['homearea1']: '';
    $nf = isset($_POST['homeArea2'])? $_POST['homearea2']: '';

    $insert = "INSERT INTO health_info VALUES($cid,year($d),$d,$bg,$sys,$dia,$fbs,$w,$h,$ch,$in,$f,$di,$boa,$bos,$ex,$wa,$nf)";
    $query = mysqli_query($con,$insert);
    if($query){
        echo "<script>alert('เพิ่มข้อมูลเรียบร้อย'); location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้'); location.href='adddata.php'; </script>";
    }
?>