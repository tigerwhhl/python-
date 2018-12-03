<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
       <?php
        // put your code here
        // 
        $q = $_GET['keyword'];

if(empty($q)) {
echo '';
exit;
}
$con = mysqli_connect('localhost:3306','123','123');
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
// 选择数据库
mysqli_select_db($con,"zhuanli");
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");
$sql="SELECT title FROM a WHERE title like '".$q."%'".";";
$result = mysqli_fetch_all(mysqli_query($con,$sql));
header('Content-Type:application/json');
print_r(json_encode($result,JSON_UNESCAPED_UNICODE));


        ?>
    
