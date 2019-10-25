<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;
    protected $table= 'users';
    protected $primaryKey='id';
    protected $fillable =['name','email','password','level'];
}
