<?php

namespace Modules\HirMVC\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Modules\HirMVC\Entities\Post;
use Modules\HirMVC\Entities\User;
use Modules\HirMVC\Http\Interfaces\hirmvc;

class HirMVCController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(hirmvc $hmvcInterface)
    {
//        $user = User::all();
//        $post = Post::all();

        $user = $hmvcInterface->users();
        $post = $hmvcInterface->posts();

        return view('hirmvc::index')->withUsers($user)->withPosts($post);
    }

    /**
     * Create User.
     * @return Response
     */
    public function create()
    {
        // TODO: create USER
    }

    /**
     * Create Post.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // TODO: create POST
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('hirmvc::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('hirmvc::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
