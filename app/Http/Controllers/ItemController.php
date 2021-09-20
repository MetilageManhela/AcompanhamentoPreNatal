<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Item;

class ItemController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Item::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Editar</a>';
                          
                           $a=$row->name;
                          
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Apagar</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    
                   
        }
      
        return view('itemAjax',compact('items'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           Item::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['name' => $request->name, 'description' => $request->description]);        
   
        return response()->json(['success'=>'Item saved successfully.']);
    }
  
    public function edit($id)
    {
        $item = Item::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       Item::find($id)->delete();
     
       return response()->json(['success'=>'Item deleted successfully.']);
    }
}