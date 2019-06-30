<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumeController extends Controller
{

    private $data = [];

    public function ShowResume(Request $request)
    {
        return $request->post('key') == null ? response('need a key', '403') : $this->BuildResume(Resume::where('key', '=', $request->post('key'))->get());
    }

    private function BuildResume($resumes)
    {
        if (count($resumes) == 0) {
            return redirect('/?keyerror');
        }
        $this->data = json_decode($resumes[0]['data'], true);
        return view('templates.' . $this->data['template'], $this->data);
    }
}
