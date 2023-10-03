<?php
session_start();

if (empty($_POST) || empty($_POST["user"]) || empty($_POST["password"])) {
    header("location: index.php");
};


include('config.php');

$user = $_POST["user"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE user = '{$user}' AND password = '" . md5($password) . "'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;


if ($qtd > 0) {
    $_SESSION["user"] = $user;
    $_SESSION["name"] = $row->name;
    $_SESSION["type"] = $row->user_type;
    header("location: dashboard.php");
} else {
    print "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
    header("location: index.php");
}
