<?php

class UserDao
{
    var $dbu;

    public function __construct() {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }

    public function Insert(User $user)
    {
        $sql = "insert into user(name, email, password) values(:name, :email, :password)";

        $args = array(
            "name"=>$user->Name,
            "email"=>$user->Email,
            "email"=>$user->Email,
            "password"=>$user->Password
        );

        $this->dbu->Execute($sql, $args);

        $user->Id = $this->dbu->GetLastInsertedId();

        return $user;
    }

    public function Delete($id)
    {
        $sql = "Delete from user where id = :id";

        $args = array(
            'id'=>$id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Update(User $user)
    {
        $sql = "update user set name =:name, password =:password, email = :email where id =:id";

        $args = array(
            'id'=>$user->Id,
            "name"=>$user->Name,
            "email"=>$user->Email,
            "email"=>$user->Email,
            "password"=>$user->Password
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }

    public function Find()
    {
        $sql = "select * from user";

        $users = $this->dbu->Query($sql, array());

        return $users;
    }

    public function FindOne($id)
    {
        $sql = "select * from user where id = :id";

        $args = array(
            'id'=>$id
        );

        $user = $this->dbu->Query($sql, $args, true);

        return $user;
    }

    public function FindByName($name)
    {
        $sql = "select * from user where name like :name";

        $args = array(
            'name'=>"%$name%"
        );

        $user = $this->dbu->Query($sql, $args);

        return $user;
    }


    public function CheckLogin($id, $password)
    {
        $sql = "select * from user where id = :id and password = :password";

        $args = array(
            'id'=>$id,
            'password'=>$password
        );

        $user = $this->dbu->Query($sql, $args, true);

        return $user != null;
    }
}
