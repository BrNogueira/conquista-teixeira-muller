<?php include "./includes/header.php";?>

<main>
<div class="page">
        <div class="container">
            <div class="txt-destaque">
                <h3>CONTATO</h3>
                <h2></h2>
            </div>
        </div> 
    </div>
<section>
<div class="contato">
	<div class="container">    	
        <div class="row">
            <div class="col-lg-8">
                <h2>Envie sua Mensagem</h2>
                <form class="contact-form" action="includes/contato-script.php" method="post">
                <div class="row">
                        <div class="col-lg-6">
                            <div class="form-field">
                                <input class="input-sm form-full error" id="name" type="text" name="nome" placeholder="Seu nome" required="required">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="sub" type="text" name="assunto" placeholder="Assunto" required="required">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-field">
                                <textarea class="form-full" id="message" rows="7" name="mensagem" placeholder="Sua Mensagem" required="required"></textarea>
                            </div>
                        </div>
                </div>   
                <div class="row">     
                        <div class="col-lg-12 mt-30 mobile-button">
                            <button class="btn-text" type="submit" id="submit" name="button">
                                Enviar Mensagem
                            </button>
                        </div>
                </div>
                </form>
            </div>
            
            <div class="col-lg-4 contact-info">
            	<h2>Entre em Contato</h2>
                <ul class="info-contact">
                  <li>
                      <i class="fas fa-map-marker-alt icon"></i>
                      <div class="content">
                          <p>
                                Rua Celeste Gobbato, 32/204 - Praia de Belas                           Porto Alegre / RS

                          </p>

                      </div>
                  </li>

                  <li>
                      <i class="fas fa-mobile-alt icon"></i>
                      <div class="content">
                          <p>
                              +55 (51) 3026-3909
                          </p>
                      </div>
                  </li>
                  <li>
                      <i class="fas fa-envelope icon"></i>
                      <div class="content">
                          <p>
                          contato@teixeiramuller.com.br
                          </p>
                      </div>
                  </li>
              </ul>
            </div>
            
        </div>
   </div>     
</div>
</main>

<?php include "./includes/footer.php";?>
