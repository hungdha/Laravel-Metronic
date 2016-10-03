<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Category extends Model{
	
	protected $table = 'categories';
	protected $fillable = [
        'CategoryName',
        'Description',
        'Picture',
        'Visible',
        'ParentID'
    ];
}