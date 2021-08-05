<?php

require('../Models/User.php');

if(!isset($_POST['userController'])) {
    header('location:/?error=injection');
    return false;
}

$model = new User();

switch($_POST['userController']) {
    case 'register':
        $validate = validateRegister($model, $_POST);

        if(count($validate)) {
            header('location:/register.php?error=validation&content=' . json_encode($validate));
            die();
        }

        $result = $model->postUser($_POST);

        if($result) {
            header('location:/');
        } else {
            header('location:/register.php');
        }
        break;
    
    case 'login':
        $validate = validateLogin($model, $_POST);

        if(count($validate)) {
            header('location:/?error=validation&content=' . json_encode($validate));
            die();
        }

        header('location:/dashboard.php');

        break;

    default:
        throw new Exception('Para de fazer merda');
}

function validateRegister(User $user, array $data) 
{
    $errors = [];
    $userExists = $user->getUser($data['email'], 'email');

    if($userExists) {
        $errors[] = 1;
    }

    if ($data['password'] != $data['passwordConfirm']) {
        $errors[] = 2;
    }

    return $errors;
}

function validateLogin(User $user, array $data)
{
    $errors = [];
    $user = $user->getUser($data['email'], 'email');

    if (!$user) {
        $errors[] = 1;
    }

    if (password_verify($data['password'], $user['password'])) {
        session_start();
        $_SESSION['online'] = true;
        $_SESSION['id'] = $user['id'];
    } else {
        $errors[] = 2;
    }

    return $errors;
}