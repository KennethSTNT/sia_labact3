<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    public $timestamps=false;
protected $table = 'student';
// column sa table
protected $fillable = [
'id', 'Name'
];
}