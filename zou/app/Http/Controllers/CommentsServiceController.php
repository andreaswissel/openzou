<?php

namespace App\Http\Controllers;

use Input;
use Log;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Comment;


class CommentsServiceController extends Controller
{
    public function create($news_id) {
    	return $this->createReply($news_id, null);
    }

    public function createReply($news_id, $reply_to) {

		$aCommentData = Input::get('comment');
		$aCommentData['news_id'] = $news_id;
		$aCommentData['reply_to'] = $reply_to;
		$validator = Validator::make($aCommentData, [
			'state' => 'in:created,visible,deleted',
			'content' => 'required',
			'news_id' => 'required|exists:news,id',
			'reply_to' => 'sometimes|exists:comments,id'
		]);
		Log::info($aCommentData);
		if($validator->fails()) {
			$aRet = [
	            'success' => 'false',
	            'errors'        => $validator->errors()
	        ];
		} elseif($oComment = Comment::create($aCommentData)) {
           	$aRet = [
	            'success' => 'true'
	        ];
		} else {
		    $aRet = [
		        'success' => 'false'
		    ];
		}
        return response()->json($aRet);

	}
}
