<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaskmanageController extends Controller {

    /*
    =========================
    * Main page
    =========================
    */
    public function getIndex() {


            return view('taskmanage.mainpage');

    }

    #=========================
    #Incomplete tasks page
    #=========================
    public function getIncomplete() {

        $user=\Auth::user();
        if($user) {
            $incomptasks=\App\Incomplete_task::where('user_id', '=',$user->id)->get();

            if($incomptasks){

                return view('taskmanage.incomplete')->with('incomptask',$incomptasks->toArray());

            }
        }

    }


    #================================
    #Complete tasks page
    #================================

    public function getComplete() {
        $user=\Auth::user();
        if($user) {
            $comptasks=\App\Complete_task::where('user_id', '=',$user->id)->get();

            if($comptasks){

                return view('taskmanage.complete')->with('comptask',$comptasks->toArray());

            }
        }

    }


    #================================
    #All tasks page
    #================================
    public function getAlltasks() {

        $user=\Auth::user();
        if($user) {
            $comptasks=\App\Complete_task::where('user_id', '=',$user->id)->get();
            $incomptasks=\App\Incomplete_task::where('user_id', '=', $user->id)->get();

            if($comptasks || $incomptasks){

                return view('taskmanage.alltasks')->with('comptask',$comptasks->toArray())->with('incomptask',$incomptasks->toArray());

            }
        }


    }


    #==================================
    #Add tasks page
    #==================================

    public function getAdd(){

        return view('taskmanage.add');

    }


    #====================================================
    #Process add task request (task added as incomplete)
    #====================================================
    public function postAdd(Request $request){

        $this->validate($request,[
            'addtask' => 'required|min:1|max:255'
        ]);

        $user=\Auth::user();

        if($user){
            $task_added= new \App\Incomplete_task;
            $task_added->task = $request->addtask;
            $task_added->user_id = $user->id;
            $task_added->save();

            return redirect()->to('/alltasks');
        }
    }


    #====================================================
    #Edit complete tasks page
    #====================================================
    public function getEditcomplete($id){


        $comp_task_to_edit=\App\Complete_task::find($id);
        return view('taskmanage.editcomp')->with('comp_task_edit',$comp_task_to_edit);

    }


    #====================================================
    #Process editing request and update the complete task
    #====================================================
    public function postEditcomplete(Request $request){

        $this->validate($request,[
            'comptask' => 'required|min:1|max:255'
        ]);

        $comp_task_to_edit=\App\Complete_task::find($request->ident);
        $comp_task_to_edit->task=$request->comptask;
        $comp_task_to_edit->save();
        \Session::flash('message', 'Your changes were saved');
        return redirect()->to('/alltasks');

    }


    #====================================================
    #Edit incomplete tasks page
    #====================================================

    public function getEditincomplete($id){

        $incomp_task_to_edit=\App\Incomplete_task::find($id);
        return view('taskmanage.editincomp')->with('incomp_task_edit',$incomp_task_to_edit);

    }

    #====================================================
    #Process editing request and update the incomplete task
    #====================================================

    public function postEditincomplete(Request $request){


        $this->validate($request,[
            'incomptask' => 'required|min:1|max:255'
        ]);

        $user=\Auth::user();

        if (($request->movetask) == 'completed'){
            $incomp_task_to_edit=\App\Incomplete_task::find($request->ident);
            $task_completed= new \App\Complete_task;
            $task_completed->task = $request->incomptask;
            $task_completed->user_id = $user->id;
            $task_completed->save();

            #delete task from incomplete tasks table
            $incomp_task_to_edit->delete();



            \Session::flash('message', 'Task moved to complete tasks');
            return redirect()->to('/alltasks');

        } else {
        $incomp_task_to_edit=\App\Incomplete_task::find($request->ident);
        $incomp_task_to_edit->task=$request->incomptask;
        $incomp_task_to_edit->save();
        \Session::flash('message', 'Your changes were saved');
        return redirect()->to('/alltasks');

    }
    }



    #====================================================
    #Delete incomplete task
    #====================================================
    public function getDeleteincomplete($id){

        $incomp_task_to_del=\App\Incomplete_task::find($id);
        return view('taskmanage.delincomp')->with('incomp_task_del',$incomp_task_to_del);

    }


    #====================================================
    #Process delete request and update the table
    #====================================================
    public function postDeleteincomplete(Request $request){
        $incomp_task_to_del=\App\Incomplete_task::find($request->ident);

        if ($incomp_task_to_del){

            $incomp_task_to_del->delete();

            \Session::flash('message', 'The task was deleted');
            return redirect()->to('/alltasks');
        }
        else {
            \Session::flash('message', 'The task was not found');
            return redirect()->to('/alltasks');
        }


    }

    #====================================================
    #Delete complete task
    #====================================================

    public function getDeletecomplete($id){

        $comp_task_to_del=\App\Complete_task::find($id);
        return view('taskmanage.delcomp')->with('comp_task_del',$comp_task_to_del);

    }


    #====================================================
    #Process delete request and update the table
    #====================================================
    public function postDeletecomplete(Request $request){
        $comp_task_to_del=\App\Complete_task::find($request->ident);

        if ($comp_task_to_del){

            $comp_task_to_del->delete();
            \Session::flash('message', 'The task was deleted');
            return redirect()->to('/alltasks');

        }
        else {
            \Session::flash('message', 'The task was not found');
            return redirect()->to('/alltasks');

        }



    }
}
