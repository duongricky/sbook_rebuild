<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\BookUserRepository;
use App\Repositories\Contracts\NotificationRepository;
use App\Repositories\Contracts\BookmetaRepository;
use Auth;

class MyRequestController extends Controller
{
    protected $bookUser;

    public function __construct(
        BookUserRepository $bookUser,
        NotificationRepository $notification,
        BookmetaRepository $bookMeta
    ) {
        $this->middleware('auth');
        $this->bookUser = $bookUser;
        $this->notification = $notification;
        $this->bookMeta = $bookMeta;
    }

    public function index()
    {
        $data = [
            'owner_id' => Auth::id(),
        ];
        $with = [
            'book',
        ];
        $books = $this->bookUser->getDataRequest($data, $with);
        $bookStatus = $books->where('type', config('view.request.reading'))->pluck('book_id')->toArray();

        return view('user.my_request', compact('books', 'bookStatus'));
    }

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->merge(['id' => $id]);
        $notification = $this->notification->destroy([
            'receive_id' => Auth::id(),
            'target_type' => config('model.target_type.book_user'),
            'target_id' => $id,
        ]);
        $record = $this->bookUser->updateBookRequest($request->all());
        if ($record) {
            $data = [
                'send_id' => $record->owner_id,
                'receive_id' => $record->user_id,
                'target_type' => config('model.target_type.book_user'),
                'target_id' => $record->id,
                'viewed' => config('model.viewed.false'),
            ];
            $this->notification->store($data);
        }

        if ($request->status == 'returning') {
            $bookId = $this->bookUser->findId($id)->book_id;
            $countReturnedBook = $this->bookUser->countReturned($bookId);
            $findReturned = $this->bookMeta->findReturned($bookId);
            if (empty($findReturned->key)) {
                $this->bookMeta->insertReturned([
                    'key' => 'count_returned',
                    'value' => $countReturnedBook->book_returned,
                    'book_id' => $bookId,
                ]);
            } else {
                $this->bookMeta->updateReturned($bookId, ['value' => $countReturnedBook->book_returned]);
            }
        }

        return back()->with('success', __('page.success'));
    }

    public function destroy($id)
    {
        //
    }
}
