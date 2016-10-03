<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$products = Product::all();
		return view('admin.products.management', ['products' => $products ]);
	}
	public function products( Request  $request ){

		//var_dump( $request ); exit;
		$iTotalRecords = 2430;
		$iDisplayLength = intval($request['length']);
		$iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
		$iDisplayStart = intval($request['start']);
		$sEcho = intval($request['draw']);

		$records = array();
		$records["data"] = array(); 

		$end = $iDisplayStart + $iDisplayLength;
		$end = $end > $iTotalRecords ? $iTotalRecords : $end;

		$status_list = array(
			array("success" => "Publushed"),
			array("info" => "Not Published"),
			array("danger" => "Deleted")
			);

		for($i = $iDisplayStart; $i < $end; $i++) {
			$status = $status_list[rand(0, 2)];
			$id = ($i + 1);
			$records["data"][] = array(
				'<input type="checkbox" name="id[]" value="'.$id.'">',
				$id,
				'Test Product',
				'Mens/FootWear',
				'185.50$',      
				rand(5,4000),
				'05/01/2011',
				'<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
				'<a href="ecommerce_products_edit.html" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>',
				);
		}

		if (isset($request["customActionType"]) && $request["customActionType"] == "group_action") {
		    $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
		    $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
		}

		$records["draw"] = $sEcho;
		$records["recordsTotal"] = $iTotalRecords;
		$records["recordsFiltered"] = $iTotalRecords;
	 	return Response::json( $records );	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}
	public function store( ProductRequest $request){
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
	public function update( $id, ProductRequest $request )
	{
		
	}
	public function destroy( $id ){
		
	}
}