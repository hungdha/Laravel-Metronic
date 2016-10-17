<?php
/*
	HTTP Verb	Path (URL)				Action (Method)	Route Name
	GET			/product				index	product.index
	GET			/product/create			create	product.create
	POST		/product				store	product.store
	GET			/product/{id}			show	product.show
	GET			/product/{id}/edit		edit	product.edit
	PUT/PATCH	/product/{id}			update	product.update
	DELETE		/product/{id}			destroy	product.destroy
*/
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
		return view('admin.products.manage', ['products' => $products ]);
	}
	public function products( Request  $request ){
		
		
        $iTotalRecords = DB::table('products')
            ->leftJoin('categories', 'categories.CategoryID', '=', 'products.ProductID')
            ->leftJoin('suppliers', 'suppliers.SupplierID', '=', 'products.SupplierID')->count();

		$iDisplayLength = intval($request['length']);
		$iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength; 
		$iDisplayStart = intval($request['start']);
		$iSort = $request["order"][0];
		$columnHeaders = array( 
			1 => 'products.ProductID', 
			2 => 'products.ProductName',
			3 => 'categories.CategoryName', 
			4 => 'products.UnitPrice',
			5 => 'products.QuantityPerUnit',
			6 => 'products.DateCreated',
			7 => 'products.Status'
		);	
		
		$iDisplayColumn = $columnHeaders[$iSort['column']];		
		$iDisplayDir 	= (strtolower($iSort['dir']) == 'desc' ) ? 'desc' : 'asc';

		$products  = DB::table('products')->orderBy( $iDisplayColumn, $iDisplayDir )		
            ->leftJoin('categories', 'categories.CategoryID', '=', 'products.ProductID')
            ->leftJoin('suppliers', 'suppliers.SupplierID', '=', 'products.SupplierID')
            ->select('products.*', 'categories.CategoryName', 'suppliers.CompanyName')->skip($iDisplayStart)->take($iDisplayLength)            
            ->get();
		//var_dump($products);exit;
		$sEcho = intval($request['draw']);

		// data
		$records = array();
		$records["data"] = array(); 

		$end = $iDisplayStart + $iDisplayLength;
		$end = $end > $iTotalRecords ? $iTotalRecords : $end;

		
		$i = 0;
		foreach($products as $product ){
			$status = $product->Status;
			$id = ($i + 1);
			$records["data"][] = array(
				'<input type="checkbox" name="id[]" value="'.$id.'">',
				$id,
				$product->ProductName,
				$product->CategoryName,
				$product->UnitPrice."$",      
				$product->QuantityPerUnit,
				date("d/m/Y",$product->DateCreated),
				'<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
				'<a href="/admin/product/'.$product->ProductID.'/edit" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>',
				);
			$i++;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$action = route('admin.product.store');
		return view('admin.products.entry', [ 'action' => $action ]);
	}
	public function store( ProductRequest $request){
		 //Insert Query
		$product = new Product;		
		$product->ProductName= $request['Description'];
		$product->ParentID = $request['ParentID'];
		$product->SupplierID = $request['Visible'];
		$product->CategoryID = $request['Picture'];
		$product->QuantityPerUnit = Auth::user()->id;
		$product->UnitPrice = '';
		$product->UnitsInStock = '';
		$product->UnitsOnOrder = '';
		$product->ReorderLevel = '';
		$product->Discontinued = '';		
		$product->save();
		return redirect()->route('admin.products.manage');
	}	
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function edit( $id )
	{
		$action = route('admin.product.update', ['id' =>  $id ] );
		return view('admin.products.entry',['action' => $action ] );
	}
	public function update( $id, ProductRequest $request )
	{		
		return view('admin.products.entry');
	}

	// delete
	public function destroy( $id ){
		
	}
}