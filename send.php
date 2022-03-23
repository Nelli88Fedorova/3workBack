<?php
header('Content-Type: text/html; charset=UTF-8');
if($_SERVER['REQUEST_METHOD']=='GET')
{
if(!empty($_GET['save']))
{
    print('Данные сохранены');
}
include('index.html');
exit();
}
$flag=FALSE;

if(empty($_POST['name']))
{
    print('Введите имя!');
    $flag=TRUE;
}
if(empty($_POST['email']))
{
    print('Введите электронную почту!');
    $flag=TRUE;
}
if(empty($_POST['date']))
{
    print('Введите возраст!');
    $flag=TRUE;
}
if(empty($_POST['gender']))
{
    print('Укажите пол!');
    $flag=TRUE;
}
if(empty($_POST['hand']))
{
    print('Укажите количество конечностей!');
    $flag=TRUE;
}
if(empty($_POST['syperpover']))
{
    print('Выберите суперспособнос(ти/ть)!');
    $flag=TRUE;
}
if(empty($_POST['biography']))
{
    print('Расскажите о себе!');
    $flag=TRUE;
}
if(empty($_POST['check']))
{
    print('Необходимо ваше согласие!');
    $flag=TRUE;
}
if($glag){exit();}

$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$hand=$_POST['hand'];
$biography=$_POST['biography'];
$check=$_POST['check'];
$syperpover=implode(',',$_POST['select']);

$user='u47586'; $pass='3927785';
$db=new PDO('mysql:host=localhost;dbname=u47586',$user,$pass, array(PDO::ATTR_PERSISTENT=>true));

try{
    $stmt=$bd->prepare("INSERT INTO MainData SET name = ?, email = ?, date=?, gender=?, hand=?, check=?");
    $stmt->execute(array($name, $email,$date, $gender,$hand, $check));

    $super=$db->>prepare("INSERT INTO Superpovers SET powers=?");
    $super->execute(array($syperpover));
}
catch(PDOException $e)
{
    print('Error:'.$e->>GetMessage());
    exit();
}
header('Location: ?save=1');
  ?>
