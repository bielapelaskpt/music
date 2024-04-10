@extends('layout')

@section('balance', session('step') == 0 ? '25,00' : '171,46')
@section('head')
    <style>
        .premium {
            background-color: #f1f1f1;
            border: 3px solid #26a316 !important;
        }

        .card {
            width: 100%;
            height: fit-content;
            padding: 20px;
            border: 1px solid #d3d3d3;
            background-color: #f1f1f1;
            border-radius: 15px;
        }

        .card__logo img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card__satisfacao {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card__satisfacao h2,
        .card__resposta h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .card__gradeContainer {
            display: grid;
            width: 100%;
            grid-template-rows: 1fr;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-gap: 10px;
            margin-top: 20px;
        }

        .card__grade {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            transition: all ease 0.3s;
        }

        .card__grade i {
            font-size: 32px;
            color: #7e7e7e;
        }

        .card__gradeDescricao {
            width: 100%;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin: 5px 0px 20px 0px;
            color: #7e7e7e;
        }

        .resposta__gradeContainer {
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            margin: 10px 0px 20px 0px;
        }

        .resposta__grade {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 15px;
            background-color: #d3d3d3;
            border-radius: 5px;
            transition: all ease 0.3s;
        }

        .resposta__grade.active {
            color: #ffffff;
            background-color: #4285F4;
        }

        .resposta__grade p {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.5;
            margin-bottom: 0;
        }

        .card__enviarResposta {
            width: 100%;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.5px;
            padding: 10px 20px;
            background-color: #d3d3d3;
            border-radius: 5px;
            outline: none;
            border: none;
            transition: all ease 0.3s;
        }

        .card__enviarResposta.active {
            color: #ffffff;
            background-color: #4285F4;
        }
    </style>
@endsection
@section('content')
    <div class="container py-4 px-2 d-flex justify-content-center flex-column">
        <p class="w-100 text-center text-dark fs-6 mt-4 p-2 rounded fw-bold" style="display: none; background-color: #c8fedc;"
            id="ganho">
            Você ganhou
            R$ <span id="valor">100,00</span> por avaliar
        </p>
        @if (session('step') == 0)
            @include('components.videos1')
        @else
            @include('components.videos2')
        @endif
    </div>
    @if (session()->has('welcome'))
        <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="w-100 text-center text-dark fs-6 p-2 rounded">
                            <b>Parabéns {{ session('lead_name') }}</b>!<br>Seu cadastro foi realizado com sucesso.
                            <br>Comece a <b>avaliar</b> as músicas e <b>ganhe</b> dinheiro!
                        </p>
                        <p class="w-100 text-center text-dark fs-6 p-2 rounded mt-2">
                            Você ganhou <b>R$ 25,00</b> por ter se cadastrado!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div id="overlayPopUp" style="display: none"></div>
    <div class="popup-container" id="popup" style="display: none;">
        <div class="row justify-content-center">
            <img src="/images/cash.webp" alt="Ganhou!" class="mb-3" style="width: 60%">
        </div>
        <span class="popup-text" style="font-size: 20px;">Saldo atualizado!</span>
        <span class="popup-text" style="font-size: 20px;">Você recebeu:</span>
        <span class="popup-text" id="popup-valor"
            style="font-size: 40px; font-weight: bold; font-family: 'Montserrat', sans-serif; margin-top: -20px;">R$
            69,00</span>
        <span class="popup-text" style="font-size: 20px;">pela avaliação</span>
    </div>
    <script>
        let modal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        modal.show();
    </script>
@endsection
