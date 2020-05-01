<div class="main_auctions_content_card">
    <!-- CARD IMAGE -->
    <div class="img_card">
        <?php if( get_field('foto_de_destaque') ): ?>
        <img src="<?php the_field('foto_de_destaque'); ?>" alt="MA7 Negócios" />
        <?php endif; ?>
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
            <?php if( get_field('informacoes_do_leilao') ): ?>
                <?php 
                    $data = get_sub_field('1_praca');
                    var_dump($data); 
                ?>
            <?php endif; ?>


            <p><span><strong>1ºPraça:</strong> <?php the_sub_field('abertura_primeira') ?></span></p>
            <p><strong><?php the_sub_field('valor_imovel_abertura') ?></strong></p>
        </div>
        <!-- CARD PRICE -->
        <div class="content_card_price">
            <p><span><strong>2ºPraça:</strong> 30/01/2020</span></p>
            <p><strong>R$ 144.000,00</strong></p>
        </div>
        <a href="#" class="btn btn-ma-color1 btn-block btn_card">Saiba mais</a>
    </div>
</div>
