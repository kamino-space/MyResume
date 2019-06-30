<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Config;

class ResumeController extends Controller
{
    private $config = [];
    private $resume = [];
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
        $this->resume = $resumes[0];
        $this->data = json_decode($this->resume['data'], true);
        foreach (Config::all() as $item) {
            $this->config[$item['name']] = $item['value'];
        }
        return view('templates.' . $this->resume['template'], $this->ResumeData());
    }

    private function ResumeData()
    {
        $params = [];
        foreach (['name', 'contact', 'application', 'info', 'description'] as $name) {
            $params[$name] = $this->get($name);
        }
        return $params;
    }

    private function get($name)
    {
        return array_key_exists($name, $this->data) ? $this->data[$name] : (array_key_exists($name, $this->config) ? $this->config[$name] : null);
    }
}
