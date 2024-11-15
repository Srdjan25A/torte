@extends("layouts.app")

@section("content")
    <h1 style="text-align: center;">Pitanja sva!</h1>
    @if ($questions->isEmpty())
        <p>Nema pitanja u bazi</p>
    @else
        @foreach($questions as $question)
           <div style="text-align: center;">
                <p>{{ $question->title }}</p>
                <button class="answer-button pt-2 pb-2 pl-20"  data-answer="1" data-question-id="{{  $question->id }}">{{ $question->offered_answer1 }}</button>
                <button class="answer-button pt-2 pb-2" data-answer="2" data-question-id="{{ $question->id }}">{{ $question->offered_answer2 }}</button>

               <input type="radio" name="active_question" class="active-radio" data-question-id="{{ $question->id }}" {{ $question->active ? 'checked' : '' }}>
           </div>
        @endforeach
        <button id="update-active" class="btn btn-primary">Azuriraj</button>
    @endif
@endsection


@section("scriptsBottom")
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const answerButtons = document.querySelectorAll('.answer-button');
        answerButtons.forEach(button=>{
            button.addEventListener('click',function(){
                const answerNumber = button.dataset.answer;
                const questionId= button.dataset.questionId;
                jQuery.ajax({
                    url: '/submission/add',
                    method: 'POST',
                    data: {
                      _token: '{{ csrf_token() }}',
                      answer_number: answerNumber,
                      question_id: questionId
                    },
                    success: function(result){
                        alert("Recept uspesno dodat!!!");
                    }
                });
                console.log(`${questionId} -> ${answerNumber}`);
            });
        });
    });




    document.addEventListener('DOMContentLoaded', function() {
        let selectedQuestionId = null;

        const radioButtons = document.querySelectorAll('.active-radio');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {

                selectedQuestionId = this.dataset.questionId;
            });
        });

        document.getElementById('update-active').addEventListener('click', function() {
            if (selectedQuestionId) {

                updateActiveQuestion(selectedQuestionId);
            } else {
                alert("Molimo vas da odaberete pitanje pre nego što ažurirate.");
            }
        });


        function updateActiveQuestion(questionId) {
            jQuery.ajax({
                url: '/questions/update-active',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    question_id: questionId
                },
                success: function(response) {
                    alert("Aktivno pitanje uspešno ažurirano!");
                    location.reload(); // Osveži stranicu da prikaže novo aktivno pitanje
                },
                error: function() {
                    alert("Greška prilikom ažuriranja aktivnog pitanja.");
                }
            });
        }
    });


</script>
@endsection

