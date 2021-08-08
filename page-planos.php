<?php
// Template Name: Planos
?>


<?php get_header(); ?>

  

        <!--py-5: padding no eixo Y de 5-->
        <section class="container">

            <!--Inicio dos titulos-->
                    <div class="text-center my-5">
                          <span class="h6 d-block">SEU PLANO, SUA VIAGEM</span>
                          <h1 class="display-4 text-primary">Escolha o Plano</h1>
                    </div>   
                    
                    <div class="row">

                          <div class="col-md mb-5"> <!--MB-5 DIVIDE OS ELEMENTOS DOS PLANOS GOLD DO PLATINUM-->
                                          <div class="bg-light rounded p-4 box-shadow">
                                          <h2>Gold</h2>

                                                  <ul class="list-unstyled lista-plano">

                                                    <li>→ 30 dias de viagem</li>
                                                    <li>→ 3 destinos diferentes</li>
                                                    <li>→ Tudo pago pela empresa</li>
                                                    <li>→ Ingressos para festas</li>

                                                </ul>

                                               <form>
                                                <div class="form-group bg-light">
                                                  <select class="form-control" id="inputCidades">
                                                    <option>Selecione a cidade</option>
                                                    <option>California</option>
                                                    <option>Paris</option>
                                                    <option>Dublin</option>
                                                  </select>
                                                </div>
                                               </form>
                                               <!--Botão de pagamento-->
                                               <div class="row mt-4 align-items-center">
                                                    <div class="col">
                                                      <a href="inscricao.html" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
                                                      <div class="col">
                                                        <span class="h4">R$ 5.000</span>
                                                      </div>
                                                    </div>
                                               </div>


                                          </div>                                  
                          </div>



                          <div class="col-md mb-5"> <!--MB-5 DIVIDE OS ELEMENTOS DOS PLANOS GOLD DO PLATINUM-->
                            <div class="bg-light rounded p-4 box-shadow">
                              <h2>Platinum  <span class="badge badge-success">Novo</span></h2>

                                    <ul class="list-unstyled lista-plano">

                                      <li>→ 60 dias de viagem</li>
                                      <li>→ 6 destinos diferentes</li>
                                      <li>→ Tudo pago pela empresa</li>
                                      <li>→ Ingressos para festas</li>

                                  </ul>

                                 <form>
                                  <div class="form-group bg-light">
                                    <select class="form-control" id="inputCidades">
                                      <option>Selecione a cidade</option>
                                      <option>California</option>
                                      <option>Paris</option>
                                      <option>Dublin</option>
                                    </select>
                                  </div>
                                 </form>
                                 <!--Botão de pagamento-->
                                 <div class="row mt-4 align-items-center">
                                      <div class="col">
                                        <a href="inscricao.html" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
                                        <div class="col">
                                          <span class="h4">R$ 7.500</span>
                                        </div>
                                      </div>
                                 </div>
                            </div>                                  
                        </div>
                    </div>
        </section>


       

        <?php get_footer(); ?>
</html>