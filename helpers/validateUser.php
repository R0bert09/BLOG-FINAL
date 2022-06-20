<?php

function validateUser($user)
{
    $errors = array();

    if(empty($user['nombres'])){
        array_push($errors,'Los nombres son requeridos');
    }

    if(empty($user['apellidos'])){
        array_push($errors,'Los apellidos son requeridos');
    }

    if(empty($user['username'])){
        array_push($errors,'El usuario es requerido');
    }
    
    if(empty($user['email'])){
        array_push($errors,'El email es requerido');
    }
    
    if(empty($user['password'])){
        array_push($errors,'La contraseña es requerida');
    }

    /*if(empty($user['passwordConf'])){
        array_push($errors,'La Confirmacion de la Contraseña es requerida');
    }*/

    if(($user['passwordConf'] !== $user['password'])){
        array_push($errors,'Las Contraseñas no Coinciden');
    }

    $existingEmail = selectOne('users2', ['email' => $user['email']]);
    if ($existingEmail) {
        if (isset($user['update-user']) && $existingEmail['id'] != $user['id']) {
            array_push($errors, 'Email ya existe');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Email ya existe');
        }
    }

    $existingUser = selectOne('users2', ['username' => $user['username']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'El Username ya existe');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'El Username ya existe');
        }
    }

    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $user['email'])) {
        //echo $user['email']." is a valid email address";
    }
        else
    {
        array_push($errors, 'Email Invalido');
    }

    $uppercase = preg_match('@[A-Z]@', $user['password']);
    $lowercase = preg_match('@[a-z]@', $user['password']);
    $number    = preg_match('@[0-9]@', $user['password']);
    $symbol    = preg_match('@[\W]@', $user['password']);
    
    if(!$uppercase || !$lowercase || !$number || !$symbol ||strlen($user['password']) < 8) {
        // tell the user something went wrong
        array_push($errors, 'Contraseña poco segura');
    }else {

    }

    

    return $errors;
}

function validateLogin($user)
{
    $errors = array();

    if(empty($user['username'])){
        array_push($errors,'El usuario es requerido');
    }
    
    if(empty($user['password'])){
        array_push($errors,'La contraseña es requerida');
    }

    return $errors;
}