<?php

class UserRepository
{
    private $users;

    public function __construct()
    {
        $this->users = [];
    }

    public function getAll()
    {
        return $this->users;
    }

    public function findById($userId)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $userId) {
                return $user;
            }
        }
        return null;
    }

    public function findByEmail($email)
    {
        foreach ($this->users as $user) {
            if ($user['email'] == $email) {
                return $user;
            }
        }
        return null;
    }

    public function create($userData)
    {
        $userData['id'] = uniqid();
        $this->users[] = $userData;
        return $userData;
    }

    public function update($userId, $newUserData)
    {
        foreach ($this->users as &$user) {
            if ($user['id'] == $userId) {
                $user = array_merge($user, $newUserData);
                return $user;
            }
        }
        return null;
    }

    public function delete($userId)
    {
        foreach ($this->users as $key => $user) {
            if ($user['id'] == $userId) {
                unset($this->users[$key]);
                return true;
            }
        }
        return false;
    }
}

?>