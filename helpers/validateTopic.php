<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'El nombre es requerido');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        if (isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'El Nombre ya existe');
        }

        if (isset($topic['add-topic'])) {
            array_push($errors, 'El Nombre ya existe');
        }
    }

    return $errors;
}
