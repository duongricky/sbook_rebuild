<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Repositories\Eloquents\TagEloquentRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Symfony\Component\HttpFoundation\Response as HTTP;

class TagController extends Controller
{

    protected $tag;

    public function __construct(TagEloquentRepository $tag)
    {
        $this->tag = $tag;
    }

    public function index()
    {
        if (request()->ajax()) {
            $tags = $this->tag->getData();

            return Datatables::of($tags)
                ->addColumn('action', function ($tag){
                    return view('admin.layout.tag.action', compact('tag'));
                })
                ->make(true);
        }

        return view('admin.tag.list');
    }

    public function store(TagRequest $request)
    {
        try {
            $this->tag->store($request->only('name'));

            return redirect()->back()->with('success', trans('admin.success'));
        } catch (\Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        try {
            $tag = $this->tag->find($id);

            return response()->json([
                'data' => $tag,
                'url' => route('admin.tags.update', $tag->id),
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('settings.error.404')], HTTP::HTTP_NOT_FOUND);
        }
    }

    public function update(TagRequest $request, $id)
    {
        try {
            $this->tag->update($id, $request->only('name'));

            return response()->json(['message' => trans('admin.success')]);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()], HTTP::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        try {
            $this->tag->destroy($id);

            return response()->json(['message' => trans('admin.success')]);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()], HTTP::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
