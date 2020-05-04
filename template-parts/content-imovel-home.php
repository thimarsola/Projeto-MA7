<!-- CARD -->
<article class="col-lg-4 col-md-6 my-3">
    <div class="main_auctions_content_card">
        <!-- CARD IMAGE -->
        <div class="img_card">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="MA7 Negócios" />
        </div>
        <!-- CARD CONTENT -->
        <div class="content_card">
            <!-- CARD HEADER -->
            <header class="content_card_header">
                <h2><?php the_title(); ?></h2>
                <hr>
            </header>
            <!-- CARD TYPE -->
            <div class="content_card_type">
                <p><strong>Tipo de leilão:</strong> <?php the_field('tipo_do_leilao'); ?></p>
                <p><strong>Status:</strong> <?php the_field('status'); ?></p>
            </div>
            <!-- CARD PRICE -->
            <div class="content_card_price">
                <p><span><strong>1ºPraça:</strong> <?php the_field('abertura_1') ?></span></p>
                <p><strong><?php the_field('valor_do_imovel_1') ?></strong></p>
            </div>
            <!-- CARD PRICE -->
            <div class="content_card_price">
                <p><span><strong>2ºPraça:</strong> <?php the_field('abertura_2') ?></span></p>
                <p><strong><?php the_field('valor_do_imovel_2') ?></strong></p>
            </div>
            <a href="<?php the_permalink(); ?>" target="blank" class="btn btn-ma-color1 btn-block btn_card">Saiba
                mais</a>
        </div>
    </div>
</article>
