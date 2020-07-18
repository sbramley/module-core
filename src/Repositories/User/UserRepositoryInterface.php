<?php

namespace TMS\Common\Repositories\User;

interface UserRepositoryInterface {

    public function getAllUsers();

    public function getUserById($id);

    public function createOrUpdate($id = null);
}

