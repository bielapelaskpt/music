@extends('layout')
@section('balance', '275,36')
@section('content')
    <div class="container">
        <p class="w-100 text-center text-dark fs-6 mt-4 p-2 rounded fw-bold" style="background-color: #c8fedc;"> Saque
            agendado!
        </p>

        <div class="card w-100 mt-4 shadow">
            <div class="card-body">
                <div class="row p-2">
                    <span class="text-center fs-6 rounded p-2 mb-2 w-100" style="background-color: #E2E8EF">O seu saque já
                        está <b>QUASE</b> finalizado!</span>
                    <img class="w-100 rounded border border-1 border-dark"
                        src="https://res.cloudinary.com/djlirdibc/image/upload/co_rgb:6f6e70,l_text:open%20sans_25_normal_left:{{ session('lead_name') ?? 'Usuário do MusicPix' }}/fl_layer_apply,g_east,x_40,y_55/co_rgb:6F6E70,l_text:open%20sans_26_normal_left:{{ today('America/Sao_Paulo')->format('d-m-Y') }}/fl_layer_apply,g_east,x_40,y_-168/WhatsApp_Image_2024-03-06_at_00.31.11_ypj749.jpg" />
                    <span class="text-center fs-6 rounded p-2 mt-2 w-100" style="background-color: #E2E8EF">
                        Para que você receba seus ganhos o pagamento da taxa de adesão ao aplicativo deve ser pago em até
                        <b>8
                            minutos</b>!
                        <br><br>Essa taxa é <b>única e vitalícia</b>, e serve para cobrir os custos operacionais
                        do aplicativo e
                        impostos
                        cobrados pelo governo!
                        <br><br>Caso nosso sistema não indentifique o pagamento dentro do prazo, o pagamento será
                        <b>cancelado</b> e
                        seus <b>ganhos</b> serão redistribuidos entre os membros da plataforma!
                        <br><br>Mas fique tranquilo(a), você <b>receberá</b> esse valor na sua conta após o <b>saque</b>!
                    </span>

                    <a id="checkout" href="{{ env('CHECKOUT_URL') }}"
                        class="bg-success w-100 p-2 text-white fw-bold rounded mt-4 text-decoration-none text-center">
                        CONCLUIR
                        SAQUE </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let localUtms = JSON.parse(localStorage.getItem('utms'));
            if (localUtms != null) {
                let utms = new URLSearchParams(localUtms);
                //precisa verificar se a url de checkout já possui algum parametro
                let url = new URL($('#checkout').attr('href'));
                let checkoutUtms = new URLSearchParams(url.search);
                utms.forEach((value, key) => {
                    checkoutUtms.set(key, value);
                });
                url.search = checkoutUtms.toString();
                $('#checkout').attr('href', url.toString());
            }
        });
    </script>
@endsection
