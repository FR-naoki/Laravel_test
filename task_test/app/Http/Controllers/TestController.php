<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        //Eloquent（エロクアント）
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'aaa')->get();

        // dd($values, $count, $first, $whereBBB);

        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'aaa')
            ->select('id', 'text')
            ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);


        return view('tests.test', compact('values'));
    }
}
