@extends('layout')
@section('balance', '171,46')
@section('content')
    <div class="container">
        <div class="shadow bg-success p-4 rounded text-center text-white mt-4">
            <h1>Saque realizado!</h1>
        </div>

        <div class="card w-100 mt-4 shadow">
            <div class="card-body">
                <div class="row p-2">
                    <span class="text-center fs-6 rounded p-2 mt-2 w-100" style="background-color: #E2E8EF">
                        Você recebeu o seu saque teste de <b>10 CENTAVOS</b> em nome de <b>"Suitpay"</b>. Verifique suas
                        notificações ou extrato bancário!
                    </span>
                    <span class="text-center fs-6 rounded p-2 mt-4 w-100" style="background-color: #E2E8EF">
                        Agora basta <b>avaliar 3 músicas</b> para aumentar seu saldo e realizar seu <b>1º saque</b>!
                    </span>
                    <a href="/avaliar2"
                        class="bg-success w-100 p-2 text-white fw-bold rounded mt-4 text-center text-decoration-none">
                        CONTINUAR
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
