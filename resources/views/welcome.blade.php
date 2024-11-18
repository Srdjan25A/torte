@extends('layouts.app')

@section('styles')
    <style>
        body {
            font-family: 'DM Sans' !important;
        }
        .custom-width {
            max-width: 600px;
        }
        .button-answer {
            border-radius: 10px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: white;
            border:1px solid #642D12;
            width: calc(100% - 32px);
            color: #642D12;
            position: relative;
            text-align: left;
            cursor: pointer;
        }

        .button-answer.disabled {
            pointer-events: none !important;
        }

        .button-answer .percent-bg {
            border-radius: 10px;
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: #40B2BE;
            z-index: 1;
            transition: all 0.3s ease-in-out;
        }

        .button-answer.button-second .percent-bg {
            background: #E48399;
        }

        .button-answer p {
            font: normal normal normal 15px/20px DM Sans;
            position: relative;
            z-index: 2;
            padding-left: 20px;
            margin-bottom: 0;
            color: #642D12;
        }

        .button-answer p.active {
            color: white;
        }

        .button-answer span {
            color: #642D12;
            position: absolute;
            top: 0;
            left: 0;
            text-align: left;
        }

        .button-instagram{
            color: #642D12;
            font-size: 15px;
            line-height: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            padding-top: 14.4px;
            padding-bottom: 15.25px;
            padding-left: 28px;
            padding-right: 28px;
            border: none;
            text-decoration: none;
        }
        a.button-instagram i {
            position: relative;
            top: 2px;
        }
        .custom-width-2{
           /* max-width: 400px;*/
            margin: 0 auto;
        }
        .custom-width-22{
            max-width: 300px;
            text-align: right;
            margin-left: auto;
            color: white;
            font-weight: bold;

        }
        .background-color-section{
            background-color: #F7EED9;
        }
        .background-color-section-2{
            background-color: #F7EED9;
            border-top: 1px solid #642D12;
        }
        .background-color-section-3{
            background-color: #E48399;
            padding-top: 29px;
            padding-bottom: 28px;
        }
        .color-title{
            color: #E48399;
            font-size: 48px;
            line-height: 58px;
            font-weight: bold;
        }
        .color-text{
            color: #642D12;
            font: normal normal normal 18px/24px DM Sans;
        }
        .timeline-title{
            color: #E48399;
            line-height: 50px;
            max-width: 450px;
            margin: 0 auto;
            padding-top: 48px;
            padding-bottom: 40px;
            font: normal normal bold 38px/50px DM Sans;

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
            font: normal normal normal 14px/18px DM Sans;
            line-height: 18px;
        }
        .text-timeline{
            color: #642D12;
            font: normal normal bold 18px/24px DM Sans;
            line-height: 24px;
        }
        .pt-166 {
            padding-top: 166px;
        }
        .pb-60{
            padding-bottom: 60px;
        }
        .margin-top-bottom-24{
            font: normal normal bold 18px/24px DM Sans;
            margin-bottom: 24px;
            margin-top: 24px;
            color: #642D12;
            padding: 0 45px;
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
            margin-left: 20px !important;
            transition: transform 0.3s ease;
        }
        .arrow-icons.rotate {
            transform: rotate(180deg);
        }
        .check-correct {
            color: green;
        }
       .d-none{
           display: none;
       }
        .hidden-content {
            max-height: 0;
            overflow: hidden;
            margin-top: 10px;
            font-size: 14px;
            color: #624D12;
            transition: all 0.3s ease-in-out;
        }
        .hidden-content-title{
            color: #40B2BE;
            font-size: 18px;
            line-height: 24px;
        }
        .hidden-content-text{
            color: #642D12;
            font-size: 14px;
            line-height: 18px;
        }
        .hidden-content.active {
            max-height: 500px;
        }
        .content-container{
            max-width: 500px;
            margin: 0 auto;
        }
        .content-inside{
            max-width: 350px;
        }
        @media (max-width: 768px) {
            .color-title{
                color: #E48399;
                font-size: 24px;
                line-height: 31px;
                font-weight: bold;
                text-align:center;
            }
            .content-container{
                padding-bottom: 10px;
            }

            .content-inside{
                max-width: 100%;
            }
            .color-text {
                text-align: center;
                font-size: 15px;
                line-height: 20px;
            }
            .timeline-title{
                color: #E48399;
                font-size: 26px;
                line-height: 31px;
                font-weight: bold;
                text-align: center;
                width: 300px;
            }
            .span-content{
                font-weight: bold;
            }
            .custom-width-22{
                max-width: 300px;
                text-align: center;
                margin:0 auto !important;
                color: white;
                font: normal normal bold 16px/21px DM Sans;
            }
            .button-instagram{
                margin-top: 16px;
                margin-left: auto;
                margin-right: auto;
            }
            .picture-one{
                margin-bottom: 32px !important;
            }
        }
        .picture-one{
            max-width: 70px;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 63px;
        }
    </style>
@endsection
@section('content')
    <section class="row background-color-section d-flex justify-items-center" >
        <img class="picture-one" src="{{ asset('images/Group 19.svg') }}" alt="contact">
    </section>
   <section class="row background-color-section" >
        <div class="row  pb-60" style="max-width: 1240px;margin:0 auto;">
            <div class="col-md-6">

                <div class="content-container">
                    <h2 class="color-title">Učestvuj u kreiranju naše nove omiljene TORTE</h2>
                </div>
                <div class="content-container">
                    <p  class="color-text content-inside">Želimo da okupimo najveći broj ljudi koji je zajednički kreirao jednu tortu.</p>
                    <p class="color-text"> Čekamo tvoj glas - može da bude presudan.</p>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="text-center container ">
                    <Div class="bg-white container-question">
                        <h3 class="margin-top-bottom-24">{{ $activeQuestions->title }}</h3>

                        <div class="d-flex flex-column align-items-center">
                            <div class="button-answer button-first" data-answer="1" data-question-id="{{ $activeQuestions->id }}" style="">
                                <div class="percent-bg"></div>
                                <p>A. {{ $activeQuestions->offered_answer1 }}<span></span></p>
                            </div>
                            <div class="button-answer button-second" data-answer="2" data-question-id="{{ $activeQuestions->id }}">
                                <div class="percent-bg"></div>
                                <p>B. {{ $activeQuestions->offered_answer2 }}<span></span></p>
                            </div>
                        </div>
                        </div>
                    </Div>
                </div>
            </div>
        </div>
    </section>

    <section class="row background-color-section-2" >
        <div class="container">
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
                                <img src="{{ asset('images/time-icon.svg') }}" alt="time icon" />
                                <i class="fa-regular fa-circle-check check-correct d-none"></i>
                                <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons"></i>

                            </div>

                        </div>
                        <div class="hidden-content">
                            <p class="hidden-content-title">Korice su spremne!</p>
                            <p class="hidden-content-text">Na osnovu glasova iz prve ankete, hrskavi oreo je postao član NAŠE TORTE.</p>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-md-3 ">
                    <div class=" container-timeline">
                   <div  class="d-flex align-items-center">
                        <div class="col-8">
                            <p class="date-text">20.11. / Sreda</p>
                            <p class="text-timeline">Biramo prvi fil</p>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/time-icon.svg') }}" alt="time icon" />
                            <i class="fa-regular fa-circle-check check-correct d-none"></i>
                            <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons"></i>
                        </div>
                   </div>
                        <div class="hidden-content">
                            <p class="hidden-content-title">Prvi fil je spreman!</p>
                            <p class="hidden-content-text">Na osnovu glasova iz druge ankete, NAŠOJ TORTI se pridružuje sočna kombinacija bele čokolade i maline.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12  col-sm-6 col-md-3 ">
                 <div class="container-timeline">
                   <div class="d-flex align-items-center">
                      <div class="col-8">
                        <p class="date-text">16.11. / Sreda</p>
                        <p class="text-timeline">Biramo drugi fil</p>
                      </div>
                       <div class="col-4">
                           <img src="{{ asset('images/time-icon.svg') }}" alt="time icon" />
                           <i class="fa-regular fa-circle-check check-correct d-none"></i>
                           <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons"></i>
                       </div>
                   </div>
                     <div class="hidden-content">
                         <p class="hidden-content-title">Prvi fil je spreman!</p>
                         <p class="hidden-content-text">Na osnovu glasova iz druge ankete, NAŠOJ TORTI se pridružuje sočna kombinacija bele čokolade i maline.</p>
                     </div>
                 </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 ">
                    <div class="container-timeline">
                    <div  class="d-flex align-items-center">
                        <div class="col-8">
                            <p class="date-text"> 16.11. / Sreda</p>
                            <p class="text-timeline">Biramo dekoracije</p>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/time-icon.svg') }}" alt="time icon" />
                            <i class="fa-regular fa-circle-check check-correct d-none"></i>
                            <i class="fa fa-chevron-down arrow-icon ms-2 arrow-icons"></i>
                        </div>
                    </div>
                        <div class="hidden-content">
                            <p class="hidden-content-title">Prvi fil je spreman!</p>
                            <p class="hidden-content-text">Na osnovu glasova iz druge ankete, NAŠOJ TORTI se pridružuje sočna kombinacija bele čokolade i maline.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>
    <div class="row background-color-section-3">
        <div class="row container custom-width-2">
        <div class="col-md-6">
            <p class="text-right custom-width-22">Prati nas na našem Instagram profilu, jer tamo objavljujemo svaki korak u procesu kreiranja NAŠE TORTE!</p>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <a target="_blank" href="https://www.instagram.com/torta.rs/profilecard/?igsh=OWN4NGw0MXoxZ2Jq" class="button-instagram">Instagram <i style="padding-left:10px;font-size: 20px;" class="fa-brands fa-instagram"></i></a>
        </div>
        </div>
    </div>
@endsection


@section("scriptsBottom")
    <script>

        function toggleText(arrow) {
            // Pronađi roditeljski div sa klasom .container-timeline
            const container = arrow.closest('.container-timeline');

            // Pronađi elemente unutar tog kontejnera
            const hiddenContent = container.querySelector('.hidden-content');
            const clockIcon = container.querySelector('.color-icons');
            const checkIcon = container.querySelector('.check-correct');

            // Preklopi prikaz skrivenog sadržaja
            hiddenContent.classList.toggle('active');

            // Okreni strelicu
            arrow.classList.toggle('rotate');

            // Prikazivanje i sakrivanje ikonica
            if (hiddenContent.classList.contains('active')) {
                clockIcon.classList.add('d-none'); // Sakrij časovnik
                checkIcon.classList.remove('d-none'); // Prikaži check ikonu
            } else {
                clockIcon.classList.remove('d-none'); // Prikaži časovnik
                checkIcon.classList.add('d-none'); // Sakrij check ikonu
            }
        }


        document.addEventListener('DOMContentLoaded',function(){
            const answerButtons = document.querySelectorAll('.button-answer');
            answerButtons.forEach(button => {
               button.addEventListener('click',function(){
                  const answerNumber = button.dataset.answer;
                  const questionId = button.dataset.questionId;
                   jQuery.ajax({
                       url: '/submission/add',
                       method: 'POST',
                       data: {
                           _token: '{{ csrf_token() }}',
                           answer_number: answerNumber,
                           question_id: questionId
                       },
                       success: function(result) {
                           answerButtons[0].classList.add('disabled');
                           answerButtons[1].classList.add('disabled');

                           answerButtons[0].querySelector('.percent-bg').style.width = result.percentageOne.toFixed(0) + '%';
                           answerButtons[0].querySelector('span').innerText = result.percentageOne.toFixed(0) + '%';
                           if(result.percentageOne > 0) {
                               answerButtons[0].querySelector('p').classList.add('active');
                           }
                           if(result.percentageOne > 60) {
                               answerButtons[0].querySelector('span').style.paddingLeft = '60%';
                           } else if(result.percentageOne === 0) {
                               answerButtons[0].querySelector('span').style.paddingLeft = '25%';
                           } else {
                               answerButtons[0].querySelector('span').style.paddingLeft = (result.percentageOne + 5).toFixed(0) + '%';
                           }

                           answerButtons[1].querySelector('.percent-bg').style.width = result.percentageTwo.toFixed(0) + '%';
                           answerButtons[1].querySelector('span').innerText = result.percentageTwo.toFixed(0) + '%';
                           if(result.percentageTwo > 0) {
                               answerButtons[1].querySelector('p').classList.add('active');
                           }
                           if(result.percentageTwo > 60) {
                               answerButtons[1].querySelector('span').style.paddingLeft = '60%';
                           } else if(result.percentageTwo === 0) {
                               answerButtons[1].querySelector('span').style.paddingLeft = '25%';
                           } else {
                               answerButtons[1].querySelector('span').style.paddingLeft = (result.percentageTwo + 5).toFixed(2) + '%';
                           }
                       }
                   });

               });
            });
        });
    </script>
@endsection
