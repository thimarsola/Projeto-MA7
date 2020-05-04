<!--IMMOBILE-->
<section id="imovel">
    <div class="main_immobile">
        <div class="container">
            <div class="row">
                <!--IMMOBILE-->
                <div class="col-md-7 mt-4">
                    <div class="main_immobile_dates">
                        <!--HEADER-->
                        <header class="main_immobile_dates_header">
                            <h1><?php the_title(); ?></h1>
                            <hr>
                        </header>
                        <!--CONTENT-->
                        <div class="main_immobile_dates_content">
                            <!--PRICE-->
                            <div class="main_immobile_dates_content_price">
                                <p><?php the_field('valor_do_imovel'); ?></p>
                            </div>
                            <!--CODE-->
                            <div class="main_immobile_dates_content_code">
                                <p><span>Código do Imóvel:</span><?php the_field('codigo_do_imovel'); ?></p>
                            </div>
                            <!--LOCATION-->
                            <div class="main_immobile_dates_content_location">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-location.svg" alt="MA7 Negócios"><?php the_field('endereco'); ?></p>
                            </div>
                            <!--DETAILS-->
                            <div class="main_immobile_dates_content_details">
                                <p><strong>Detalhes</strong></p>
                                <p><strong>Vara:</strong> <?php the_field('vara'); ?></p>
                                <p><strong>N&deg; do Processo:</strong> <?php the_field('numero_do_processo') ?></p>
                            </div>
                            <!--DESCRIPTION-->
                            <div class="main_immobile_dates_content_description">
                                <p><?php the_field('descricao_do_imovel') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FORM-->
                <div class="col-md-5 mt-4">
                    <div id="formulario" class="main_immobile_form">
                        <div class="main_contact_content_form_header">
                            <p>
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-email.svg"
                                    alt="MA& Negócios">Fale Conosco
                            </p>
                        </div>
                        <!--FORM-->
                        <div class="main_contact_content_form_content">
                            <form>
                                <!--CODE-->
                                <div class="form-group">
                                    <label for="code" class="d-none">Código do imóvel</label>
                                    <input id="code" type="text" class="form-control" placeholder="LE001"
                                        size="35" maxlength="100" disabled>
                                </div>
                                <!--NAME-->
                                <div class="form-group">
                                    <label for="name" class="d-none">Insira seu nome</label>
                                    <input id="name" type="text" class="form-control"
                                        placeholder="Insira seu nome" size="35" maxlength="100" required>
                                </div>
                                <!--MAIL-->
                                <div class="form-group">
                                    <label for="mail" class="d-none">Insira seu melhor e-mail</label>
                                    <input id="mail" type="email" class="form-control"
                                        placeholder="Insira seu melhor e-mail" size="35" maxlength="70"
                                        required>
                                </div>
                                <!--PHONE-->
                                <div class="form-group">
                                    <label for="phone" class="d-none">Insira seu telefone com DDD...</label>
                                    <input id="phone" type="tel" class="form-control"
                                        placeholder="Insira seu telefone com DDD..." size="35" maxlength="70"
                                        required>
                                </div>
                                <!--MESSAGE-->
                                <div class="form-group">
                                    <label for="message" class="d-none">Escreva sua mensagem...</label>
                                    <textarea id="message" class="form-control"
                                        placeholder="Escreva sua mensagem..." rows="4" required></textarea>
                                </div>
                                <!-- Button action -->
                                <div class="button_form">
                                    <button type="submit" name="submit" value="submit"
                                        class="btn btn-ma-color1">Enviar contato</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--INFORMATIONS-->
    <div class="main_informations">
        <div class="container">
            <div class="row">
                <!--SIZE-->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                    <div class="main_informations_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-size.svg"
                            alt="MA7 Negócios">
                        <div class="main_informations_card_body">
                            <p><?php the_field('metragem_do_imovel'); ?></p>
                            <p><span>m<sup>2</sup></span></p>
                        </div>
                    </div>
                </div>
                <!--BEDROOM-->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                    <div class="main_informations_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-bedroom.svg"
                            alt="MA7 Negócios">
                        <div class="main_informations_card_body">
                            <p><?php the_field('dormitorios'); ?></>
                            <p><span>Dormitórios</span></p>
                        </div>
                    </div>
                </div>
                <!--SIZE-->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                    <div class="main_informations_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-bathroom.svg"
                            alt="MA7 Negócios">
                        <div class="main_informations_card_body">
                        <p><?php the_field('banheiros'); ?></p>
                            <p><span>Banheiro</span></p>
                        </div>
                    </div>
                </div>
                <!--SIZE-->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                    <div class="main_informations_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage.svg"
                            alt="MA7 Negócios">
                        <div class="main_informations_card_body">
                        <p><?php the_field('garagem'); ?></p>
                            <p><span>Garagem</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--PHOTO-->
<section id="foto" class="main_photo">
    <div class="container">
        <!--HEADER-->
        <header class="main_photo_header">
            <h1>Fotos</h1>
            <hr>
            <p>Veja abaixo as fotos deste incrível imóvel!</p>
        </header>
        <!--CONTENT-->
        <div class="main_photo_content">

        <?php
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('galeria_de_fotos', $post->ID);
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
<div class="col-xs-6 col-md-3">
    <div class="thumbnail">
        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php if( !empty($url) ){ ?></a><?php } ?>
    </div>
</div>
<?php endforeach; endif; ?>

            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="_cdn/img/img-teste-carousel.jpg" alt="MA7 Negócios">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!--AUCTION INFORMATION-->
<section id="informacoes" class="main_auction">
    <div class="container">
        <!--HEADER-->
        <header class="main_auction_header">
            <h1>Informações do leilão</h1>
            <hr>
            <p>Para maiores informações sobre este leilão, entre em contato através de nossos canais de
                atendimento.</p>
        </header>
        <!--CONTENT-->
        <div class="main_auction_content">
            <p>Datas importantes sobre este leilão</p>
            <!--TABLE-->
            <div class="main_auction_content_table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Abertura</th>
                            <th scope="col">Encerramento</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><strong>1&deg; Praça</strong></th>
                            <td><?php the_field('abertura_1'); ?></td>
                            <td><?php the_field('encerramento_1'); ?></td>
                            <td><strong><?php the_field('valor_do_imovel_1'); ?></strong></td>
                        </tr>
                        <tr>
                            <th scope="row"><strong>2&deg; Praça</strong></th>
                            <td><?php the_field('abertura_2'); ?></td>
                            <td><?php the_field('encerramento_2'); ?></td>
                            <td><strong><?php the_field('valor_do_imovel_2'); ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--TYPE-->
            <div class="main_auction_content_type">
                <p><strong>Tipo de leilão:</strong> <?php the_field('tipo_do_leilao'); ?></p>
                <p><?php the_field('local_do_leilao'); ?></p>
            </div>
        </div>
    </div>
</section>
