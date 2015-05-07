<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Posts;
use Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller {

	//
	/**
	 * index function
	 *
	 * @return main view
	 * @author Raja Abu Salameh
	 **/
	public function index()
	{
		//$posts = Posts::latest()->get();
		  $posts = Posts::latest()->get();
		  return view('Posts.main')->withPosts($posts);
	}

	public function save()
	{
		$post = new Posts;
		$post->title = "مرحباً بكم في مدونتي ...";
		$post->body = "أحمد أبو سلامة ... يحب أن يلعب لعبة الفيفا ";
		$post->author = "أحمد أبو سلامة";
		$post->active = "1";
		$post->created_at = Carbon\Carbon::now();
		$post->save();
		return view('Posts.saved');
	}
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function selMenu()
	{
		$res = Posts::latest()->get();
		return view('Posts.selection',compact('res'));
	}
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function yazan()
	{
		//$data = ['Hassan','Ahmad','yazan','mahmoud','someone'];
		$data = Posts::all();
		return view('Posts.yazan')->with('data',$data);
	}

	/**
	 * Boot Function
	 *
	 * @return view
	 * @author Raja Abu Salameh
	 **/
	public function boot()
	{
		return view('Posts.boot');
	}
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function savePost()
	{	
		$post = new Posts;
		$post->title = "My title";
		$post->body = "My Body";
		$post->author = "Somebody";
		$post->created_at = Carbon\Carbon::now();
		$post->save();
		return "Done";
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function func()
	{
		$data = Posts::all();
		return view('Posts.func')->with('data',$data);
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function sam()
	{
		return "Hello World";
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function addPost()
	{
		$post = new Posts;
		$post->title = "Welcome to the new post";
		$post->body = "This is just a simple body";
		$post->author = "Function Faraj";
		$post->created_at = Carbon\Carbon::now();
		$post->save();
		return "Post Added";
	}

}
