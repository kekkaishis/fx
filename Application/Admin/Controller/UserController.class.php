<?php
/**
 * 后台用户控制器
 * @author Kekkaishi
 *
 */

namespace Admin\Controller;

class UserController extends AdminBaseController
{
    public function index()
    {
        $this->display();
    }
}