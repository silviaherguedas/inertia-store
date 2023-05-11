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
        $categories = Category::paginate(10);
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
        return to_route('category.index')->with('message', "Created category successfully");
    }

    public function edit(Category $category)
    {
        $type_form  = "edition";
        return inertia($this->template, compact('category', 'type_form'));
    }

    public function update(Put $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('category.index')->with('message', "Updated category successfully");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index')->with('message', "Deleted category successfully");
    }
}
