<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
class CategoryController extends Controller
{
	/*
	private $dataCategoryEx = array(
    	'CategoryName' => 'Laravel Cat',
     	'Description' => 'Category Description', 
     	'Picture' => 'Path/Image', 
	    'Visible' => 1, 
	    'ParentID' => null
	);
	private $table = 'categories';
	*/

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$categories = Category::all();
		return view('admin.categories.list', ['categories' => $categories ]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}
	public function store( CategoryRequest $request){
		 //Insert Query
        $category = new Category;
        $category->CategoryName = $request['CategoryName'];
        $category->Description= $request['Description'];
        $category->ParentID = $request['ParentID'];
        $category->Visible = $request['Visible'];
        $category->Picture = $request['Picture'];
        $category->UserID = Auth::user()->id;
        $category->save();
        return redirect()->route('category.index');
	}	
	
	public function edit( $id )
	{
		
	}
	public function update( $id, CategoryRequest $request )
	{
		
	}
	public function destroy( $id ){
		
	}
}