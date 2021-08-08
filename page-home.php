<?php
// Template Name: HomePg
?>


<?php get_header(); ?>

  <section class="container-fluid">
      <div class="row bg-dark text-white">

          <!--Carousell do Bootstrap animação em slides INICIO-->
          <div class="col-lg-7 p-0"> <!--Padding de 0 resolve o problema de ter uma margem preta ao redor do carousell-->
                                <div id="carouselCidades" class="carousel slide" data-ride="carousel">
                                  <!--Isso é a barra de mudar de slide-->
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselCidades" data-slide-to="1"></li>  <!--Isso controla a barrinha dos slides-->
                                    <li data-target="#carouselCidades" data-slide-to="2"></li>  <!--Varia de 0 até o infinito-->
                                  
                                  </ol> 
                                  <!--Fim da barra de mudar de slide-->

                                  <!--Imagem dos slides-->
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <!--Isso são os slides-->
                                      <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/california.jpg" alt="California">

                                      <!--Frase que aparece em baixo dos slides-->
                                      <div class="carousel-caption">
                                        <h3 class="display-4">California</h3>
                                        <p>Hello</p>
                                      </div>
                                      <!--Fim da Frase que aparece em baixo dos slides-->

                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/paris.jpg" alt="Paris">

                                      <!--Frase que aparece em baixo dos slides-->
                                      <div class="carousel-caption">
                                        <h3 class="display-4">Paris</h3>
                                        <p>Hello</p>
                                      </div>
                                      <!--Fim da Frase que aparece em baixo dos slides-->

                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/dublin.jpg" alt="Dublin">

                                      <!--Frase que aparece em baixo dos slides-->
                                      <div class="carousel-caption">
                                        <h3 class="display-4">Dublin</h3>
                                        <p>Hello</p>
                                      </div>
                                      <!--Fim da Frase que aparece em baixo dos slides-->

                                    </div>

                                    

                                  </div>

                                  <!--Fim da Imagem dos slides-->
                                  <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                  </a>
                                </div>
          </div>
          <!--Carousell do Bootstrap animação em slides FIM-->

          <!--Inicio da parte com formulário-->
          <div class="col-lg-4 p-4 align-self-center">
              <h1 class="display-4">Realize a viagem do seu sonho</h1>
              <p class="lead">O melhor local para viajar é com a Caravan,<br> mais de 5000 excursões concluidas</p>

              <form action="">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="E-mail" aria-label="Email">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Inscreva-se</button>
                        </span>
                    </div>
              </form>
          </div>
          <!--Fim da parte com formulário-->


      </div>
  </section>


        <!--py-5: padding no eixo Y de 5-->
        <section class="py-5 bg-light text-center">

            <!--Inicio dos titulos-->
              <div class="container">
                    <div class="my-5">
                          <span class="h6 d-block">TUDO DE MELHOR PARA VOCÊ</span>
                          <h2 class="display-4 text-primary">Aproveite as Vantagens</h2>
                    </div>
                  <!--Fim dos titulos-->
            

              <div class="row">

                    <!--Inicio da seção de itens -->
                    <div class="col-xl-4 col-md-6">


                      <div class="d-flex justify-content-center icons">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/passaporte.svg" alt="Passaporte">
                      </div>

                        <h3>Documentos</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>


                    <div class="col-xl-4 col-md-6">

                    <div class="d-flex justify-content-center icons">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/passagens.svg" alt="Passagens">
                    </div>

                      <h3>Passagens</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>

                  <div class="col-xl-4 col-md-6">

                  <div d-flex class="d-flex justify-content-center icons">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/translado.svg" alt="Translado">
                  </div>

                    <h3>Translado</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="col-xl-4 col-md-6">


                  <div class="d-flex justify-content-center icons">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/praias.svg" alt="Praias">
                  </div>

                    <h3>Praias</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>


                <div class="col-xl-4 col-md-6">

                <div class="d-flex justify-content-center icons">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/bagagens.svg" alt="Bagagens">
                </div>

                  <h3>Bagagens</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>

              <div class="col-xl-4 col-md-6">

              <div d-flex class="d-flex justify-content-center icons">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/turismo.svg" alt="Turismo">
              </div>

                <h3>Turismo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
               <!--Fim da seção de itens -->
            </div>
            <!--Botão de PLANOS-->
            <a class="btn btn-primary btn-lg mt-5" href="/augusto/wordpress/planos-2/">Comprar plano</a>
             <!--Fim do Botão de PLANOS-->
        </section>

        <!--Inicio da imagem que cobre tudo-->
        <section>
          <blockquote class="blockquote section-img text-center text-white p-md-5"> 
                    <p class="display-4 p-md-5 p-3"><em>"A felicidade não está na estrada que leva a algum lugar. A felicidade é a própria estrada."</em></p>
                    <!--p-md-5 p-3 o P-3 fala que antes do MD menor que 768px ele quer padding de 3-->
                    <!--Citação-->
                    <footer class="blockquote-footer text-white">Bob Dylan</footer>
                    <!--Fim da Citação-->
          </blockquote>
        </section>

         <!--Fim da imagem que cobre tudo-->

        <!--Inicio da parte de baixo da imagem que cobre tudo-->
         <section class="container">


                <div class="my-5 text-center">
                  <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
                  <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
                </div>
              <!--Inicio do Collapse-->
                <div class="row justify-content-center">


                    <!--Inicio dos itens collapse-->
                    <div class="col-md-6" id="perguntasFrequentes" data-children=".pergunta">

                      <div class="pergunta py-3">
                          <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes"  href="#pergunta1" aria-expanded="true" aria-controls="pergunta1">→ É possível cancelar a viagem</a>

                          <div id="pergunta1" class="collapse show" role="tabpanel">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex veniam laboriosam amet magni deleniti cupiditate iusto, laudantium, similique id culpa expedita labore voluptatem atque eos facere porro natus hic nobis!</p>
                        </div>

                      </div>


                      <div class="pergunta py-3">
                        <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes"  href="#pergunta2" aria-expanded="true" aria-controls="pergunta2">→ Qual a garantia que tenho se perder o voo?</a>
                          <!--Adiciona uma linha em baixo do elemento-->
                        <div id="pergunta2" class="collapse" role="tabpanel">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex veniam laboriosam amet magni deleniti cupiditate iusto, laudantium, similique id culpa expedita labore voluptatem atque eos facere porro natus hic nobis!</p>
                      </div>

                    </div>


                    <div class="pergunta py-3">
                      <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes"  href="#pergunta3" aria-expanded="true" aria-controls="pergunta3">→ Qual a principal forma de viagem?</a>
                        <!--Adiciona uma linha em baixo do elemento-->
                      <div id="pergunta3" class="collapse" role="tabpanel">
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex veniam laboriosam amet magni deleniti cupiditate iusto, laudantium, similique id culpa expedita labore voluptatem atque eos facere porro natus hic nobis!</p>
                    </div>

                  </div>


                  <div class="pergunta py-3">
                    <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes"  href="#pergunta4" aria-expanded="true" aria-controls="pergunta4">→ Vocês dão descontos para grupos grandes?</a>
                      <!--Adiciona uma linha em baixo do elemento-->
                    <div id="pergunta4" class="collapse" role="tabpanel">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex veniam laboriosam amet magni deleniti cupiditate iusto, laudantium, similique id culpa expedita labore voluptatem atque eos facere porro natus hic nobis!</p>
                  </div>

                </div>






                 <!--Divs das classes com col-6 & row-->
                    </div>

                  </div>
                  <!--Fim das Divs  classes com col-6 & row-->
              <!--Fim do Collapse-->

              <!--Inicio do botão-->
              <div class="text-center my-4">
                  <p class="small m-2">Fale conosco para mais dúvidas!</p>
                  <a class="btn btn-primary btn-lg" href="#">Entre em contato</a>
              </div>
              <!--Fim do botão-->
         </section>

         <?php get_footer(); ?>


</html>