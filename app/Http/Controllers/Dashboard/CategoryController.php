<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Put;
use App\Http\Requests\Category\Store;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $template = "Dashboard/Category/CategorySettings";

    public function index()
    {
        $type_form  = "list";
        $categories = Category::paginate(2);
        return inertia($this->template, compact("categories", 'type_form'));
    }

    public function create()
    {
        $type_form  = "creation";
        return inertia($this->template,compact('type_form'));
    }

    public function store(Store $request)
    {
        Category::create($request->validated());
    }

    public function edit(Category $category)
    {
        $type_form  = "edition";
        return inertia($this->template, compact('category', 'type_form'));
    }

    public function update(Put $request, Category $category)
    {
        $category->update($request->validated());
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}
