<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $primaryKey = 'id_a';
    protected $fillable = ['judul_70', 'abstrak_70', 'created_at', 'updated_at'];
}
