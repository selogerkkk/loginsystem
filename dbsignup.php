<?php
session_start();

if (empty($_POST) || empty($_POST["user"]) || empty($_POST["email"]) | empty($_POST["password"])) {
    header("location: signup.php");
    exit;
};


include('config.php');

$name = $_POST["name"];
$user = $_POST["user"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$user_type = 1;
$date = date("Y-m-d");

$sql = "INSERT INTO users (name, email, user, password, user_type, date) VALUES ('$name', '$email', '$user', '$password', $user_type, '$date')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Cadastro realizado com sucesso. Redirecionando para login.');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
    exit;
} else {
    echo "<script>alert('Erro ao inserir o usuário: " . $conn->error . "');</script>";
}

$conn->close();
