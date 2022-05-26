<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    // 0-send jurist; Yurisatga jo'natildi
    // -1-jurist no; Userga kirganda xabar chiqishi kerak
    // 1-jurist yes; Userga pdfni saqlash imkoni hosil bo'lishi kerak


    public function template1()
    {
        return view('templates.template1');
    }


    public function template2()
    {
        return view('templates.template2');
    }


    public function template3()
    {
        return view('templates.template3');
    }

    public function template4()
    {
        return view('templates.template4');
    }


    public function template5()
    {
        return view('templates.template5');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = Validator::make($request->all(), [
            'number'=> 'required',
            'title' => 'required',
            'data'  => 'required'
        ]);

        if ($error->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $error->getMessageBag()->toArray()
            ));
        }
        else {
            try {

                // send jurist 2

                Contract::create([
                    'user_id' => Auth::user()->id,
                    'number'  => $request->number,
                    'title'   => $request->title,
                    'data'    => $request->data,
                    'status'  => 0,
                ]);

                return response()->json(['status' => true, 'msg' => 'ok']);

            } catch (\Exception $exception) {
                return response()->json(['status' => false, 'errors' => $exception->getMessage()]);
            }
        }
    }



}
