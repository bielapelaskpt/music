@extends('layout')
@section('balance', '171,46')

@section('content')
    <div class="">
        {{-- <div class="w-100 text-white text-center p-3 mb-1" style="background-color: #ff0000;">
            <span>{!! $bannerHeadline !!}</span>
        </div> --}}
        <div class="container pt-2" style="background-color: white">
            <img class="w-100" src="/images/headline.png" alt="">
            <div class="row">
                <span class="text-dark fs-6 p-4 text-center">
                    Essa apresentação sairá do ar hoje, <b><span id="day"></span></b>
                </span>
            </div>

            @if (env('CLIENT') == 'GABRIEL')
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                        src="https://player.vimeo.com/video/921289883?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" title="VSL _ MusicBL"></iframe></div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            @else
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                        src="https://player.vimeo.com/video/921290381?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" title="VSL _ Music_LEO"></iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            @endif


            <p class="text-center mt-2 fs-6">
                <span id="contador" style="color: #ff0000;">536</span> pessoas assistindo agora.
            </p>
            <div class="row text-center fs-5 fw-bold my-4 ocultar">
                <div class="col">
                    <span> Buscando novas músicas...</span>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 0%;"
                            role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-success btn-lg w-100 my-4 aparecer" style="display: none" href="/pix">Continuar
                avaliando</a>
            <div class="row justify-content-center mt-4">
                <img src="/images/midia.png" style="width: 75%" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/notiflix@2.6.0/dist/notiflix-aio-2.6.0.min.js"></script>

    <script>
        /right-top, right-bottom, left-top, left-bottom, center-top, center-bottom, center-center/
        var position = "left-bottom";

        /verde, azul, vermelho, amarelo/
        var color = "verde";

        /fade, zoom, from-right, from-left, from-top, from-bottom/
        var animation = "from-left";

        /nome do produto/
        var product_name = "";

        /frase depois do nome da pessoa/
        var phrase = "recebeu um PIX";
        var timeout = 4000;

        /masc, fem, any/
        var type_name = "fem";
        var msg_final = "";

        var min_time = 4;
        var max_time = 20;

        var names_masc = ['Luciana Oliveira', 'José Araújo', 'Karolina Alves', 'Deise Dias', 'Aline Santos',
            'Luciane Ferreira', 'Maria Helena', 'Laura Freire', 'Carla Patrícia', 'Mariana Ruas', 'Laurindo Ribeiro',
            'Antônio Lira', 'Geraldo Santana', 'José Augusto', 'Esdras Loures', 'Dannila Assunção', 'Janira Ferraz',
            'Albert Fernandes', 'Jacinto Heraldo', 'Leonardo Silva', 'Cerena Janice', 'Marya Fagundes',
            'Lorraine Raiane', 'Amaurí Lindalvo', 'Jefferson Lima', 'Fernanda Costa', 'Carla Alcantara',
            'Douglas Armando', 'Daniel Arantes', 'Luciano Paz', 'Mário Frente', 'Lorena Jacqueline', 'Celine Petronio',
            'Mariana Caroline', 'Lucas Neto', 'Janailma Soares', 'Gerondina Aurélia', 'João Aparecido', 'Emilia Damião',
            'Jacilda Amancio', 'Jeronimo Vieira', 'Alberto Marcos', 'Marcela Jandira', 'Leandro Souza',
            'Catarina Janiewiviski', 'Monalisa Farias', 'Raiane Josélia', 'Ana Luiza'
        ];
        var names_fem = ['Luciana Oliveira', 'José Araújo', 'Karolina Alves', 'Deise Dias', 'Aline Santos',
            'Luciane Ferreira', 'Maria Helena', 'Laura Freire', 'Carla Patrícia', 'Mariana Ruas', 'Laurindo Ribeiro',
            'Antônio Lira', 'Geraldo Santana', 'José Augusto', 'Esdras Loures', 'Dannila Assunção', 'Janira Ferraz',
            'Albert Fernandes', 'Jacinto Heraldo', 'Leonardo Silva', 'Cerena Janice', 'Marya Fagundes',
            'Lorraine Raiane', 'Amaurí Lindalvo', 'Jefferson Lima', 'Fernanda Costa', 'Carla Alcantara',
            'Douglas Armando', 'Daniel Arantes', 'Luciano Paz', 'Mário Frente', 'Lorena Jacqueline', 'Celine Petronio',
            'Mariana Caroline', 'Lucas Neto', 'Janailma Soares', 'Gerondina Aurélia', 'João Aparecido', 'Emilia Damião',
            'Jacilda Amancio', 'Jeronimo Vieira', 'Alberto Marcos', 'Marcela Jandira', 'Leandro Souza',
            'Catarina Janiewiviski', 'Monalisa Farias', 'Raiane Josélia', 'Ana Luiza'
        ];

        var option = {
            position: position,
            cssAnimationStyle: animation,
            plainText: false,
            timeout: timeout
        };

        function show_notification() {
            if (type_name == "masc") {
                msg_final = "<strong>" + names_masc[Math.floor(Math.random() * names_masc.length)] + "</strong>";
            } else if (type_name == "fem") {
                msg_final = "<strong>" + names_fem[Math.floor(Math.random() * names_fem.length)] + "</strong>";
            } else {
                var array_aux = ["masc", "fem"];

                if (array_aux[Math.floor(Math.random() * array_aux.length)] == "masc") {
                    msg_final = "<strong>" + names_masc[Math.floor(Math.random() * names_masc.length)] + "</strong>";
                } else {
                    msg_final = "<strong>" + names_fem[Math.floor(Math.random() * names_fem.length)] + "</strong>";
                }
            }

            msg_final += decodeURIComponent(escape(" " + phrase + " " + product_name));

            if (color == "verde") {
                Notiflix.Notify.Success(msg_final, option);
            }

            if (color == "azul") {
                Notiflix.Notify.Info(msg_final, option);
            }

            if (color == "vermelho") {
                Notiflix.Notify.Failure(msg_final, option);
            }

            if (color == "amarelo") {
                Notiflix.Notify.Warning(msg_final, option);
            }

            var rand = Math.floor(Math.random() * (max_time - min_time + 1) + min_time);
            setTimeout(show_notification, rand * 2000);
        }

        show_notification();
    </script>
    <script>
        $(document).ready(function() {
            const SECONDS_TO_DISPLAY = 450;
            let PERCENTAGE = 0;

            let data = new Date();
            let dw = ["domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira",
                "sábado"
            ];
            let options = {
                year: 'numeric',
                month: 'numeric',
                day: 'numeric'
            };
            document.getElementById('day').innerHTML =
                `${dw[data.getDay()]} ${data.toLocaleDateString("pt-BR", options)}`;


            function atualizarContador() {
                // gera um número aleatório entre 1 e 9
                var random = Math.floor(Math.random() * 9) + 1;
                // adiciona o número aleatório ao contador atual
                var contadorAtual = parseInt(document.getElementById('contador').innerHTML);
                var novoContador = contadorAtual + random;
                // atualiza o conteúdo da tag <span> com o novo contador
                document.getElementById('contador').innerHTML = novoContador;
            }
            // atualiza o contador a cada 15 segundos
            setInterval(atualizarContador, 15000);


            function atualizarBarra(percentage) {
                $('.progress-bar').css('width', percentage + '%').attr('aria-valuenow', percentage);
            }

            barInterval = setInterval(function() {
                PERCENTAGE += 100 / SECONDS_TO_DISPLAY;
                atualizarBarra(PERCENTAGE);
                if (PERCENTAGE >= 100) {
                    clearInterval(barInterval);
                    document.querySelector('.ocultar').style.display = 'none';
                    document.querySelector('.aparecer').style.display = 'block';
                }
            }, 1000);




        });
    </script>


@endsection
