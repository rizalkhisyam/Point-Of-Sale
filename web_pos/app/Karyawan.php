<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table= 'users';
    protected $primaryKey='id';
    protected $fillable =['name','email','password','level'];
}
