<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Config;
use PHPUnit\Runner\Exception;

class ResumeController extends Controller
{
    private $configs=[];

    public function ShowResume(Request $request)
    {

        return $request->post('key') == null ? response('need a key', '403') : $this->BuildResume(Resume::where('key', '=', $request->post('key'))->get());
    }

    private function BuildResume($resumes)
    {
        if (count($resumes) == 0) {
            return redirect('/?keyerror');
        }
        foreach(Config::all() as $item){
            $this->configs[$item['name']]=$item['value'];
        }
        return view('templates.'.$resumes[0]['template'], $this->ResumeData($resumes[0]));
    }

    private function ResumeData($resume)
    {
        return [
            'name'=>$this->get('name'),
        ];
    }

    private function get($name){
        try{
            return $this->configs[$name];
        }catch(Exception $e){
            return null;
        }
    }
}
