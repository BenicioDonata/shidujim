<?php


namespace App\Services;

use App\Models\Comment;
use App\Models\Form;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Exception;

class CommentService
{

    public function insertComment($data_request)
    {
        try
        {
            DB::beginTransaction();

                $comment = new Comment();
                $comment->form()->associate(Form::find($data_request->get('form-comment')));
                $comment->user()->associate(User::find(auth()->user()->id));
                $comment->comment = $data_request->get('summary-ckeditor');

                $comment->save();

            DB::commit();

            return true;

        } catch (\Exception $e) {

            DB::rollback();

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

}
