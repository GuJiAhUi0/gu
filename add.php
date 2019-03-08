<!DOCTYPE html>
<html>
<body>
<?php
try{
    $dsn='mysql:host=localhost;dbname=user';
    $username='root';
    $password='';
    $pdo=new PDO($dsn,$username,$password);
    $num=$_POST['num'];
    $stuname=$_POST['stuname'];
    $class=$_POST['class'];
    $english=$_POST['english'];
    $clanguage=$_POST['clanguage'];
    $math=$_POST['math'];
    $chinese=$_POST['chinese'];
    $sum=$english+$clanguage+$math+$chinese;
    $sql_select="select * from stuscore where num=:fk_sno";
        $stmt=$pdo->prepare($sql_select);
        $stmt->execute(array(":fk_sno"=>$num));
        $number=$stmt->rowcount();
        if($number>0){
            echo '<script>alert("该学号已存在，请输入正确的学号！");history.go(-1);</script>';
        }
        else{
            $sql_insert = "insert into stuscore(fk_sno,english,math,clanguang,chinese,sum,name,class) values('$num','$english','$math','$clanguage','$chinese','$sum','$stuname','$class')";
            $res=$pdo->exec($sql_insert);
            if($res>0){
                echo '<script>alert("添加成功");window.location.href="menu.php";</script>';
            }
            else{
                echo '<script>alert("添加失败");history.go(-1);</script>';
            }
        }
}
 catch(PDOException $e){
    echo $e->getMessage();
    echo "连接失败";
 }


?>

</body>
</html>