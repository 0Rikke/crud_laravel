<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //index
    public function index(){

        $posts = Posts::select("id","name","mensagem")
        ->get();
        return view("index",["posts"=> $posts]);

    }
    //create
    public function criar(){

        return view("create");
    }
    //alterar

    public function store(Request $request){

        $data = $request->all();

        unset($data['_token']);

        Posts::create($data);


        return redirect("index");

    }
    public function alterar($id){
       $post = Posts::select("id","name","mensagem")
        ->where("id", "=", $id)
        ->get();
        return view("edit",["post"=> $post]);
    }

    function update(Request $request){
        $data = $request->all();

        unset($data['_token']);

        Posts::whereId($request->id)->update($data);

        return redirect('index');

    }
    //delete
    public function deletar($id){
        Posts::where('id', $id)->delete();

        return redirect('index');
    }
}
