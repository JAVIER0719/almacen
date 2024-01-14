<?php
class UserController extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Register()
    {
        $this->view->Render($this, "register", null);
    }
}



?>