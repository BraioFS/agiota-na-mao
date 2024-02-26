<?php

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }

    public function getUserById($userId)
    {
        return $this->userRepository->findById($userId);
    }

    public function getUserByEmail($email)
    {
        return $this->userRepository->findByEmail($email);
    }

    public function createUser($userData)
    {
        $existingUser = $this->userRepository->findByEmail($userData['email']);
        if ($existingUser !== null) {
            throw new Exception("Email already in use.");
        }

        if (strlen($userData['password']) < 6) {
            throw new Exception("Password must be at least 6 characters long.");
        }

        return $this->userRepository->create($userData);
    }

    public function updateUser($userId, $newUserData)
    {
        $existingUser = $this->userRepository->findById($userId);
        if ($existingUser === null) {
            throw new Exception("User not found.");
        }

        if (isset($newUserData['email']) && $newUserData['email'] !== $existingUser['email']) {
            $existingUserWithEmail = $this->userRepository->findByEmail($newUserData['email']);
            if ($existingUserWithEmail !== null) {
                throw new Exception("Email already in use.");
            }
        }

        if (isset($newUserData['password']) && strlen($newUserData['password']) < 6) {
            throw new Exception("Password must be at least 6 characters long.");
        }

        return $this->userRepository->update($userId, $newUserData);
    }

    public function deleteUser($userId)
    {
        $existingUser = $this->userRepository->findById($userId);
        if ($existingUser === null) {
            throw new Exception("User not found.");
        }

        return $this->userRepository->delete($userId);
    }
}

?>