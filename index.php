<?php get_header(); ?>
<!-- MAIN -->
<main id="main">
    <!-- FILTER -->
    <section id="filter" class="main_filter">
        <div class="container">
            <!-- HEADER -->
            <header class="main_filter_header">
                <h1><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-filter.svg"
                        alt="MA7 Negócios">Filtro</h1>
            </header>
            <!-- CONTENT -->
            <div class="main_filter_content">

                <?php echo do_shortcode('[px_filter id="abogktkqguytadt_0" post_type="cadastro_imovel" ]'); ?>

                <form action="" class="main_filter_content_form">
                    <div class="row">
                        <!-- STATE -->
                        <div class="form-group col-sm-3 mt-sm-4">
                            <label for="state">Estado</label>
                            <br>
                            <select name="state" id="state" class="form-control">
                                <option>Escolha...</option>
                            </select>
                        </div>
                        <!-- STATE -->
                        <div class="form-group col-sm-3 mt-sm-4">
                            <label for="city">Cidade</label>
                            <br>
                            <select name="city" id="city" class="form-control">
                                <option>Escolha...</option>
                            </select>
                        </div>
                        <!-- STATE -->
                        <div class="form-group col-sm-3 mt-sm-4">
                            <label for="neighborhood">Bairro</label>
                            <br>
                            <select name="neighborhood" id="neighborhood" class="form-control">
                                <option>Escolha...</option>
                            </select>
                        </div>
                        <!-- CATEGORY -->
                        <div class="form-group col-sm-3 mt-sm-4">
                            <label for="category">Categoria</label>
                            <br>
                            <select name="category" id="category" class="form-control">
                                <option>Escolha...</option>
                            </select>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="main_filter_content_button">
                        <button type="submit" class="btn btn-ma-color1"><img
                                src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-search.svg"
                                alt="MA7 Negócios">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- AUCTIONS -->
    <section id="auctions" class="main_auctions">
        <div class="container">
            <!-- HEADER -->
            <header class="main_auctions_header">
                <h1>Próximos leilões</h1>
                <hr>
                <p>As melhores oportunidades de negócio você encontra aqui!</p>
            </header>
            <!-- CONTENT -->
            <div class="main_auctions_content">
                <div class="row">
                    <!-- CARD -->
                    <article class="col-lg-4 col-md-6 my-3">
                        <?php
                            $arg_category = [
                                'posts_per_page' => 9,
                                'post_type' => 'imoveis',
                            ]
                        ?>

                        <?php
                        // the query
                        $imovelHome = new WP_Query( $arg_category ); ?>

                        <?php if ( $imovelHome->have_posts() ) : ?>
                        <?php while ( $imovelHome->have_posts() ) : $imovelHome->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'imovel-home'); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                        <p><?php _e( 'Não existem produtos cadastrados no momento.' ); ?></p>
                        <?php endif; ?>
                    </article>
                </div>
            </div>
            <div class="main_auctions_button">
                <a href="#" class="btn btn-ma-color1">veja mais <img
                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-see-more.svg"
                        alt="MA7 Negócios"></a>
            </div>
        </div>
    </section>

    <!-- BLOG NOTICES -->
    <section id="blog" class="main_blog">
        <div class="container">
            <!-- HEADER -->
            <header class="main_blog_header">
                <h1>Últimas notícias do blog</h1>
                <hr>
                <p>Aqui você encontra os melhores conteúdos sobre o segmento!</p>
            </header>
            <!-- CONTENT -->
            <div class="main_blog_content">
                <div class="row">
                    <article class="col-lg-4 col-md-6 my-3">
                        <div class="main_blog_content_card">
                            <!-- CARD IMAGE -->
                            <div class="img_card">
                                <img src="_cdn/img/img-test-blog.jpg" alt="MA7 Negócios">
                            </div>
                            <!-- CARD CONTENT -->
                            <div class="content_card">
                                <!-- CARD HEADER -->
                                <header class="content_card_header">
                                    <h2>6 cidades boas para morar no Brasil</h2>
                                    <p><small>09/03/2020</small></p>
                                </header>
                                <!-- CARD TYPE -->
                                <div class="content_card_description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce neque ipsum,
                                        ullamcorper vel velit at, placerat sagittis lacus. Phasellus vel dolor dui...
                                    </p>
                                </div>
                                <p class="link_card"><a href="#">Ler Mais...</a></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="main_blog_button">
                <a href="#" class="btn btn-ma-color1">veja mais <img
                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-see-more.svg"
                        alt="MA7 Negócios"></a>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER -->
<?php get_footer(); ?>
