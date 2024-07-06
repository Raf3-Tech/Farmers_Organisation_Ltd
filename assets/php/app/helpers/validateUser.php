<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
      array_push($errors, 'Username is required!');
    }

    if (empty($user['email'])) {
      array_push($errors, 'Email is required!');
    }

    if (empty($user['password'])) {
      array_push($errors, 'Password is required!');
    }

    if (empty($user['psw-repeat'])) {
      array_push($errors, 'Password confirmation is required!');
    }

    if ($user['psw-repeat'] !== $user['password']) {
      array_push($errors, 'Passwords do not match!');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exists!');
    }

    return $errors;
}

function validatelogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
      array_push($errors, 'Username is required!');
    }

    if (empty($user['password'])) {
      array_push($errors, 'Password is required!');
    }

    return $errors;
}