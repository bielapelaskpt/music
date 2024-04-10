@extends('layout')
@section('balance', '171,46')
@section('content')
    <div class="container mt-4">
        <div class="shadow bg-success p-4 rounded text-center text-white">
            <h1>Realize um saque teste!</h1>
        </div>

        <div class="card w-100 mt-4 shadow">
            <div class="card-body">
                <label
                    style="background-color: #e2e8ef; padding: 10px; border-radius: 12px; text-align: center; width: 100%; margin-bottom: 10px; line-height: 1.3rem;">Antes
                    de <b>realizar</b> seu 1º saque, realize um saque teste de <b>10 CENTAVOS!</b></label>
                <label style="text-align: center; width: 100%;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"
                        style="display: inline-flex;   vertical-align: text-bottom;" fill="#36C5B8" transition="fill .3s">
                        <path
                            d="M242.4 292.5C247.8 287.1 257.1 287.1 262.5 292.5L339.5 369.5C353.7 383.7 372.6 391.5 392.6 391.5H407.7L310.6 488.6C280.3 518.1 231.1 518.1 200.8 488.6L103.3 391.2H112.6C132.6 391.2 151.5 383.4 165.7 369.2L242.4 292.5zM262.5 218.9C256.1 224.4 247.9 224.5 242.4 218.9L165.7 142.2C151.5 127.1 132.6 120.2 112.6 120.2H103.3L200.7 22.76C231.1-7.586 280.3-7.586 310.6 22.76L407.8 119.9H392.6C372.6 119.9 353.7 127.7 339.5 141.9L262.5 218.9zM112.6 142.7C126.4 142.7 139.1 148.3 149.7 158.1L226.4 234.8C233.6 241.1 243 245.6 252.5 245.6C261.9 245.6 271.3 241.1 278.5 234.8L355.5 157.8C365.3 148.1 378.8 142.5 392.6 142.5H430.3L488.6 200.8C518.9 231.1 518.9 280.3 488.6 310.6L430.3 368.9H392.6C378.8 368.9 365.3 363.3 355.5 353.5L278.5 276.5C264.6 262.6 240.3 262.6 226.4 276.6L149.7 353.2C139.1 363 126.4 368.6 112.6 368.6H80.78L22.76 310.6C-7.586 280.3-7.586 231.1 22.76 200.8L80.78 142.7H112.6z">
                        </path>
                    </svg>
                    <h2 style="margin-top: 1rem; font-size: 16px; display: inline-flex; color: #7A7A7A;">Selecione sua chave
                        pix
                    </h2>
                </label>
                <form method="POST" action="{{ route('pix') }}">
                    @csrf
                    <div class="row mt-4">
                        <input type="hidden" name="pixType" id="pixType">
                        <div class="col d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg" id="celular"> Celular </button>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg" id="document"> CPF/CNPJ </button>
                        </div>
                    </div>
                    <input class="form-control mt-4" type="text" id="chave" name="pixKey" placeholder="Chave pix"
                        style="border-radius: 12px; border: 1px solid #535455;" required>
                    <span id="showTipoChave" style="display: none">Tipo da chave: <b id="tipoChave"></b></span>
                    <label
                        style="background-color: #e2e8ef; padding: 10px; border-radius: 12px; text-align: center; width: 100%; margin-bottom: 10px; margin-top: 20px; line-height: 1.3rem;">Confirme
                        <b>OS DADOS INFORMADOS</b> antes de realizar o saque. Se estiver inválido, você <b>NÃO RECEBERÁ O
                            PIX
                            TESTE</b></label>
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100 mt-4" id="btnSaque">Realizar saque
                        teste</button>
                </form>
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
    </script>
@endsection
