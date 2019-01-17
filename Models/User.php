<?php

class User
{
    public $Id;
    public $Name;
    public $Email;
    public $Password;

    public function RetrieveRequestParam()
    {
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Email = filter_input(INPUT_POST, 'email');
        $this->Password = filter_input(INPUT_POST, 'password');

        $id =  filter_input(INPUT_POST, 'id');

        if ($id != null) $this->Id = $id;
    }
}
