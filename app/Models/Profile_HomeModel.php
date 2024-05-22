<?php
namespace App\Models;

use CodeIgniter\Model;

class Profile_HomeModel extends Model
{

    protected $table = 'db_profiles';
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
        'assist',
        'relative',
        'caretaker',
        'medicines',
        'coordinates',
        'image',
    ];

    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getProfile_Home()
    {
        return $this->findAll();
    }


}