<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas1 extends Model
{
    protected $table = 'tugas1';
	protected @fillable = ['nama', 'alamat'];
	
}
