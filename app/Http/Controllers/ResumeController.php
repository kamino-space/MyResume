<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use TheSeer\Tokenizer\Exception;

class ResumeController extends Controller
{

    private $data = [];

    public function ShowResumeOld(Request $request)
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

    public function ShowResume(Request $request)
    {
        if ($request->post('key') == null) {
            return response('请输入密码', '403');
        }
        try {
            $data = Resume::where('key', '=', $request->post('key'))->get();
            if (count($data) == 0) {
                return response('密码错误', '403');
            }
            return json_decode($data[0]['data'], true);
        } catch (InvalidArgumentException $e) {
            return  response('服务器错误', '500');
        }
    }
}
