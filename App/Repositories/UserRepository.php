<?php

namespace App\Repositories;

class UserRepository
{

    public function findUser(string $username): array
    {

        $user = query()
            ->select('*')
            ->from('users')
            ->where('user = :user')
            ->setParameter('user', $username)
            ->execute()
            ->fetchAssociative();

        if($user != null) {
            return $user;
        }else {
            return [];
        }
    }


}