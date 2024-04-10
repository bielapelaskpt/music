@extends('layout')
@section('balance', '275,36')
@section('content')
    <div class="container mt-4">
        <div class="shadow bg-success p-4 rounded text-center text-white">
            <h1>Realize seu
                1º saque!</h1>
        </div>

        <div class="card w-100 mt-4 shadow">
            <div class="card-body">
                <label
                    style="background-color: #e2e8ef; padding: 10px; border-radius: 12px; text-align: center; width: 100%; margin-bottom: 10px; margin-top: 20px; line-height: 1.3rem;">Confirme
                    <b>OS DADOS INFORMADOS</b> antes de realizar o saque. Se estiver inválido, você <b>NÃO RECEBERÁ O
                        PIX</b></label>
                <p class="m-0 text-center">Chave Pix: <b>{{ session('pixKey') }}</b></p>
                <p class="m-0 text-center">Nome: <b>{{ session('lead_name') }}</b></p>
                <p class="mt-2 m-0 text-center">Valor do saque: <b>R$ 275,36</b></p>
                <a href="/concluirSaque"
                    class="btn btn-success w-100 p-2 text-white fw-bold rounded mt-4 text-decoration-none text-center">
                    CONFIRMAR </a>
            </div>
        </div>
    </div>
    <script>
        $("#chave").hide()
        $("#celular").click(() => {
            $("#chave").show()
            $("#tipoChave").html('Celular')
            $("#showTipoChave").show();
            $("#pixType").val('phone')
            $("#chave").val('')
            $("#chave").attr('placeholder', 'Celular')
            $("#chave").mask("(99)99999-9999");
        });

        $("#document").click(() => {
            $("#chave").show()
            $("#tipoChave").html('CPF')
            $("#showTipoChave").show();
            $("#pixType").val('document')
            $("#chave").val('')
            $("#chave").attr('placeholder', 'CPF/CNPJ')
            $("#chave").mask("999.999.999-99");
        });

        @if (session('pixKey') && session('pixType'))
            @if (session('pixType') == 'phone')
                $("#celular").click()
            @else
                $("#document").click()
            @endif
            $("#chave").val('{{ session('pixKey') }}')
        @endif
    </script>
@endsection
