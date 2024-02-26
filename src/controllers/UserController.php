<?php

class UserController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAllUsers()
    {
        $users = $this->userService->getAllUsers();
        return $users;
    }

    public function getUserById($userId)
    {
        $user = $this->userService->getUserById($userId);
        return $user;
    }

    public function createUser($userData)
    {
        $user = $this->userService->createUser($userData);
        return $user;
    }

    public function getUserByEmail($email)
    {
        $user = $this->userService->getUserByEmail($email);
        return $user;
    }

    public function updateUser($userId, $newUserData)
    {
        $newUser = $this->userService->updateUser($userId, $newUserData);
        return $newUser;
    }

    public function deleteUser($userId)
    {
        $userDeleted = $this->userService->deleteUser($userId);
        return $userDeleted;
    }
}

?>