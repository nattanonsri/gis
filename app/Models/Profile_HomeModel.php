<?php
namespace App\Models;

use CodeIgniter\Model;

class Profile_HomeModel extends Model
{

    protected $table = 'db_profiles';

    public function getProfile_Home()
    {
        return $this->findAll();
    }


}