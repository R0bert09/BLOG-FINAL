<?php
include(ROOT_PATH . "/database/db.php");
include(ROOT_PATH . "/helpers/middleware.php");
include(ROOT_PATH . "/helpers/validateTopic.php");

$table = 'topics';

$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);

if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Tema creado correctamente';
        $_SESSION['type'] = 'success';
        header('location: index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Tema eliminado correctamente';
    $_SESSION['type'] = 'success';
    header('location: index.php');
    exit();
}


if (isset($_POST['update-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Tema actualizado correctamente';
        $_SESSION['type'] = 'success';
        header('location: index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

}