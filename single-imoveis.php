<?php get_header(); ?>
    <!-- MAIN -->
    <main id="main">

        <?php
        if (have_posts()) :
        while (have_posts()) : the_post();
        ?>
        <?php get_template_part('template-parts/content', 'imovel'); ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Não existem produtos cadastrados no momento.</p>
        <?php endif; ?>

        <!--CTA-->
        <section id="cta_imovel" class="main_cta">
            <div class="container">
                <!--HEADER-->
                <header class="main_cta_header">
                    <h1>Gostou deste imóvel?</h1>
                    <p>Quer conversar com um corretor e ter o atendimento para maiores informações sobre este imóvel?
                    </p>
                </header>
                <!--CONTENT-->
                <div class="main_cta_content">
                    <p>Clique no botão abaixo para preencher o formulário e vamos lhe direcionar para alguém que entende
                        a sua necessidade!</p>
                    <div class="main_cta_content_button">
                        <a href="#formulario" class="btn btn-ma-color1">Preencher formulário</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- FOOTER -->
<?php get_footer(); ?> 
