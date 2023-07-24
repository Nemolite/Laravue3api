<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $collection = Post::query();
        $allowedFilterFields = (new Post())->getFillable();
        $allowedSortFields = ['id','name', 'content','cat_id'];
        $allowedSortDirections = ['asc','desc'];
        // Извлечение праметров из строки запроса
        //?sortby = name&sortdir=desc
        $sortBy = $request->query('sortby','1d');
        $sortDir = strtolower($request->query('sortdir','asc'));
        if (!in_array($sortBy,$allowedSortFields)) $sortBy = 'id';
        if (!in_array($sortDir,$allowedSortDirections)) $sortDir = 'asc';
        foreach ($allowedFilterFields as $key){
            if($paramFilter = $request->query('_'.$key)){
                $paramFilter = preg_replace("([%_?+])","\\$1",$paramFilter);
                $collection->where($key,'LIKE','%'.$paramFilter.'%');
            }
        }
        //?_limit = 3
        $limit = intval($request->query('limit',3));
        $limit = min($limit,3);
        $collection->limit($limit);
        //?_offset = 0
        $offset = intval($request->query('offset',0));
        $offset = max($offset,0);
        $collection->offset($offset);

        return $collection->get();

//        $posts= Post::all();
//        return response()->json([
//            'posts' => $posts,
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
