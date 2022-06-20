<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'El Tema es requerido');
    }

    if (empty($post['body'])) {
        array_push($errors, 'El Cuerpo es requerido');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Por favor selecionar un tema');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Ya existe un post con ese titulo');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Ya existe un post con ese titulo');
        }
    }

    return $errors;
}