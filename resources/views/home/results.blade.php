@extends("layouts.app")
@section("title", "Resultados")
@section("content")
    <div class="container">
        
        <div class="center-align" style="margin-top: 30px;">
            <ul>
            @foreach($questions as $question)
                <li>Pregunta Nº. {{$question->id}} - Promedio (value): {{round($question->answers->avg("value"))}}</li>
            @endforeach
            </ul>
        </div>

        <div class="center-align" style="margin-top: 30px;">
            <a href="/" class="waves-effect waves-light btn blue">Volver a empezar</a>
        </div>
        
    </div>
@endsection
