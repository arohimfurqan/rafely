<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = ['username', 'password', 'email', 'role'];
  protected $validationRules = [
    'username' => 'required|min_length[5]|max_length[100]',
    'password' => 'required|min_length[8]|max_length[255]',
    'email'    => 'required|valid_email'
  ];
  protected $validationAdd = [
    'username' => 'required|min_length[5]|max_length[100]',
    'password' => 'required|min_length[8]|max_length[255]',
  ];
  protected $validationMessages = [
    'username' => [
      'required'    => 'Username is required.',
      'min_length'  => 'Username must be at least 5 characters long.',
      'max_length'  => 'Username cannot exceed 100 characters.'
    ],
    'password' => [
      'required'    => 'Password is required.',
      'min_length'  => 'Password must be at least 8 characters long.',
      'max_length'  => 'Password cannot exceed 255 characters.'
    ],
    'email'    => [
      'required'    => 'Email is required.',
      'valid_email' => 'Please enter a valid email address.'
    ]
  ];
}
