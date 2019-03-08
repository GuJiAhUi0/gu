<!DOCTYPE html>
<html>
<head>
<style>
    body{
        text-align:center;
    }
    form{margin-left:630px;}
</style>
</head>
<body>
    <title>学生信息管理</title>
    <h1 style="font-size: 50px;">学生信息管理</h1>
    <form action="add.php" method="post">
         <table>
             <tr>
                 <td>学号：</td>
                 <td><input type="text" name="num" /></td>
             </tr>
             <tr>
                 <td>姓名：</td>
                 <td><input  type="text" name="stuname" /></td>
             </tr>
             <br>
             <tr>
                 <td>班级：</td>
                 <td><input  name="class" type="text"/></td>
             </tr>
              <tr>
                 <td>英语：</td>
                 <td><input  name="english" type="text"/></td>
             </tr>
              <tr>
                 <td>C语言：</td>
                 <td><input  name="clanguage" type="text"/></td>
             </tr>
              <tr>
                 <td>数学：</td>
                 <td><input  name="math" type="text"/></td>
             </tr>
              <tr>
                 <td>语文：</td>
                 <td><input  name="chinese" type="text"/></td>
             </tr>
             <tr>
                 <td>&nbsp;</td>
                 <td><input type="submit" value="提交"/>
                 </td>
             </tr>
         </table>
     </form>
      <p><a href="menu.php" align="center" >返回服务选择页面</a></p>
</body>
</html>
