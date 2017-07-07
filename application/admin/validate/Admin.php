<?php
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{

    protected $rule =   [
        'account'              => 'require|length:5,20',
        'password'              => 'length:6,16',
        'role_id' => 'require',
    ];

    protected $message  =   [
        'account.require'      => 'Username require',
        'username.length'       => 'Please enter a correct username',
        'password.length'       => 'Please enter a correct password',
    ];

    protected $scene = [
        'add' => ['account','password', 'role_id'],
        'login' =>  ['account','password'],
        'edit' => ['account', 'password', 'role_id']
    ];

}


