<?php
/**
 * 后台首页控制器
 * @author Kekkaishi
 *
 */

namespace Admin\Controller;

class IndexController extends AdminBaseController
{
    public function index()
    {
        $this->display();
    }
}