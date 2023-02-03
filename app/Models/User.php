<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory;
    protected $table = 'userdata';
    protected $fillable = [
        'full_name',
		'image',
        'email',
        'mobile_no',
        'address',
        'password',
		'description',
    ];
	
       
       
       
        
       

	/**
	 * @return mixed
	 */
	public function getTable() {
		return $this->table;
	}
	
	/**
	 * @param mixed $table 
	 * @return self
	 */
	public function setTable($table): self {
		$this->table = $table;
		return $this;
	}

	/**
	 */
	public function __construct() {
	}
}
