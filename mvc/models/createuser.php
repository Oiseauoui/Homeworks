<?php

class CreateUser extends Model {

    public function create($data, $id = null)
    {
        if (!isset($data['login']) || !isset($data['email']) || !isset($data['password']) || !isset($data['is_active'])) {
            return false;
        }

        $id = (int)$id;
        $login = $this->db->escape($data['login']);
        $email = $this->db->escape($data['email']);
        $password = $this->db->escape($data['password']);
        $is_active= isset($data['is_active']) ? 1 : 0;

        if (!$id) { // Add new record
            $sql = "
                insert into messages
                   set login = '{$login}',
                       email = '{$email}',
                       password = '{$password}'
                       is_active= '{$is_active}'

            ";
        } else { // Update existing record
            $sql = "
                update messages
                   set login = '{$login}',
                       email = '{$email}',
                       password = '{$password}'
                       is_active= '{$is_active}'
                   where id = {$id}
            ";
        }

        return $this->db->query($sql);

    }
    public function getList(){
        $sql = "select * from users where 1";
        return $this->db->query($sql);
    }


}