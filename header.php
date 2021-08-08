<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); ?></title>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!--Inserção de estilos-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!--Fim da inserção de estilos-->
    <?php wp_head(); ?>
    
  </head>

  <body>

    <!--INICIO DO MODAL-->

            
                      <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalLoginTitle">Entre na Sua Conta</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                              <form>
                                                <div class="form-group">
                                                  <label for="emailModal">Email</label>
                                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" required>
                                                </div>
                                                <div class="form-group">
                                                  <label for="senhaModal">Senha</label>
                                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Entrar na Conta</button>
                                                <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique Aqui</a></small>
                                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>

    <!--FIM DO MODAL-->
    

    <header>
    <!--Inicio da navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
      <a href="/augusto/wordpress/" class="navbar-brand">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/caravan.svg" alt="Caravan">
      </a>
      <!--Fim da navbar-->
      

      <!--Inicio do botão responsivo pra mobile-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--Fim do botão responsivo pra mobile-->
      

      <!--Inicio dos itens contidos no botão responsivo mobile-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ml-auto">

          <?php
                  $args = array(
                    'menu' => 'principal',
                    'container' => true,
                    'menu_class' => 'menu_principal',
                  );
                  wp_nav_menu( $args );
          ?>

          <li class="nav-item">
            <a class="btn btn-outline-primary ml-md-2" href="#">Inscreva-se</a>
          </li>


</div>
      </div>
      <!--Fim do botão responsivo pra mobile-->
      
    </nav>
  </header>