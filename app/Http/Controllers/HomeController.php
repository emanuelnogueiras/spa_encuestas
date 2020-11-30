<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class HomeController extends Controller
{
    public function index()
    {
        return view("home.index");
    }

    public function survey()
    {
        return view("home.survey");
    }

    public function results()
    {
        $questions = Question::with("answers")->get();         

        return view("home.results", [
            "questions" => $questions
        ]);
    }
}
