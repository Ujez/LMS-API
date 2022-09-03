<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function Index()
    {
        $sessions = Session::latest()->get();
        return response()->json($sessions);
    }
    public function Store(Request $request)
    {

        $validateData = $request->validate([
            'session_name' => 'required|unique:sessions|max:25',
        ]);

        Session::insert([
            'class_id' => $request->class_id,
            'session_name' => $request->session_name,
            'created_at' => Carbon::now(),
        ]);
        return response('Session class inserted successfully');
    }
    public function Edit($id)
    {
        $session = Session::findOrFail($id);
        return response()->json($session);
    }
    public function Update(Request $request, $id)
    {
        Session::findOrFail($id)->update([
            'session_name' => $request->session_name,
        ]);
        return response('Session class updated');

    }
    public function Delete($id)
    {
        Session::findOrFail($id)->delete();
        return response('Session deleted successfully');
    }
}
