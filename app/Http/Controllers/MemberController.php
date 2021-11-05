<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Carbon\Carbon;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Member::orderBy('created_at', 'ASC')->get();
    }


    public function store(Request $request)
    {
        $newMember = new Member;
        $newMember->name = $request->get('member')['name'];
        $newMember->email = $request->get('member')['email'];
        $newMember->save();

        return $newMember;
    }
    
    public function destroy($id)
    {
        //
    }
}
