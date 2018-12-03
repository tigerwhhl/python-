<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            body{
                background-image: The-Dark-Knite,png;
            }
            .a1{font-size: 30px;
                text-decoration: none;
            }
            .a2{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        $q = $_GET["searchword"];
//
//if(empty($q)) {
//echo '';
//exit;
//}
//$con = mysqli_connect('localhost:3306','123','123');
//if (!$con)
//{
//die('Could not connect: ' . mysqli_error($con));
//}
//// 选择数据库
//mysqli_select_db($con,"zhuanli");
//// 设置编码，防止中文乱码
//mysqli_set_charset($con, "utf8");
//$sql="SELECT title,abstract,link FROM a WHERE title like '".$q."%'".";";
//$result = mysqli_fetch_all(mysqli_query($con,$sql));
//for($cout=0;$cout<sizeof($result,COUNT_NORMAL);$cout++){
//    
//    echo "<div class='a1'><a href=".$result[$cout][2].">".$result[$cout][0]."</div>";
//    echo "<div class='a2'>".substr($result[$cout][1],0, 900)."....</div>";
//    echo '<br>';
    
//}
  header("Content-type: text/html; charset=utf-8");
        $result= shell_exec("python ip.py ".$q);
        if($result==null){
            echo '网络故障';
        }
        ?>
    </body>
</html>
