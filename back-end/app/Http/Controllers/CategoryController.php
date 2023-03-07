<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Response;
use App\Http\Resources\PostsResource;
use Illuminate\Http\RedirectResponse;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }
    public function show(Category $category)
    {
        return PostsResource::collection($category->posts());
    }
}
