<?php
// Template Name: Local
?>



<?php get_header(); ?>

  

        <!--py-5: padding no eixo Y de 5-->
        <section class="container">

            <!--Inicio dos titulos-->
                    <div class="text-center my-5">
                          <span class="h6 d-block">O MELHOR DESTINO DA SUA VIAGEM</span>
                          <h1 class="display-4 text-primary">Descubra Dublin</h1>
                    </div>
                    <!--Galeria de fotos-->
                    <div class="row">

                          <div class="col-md">
                                <img class="img-fluid mb-4" src="foto-1.jpg" alt="Foto1">
                                <img class="img-fluid mb-4" src="foto-2.jpg" alt="Foto2">
                                <img class="img-fluid mb-4" src="foto-3.jpg" alt="Foto3">
                          </div>



                          <div class="col-md">
                            <img class="img-fluid mb-4" src="foto-4.jpg" alt="Foto4">
                            <img class="img-fluid mb-4" src="foto-5.jpg" alt="Foto5">
                          </div>

                          <div class="col-md">
                            <img class="img-fluid mb-4" src="foto-6.jpg" alt="Foto6">
                            <img class="img-fluid mb-4" src="foto-7.jpg" alt="Foto7">
                          </div>
                          <!--Fim da Galeria de fotos-->
                    </div>
        </section>

          <!--Inicio do painel de ingresssos-->

        <section class="container">
                        <div class="text-center my-5">
                          <span class="h6 d-block">DESCUBRA O QUE ACONTECE NA CIDADE</span>
                          <h1 class="display-4 text-primary">PROXIMOS EVENTOS</h1>
                        </div>


                                <table class="table table-hover table-responsive-md"> <!--Table responsive torna a tabela responsiva-->
                                  <!--Cabeçalho da tabela-->
                                  <thead>
                                    <tr>
                                      <th scope="col">Data</th>
                                      <th scope="col">Evento</th>
                                      <th scope="col">Local</th>
                                      <th scope="col">Ticket</th>
                                    </tr>
                                  </thead>
                                   <!--Fim do Cabeçalho da tabela-->



                                  <tbody>
                                    <tr>
                                      <th scope="row">23/10</th>
                                      <td>Julien Backer</td>
                                      <td>The Academy</td>
                                      <td><a class="btn btn-outline-secondary btn-sm" href="#">Comprar Ticket</a></td>
                                    </tr>


                                    <tr>
                                      <th scope="row">24/10</th>
                                      <td>Roberto Sinavan</td>
                                      <td>Paris</td>
                                      <td><a class="btn btn-outline-secondary btn-sm" href="#">Comprar Ticket</a></td>
                                    </tr>


                                    <tr>
                                      <th scope="row">25/10</th>
                                      <td>Lara Dinamo</td>
                                      <td>California</td>
                                      <td><a class="btn btn-outline-secondary btn-sm" href="#">Comprar Ticket</a></td>
                                    </tr>

                                    <tr>
                                      <th scope="row">26/10</th>
                                      <td>Rock Jih</td>
                                      <td>Alstom</td>
                                      <td><a class="btn btn-outline-secondary btn-sm" href="#">Comprar Ticket</a></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
        </section>

          <!--Fim do painel de ingresssos-->
            

          <?php get_footer(); ?>
    <!--Fim do script em JS personalizado por mim-->
</html>