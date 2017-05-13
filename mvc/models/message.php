<?php

class Message extends Model {

    public function save($data, $id = null){
        if ( !isset($data['name']) || !isset($data['email']) || !isset($data['message']) ){
            return false;
        }
        if (!empty($data)) {
            if (empty($data['name'])) {
                throw new Exception('Name cant be empty!');
            }
            if (empty($data['email'])) {
                $_SESSION['error_msg'] = 'Email cant be empty!';
            }
            if (!filter_var($data, FILTER_VALIDATE_EMAIL) === false) {
                $_SESSION['error_msg'] ='Email is invalid!';
            }
            if (empty($data['message'])) {
                $_SESSION['error_msg'] ='Message cant be empty!';
            }

        }

        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);

        if ( !$id ){ // Add new record
            $sql = "
                insert into messages
                   set name = '{$name}',
                       email = '{$email}',
                       message = '{$message}'
            ";
        } else { // Update existing record
            $sql = "
                update messages
                   set name = '{$name}',
                       email = '{$email}',
                       message = '{$message}'
                   where id = {$id}
            ";
        }

        return $this->db->query($sql);

    }

    public function getList(){
        $sql = "select * from messages where 1";
        return $this->db->query($sql);
    }
 /*  public function setMessage($data)
    {
        if (!empty($data))
        {
            if (empty($data['name']))
            {
                throw new Exception('Name cant be empty!');
            }
            if (empty($data['email']))
            {
                throw new Exception('Email cant be empty!');
            }
            if (!filter_var($data, FILTER_VALIDATE_EMAIL) === false)
            {
                throw new Exception('Email is invalid!');
            }
            if (empty($data['message']))
            {
                throw new Exception('Message cant be empty!');
            }
 */

}