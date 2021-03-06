<?php

namespace App\Repositories\Eloquents;

use App\Eloquent\Vote;
use App\Repositories\Contracts\VoteRepository;
use Auth;

class VoteEloquentRepository extends AbstractEloquentRepository implements VoteRepository
{
    public function model()
    {
        return new Vote;
    }

    public function voteUp($review)
    {
        $userLogin = Auth::user()->id;
        $data['user_id'] = $userLogin;
        $data['review_id'] = $review->id;
        $data['status'] = 1;

        $userVote = $review->votes->where('user_id', '=', $userLogin)->first();
        if ($userLogin != $review->user_id) {
            if ($userVote == null) {
                $vote = $this->model()->create($data);

                return $vote;
            } else {
                if ($userVote->status == '-1') {
                    $userVote->update(['status' => '0']);

                    return $userVote;
                } elseif ($userVote->status == '0') {
                    $userVote->update(['status' => '1']);

                    return $userVote;
                }
            }
        }
    }

    public function voteDown($review)
    {
        $userLogin = Auth::user()->id;
        $data['user_id'] = $userLogin;
        $data['review_id'] = $review->id;
        $data['status'] = -1;

        $userVote = $review->votes->where('user_id', '=', $userLogin)->first();
        if ($userLogin != $review->user_id) {
            if ($userVote == null) {
                $vote = $this->model()->create($data);

                return $vote;
            } else {
                if ($userVote->status == '1') {
                    $userVote->update(['status' => '0']);

                    return $userVote;
                } elseif ($userVote->status == '0') {
                    $userVote->update(['status' => '-1']);

                    return $userVote;
                }
            }
        }
    }
}
