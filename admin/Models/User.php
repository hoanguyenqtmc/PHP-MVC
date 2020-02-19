<?php

class User
{
    public $Id;
    public $Name;
    public $Email;
    public $Password;
    public $Fullname;
    public $Avatar;
    public $Role;
    public function RetrieveRequestParam()
    {
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Email = filter_input(INPUT_POST, 'email');
        $this->Password = filter_input(INPUT_POST, 'password');
        $this->Fullname = filter_input(INPUT_POST, 'fullname');
        $this->Role = filter_input(INPUT_POST, 'role');
        $this->Avatar = $_FILES['image']['name'];
        $id =  filter_input(INPUT_POST, 'id');

        if ($id != null) $this->Id = $id;
    }
}