<div class="bg-white rounded w-100 d-flex flex-column align-items-center justify-center p-2 mt-2">
    <div style="display: block;">
        <p class="text-center mt-3">Avalie músicas pela internet</p>
        <p class="text-center fw-bold text-success fs-4">E comece a ganhar uma renda extra</p>
    </div>

    <div class="card" id="ms4">
        <div class="w-100 p-2">
            <img src="/images/card4.jpeg" class="w-100" alt="">
            <audio controls class="w-100" id="au4">
                <source src="/audio/audio4.mp3" type="audio/mpeg">
            </audio>
            <p class="fw-bold text-center"> Ouça com atenção e avalie quando a música terminar</p>
        </div>
        <div class="card__satisfacao">
            <h2>De 0 a 5, que nota você da para essa Música?</h2>
            <div class="card__gradeContainer">
                <div class="card__grade" id="card__grade1" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star1"></i></div>
                <div class="card__grade" id="card__grade2" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star2"></i></div>
                <div class="card__grade" id="card__grade3" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star3"></i></div>
                <div class="card__grade" id="card__grade4" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star4"></i></div>
                <div class="card__grade" id="card__grade5" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star5"></i></div>
            </div>
            <div class="card__gradeDescricao">
                <p>Muito ruim</p>
                <p>Muito bom</p>
            </div>
        </div>
        <div class="card__resposta">
            <h2>A música parece diferente das que você costuma ouvir?</h2>
            <div class="resposta__gradeContainer">
                <div class="resposta__grade resposta1" onclick="toggleResponse(this, 'resposta1')">
                    <p>Sim</p>
                </div>
                <div class="resposta__grade resposta1" onclick="toggleResponse(this, 'resposta1')">
                    <p>Não</p>
                </div>
            </div>
        </div>
        <div class="card__resposta">
            <h2>Desde o começo, a música te prendeu a atenção?</h2>
            <div class="resposta__gradeContainer">
                <div class="resposta__grade resposta2" onclick="toggleResponse(this, 'resposta2')">
                    <p>Sim</p>
                </div>
                <div class="resposta__grade resposta2" onclick="toggleResponse(this, 'resposta2')">
                    <p>Não</p>
                </div>
            </div>
        </div>
        <button class="card__enviarResposta" id="enviarResposta" onclick="ms4()" disabled>Enviar
            avaliação</button>
    </div>


    <div class="card ms5" id="ms5" style="display: none;">
        <div class="w-100 p-2">
            <img src="/images/card5.jpeg" class="w-100" alt="">
            <audio controls class="w-100" id="au5">
                <source src="/audio/audio5.mp3" type="audio/mpeg">
            </audio>
            <p class="fw-bold text-center"> Ouça com atenção e avalie quando a música terminar</p>
        </div>
        <div class="card__satisfacao">
            <h2>De 0 a 5, que nota você da para essa Música?</h2>
            <div class="card__gradeContainer">
                <div class="card__grade" id="card__grade1" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star1"></i></div>
                <div class="card__grade" id="card__grade2" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star2"></i></div>
                <div class="card__grade" id="card__grade3" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star3"></i></div>
                <div class="card__grade" id="card__grade4" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star4"></i></div>
                <div class="card__grade" id="card__grade5" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star5"></i></div>
            </div>
            <div class="card__gradeDescricao">
                <p>Muito ruim</p>
                <p>Muito bom</p>
            </div>
        </div>
        <div class="card__resposta">
            <h2>A música te passa uma boa sensação?</h2>
            <div class="resposta__gradeContainer">
                <div class="resposta__grade resposta1" onclick="toggleResponse(this, 'resposta1')">
                    <p>Sim</p>
                </div>
                <div class="resposta__grade resposta1" onclick="toggleResponse(this, 'resposta1')">
                    <p>Não</p>
                </div>
            </div>
        </div>
        <div class="card__resposta">
            <h2>A produção da música é de alta qualidade?</h2>
            <div class="resposta__gradeContainer">
                <div class="resposta__grade resposta2" onclick="toggleResponse(this, 'resposta2')">
                    <p>Sim</p>
                </div>
                <div class="resposta__grade resposta2" onclick="toggleResponse(this, 'resposta2')">
                    <p>Não</p>
                </div>
            </div>
        </div>
        <button class="card__enviarResposta" id="enviarResposta" onclick="ms5()" disabled>Enviar
            avaliação</button>
    </div>
    <div class="card ms6" id="ms6" style="display: none;">
        <div class="w-100 p-2">
            <img src="/images/card6.jpeg" class="w-100" alt="">
            <audio controls class="w-100" id="au6">
                <source src="/audio/audio6.mp3" type="audio/mpeg">
            </audio>
            <p class="fw-bold text-center"> Ouça com atenção e avalie quando a música terminar</p>
        </div>
        <div class="card__satisfacao">
            <h2>De 0 a 5, que nota você da para essa Música?</h2>
            <div class="card__gradeContainer">
                <div class="card__grade" id="card__grade1" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star1"></i></div>
                <div class="card__grade" id="card__grade2" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star2"></i></div>
                <div class="card__grade" id="card__grade3" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star3"></i></div>
                <div class="card__grade" id="card__grade4" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star4"></i></div>
                <div class="card__grade" id="card__grade5" onclick="toggleCard(this)"><i class="fa-regular fa-star"
                        id="star5"></i></div>
            </div>
            <div class="card__gradeDescricao">
                <p>Muito ruim</p>
                <p>Muito bom</p>
            </div>
        </div>
        <div class="card__resposta">
            <h2>A música te deixa com vontade de ouvir mais do artista?</h2>
            <div class="resposta__gradeContainer">
                <div class="resposta__grade resposta1" onclick="toggleResponse(this, 'resposta1')">
                    <p>Sim</p>
                </div>
                <div class="resposta__grade resposta1" onclick="toggleResponse(this, 'resposta1')">
                    <p>Não</p>
                </div>
            </div>
        </div>
        <div class="card__resposta">
            <h2>Você gostaria de recomendar essa música para um amigo?</h2>
            <div class="resposta__gradeContainer">
                <div class="resposta__grade resposta2" onclick="toggleResponse(this, 'resposta2')">
                    <p>Sim</p>
                </div>
                <div class="resposta__grade resposta2" onclick="toggleResponse(this, 'resposta2')">
                    <p>Não</p>
                </div>
            </div>
        </div>
        <button class="card__enviarResposta" id="enviarResposta" onclick="ms6()" disabled>Enviar
            avaliação</button>
    </div>
    <div class="card finalizacao" id="finalizacao" style="display: none; text-align: center">
        <div class="finalizacao__titulo">
            <h1>PARABÉNS!</h1>
            <h2>Seu saldo subiu!</h2>
        </div>
        <div class="finalizacao__trofeu">
            <img src="/images/trofeu.png" alt="">
            <h2>R$275,36</h2>
        </div>
        <div class="finalizacao__descricao">
            <p>Você acaba de ganhar R$275,36, por ter avaliado mais músicas cadastradas no nosso aplicativo.</p>
            <span>**Seu crédito de R$275,36 expira hoje, dia <b><span id="todayDate"></span></b></span>
        </div>
        <div class="finalizacao__botao">
            <a href="/saqueFinal"><button
                    style="width: 100%;
                    margin-top: 1rem;
                    background: #198754;
                    padding: 1rem;
                    font-weight: bold;
                    color: #fff;
                    border: none;
                    border-radius: 12px;">
                    CONTINUAR</button></a>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            hideAllExcept();
        });

        function hideAllExcept() {
            document.getElementById("ms4").style.display = "block";
            document.getElementById("au4").pause();
            document.getElementById("ms5").style.display = "none";
            document.getElementById("au5").pause();
            document.getElementById("ms6").style.display = "none";
            document.getElementById("au6").pause();
            document.getElementById("finalizacao").style.display = "none";

            timer();
        }

        function timer() {
            let cardsSatisfacao = document.getElementsByClassName("card__satisfacao");
            let cardsResposta = document.getElementsByClassName("card__resposta");
            let cardsEnviarResposta = document.getElementsByClassName("card__enviarResposta");

            let cards = [...cardsSatisfacao, ...cardsResposta, ...cardsEnviarResposta];
            for (let i = 0; i < cards.length; i++) {
                cards[i].style.display = "none";
            }
            setTimeout(() => {
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.display = null;;
                }
            }, 25 * 1000);
        }

        function popup() {
            document.getElementById("popupContainer").style.display = "flex";
            document.getElementById("popup").style.display = "block";
            document.getElementById("baixar").style.display = "none";
        }

        function popupBaixar() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("baixar").style.display = "block";
        }

        function removeDiv(divID) {
            let divRemover = document.getElementById(divID);
            if (divRemover) {
                let parentDiv = divRemover.parentNode;
                parentDiv.removeChild(divRemover);
            }
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function playAudio(audioPath) {
            var audio = new Audio(audioPath);
            audio.play();
        }

        function ms4() {
            scrollToTop();

            document.getElementById('saldo').innerHTML = 'R$201,56';
            $('#popup-valor').html('R$ 30,10');
            $('#popup').show();
            $('#overlayPopUp').show();
            document.getElementById("au4").pause();
            setTimeout(() => {
                removeDiv('ms4');
                document.getElementById("ms5").style.display = "block";
                timer();
                $('#popup').hide();
                $('#overlayPopUp').hide();
            }, 4000);

            playAudio('./audio/cash.mp3');
        }

        function ms5() {
            scrollToTop();

            document.getElementById('saldo').innerHTML = 'R$232,90';
            $('#popup-valor').html('R$ 31,34');
            $('#popup').show();
            $('#overlayPopUp').show();
            document.getElementById("au5").pause();
            setTimeout(() => {
                removeDiv('ms5');
                document.getElementById("ms6").style.display = "block";
                timer();
                $('#popup').hide();
                $('#overlayPopUp').hide();
            }, 4000);

            playAudio('./audio/cash.mp3');
        }

        function ms6() {
            scrollToTop();

            document.getElementById('saldo').innerHTML = 'R$275,36';
            $('#popup-valor').html('R$ 42,46');
            $('#popup').show();
            $('#overlayPopUp').show();
            document.getElementById("au6").pause();
            setTimeout(() => {
                removeDiv('ms6');
                document.getElementById("finalizacao").style.display = "block";
                timer();
                $('#popup').hide();
                $('#overlayPopUp').hide();
            }, 4000);

            playAudio('./audio/cash.mp3');
        }

        function toggleResponse(clickedElement, group) {
            // Obtém todos os elementos do mesmo grupo
            const groupElements = document.querySelectorAll(`.${group}`);

            // Remove a classe 'active' de todos os elementos do mesmo grupo
            groupElements.forEach(element => {
                element.classList.remove('active');
            });

            // Adiciona a classe 'active' apenas ao elemento clicado
            clickedElement.classList.add('active');
        }

        function toggleCard(clickedElement) {
            const allCards = document.querySelectorAll('.card__grade');

            allCards.forEach(card => {
                card.classList.remove('active');
            });

            switch (clickedElement.id) {
                case 'card__grade1':
                    updateStars('star1', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star2', 'fa-regular fa-star', '#7e7e7e');
                    updateStars('star3', 'fa-regular fa-star', '#7e7e7e');
                    updateStars('star4', 'fa-regular fa-star', '#7e7e7e');
                    updateStars('star5', 'fa-regular fa-star', '#7e7e7e');
                    break;
                case 'card__grade2':
                    updateStars('star1', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star2', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star3', 'fa-regular fa-star', '#7e7e7e');
                    updateStars('star4', 'fa-regular fa-star', '#7e7e7e');
                    updateStars('star5', 'fa-regular fa-star', '#7e7e7e');
                    break;
                case 'card__grade3':
                    updateStars('star1', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star2', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star3', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star4', 'fa-regular fa-star', '#7e7e7e');
                    updateStars('star5', 'fa-regular fa-star', '#7e7e7e');
                    break;
                case 'card__grade4':
                    updateStars('star1', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star2', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star3', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star4', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star5', 'fa-regular fa-star', '#7e7e7e');
                    break;
                case 'card__grade5':
                    updateStars('star1', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star2', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star3', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star4', 'fa-solid fa-star active', '#ffd700');
                    updateStars('star5', 'fa-solid fa-star active', '#ffd700');
                    break;
                    // Adicione mais casos conforme necessário
                default:
                    console.log("Nenhum caso correspondente");
            }
        }

        function updateStars(elementId, className, color) {
            const starElement = document.getElementById(elementId);
            if (starElement) {
                starElement.className = className;
                starElement.style.color = color;
            } else {
                console.error("Elemento não encontrado com ID: " + elementId);
            }
        }

        const cards = document.querySelectorAll('.card__grade');

        cards.forEach(card => {
            card.addEventListener('click', function() {
                toggleCard(this);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let cardGradeButtons = document.querySelectorAll('.card__grade');
            let resposta1Buttons = document.querySelectorAll('.resposta1');
            let resposta2Buttons = document.querySelectorAll('.resposta2');

            cardGradeButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    toggleButton(this, cardGradeButtons);
                    checkConditions();
                });
            });

            resposta1Buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    toggleButton(this, resposta1Buttons);
                    checkConditions();
                });
            });

            resposta2Buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    toggleButton(this, resposta2Buttons);
                    checkConditions();
                });
            });

            function toggleButton(clickedButton, buttons) {
                buttons.forEach(function(btn) {
                    btn.classList.remove('active');
                });

                clickedButton.classList.add('active');
            }

            function checkConditions() {
                const enviarRespostaButton = document.getElementById('enviarResposta');

                const cardGradeActive = document.querySelector('.card__grade.active');
                const resposta1Active = document.querySelector('.resposta1.active');
                const resposta2Active = document.querySelector('.resposta2.active');

                if (enviarRespostaButton && cardGradeActive && resposta1Active && resposta2Active) {
                    enviarRespostaButton.removeAttribute('disabled');
                    enviarRespostaButton.classList.add('active');
                } else {
                    enviarRespostaButton.setAttribute('disabled', 'true');
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            let data = new Date();

            var date = data.getDate();
            var month = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro",
                "outubro", "novembro", "dezembro"
            ][data.getMonth()];
            var year = data.getFullYear();

            $('#todayDate').html(`${date} de ${month} de ${year}**`);
        });
    </script>