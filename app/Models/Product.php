<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    //use SoftDeletes;

    protected $primaryKey = 'product_id';

    protected $fillable = [
    	'name',
    	'description',
    	'category',
    	'image_path',   
    	'status', 	
    ];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function hiredproduct() {
    	return $this->hasMany(HiredProduct::class);
    }

    public function userproduct() {
    	return $this->hasMany(UserProduct::class);
    }
}
