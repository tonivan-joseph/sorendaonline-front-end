<?php 
$msg=0;
@$msg= $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Só Renda Online</title>
        <meta charset="utf-8">
        <meta property="og:title" content="SRO | Por Tonivan Silva">
        <meta property="og:description" content="Tudo o que você precisa para alavancar seu negócio na internet. Dicas, novidades no mercado do Marketing Digital para você ser um afiliado de sucesso.">
        <meta name="keywords" content="so renda online, renda, online,ganhar dinheiro online, ganhar dinhiro na internet em 2016, dinheiro online, dinheiro, como ser uma aflido, hotmart, Marketing Digital, renda extra,renda extra em casa, renda extra na internet, como ter uma renda extra, dinheiro extra, ganhar dinheiro extra, o que fazer para ganhar dinheiro">
        <meta property="og:url" content="http://sorendaonline.com">
        <meta property="og:site_name" content="So Renda Online">
        <meta property='og:image' content='http://sorendaonline.com/imagens/logo.png'/>
        <meta property="og:type" content="website">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../fonts.css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="icon" href="../imagens/icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">



    </head>
    <body>

        <?php if($msg=="enviado"): ?>
        <h1>Mensagen Enviada Com Sucesso! Obrigado Pelo Seu Contato</h1>
    <?php else: ?>
       
        <!--CABEÇALHO -->
        <header class="cabecalho">
            <div class="linha-top"></div>
            <div class="alinhamento"> 
                <div class="btn-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>   
                <figure class="logo"><a href="../index.html"><img src="../imagens/logo-principal.png" alt="Logo do Site"></a></figure>				
                <nav class="menu" id="menu-princ">
                    <a class="btn-close"><i class="fa fa-times"></i></a>
                    <ul>
                        <li><a href="../index.html"><span class="icon-home2 .icno-menu"></span>Início</a></li>
                        <li><a href="../ferramentas/"><span class="icon-price-tag .icno-menu"></span>Ferramentas</a></li>
                        <li><a href="../sobre/"><span class="icon-user-tie .icno-menu"></span>Sobre</a></li>
                        <li><a href="../contatos"><span class="icon-mail3 .icno-menu"></span>Contatos</a></li>
                    </ul>
                </nav>

                <!-- camp de buscas-->
                <div class="search-box">
                    <form method="get" id="searchform" action="//sorendaonline.com/">
                        <input type="search" value="" name="s" id="s" maxlength="33" placeholder="Buscar">
                    </form>
                </div>
            </div>
        </header>

        <!-- //BANNER DO SITE -->
        <article class="banner-princ">
            <div class="alin-banner">
                <header class="text-banner">
                    <h2>UM GUIA PARA SUA, INDEPENDÊCIA FINANCEIRA</h2>
                </header>

                <div class="bnr-img">
                    <img src="../imagens/Banner.png" alt="banner">
                </div>

                <aside class="text-banner2">
                    <p>Junte-se a outros leitores, e receba atualizações, artigos e dicas totalmente grátis!</p>
                </aside>
            </div>
        </article>

        <!-- // formulário de inscrição -->
        <header class="newslatter-form">
            <div class="alin-newslatter">
                <form method="post" enctype="multipart/form-data" action="http://mkt.sorendaonline.com/w/aekeD8vedKUchA3hsea1a5-50a">
                    <input type="email" class="email" name="email_43" placeholder="seu email..">
                    <input type="submit" value="Quero Receber!" class="buttom">
                </form>
                <p>Respeitamos sua privacidade. Você está 100% seguro!</p>  
            </div>
        </header>

        <!-- //CONTEUDO DO SITE-->
        <main class="main-cont">
            <div id="cont-princ">

                <aside class="contato" >
                    <h2>CONTATO</h2>
                    <form method="get" action="processarForm.php">
                        <span>O seu nome(obrigatório)</span>
                        <input type="text" name="nm" />
                        <span>O seu e-mail(obrigatótio)</span>
                        <input type="email" name="eml" />
                        <span>Assunto</span>
                        <input type="text" name="asst" />
                        <span>Sua mensagem</span>
                        <textarea name="msg" rows="10" cols="40"></textarea>
                        <input type="submit" class="btn" name="buttom" value="Enviar">
                        <input type="hidden" value="contato@sorendaonline.com" name="meu_email">
                    </form>
                </aside>

            </div>
            <!-- //SIDEBAR ESQUERDA DO SITE -->
            <aside class="cl-direita">
                <section class="sobre-autor">
                    <img src="../imagens/Tony-autor.png" alt="Foto do Ator do blog">
                    <h2>Tonvian Silva<span class="icon-user"></span></h2>
                    <p>Sou apaixonado por Web Desing, front end, e permeio no mundo do Marketing Digital buscando uma vida financeira proveniente da web <a href="../sobre/">Saiba Mais...</a></p>
                </section>

                <section class=" art-popls">
                    <h2><span class="icon-newspaper"></span>Artigos Populares</h2>
                    <ul>
                        <li><span class="icon-arrow-right"></span><a href="../ganhar-dinheiro-pela-internet/"><p>Ganhar Dinheiro Pela Internet 100% Grátis? | A Máquina De Vendas Online 3.0</p></a></li>

                        <li><span class="icon-arrow-right"></span><a href="../infoprodutos/"><p>Marketing Digital: Um Passo Simples, Para Sua Independência Financeira.</p></a></li>

                        <li><span class="icon-arrow-right"></span><a href="../infoprodutos/"><p>Infoprodutos: Uma oportunidade inovadora ao seu alcançe, que pode te gerar bons dígitos!</p></a></li>

                        <li><span class="icon-arrow-right"></span><a href="../trabalhar-em-casa/"><p>04 Ferramentas grátis e simples para trabalhar em casa 100% online de forma lucrativa.</p></a></li>
                    </ul>
                </section>

                <section class="newsletter">
                    <h3><span class="icon-download3"></span>Recebas as Novidades</h3>
                    <p>Coloque o seu email abaixo para receber gratuitamente as atualizações do blog!</p>
                    <div class="form">
                        <form method="post">
                            <input type="email" placeholder="Seu email">
                            <button><p>Quero Receber!</p></button>
                        </form>
                    </div>
                </section>
            </aside>
        </main>

        <!--//RODAPÉ -->
        <footer class="social-cont">
            <div class="social-alinhament">
                <div class="social-icons">
                    <a href="https://www.facebook.com/sorendaonline/" target="_blank" class="btn-facebook btn-g"><span class="icon-facebook"></span></a>
                    <a href="https://mobile.twitter.com/sorendaonline" target="_blank" class="btn-twitter btn-g"><span class="icon-twitter"></span></a>
                    <a href="https://plus.google.com/108278033089878867285" target="_blank" class="btn-google btn-g"><span class="icon-google-plus"></span></a>
                    <a href="../atualizacoes-gratis/" class="btn-email btn-g"><span class="icon-mail3"></span></a>
                </div>
                <a href="../index.html"><img src="../imagens/logo-mobile.png" width="110.75" height="42" title="TOPO^" alt="logo_do_roda_pé"></a>
            </div>
        </footer>

        <footer class="rodape">
            <p>2016 - &copy; Só Renda Online - Todos os direitos reservados  - [Desenvolvido Por  Tonivan Silva]</p>
        </footer>


        <!--Jquerys-->
        <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script>
            $(".btn-menu").click(function(){
                $(".menu").show();
            });
            $(".btn-close").click(function(){
                $(".menu").hide();
            });
        </script>

        <!--        scrpts de compartilhamento do twitter-->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        <!-- scripts do google analytic -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-84800553-1', 'auto');
            ga('send', 'pageview');
        </script>
    <?php endif; ?>
    </body>
</html>