@extends('layout')
@section('balance', '0,00')
@section('content')
    <div class="container mt-4">
        <div class="shadow bg-success p-3 rounded text-center text-white mt-4">
            <span>Bem vindo ao MusicPix!</span>
        </div>
        {{-- <div class="row mt-2" id="welcome">
            <p class="w-100 text-center text-dark fs-6 p-2 rounded fw-bold mt-2 shadow" style="background-color: #c8fedc;">
                Bem vindo ao MusicPix!
            </p>
        </div> --}}
        <div class="row my-4">
            {{-- <div class="shadow p-1 text-center text-dark">
                <span>Artistas parceiros</span>
            </div> --}}
            <marquee behavior="scroll" direction="right">SERTANEJO • POP • BREGA • TRAP • FORRÓ • FUNK • PAGODE •
                ROCK
                •
                POP
                ROCK • REGGAE •</marquee>
            {{-- <marquee behavior="scroll" direction="left" class="border">
                <img src="/images/carousel/1.png" width="auto" height="180" />
                <img src="/images/carousel/2.jpeg" width="auto" height="180" />
                <img src="/images/carousel/3.jpeg" width="auto" height="180" />
                <img src="/images/carousel/4.jpeg" width="auto" height="180" />
                <img src="/images/carousel/5.jpeg" width="auto" height="180" />
                <img src="/images/carousel/6.jpg" width="auto" height="180" />
                <img src="/images/carousel/7.jpg" width="auto" height="180" />
                <img src="/images/carousel/8.jpeg" width="auto" height="180" />
                <img src="/images/carousel/9.png" width="auto" height="180" />
            </marquee> --}}
        </div>

        <div class="card w-100 shadow">
            <div class="card-body">
                <label style="line-height: 1.3rem; background-color: #e2e8ef;"
                    class="text-dark w-100 p-3 text-center mb-2 rounded">Antes
                    de começar a <b>avaliar</b> você precisa realizar seu cadastro!<br><br>Ao
                    finalizar, você irá receber <b>R$ 25,00</b> por ter completado o cadastro!</label>
                <form method="POST">
                    @csrf
                    <div class="row mt-4">
                        <div class="col">
                            <input type="text" class="form-control" name="name" placeholder="Nome COMPLETO"
                                title="Insira seu nome COMPLETO" required autofocus>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    {{-- <div class="row mt-2">
                        <div class="col">
                            <input type="text" class="form-control" name="phone" placeholder="Telefone" id="phone"
                                required>
                        </div>
                    </div> --}}
                    <div class="row mt-2">
                        <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="Senha"
                                autocomplete="false" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block w-100 mt-4" id="btnSaque">Começar a
                        avaliar</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $("#phone").mask("(99)99999-9999");
    </script>
@endsection
