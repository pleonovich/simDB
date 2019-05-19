<?php 
/**
 * USERS CLASS
 */

class Users extends Fultone {

    public $name = 'data_userlist';

    protected function schema(DBtable $table) {
        $table
        ->field('id', DBfield::TYPE_INT, 10, false)
        ->field('user_name', DBfield::TYPE_VARCHAR, 255, false)
        ->field('user_login', DBfield::TYPE_VARCHAR, 255, false)
        ->field('email', DBfield::TYPE_VARCHAR, 255, false)
        ->field('secret', DBfield::TYPE_TEXT, null, false);
    }

    protected function setData() {
        return [
            'user_name'=>'Admin',
            'user_login'=>'admin',
            'email'=>'admin@admin.net',
            'secret'=>'12345'
        ];
    }

}