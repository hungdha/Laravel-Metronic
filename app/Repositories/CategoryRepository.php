<?php
namespace App\Repositories;
use App\Models\Category;
class CategoryRepository implements RepositoryInterface
{	
	public function all($columns = array('*')){
		return Category::get($columns);
	}
	public function paginate($perPage = 15, $columns = array('*')){
		
	}
	public function create(array $data){

	}
	public function update(){

	}
 	public function delete($id){

 	}
 
    public function find($id, $columns = array('*')){

    }
 
    public function findBy($field, $value, $columns = array('*')){

    }

}