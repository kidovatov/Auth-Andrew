<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $hidden = array('password');

	public static $rules = array(
		'firstname' 			=> 'required|alpha|min:2',
		'lastname' 				=> 'required|alpha|min:2',
		'email' 				=> 'required|email|unique:users',
		'password' 				=> 'required|alpha_num|between:6,12|confirmed',
		'password_confirmation' => 'required|alpha_num|between:6,12'
	);
}