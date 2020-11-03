<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogPageModel;
use App\Models\CommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public $data= array();
    public $n_icon_user=12;
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function dequy($id_comment)
    {
        $tmp = CommentModel::find($id_comment);
        if ($tmp->id_parent==0) return $tmp->id;
        return $this->dequy($tmp->id_parent);
    }
    public function create($id,Request $request)
    {
        $input=$request->all();
        $page = BlogPageModel::find($id);
        $page->comments = $page->comments+1;
        $page->save();
        $input=$request->all();
        $users = DB::table('comments')
            ->where('phone','=',$input['phone'])
            ->get();
        $comment = new CommentModel();
        $comment->id_page = $id;
        $comment->id_parent = $this->dequy($input['id_parent']);
        $comment->content = $input['content'];
        $comment->name = $input['name'];
        $comment->phone = $input['phone'];
        $comment->level = $input['level'];
        $comment->status = 0;
        if(count($users)==0)
        {
            $comment->icon_user= random_int(1,$this->n_icon_user).'.png';
        }
        else
        {
            $user = $users[0];
            $comment->icon_user= $user->icon_user;
        }

        $comment->save();
        return redirect()->route('tin-tuc.bai-viet.detail',$page->slug)->with('success-message', 'Đã bình luận thành công!');
    }
}
