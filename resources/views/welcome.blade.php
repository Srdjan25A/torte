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
        .color-title{
            color: #E48399;
            font-size: 48px;
            line-height: 58px;
        }
        .color-text{
            color: #642D12;
        }
        .container-question{
            border: 1px solid #642D12;
            border-radius: 16px;
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
    </style>
@endsection
@section('content')
    <div class="background-color-section">
        <div class="row pt-166 pb-60" style="max-width: 1240px; margin: 0 auto;">
            <div class="col-md-6 ">
                <div style="width:500px;">
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

        <div class="container pt-5 mb-5 text-center">
            <h3 class="">Timeline</h3>
            <p>Donec ullamcorper nulla non metus auctor.</p>
            <div class="container overflow-hidden text-center">
            <div class="row gy-4">
                <div class="col-12 col-sm-6 col-md-3">
                   <div  class="p-3 border border-1">
                       <p class="text-secondary">18.11. / Ponedeljak</p>
                        <p class="fw-bold">Biramo korice</p>
                   </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                   <div  class="p-3 border border-1">
                       <p class="text-secondary">20.11. / Sreda</p>
                        <p class="fw-bold">Biramo prvi fil</p>
                   </div>
                </div>
                <div class="col-12  col-sm-6 col-md-3">
                   <div class="p-3 border border-1">
                       <p class="text-secondary">16.11. / Sreda</p>
                        <p class="fw-bold">Biramo drugi fil</p>
                   </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div  class="p-3 border border-1">
                        <p class="text-secondary"> 16.11. / Sreda</p>
                        <p class="fw-bold">Biramo dekoracije</p>
                    </div>
                </div>
            </div>
            </div>

            <!--<div class="d-flex flex-wrap">
                <div class="col-12 col-sm-6 col-lg-3  border border-1 ">
                    <p class="text-secondary">18.11. / Ponedeljak</p>
                    <p class="fw-bold">Biramo korice</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3  border border-1">
                    <p class="text-secondary">20.11. / Sreda</p>
                    <p class="fw-bold">Biramo prvi fil</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3  border border-1 ">
                    <p class="text-secondary">16.11. / Sreda</p>
                    <p class="fw-bold">Biramo drugi fil</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3  border border-1 ">
                    <p class="text-secondary"> 16.11. / Sreda</p>
                    <p class="fw-bold">Biramo dekoracije</p>
                </div>
            </div>-->
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
