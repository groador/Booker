<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    public $nume = "";
	public $prenume = "";
	public $date;

	protected $completabil = [
		'nume',
		'prenume',
		'program'
	];
	
    use HasFactory;
}
