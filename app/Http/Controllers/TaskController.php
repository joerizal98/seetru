<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Ramsey\Uuid\Validator\ValidatorInterface;
use Validator;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        $data = [
            'status' => 200,
            'Task' =>$task

        ];
        return response()->json($data, 200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            // 'task' => 'required',
            // 'status' => 'required|status'



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
            $task = new Task;
            $task->task=$request->task;
            $task->status=$request->status;
            $task-> save();
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
            'task' => 'required',
            'status' => 'required|status'



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
            $task = Task::find($id);
            $task->task=$request->task;
            $task->status=$request->status;
            $task-> save();
            $data=[
                'status' => 200,
                'message' => 'Data Updated Succesfully'

            ];


            return response()->json($data, 200);
        }


    }

    public function delete($id)
    {
        
            $task = Task::find($id);
            $task->delete();
            $data=[
                'status' => 200,
                'message' => 'Data Deleted Succesfully'

            ];


            return response()->json($data, 200);
        


    }

}
