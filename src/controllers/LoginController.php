<?php

class LoginController
{
    private $userController;
    private $users = [];

    public function __construct(UserController $userController)
    {
        $this->users[] = [
            'id' => 1,
            'name' => 'João', 
            'email' => 'joao@example.com',
            'password' => 'senha123',
            'profileId' => 1,
            'isLoanShark' => false,
            'active' => true,
            'updatedAt' => date('Y-m-d H:i:s'),
            'createdAt' => date('Y-m-d H:i:s')
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