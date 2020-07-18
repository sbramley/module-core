<?php

namespace TMS\Common\Repositories\User;

use MarcinOrlowski\ResponseBuilder\ApiCodesHelpers;
use MarcinOrlowski\ResponseBuilder\BaseApiCodes;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use TMS\Common\Repositories\User\UserRepositoryInterface;

class UserService {

    protected $user_repo = null;

    public function __construct(UserRepositoryInterface $user_repo)
    {
        $this->user_repo = $user_repo;
    }

    public function show()
    {
        try {
            $users = $this->user_repo->getAllUsers();
            return ResponseBuilder::success($users);
        } catch(\Exception $ex) {
            return ResponseBuilder::error($ex->getCode());
        }
    }

    public function get($id)
    {
        try {
            $validatedData = $request->validate([
                'id' => 'required|max:255'
            ]);

            $user = $this->user_repo->getUserById($id);
            return ResponseBuilder::success($user);
        } catch (\Exception $ex) {
            return ResponseBuilder::error($ex->getCode());
        }
    }

    public function save($id = null)
    {
        try {
            $validatedData = $request->validate([
                'id' => 'max:255'
            ]);

            return $this->user_repo->createOrUpdate($id);
        } catch (\Exception $ex) {
            return ResponseBuilder::error($ex->getCode());
        }
    }

}
