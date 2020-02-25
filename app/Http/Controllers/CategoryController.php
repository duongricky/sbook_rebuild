<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\DataTables;
use Exception;
use Session;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->getData();

        return view('admin.category.list', compact('categories'));
    }

    public function ajaxIndex()
    {
        try {
            $categories = $this->category->getData([], [], ['id', 'name', 'slug', 'description']);

            return DataTables::of($categories)->make(true);
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(CategoryRequest $request)
    {
        $slug = str_slug($request->name);
        $request->merge(['slug' => $slug]);
        try {
            $this->category->store($request->all());
        } catch (Exception $exception) {
            return redirect()->route('admin.category.index')->withErrors([$exception->getMessage()]);
        }

        return redirect()->route('admin.category.index')->with('success', trans('admin.success'));
    }

    public function show($id)
    {
        try {
            $category = $this->category->find($id);

            return response()->json($category);
        } catch (Exception $exception) {
            return response()->json(false);
        }
    }

    public function edit($id)
    {
        try {
            $category = $this->category->find($id);

            return view('admin.category.edit', compact('category'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = $this->category->find($id);
            $slug = str_slug($request->name);
            $request->merge(['slug' => $slug]);
            $category->update($request->all());

        } catch (Exception $exception) {
            return redirect()->route('admin.category.index')->withErrors([$exception->getMessage()]);
        }

        return redirect()->route('admin.category.index')->with('success', trans('admin.success'));
    }

    public function destroy($id)
    {
        try {
            $category = $this->category->find($id);
            //remove books
            $category->books()->detach();

            return response()->json(true);
        } catch (Exception $e) {
            return response()->json(false);
        }
    }
}
