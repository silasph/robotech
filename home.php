<section class="topics" id="about">
    <div class="row">
        <div class="medium-4 columns topic">
            <div class="topic-icon">
                <i class="fa fa-cogs"></i>
            </div>
            <div class="topic-title">
                <h4>Lorem Ipsum</h4>
            </div>
            <div class="topic-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illum, neque quaerat voluptatum,
                inventore eveniet.
            </div>
        </div>

        <div class="medium-4 columns topic">
            <div class="topic-icon">
                <i class="fa fa-rocket"></i>
            </div>
            <div class="topic-title">
                <h4>Dolor amet</h4>
            </div>
            <div class="topic-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illum, neque quaerat voluptatum,
                inventore eveniet.
            </div>
        </div>

        <div class="medium-4 columns topic">
            <div class="topic-icon">
                <i class="fa fa-star"></i>
            </div>
            <div class="topic-title">
                <h4>Consequet conque</h4>
            </div>
            <div class="topic-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illum, neque quaerat voluptatum,
                inventore eveniet.
            </div>
        </div>
    </div>
</section>

<section class="middle bg-parallax" id="services">
    <div class="row expanded">
        <div class="medium-6 medium-offset-2 columns text-center fullscreen valign-wrapper">
            <div class="valign">
                <h1 class="section-title">Lorem ipsum dolor</h1>

                <div class="medium-6 columns">
                    <ul class="checklist">
                        <li>Awesome item</li>
                        <li>Yeah we are awesome</li>
                        <li>Robots rocks!</li>
                    </ul>
                </div>

                <div class="medium-6 columns">
                    <ul class="checklist">
                        <li>No more jokes for list items</li>
                        <li>Fuck yeah</li>
                        <li>No tom do dom</li>
                    </ul>
                </div>

                <div class="medium-12">
                    <a href="#!" class="button">Saiba mais</a>
                </div>
            </div>
        </div>

        <div class="medium-4 columns">
            <img class="sec-image" src="<?php echo BASE_URL . 'assets/img/abb.png' ?>" alt="Robô Abb">
        </div>
    </div>
</section>

<section class="brands" id="clients">
    <div class="row expanded">
        <ul class="logos">
            <?php
            $directory = "assets/img/brands/";
            $images = glob($directory . "*.png");

            foreach($images as $image)
            {
              echo "
              <li>
                <img src='{$image}'>
              </li>
              ";
            }
          ?>
      </ul>
  </div>
</section>

<section class="contact" id="contact">
    <div class="row expanded">
    <h1 class="section-title text-center">Fale conosco</h1>
        <div class="medium-6 medium-offset-3">
            <p>Preencha o formulário abaixo para entrar em contato conosco:</p>
            <form>
                <div class="input-wrapper">
                    <input type="text" placeholder="*Nome">
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="*Email">
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="Telefone">
                </div>
                <div class="input-wrapper">
                    <textarea rows="3" placeholder="*Mensagem"></textarea>
                </div>

                <div class="button-wrapper">
                    <a class="button send-message" href="#!">Enviar</a>
                </div>
            </form>
        </div>
    </div>
</section>