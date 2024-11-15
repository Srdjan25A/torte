@extends('layouts.app')

@section('styles')
    <style>
        .custom-width {
            max-width: 600px; /* Ovde postaviš širinu u pikselima */
        }
        .button-answer{
            border-radius: 10px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: white;
            border:1px solid #642D12;
            width: 80%;
            color: #642D12;

        }
        .button-asnwer-1{

        }
        .custom-width-2{
            max-width: 400px;
            margin: 0 auto;
        }
        .background-color-section{
            background-color: #F7EED9;
        }
        .background-color-section-2{
            background-color: #F7EED9;
            border-top: 1px solid #642D12;
        }
        .color-title{
            color: #E48399;
            font-size: 48px;
            line-height: 58px;
        }
        .color-text{
            color: #642D12;
        }
        .timeline-title{
            color: #E48399;
            line-height: 50px;
            font-size: 38px;
            max-width: 450px;
            margin: 0 auto;
            padding-top: 48px;
            padding-bottom: 40px;

        }
        .container-question{
            border: 1px solid #642D12;
            border-radius: 16px;
        }
        .container-timeline{
            border:1px solid #642D12;
            background-color: #FFFFFF;
            border-radius: 8px;
            padding-top: 20px;
            padding-left: 24px;

        }
        .containter-timeline-1{
            border:1px solid #642D12;
            background-color: #FFFFFF;
            border-radius: 8px;

            padding-left: 24px;
        }
        .date-text{
            color: #40B2BE;
            font-size: 14px;
            line-height: 18px;
        }
        .text-timeline{
            color: #642D12;
            font-size: 18px;
            line-height: 24px;
        }
        .pt-166 {
            padding-top: 166px;
        }
        .pb-60{
            padding-bottom: 60px;
        }
        .margin-top-bottom-24{
            margin-bottom: 24px;
            margin-top: 24px;
            color: #642D12;
        }
        .button-first{
            margin-bottom: 16px;
        }
        .button-second{
            margin-bottom: 24px;
        }
        .padding-bottom-row{
            padding-bottom: 88px;
        }
        .color-icons{
            color: #E48399;
        }
        .arrow-icons{
            color: #642D12;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .arrow-icons.rotate {
            transform: rotate(180deg);
        }
        .hidden-content {
            max-height: 0;
            overflow: hidden;
            margin-top: 10px;
            font-size: 14px;
            color: #624D12;
            transition: all 0.3s ease-in-out;
        }
        .hidden-content.active {
            max-height: 500px;
        }

    </style>
@endsection
@section('content')
    <div class="background-color-section">
        <div class="row pt-166 pb-60" style="max-width: 1240px; margin: 0 auto;">
            <div class="col-md-6 ">
                <div style="max-width:500px;">
                    <h2 class="color-title">Učestvuj u kreiranju naše nove omiljene TORTE</h2>
                </div>
                    <div>
                    <p class="color-text">Želimo da okupimo najveći broj ljudi koji je zajednički kreirao jednu tortu.</p>
                    <p class="color-text"> Čekamo tvoj glas - može da bude presudan.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="text-center container ">
                    <Div class="bg-white container-question">
                        <h3 class="margin-top-bottom-24">{{ $activeQuestions->title }}</h3>

                        <div class="d-flex flex-column align-items-center">
                            <button class="button-answer button-first" data-answer="1" data-question-id="{{ $activeQuestions->id }}" style="">{{ $activeQuestions->offered_answer1 }}</button>
                            <button class="button-answer button-second" data-answer="2" data-question-id="{{ $activeQuestions->id }}">{{ $activeQuestions->offered_answer2 }}</button>
                        </div>
                        <div id="percentage-1" class="percentage-display" style="display: none;">
                            <p>Procenat za odgovor 1: <span id="percentage-1-value"></span>%</p>
                        </div>
                        <div id="percentage-2" class="percentage-display" style="display: none;">
                            <p>Procenat za odgovor 2: <span id="percentage-2-value"></span>%</p>
                        </div>
                    </Div>
                </div>
            </div>
        </div>
    </div>

    <div class="background-color-section-2">
        <div class="container  ">
            <h3 class="timeline-title  text-center">Kako izgleda proces keiranja NAŠE TORTE?</h3>

            <div class="container overflow-hidden">
            <div class="row gy-4 padding-bottom-row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="container-timeline">
                        <div class="d-flex align-items-center">

                            <div class="col-8">
                                <p class="date-text">18.11. / Ponedeljak</p>
                                <p class="text-timeline">Biramo korice</p>
                            </div>

                            <div class="col-4">
                                <i class="fa fa-clock-o icon-clock color-icons"></i>
                                <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons" onclick="toggleText(this)"></i>
                            </div>

                        </div>
                        <div class="hidden-content">
                            <p>Korice su spremne!</p>
                            <p>Na osnovu glasova iz prve ankete, hrskavi oreo je postao član NAŠE TORTE.</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-md-3 ">
                   <div  class="d-flex align-items-center container-timeline">
                       <div class="col-8">
                           <p class="date-text">20.11. / Sreda</p>
                            <p class="text-timeline">Biramo prvi fil</p>
                       </div>
                       <div class="col-4">
                           <i class="fa fa-clock-o icon-clock color-icons"></i>
                           <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons"></i>
                       </div>
                   </div>
                </div>
                <div class="col-12  col-sm-6 col-md-3 ">

                   <div class="d-flex align-items-center container-timeline">
                      <div class="col-8">
                        <p class="date-text">16.11. / Sreda</p>
                        <p class="text-timeline">Biramo drugi fil</p>
                      </div>
                       <div class="col-4">
                           <i class="fa fa-clock-o icon-clock color-icons"></i>
                           <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons" ></i>
                       </div>
                   </div>

                </div>
                <div class="col-12 col-sm-6 col-md-3 ">
                    <div  class="d-flex align-items-center container-timeline">
                        <div class="col-8">
                            <p class="date-text"> 16.11. / Sreda</p>
                            <p class="text-timeline">Biramo dekoracije</p>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-clock-o icon-clock color-icons"></i>
                            <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons"></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>
        <div class="bg-secondary-subtle text-center pb-5 pt-5">
            <div class="custom-width-2">
                <h3 class="text-center">Aenean lacinia bibendum nulla sed consectetur donec id elit?</h3>
            </div>
            <button class="button-answer">Instagram stranica</button>
        </div>
@endsection


@section("scriptsBottom")
    <script>

            function toggleText(arrow) {
                // Pronađi roditeljski div sa klasom .container-timeline
                const container = arrow.closest('.container-timeline');

                // Pronađi skriveni sadržaj unutar istog roditeljskog elementa
                const hiddenContent = container.querySelector('.hidden-content');

                // Preklopi klasu 'active' za prikazivanje/sakrivanje sadržaja
                hiddenContent.classList.toggle('active');

                // Okreni strelicu
                arrow.classList.toggle('rotate');
            }


        document.addEventListener('DOMContentLoaded',function(){
            const answerButtons= document.querySelectorAll('.button-answer');
            answerButtons.forEach(button=>{
               button.addEventListener('click',function(){
                  const answerNumber= button.dataset.answer;
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

                           console.log(result);
                           document.getElementById('percentage-1').style.display='block';
                           document.getElementById('percentage-2').style.display='block';
                           document.getElementById('percentage-1-value').textContent=result.percentageOne.toFixed(2);
                           document.getElementById('percentage-2-value').textContent= result.percentageTwo.toFixed(2);
                       }
                   });

               });
            });
        });
    </script>
@endsection
