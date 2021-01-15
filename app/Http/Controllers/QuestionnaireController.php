<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Lession;

class QuestionnaireController extends Controller
{
    //
    public function findAll($id){
        $questionnaires = Questionnaire::where('status',1)->where('lession_id',$id)->get();
        return view('questionnaire')
            ->with('questionnaires',$questionnaires)
            ->with('id',$id);
    }
    public function checkAnswer(Request $request,$id){
        $questionnaires = Questionnaire::where('status',1)->where('lession_id',$id)->get();
        $size = sizeof($questionnaires);
        $data = $request->all();
        $point = 0 ;
        $corrects = [];
        foreach ($questionnaires as $questionnaire){
            if($questionnaire->correctAnswer == $data[$questionnaire->id]){
                $point +=1;
                $corrects[] = $questionnaire->id;
            }
        }
        return  view('resultsQuestionnaire')
            ->with('questionnaires',$questionnaires)
            ->with('corrects',$corrects)
            ->with('point',$point)
            ->with('size',$size)
            ->with('data',$data);
    }
    public function show(Request $request){
        $lession_id=$request->lession;
        $lessions = Lession::where('status',1)->get();
        if(isset($lession_id)){
            $questionnaire = Questionnaire::where('lession_id',$lession_id)->paginate(10);
        }else{
            $questionnaire = Questionnaire::where('lession_id',$lessions[0]->id)->paginate(10);
        }
        return view('admin.all_question')
            ->with('lession_id',$lession_id)
            ->with('lessions',$lessions)
            ->with('questionnaire',$questionnaire);
    }
    public function findOneDetail(){

    }
    public function edit(){

    }
    public function delete(){

    }
}
