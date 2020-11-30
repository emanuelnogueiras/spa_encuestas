<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Answer;

class Survey extends Component
{
    //public $questions;
    public $question;
    public $value;
    public $progress;
    public $total;
    public $actual;
    
    public function mount()
    {
        // El total de preguntas
        $this->total = Question::count();
        
        // La primera pregunta
        $this->question = Question::first();        
        
        // Progreso general
        $this->actual = 0;
        $this->calculateProgress();

        // Valor por defecto
        $this->value = 5;                
    }

    public function loadNextQuestion()
    {        
        // Primero guardamos la respuesta a la pregunta actual
        Answer::create([
            "question_id" => $this->question->id,
            "value" => $this->value
        ]);

        // Obtenemos la siguiente pregunta
        $nextQuestion = Question::where("id", ">", $this->question->id)->first();
        if($nextQuestion)
        {
            $this->question = $nextQuestion;
            $this->value = 5;
            
            $this->calculateProgress();
        }
        else
        {
            $this->redirect("/results");
        }
    }

    function calculateProgress()
    {
        $this->actual++;        
        $this->progress = round($this->actual / $this->total * 100);
    }

    public function render()
    {
        return view('livewire.survey');
    }
}
