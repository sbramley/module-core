<?php

namespace TMS\Common\Controllers;

use Illuminate\Routing\Controller as BaseController;
use TMS\Common\Repositories\User\UserService;

class UserController extends BaseController {

    protected $user_repo = null;

    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }

    public function show()
    {
        return $this->user_service->show();
    }

    public function get($id)
    {
        return $this->user_service->get($id);
    }

    public function save($id = null)
    {
        return $this->user_service->save($id);
    }

}
