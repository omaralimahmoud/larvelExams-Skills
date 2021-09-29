<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class skillController extends Controller
{
      public function index()
      {
        $data['skills']=Skill::orderBy('id','DESC')->paginate(10);
        return view('admin.skills.index')->with($data);
      }
}
