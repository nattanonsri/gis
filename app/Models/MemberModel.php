<?php
namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'db_member';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'username', 'password'];

    public function getMember()
    {
        return $this->findAll();
    }

    // public function addMember($data)
    // {
    //     return $this->insert($data);
    // }
    

}
