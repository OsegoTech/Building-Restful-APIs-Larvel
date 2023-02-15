<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AuthorCollection
    {
        return new AuthorCollection(Author::all());
    }




    /**
     * Display the specified resource.
     */
    public function show(Author $author): AuthorResource
    {
        return new AuthorResource($author);
    }




}
