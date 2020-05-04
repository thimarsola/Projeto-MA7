<?php
/**
 *  Template Name: Leilões
 */
?>

<?php get_header(); ?>
<!-- MAIN -->
<main id="main">
    <!-- FILTER -->
    <section id="filter" class="main_filter">
        <div class="container">
            <!-- HEADER -->
            <header class="main_filter_header">
                <h1><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-filter.svg" alt="MA7 Negócios">Filtro</h1>
            </header>
            <!-- CONTENT -->
            <div class="main_filter_content">
                <form action="" class="main_filter_content_form">
                    <div class="row">
                        <!-- STATE -->
                        <div class="form-group col-sm-3 mt-sm-4">
                            <label for="state">Estado</label>
                            <br>
                            <select name="state" id="state" class="form-control" >
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
                        <button type="submit" class="btn btn-ma-color1"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-search.svg" alt="MA7 Negócios">Pesquisar</button>
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
                <h1>Conheça todos os nossos <span>Leilões!</span></h1>
                <hr>
                <p>Veja abaixo nossos Leilões!</p>
            </header>
            <!-- CONTENT -->
            <div class="main_auctions_content">
                <div class="row">
                    
                        <?php
                            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

                            $arg_category = [
                                'posts_per_page' => 9,
                                'post_type' => 'imoveis',
                                'paged' => $paged,
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
                </div>
            </div>
            <!-- PAGINATION -->
            <div class="main_auctions_pagination mt-5">
                <nav>
                    <?php
                        $big = 999999999; // need an unlikely integer

                        $pages = pagination(
                            [
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $imovelHome->max_num_pages,
                                'prev_text' => '<',
                                'next_text' => '>',
                                'type' => 'array',
                            ]
                        );

                        if( is_array( $pages ) ) {

                            echo '<ul class="pagination justify-content-center">';
                            foreach ( $pages as $page ) {
                                echo "<li class='page-item'>$page</li>";
                            }
                            echo '</ul>';
                        }
                    ?>
                </nav>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER -->
<?php get_footer(); ?>
