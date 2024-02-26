<?php

class LoginController
{
    private $userController;

    public function __construct(UserController $userController)
    {
        $this->users = [
            new User(
                1,
                "Bryan",
                "bryan@gmail.com",
                "123456",
                1,
                true,
                "2024-02-26 12:00:00",
                "2024-02-26 12:00:00"
            )
        ];
        $this->userController = $userController;
    }

    public function authenticate($email, $password)
    {
        $user = $this->userController->getUserByEmail($email);

        if ($user !== null && $user->verifyPassword($password)) {
            session_start();
            $_SESSION['authentication'] = 'YES';
            $_SESSION['id'] = $user->getId();
            $_SESSION['name'] = $user->getName();
            $_SESSION['profile_id'] = $user->getProfileId();
            $_SESSION['email'] = $user->getEmail();
            header('Location: ../chamadoReal/src/view/home.php');
            exit;
        } else {
            session_start();
            $_SESSION['authentication'] = 'NO';
            header('Location: index.php?login=erro');
            exit;
        }
    }
}
?>