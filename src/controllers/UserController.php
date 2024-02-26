<?php

class UserController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return $users;
    }

    public function show($userId)
    {
        $user = $this->userService->getUserById($userId);
        return $user;
    }

    public function store($userData)
    {
        $user = $this->userService->createUser($userData);
        return $user;
    }

    public function update($userId, $newUserData)
    {
        $newUser = $this->userService->updateUser($userId, $newUserData);
        return $newUser;
    }

    public function destroy($userId)
    {
        $userDeleted = $this->userService->deleteUser($userId);
        return $userDeleted;
    }
}

?>