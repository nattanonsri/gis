<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile_HomeModel extends Model
{
    protected $table = 'tb_profiles';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'prefix',
        'fname',
        'lname',
        'card_id',
        'birthdate',
        'disease',
        'disease_details',
        'succor',
        'relative',
        'caretaker',
        'medicines',
        'coordinates',
        'file_image'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getProfileHome()
    {
        return $this->findAll();
    }

}
