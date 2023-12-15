<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getAllUser() {
        return $this->findAll();
    }

    public function getUserById(int $id) {
        return $this->find($id);
    }

    public function getUserByUsername(string $username) {
        return $this->where('username', $username)->first();
    }

    public function getUserByEmail(string $email) {
        return $this->where('email', $email)->first();
    }

    public function validatePassword(string $email, string $password) {
        $user = $this->getUserByEmail($email);
        if ($user == null) return null;
        return $user['hashedPassword'] == md5($password);
    }
}
