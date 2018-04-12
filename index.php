<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/home/templates/padraogoverno01/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>

    <title>SIMTEC - III SIMPÓSIO DE TECNOLOGIA DA INFORMAÇÃO DO IF GOIANO – CAMPUS CERES</title>

    <link rel="stylesheet" href="public/css/style.css">

    <script src="public/js/libs/jquery/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="public/js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="public/js/slick/slick-theme.css"/>
    <script src="public/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        // $(document).on('ready', function () {
        //     $(".slide").slick({
        //         slidesToShow: 5,
        //         slidesToScroll: 1,
        //         autoplay: true,
        //         autoplaySpeed: 1000,
        //     });
        // });

        // Scroll
        this.go = function (e) {
            $('html, body').animate({scrollTop: $(e).offset().top}, 1000);
        };


        $(window).scroll(function () {
            var posicaoScroll = $(document).scrollTop();

            if ($(window).width() > 999) {
                if (posicaoScroll > 100) {
                    $('header').addClass("fixed");
                } else {
                    $('header').removeClass("fixed");
                }
            }
        });
    </script>
</head>

<body>

<header class="box">
    <div class="content">
        <nav>
            <ul>
                <li><a href="javascript:go('.banner');">O EVENTO</a></li>
                <li><a href="javascript:go('.cronograma');">PROGRAMAÇÃO</a></li>
                <li><a href="javascript:go('.parceiros');">parceiros</a></li>
                <li><a href="javascript:go('.local');">LOCAL</a></li>
                <li><a target="_blank" href="https://doity.com.br/semanaacademica/artigos">SUBMISSÃO DE TRABALHOS</a>
                </li>
                <li><a target="_blank" href="II_SIMTEC">II SIMTEC</a></li>
                <li><a target="_blank" href="I_SIMTEC">I SIMTEC</a></li>
                <li><a target="_blank" href="https://doity.com.br/semanaacademica/inscricao">INSCREVA-SE</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="box banner"></div>
    <section class="content home evento">
        <div class="logo"></div>

        <div class="box">
            <hgroup>
                <h1>Inovação Tecnológica</h1>
                <h4 class="weight-300">confira nossa programação</h4>
            </hgroup>

            <div class="arrow"></div>
        </div>

        <article>
            <p>
                As inscrições serão realizadas até o dia 12 de Maio de 2018 por endereço on-line:
                www.doity.com.br/semanaacademica/inscricao. <br> <br> As inscrições terão valor de R$ 25,00 por participante.
            </p>
            <p>
                Público alvo: estudantes dos cursos técnicos
                (integrado/subsequente), acadêmicos (graduação) e comunidade externa.<br> <br>
                <a target="_blank"
                   href="public/files/pdf/programacao.pdf"><span>Faça o download do cronograma completo.</span></a>
            </p>
        </article>

    </section>
    <section class="content pattern cronograma">
        <h2>Nossos Palestrantes </h2>

        <div class="box items cycle-slideshow slide">

            <article class="item">
                <img src="public/img/palestrantes/jorgecampagnolo.jpg" alt="">
                <h1>Jorge Mario Campagnolo</h1>
                <p>
                    Possui graduação em Engenharia Elétrica pela UFRGS (1979),
                    mestrado em Engenharia Elétrica pela UFSC (1984) e doutorado em Engenharia Elétrica pela COPPE-UFRJ (1994).
                    Diretor do Departamento de Políticas e Programas de Apoio a Inovação do Ministério da Ciência, Tecnologia,
                    Inovações e Comunicações (MCTIC).
                </p>
                <h2>Panorama das pesquisas sobre inovações e tecnologias no Brasil</h2>
                <h3>Horário: 19:00 às 23:00</h3>
            </article>

            <article class="item">
                <img src="public/img/palestrantes/1.png" alt="">
                <h1>Davi Taveira Alencar Alarcão</h1>
                <p>
                    Mestre em Engenharia de Produção e Sistemas. Pós-graduado na área de Engenharia de Redes e Sistema
                    de Telecomunicações. Engenheiro de Computação (CREA 14489/D-GO). É professor concursado (Informática II)
                    do Instituto Federal de Goiás (Câmpus Uruaçu).
                </p>
                <h2>Software livre auxiliando na pró-atividade dos profissionais de TI</h2>
                <h3>Horário: 20:00 às 22:00</h3>
            </article>

            <article class="item">
                <img src="public/img/palestrantes/vanessa.jpg" alt="">
                <h1>Vanessa Avelino Xavier de Camargo</h1>
                <p>
                    Professora da Faculdade de Engenharia de Software da UniRV.
                    Professora do curso de Administração do Centro de Ensino Superior de Jataí (CESUT).
                    Mestra em Ciências pela Universidade Federal de Uberlândia.
                    Bacharela em Ciência da Computação pela Universidade Federal de Goiás - Regional Jataí.
                </p>
                <h2>Guia Definitivo para Entender a Realidade Virtual</h2>
                <h3>Horário: 20:00 às 22:00</h3>
            </article>

            <article class="item">
                <img src="public/img/palestrantes/thiago.jpg" alt="">
                <h1>Thiago S. Fagundes</h1>
                <p>
                    Acadêmico do curso de Ciência da Computação, na UFG Campus Goiânia. Presidente da empresa júnior da Computação da UFG.
                </p>
                <h2>Como o empreendedorismo pode impactar sua graduação</h2>
                <h3>Horário: 09:00 às 10:00</h3>
            </article>

        </div>

    </section>

    <!--
    <section class="content pattern evento home evento">

        <div class="box">
        <h2>Tecnologia e Gênero</h2>
            <hgroup>
                <h1 style="font-size:35px; letter-spacing:-2px;">Jaqueline Ribeiro, Flavia Bastos e Adriano Braga.</h1>
                <h4 class="weight-300">Mesa Redonda, Sexta feira, Horários 10h00 – 11h00 </h4>
            </hgroup>
        </div>
    </section>mesa redonda-->


    <!--MINI CURSOS-->
    <div class="box" id="minicursos">

        <section class="content pattern cronograma" id="minicursos">
            <h2>Minicursos </h2>

            <div class="box items cycle-slideshow slide">

                <article class="item">
                    <img src="public/img/palestrantes/christiane.jpg" alt="">
                    <h1>Christiane Borges Santos</h1>
                    <p>
                        Possui graduação em Tecnologia Em Redes de Comunicação pelo Centro Federal de Educação Tecnológica de Goiás (2007).
                        É Mestre em Engenharia Elétrica e de Computação da UFG.
                        Fundadora do Grupo de Robótica para Meninas Metabotix e membro do Grupo de Robótica GYNBOT.
                    </p>
                    <h2>1 - A segurança nossa de cada dia</h2>
                    <h3>Horário: 19:00 às 23:00</h3>
                </article>

                <article class="item">
                    <img src="public/img/palestrantes/raphael.jpg" alt="">
                    <h1>Raphael de Aquino Gomes</h1>
                    <p>
                        Doutor em Ciência da Computação pela Universidade Federal de Goiás com período sanduíche no Institut National
                        de Recherche en Informatique et en Automatique (INRIA), França. Possui graduação (2006) e mestrado (2009)
                        em Ciência da Computação pela Universidade Federal de Goiás. Sun Certified Java Programmer.
                    </p>
                    <h2>2 - Primeiros passos na nuvem</h2>
                    <h3>Horário: 19:00 às 23:00</h3>
                </article>

                <article class="item">
                    <img src="public/img/palestrantes/rafael_feitosa.jpg" alt="">
                    <h1>Rafael Divino Ferreira Feitosa</h1>
                    <p>
                        Doutorando e Mestre em Ciência da Computação pela Universidade Federal de Goiás (2015),
                        especialista em Desenvolvimento de Sistemas para Web pela UniAnhanguera (2010) e graduado
                        em Sistemas de Informação pela Universidade Estadual de Goiás (2008).
                    </p>
                    <h2>3 - Introdução ao processamento multi-core de imagens com Python</h2>
                    <h3>Horário: 19:00 às 23:00</h3>
                </article>

                <article class="item">
                    <img src="public/img/palestrantes/1.png" alt="">
                    <h1>Daniel Moreira, Davi Faria, Igor Justino e Paulo Henrique</h1>
                    <p>
                        Acadêmicos do 5º período do Curso de Bacharelado em Sistemas de Informação, pelo Campus Ceres do IF Goiano.
                    </p>
                    <h2>4 - CCS3: Responsividade com Flexbox e suas propriedades</h2>
                    <h3>Horário: 19:00 às 23:00</h3>
                </article>

                <article class="item">
                    <img src="public/img/palestrantes/raquel.jpg" alt="">
                    <h1>Raquel Pereira de Alcantara</h1>
                    <p>
                        É analista de sistemas ERP, graduanda em Sistemas de Informações pelo IFG Goiânia.
                        É aprendiz Jedi e entusiasta em Data Science, acredita no poder de aprender e reaprender constantemente.
                    </p>
                    <h2>5 - Como Criar seu primeiro projeto de Data Science com Python</h2>
                    <h3>Horário: 19:00 às 23:00</h3>
                </article>

            </div>

        </section>

    </div>


    <section class="content pattern evento home evento">

        <h2 class="box">Programação</h2>
        <img src="public/img/site/programacao.jpg">

    </section>


    <!--
    <section class="content pattern evento home evento">

        <div class="box">
        <h2>Encerramento, 08(Sábado)</h2>
            <hgroup>
                <h1 style="font-size:35px; letter-spacing:-2px;">Campeonato de Jogos Eletrônicos</h1>
                <h4 class="weight-300">Local: IF Goiano Campus Ceres – Laboratórios de Informática (Bloco C)</h4>
                <h4 class="weight-300">11h00 – 11h30 – Premiação dos melhores pôsteres.</h4>
            </hgroup>

            <hgroup style="margin-top:50px; letter-spacing:-2px;">
                <h1 style="font-size:35px;">Pronunciamento e premiação dos melhores Pôsteres</h1>
                <h4 class="weight-300">11h30 – 12h00 – Local: IF Goiano Campus Ceres - Cantina</h4>
            </hgroup>
        </div>
    </section>mesa redonda-->


    <section class="content pattern local">
        <div class="items">
            <div>
                <h2>Local</h2>
                <p>15/05 a 19/10 IFGoiano - Campus Ceres</p>
            </div>
            <div>
                <h2>Inscrições</h2>
                <p>Até 12/05 <br> <b><a target="_blank" href="https://doity.com.br/semanaacademica/inscricao">www.doity.com.br/semanaacademica/inscricao</a></b> <br> Valor da Inscrição: R$ 25,00</p>
            </div>
        </div>

    </section>


</main>
<div class="box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.4580987743925!2d-49.598484733791025!3d-15.351657165467465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935d3a037fffee17%3A0x8bd3d4daaed3b666!2sInstituto+Federal+Goiano+-+C%C3%A2mpus+Ceres!5e0!3m2!1spt-BR!2sbr!4v1474611505848"
            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<footer>
    <div id="btn-top" onclick="$('html, body').animate({scrollTop: 0}, 600)">voltar ao topo?</div>
</footer>


<!--logos-->
<section class="content pattern parceiros">
    <h2>Patrocinadores</h2>
    <div class="box items">
        <?php for ($i = 1; $i < 6; $i++) { ?>
            <div class="logo">
                <img src="public/img/patrocinadores/<?= $i; ?>.png" alt="">
            </div>
        <?php } ?>
    </div>
</section>

<!--logos-->
<section class="content ifgoiano">
</section>

</body>
</html>