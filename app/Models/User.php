<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    public $timestamps=false;
protected $table = 'instructor';
// column sa table
protected $fillable = [
'instructor_firstname','instrcutor_lastname','id'
];
}
