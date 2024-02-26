<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;
use Ramsey\Uuid\Validator\ValidatorInterface;
use Validator;

class ApiController extends Controller
{
    public function index()
    {
        $api = Api::all();
        $data = [
            'status' => 200,
            'api' =>$api

        ];
        return response()->json($data, 200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email'



        ]);
        if($validator->fails())
        {
            $data=[
                'status' => 422,
                'message' => $validator->messages()

            ];
            return response()->json($data,422);
        }
        else
        {
            $api = new Api;
            $api->name=$request->name;
            $api->email=$request->email;
            $api->phone=$request->phone;
            $api-> save();
            $data=[
                'status' => 200,
                'message' => 'Data Uploaded Succesfully'

            ];


            return response()->json($data, 200);
        }

    }

    public function edit(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email'



        ]);
        if($validator->fails())
        {
            $data=[
                'status' => 422,
                'message' => $validator->messages()

            ];
            return response()->json($data,422);
        }
        else
        {
            $api = Api::find($id);
            $api->name=$request->name;
            $api->email=$request->email;
            $api->phone=$request->phone;
            $api-> save();
            $data=[
                'status' => 200,
                'message' => 'Data Updated Succesfully'

            ];


            return response()->json($data, 200);
        }


    }

    public function delete($id)
    {
        
            $api = Api::find($id);
            $api->delete();
            $data=[
                'status' => 200,
                'message' => 'Data Deleted Succesfully'

            ];


            return response()->json($data, 200);
        


    }

}
