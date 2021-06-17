<?php
  //  Template Name: NECT Template
    include('modules/header.php');
?>

<?php if( have_rows('page_template') ): while (have_rows('page_template')): the_row(); ?>
    <div class="main-container">
        <?php if( get_row_layout() == 'home_banner' ): ?>
            <section class="imagebg height-80 intro" data-overlay=2>
                <div class="background-image-holder" style="background:url(<?= get_sub_field('background'); ?>);">
                    <img alt="image" src="<?= get_sub_field('background'); ?>" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row pt64">
                        <div class="col-md-12 col-sm-12 text-center">
                            <h1><?php the_sub_field('title'); ?></h1>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'about_us' ): ?>
            <section id="about-us" class="pb48">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                            <h2 class="section-header"><?= get_sub_field('title'); ?></h2>
                            <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                                <g>
                                    <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
                                        c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                            </g>
                                            <g>
                                                <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            </g>
                                            <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
                                                c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                            <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                        </g>
                                    </g>
                                    <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                            <h4 class="mb40">
                                <?= get_sub_field('sub_title'); ?>
                            </h4>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <p><?= get_sub_field('sub_text_1'); ?></p>
                            <?php if( have_rows('aims_segment') ): while(have_rows('aims_segment')) : the_row(); ?>
                                <div class="nect-aim__wrapper">
                                    <div class="nect-aim__svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                            <g fill="none" transform="translate(-.196 .1)">
                                                <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                                <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="nect-aim__text">
                                        <p class="BodyText">
                                            <?= get_sub_field('aims'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="col-md-5 col-md-offset-1 col-sm-12">
                            <p><?= get_sub_field('sub_text_2'); ?></p>
                            <?php if( have_rows('seeks_segment') ): while(have_rows('seeks_segment')) : the_row(); ?>
                                <div class="nect-aim__wrapper">
                                    <div class="nect-aim__svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                            <g fill="none" transform="translate(-.196 .1)">
                                                <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                                <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="nect-aim__text">
                                        <p class="BodyText">
                                            <?= get_sub_field('seeks'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about--image">
                <div class="about--image__images">
                    <div class="about--image__container">
                        <div class="about--image__image" style="display: block; background-image: url(<?= get_sub_field('image'); ?>);">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="about--image--moment">
                                <div class="about--image__caption">
                                    <p><?= get_sub_field('bottom_text'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'board_of_trustees' ): ?>
            <section id="board-of-trustees" class="board__members">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <h2 class="section-header"><?= get_sub_field('title'); ?></h2>
                            <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                                <g>
                                    <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
                                        c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                            </g>
                                            <g>
                                                <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            </g>
                                            <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
                                                c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                            <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                        </g>
                                    </g>
                                    <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="board__membersWrapper">
                                <div class="board__membersItems">
                                <?php
                                    $homepageTrustees = new WP_Query([
                                    'posts_per_page' => -1,
                                    'post_type' => 'trustees'
                                    ]);

                                    if ( $homepageTrustees->have_posts() ): while ( $homepageTrustees->have_posts() ) : $homepageTrustees->the_post(); ?>
                                        <div class="boardMember">
                                            <div class="boardMemberDetail__desc">
                                                <?= get_field('members_bio'); ?>
                                            </div>
                                            <div class="boardMember__image">
                                                <img class="img-circle" alt="Jim Ovia" title="Jim Ovia" src="<?= get_field('members_image'); ?>">
                                            </div>
                                            <div class="boardMember__details">
                                                <div class="boardMember__name"><?php the_title(); ?></div>
                                                <div class="boardMember__job"><?= get_field('members_position'); ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; endif;  wp_reset_postdata(); ?>
                                </div>
                                <div class="boardBlock__detailWrapper">
                                    <div id="bodMember" class="boardMemberDetail">
                                        <!-- <div class="boardMemberDetail__desc">
                                            <p>
                                                Mr Jim Ovia CON is the founder and chairman of Zenith Bank Plc, West Africa’s largest bank. Zenith Bank is ranked 325th in the world (The Banker, Top 1000 World Banks, 2016) with over $16bn in assets and operations in international locations such as the UK, UASE, China. Ghana, Sierra Leone and the Gambia. In January 2017, Jim Ovia was appointed as a member of the World Economic Forum Community of Chairmen.
                                            </p>
                                            <p>
                                                As part of his philanthropic efforts, Jim Ovia is one of the founding directors of the Private Sector Health Alliance of Nigeria in collaboration with the Bill & Melinda Gates Foundation. In addition, he established the Jim Ovia foundation which has provided over 1,500 students with university scholarships.
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'project_section' ): ?>
            <section id="our-projects" class="nect-projects">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <h2 class="section-header"><?= get_sub_field('title'); ?></h2>
                            <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                                <g>
                                    <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
                                        c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                            </g>
                                            <g>
                                                <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            </g>
                                            <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
                                                c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                            <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                        </g>
                                    </g>
                                    <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $homepageProjects = new WP_Query([
                        'posts_per_page' => -1,
                        'post_type' => 'projects'
                        ]);

                        if ( $homepageProjects->have_posts() ): while ( $homepageProjects->have_posts() ) : $homepageProjects->the_post(); ?>
                            <div class="">
                                <div class="col-md-5 col-sm-12">
                                    <h3 class="h3 underline"><span><?php the_title(); ?></span></h3>
                                </div>
                                <div class="col-md-7 col-sm-12">
                                <?= get_field('project_description'); ?>
                                    <div class="">
                                        <?php if( have_rows('project_list') ): while(have_rows('project_list')) : the_row(); ?>
                                        <?php
                                            $modeTitle=preg_replace('/\s/','',get_sub_field('title'));
                                            $theTitle=preg_replace('/\s/','',get_the_title());
                                            $newModalTitle = str_replace(',', '', $modeTitle);
                                        ?>
                                            <a href="#" class="project-droplink" data-toggle="modal" data-target="#<?php echo $theTitle.$newModalTitle ?>"><?= get_sub_field('title'); ?></a>
                                            <div class="modal fade" id="<?php echo $theTitle.$newModalTitle ?>" tabindex="-1" role="dialog" aria-labelledby="projectDetail" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="row flexed mt-10">
                                                        <?php $img = get_sub_field('image'); if( $img ): ?>
                                                            <div class="col-md-6">
                                                                <img src="<?= get_sub_field('image'); ?>" alt class="img-responsive project__img" />
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="<?=$img ? 'col-md-6' : 'col-md-12'?> ">
                                                        <h5 class="mb-15">
                                                            <?= get_sub_field('title'); ?>
                                                        </h5>
                                                        <p><?= get_sub_field('description'); ?></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer border-0">
                                                    <button type="button" class="btn btn-outline-purple mb-0" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <?php endwhile; endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <hr class="mb48 mt32" style="border-color: #b9b388;">
                            </div>
                        <?php endwhile; endif;  wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'gallery_section' ): ?>
            <section id="our-gallery" class="image-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <h2 class="section-header"><?= get_sub_field('title'); ?></h2>
                            <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                                <g>
                                    <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
                                        c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                            </g>
                                            <g>
                                                <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            </g>
                                            <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
                                                c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                            <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                        </g>
                                    </g>
                                    <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $gallery = new WP_Query([
                        'posts_per_page' => -1,
                        'post_type' => 'gallery',
                        ]);

                        if ( $gallery ->have_posts() ): while ( $gallery ->have_posts() ) : $gallery ->the_post(); ?>
                            <div class="col-md-4 col-sm-12">
                                <a href="<?php the_permalink(); ?>">
                                    <article class="image-card">
                                        <figure class="image--item">
                                            <img src="<?= get_field('featured_image'); ?>" alt="">
                                        </figure>
                                        <div class="image-content">
                                            <span class="image--title"><?php the_title(); ?></span>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        <?php endwhile; endif;  wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'video_section' ): ?>
            <section id="videos" class="video-app--main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <h2 class="section-header"><?= get_sub_field('title'); ?></h2>
                            <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                                <g>
                                    <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
                                        c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                            </g>
                                            <g>
                                                <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            </g>
                                            <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
                                                c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                            <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                        </g>
                                    </g>
                                    <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="video-wrapper">
                                <div class="video-container">
                                    <iframe id="video-frame" title="NECT Documentary" width="644" height="362" src="https://www.youtube.com/embed/-qZHjV3R9dk?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <blockquote id="content-block">
                                <!-- <p>It was immediate—from that point on, we were able to do same-day IUD and implant placements. We have patients who still choose pills, patch, ring, or Depo because that’s their choice. But if a young woman chooses an implant or an IUD, they should be able to choose that with us as well and we’re glad to be able to offer that as a result of Upstream.”</p> -->
                            </blockquote>
                        </div>
                    </div>

                    <hr />

                    <div class="row select-video">
                    <?php
                    $homepageVideos = new WP_Query([
                    'posts_per_page' => -1,
                    'post_type' => 'video'
                    ]);

                    if ( $homepageVideos->have_posts() ): while ( $homepageVideos->have_posts() ) : $homepageVideos->the_post(); ?>
                        <div class="col-xs-6 col-md-2">
                            <div class="video-content-container">
                                <div class="video-overlay-container">
                                    <img src="<?= get_field('cover_image') ?>" class="img-fluid mb-0" alt />
                                    <div class="video-overlay">
                                    <div href="#" class="icon-play" title="play">
                                        <i class="fa fa-play"></i>
                                    </div>
                                    </div>
                                </div>
                            <div class="video-title"><?php the_title(); ?></div>
                            <p class="video-url-link"><?= get_field('video_url'); ?></p>
                            <p class="video-content"><?= get_field('video_description'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; endif;  wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'newsletter' ): ?>
            <section class="resources__list">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                            <h2 class="section-header"><?= get_sub_field('title'); ?></h2>
                            <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                                <g>
                                    <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
                                        c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                                <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                            </g>
                                            <g>
                                                <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                                <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            </g>
                                            <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
                                                c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                            <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                        </g>
                                    </g>
                                    <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="row resources__wrapper">
                    <?php
                    $newsletter = new WP_Query([
                    'posts_per_page' => -1,
                    'post_type' => 'newsletters'
                    ]);

                    if ( $newsletter->have_posts() ): while ( $newsletter->have_posts() ) : $newsletter->the_post(); ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="resources__content">
                                <p><?= get_field('date'); ?></p>
                                <h3 class="resources__headline"><?php the_title(); ?></h3>
                                <div class="resources__meta">
                                    <div>
                                        <img class="resources__type__icon" src="<?= get_field('file_type_image'); ?>" alt />
                                        <span class="resources__text"><?= get_field('file_size_name'); ?></span>
                                    </div>
                                    <?php if(have_rows('download_button')): while(have_rows('download_button')): the_row(); ?>
                                        <a class="download_resources" target="_blank" download  href="<?= get_sub_field('btn_link'); ?>">
                                            <span><?= get_sub_field('btn_text'); ?></span>
                                        </a>
                                    <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;  wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'cta' ): ?>
            <section id="cta-section" class="mailing-list-sect">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mailing-list-text">
                                <p> <?= get_sub_field('content') ?></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="mailing-list">
                                <div class="mailing-list-form">
                                    <form action="" method="post">
                                        <?= do_shortcode(get_sub_field('form_shortcode')); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'contact_us' ): ?>
            <section id="contact" class="contact-info" style="background-image:url(<?php the_sub_field('background_image');?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">

                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="contact-card">
                                <h6 class=""><?php the_sub_field('title');?></h6>
                                <div class="contact-address">
                                    <span class="contact-icon fa fa-map-marker"></span>
                                    <div><?php the_sub_field('address');?></div>
                                </div>
                                <div class="contact-tel">
                                    <span class="contact-icon fa fa-phone"></span>
                                    <div>
                                        <?php the_sub_field('telephone');?>
                                    </div>
                                </div>
                                <div class="contact-email">
                                    <span class="contact-icon fa fa-envelope"></span>
                                    <?php the_sub_field('email');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php endif; ?>
    </div>
<?php endwhile; endif; ?>

    <div class="main-container">
        <!-- <section class="imagebg height-80 intro" data-overlay=2>
            <div class="background-image-holder">
                <img alt="image" src="img/intro-bg2.jpg" />
            </div>
            <div class="container pos-vertical-center">
                <div class="row pt64">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h1>Nurture. Renew. Empower</h1>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="pb48">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                        <h2 class="section-header">About us</h2>
                        <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                            <g>
                                <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
									   c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                <g>
                                    <g>
                                        <g>
                                            <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                        </g>
                                        <g>
                                            <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                        </g>
                                        <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
											   c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                        <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                    </g>
                                </g>
                                <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h4 class="mb40">
                            The North East Children’s Trust (NECT) is an initiative to create an ecosystem for homeless children orphaned by the conflict in the North East of Nigeria that will echo the lives of a normal child growing and thriving in a healthy family.
                        </h4>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <p>NECT aims to</p>
                        <div class="nect-aim__wrapper">
                            <div class="nect-aim__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                    <g fill="none" transform="translate(-.196 .1)">
                                        <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                        <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="nect-aim__text">
                                <p class="BodyText">
                                    Institute compulsory basic education and life skills training for children between the ages of 5 and 18.
                                </p>
                            </div>
                        </div>

                        <div class="nect-aim__wrapper">
                            <div class="nect-aim__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                    <g fill="none" transform="translate(-.196 .1)">
                                        <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                        <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="nect-aim__text">
                                <p class="BodyText">
                                    Equip teen-aged children with skills/training that will enable them succeed, contributing productively to their community and the general society.
                                </p>
                            </div>
                        </div>

                        <div class="nect-aim__wrapper">
                            <div class="nect-aim__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                    <g fill="none" transform="translate(-.196 .1)">
                                        <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                        <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="nect-aim__text">
                                <p class="BodyText">
                                    Inculcate continuous training on conflict resolution and civics; and to provide psychosocial support and protection to the children.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-md-offset-1 col-sm-12">
                        <p>NECT seeks to</p>
                        <div class="nect-aim__wrapper">
                            <div class="nect-aim__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                    <g fill="none" transform="translate(-.196 .1)">
                                        <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                        <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="nect-aim__text">
                                <p class="BodyText">
                                    Establish Learning Centres across the region that will provide comprehensive support to cater to the physical, emotional, psycho-social needs of orphaned and vulnerable children.
                                </p>
                            </div>
                        </div>

                        <div class="nect-aim__wrapper">
                            <div class="nect-aim__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="23" viewBox="0 0 27 23">
                                    <g fill="none" transform="translate(-.196 .1)">
                                        <path fill="#87BBFD" d="M2.37192708,0.704694752 L7.81992708,0.704694752 C11.0704271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C12.9364271,22.3271948 12.1819271,21.8216948 11.7094271,21.4421948 C10.1644271,20.2001948 7.12392708,20.2001948 3.87642708,20.2001948 L2.37192708,20.2001948 C1.99638047,20.2005928 1.63605717,20.0517891 1.37022431,19.7865188 C1.10439145,19.5212486 0.954824697,19.1612414 0.954427083,18.7856948 L0.954427083,2.12369475 C0.954427083,1.34069475 1.58892708,0.707694752 2.37192708,0.707694752 L2.37192708,0.704694752 Z"></path>
                                        <path fill="#6772E5" d="M25.0369271,0.704694752 L19.5889271,0.704694752 C16.3399271,0.704694752 13.7044271,2.21519475 13.7044271,4.95269475 L13.7044271,22.3271948 C14.4724271,22.3271948 15.2269271,21.8216948 15.6994271,21.4421948 C17.2444271,20.2001948 20.2849271,20.2001948 23.5324271,20.2001948 L25.0369271,20.2001948 C25.4129935,20.2005933 25.7737718,20.051378 26.0396911,19.7854587 C26.3056103,19.5195395 26.4548257,19.1587612 26.4544271,18.7826948 L26.4544271,2.12519475 C26.4548257,1.74912833 26.3056103,1.38835002 26.0396911,1.12243075 C25.7737718,0.856511486 25.4129935,0.707296165 25.0369271,0.707694752 L25.0369271,0.704694752 Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="nect-aim__text">
                                <p class="BodyText">
                                    Foster communities of learning by supporting existing academic institutions in the region.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about--image">
            <div class="about--image__images">
                <div class="about--image__container">
                    <div class="about--image__image" style="display: block; background-image: url('img/about--image.jpg');">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="about--image--moment">
                            <div class="about--image__caption">
                                <p>First Lady Michelle Obama harvests vegetables with students in the White House Kitchen Garden on the South Lawn, May 28, 2013. (Courtesy Barack Obama Presidential Library)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="board__members">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                       <h2 class="section-header">Board of Trustees</h2>
                        <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                            <g>
                                <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
									   c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                <g>
                                    <g>
                                        <g>
                                            <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                        </g>
                                        <g>
                                            <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                        </g>
                                        <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
											   c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                        <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                    </g>
                                </g>
                                <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="board__membersWrapper">
                            <div class="board__membersItems">
                                <div class="boardMember current">
                                    <div class="boardMember__image">
                                        <img class="img-circle" alt="Jim Ovia" title="Jim Ovia" src="img/Jim-ovia.jpg">
                                    </div>
                                    <div class="boardMember__details">
                                        <div class="boardMember__name">Mr Jim Ovia</div>
                                        <div class="boardMember__job">Chairman Board of Trustees</div>
                                    </div>
                                </div>
                                <div class="boardMember">
                                    <div class="boardMember__image">
                                        <img class="img-circle" alt="Jim Ovia" title="Jim Ovia" src="img/Jim-ovia.jpg">
                                    </div>
                                    <div class="boardMember__details">
                                        <div class="boardMember__name">Prof. Hauwa Biu</div>
                                        <div class="boardMember__job">Vice Chairman (BOT)</div>
                                    </div>
                                </div>
                                <div class="boardMember">
                                    <div class="boardMember__image">
                                        <img class="img-circle" alt="Jim Ovia" title="Jim Ovia" src="img/Jim-ovia.jpg">
                                    </div>
                                    <div class="boardMember__details">
                                        <div class="boardMember__name">Dr. Mariam Masha</div>
                                        <div class="boardMember__job">Executive Secretary</div>
                                    </div>
                                </div>
                                <div class="boardMember">
                                    <div class="boardMember__image">
                                        <img class="img-circle" alt="Jim Ovia" title="Jim Ovia" src="img/Jim-ovia.jpg">
                                    </div>
                                    <div class="boardMember__details">
                                        <div class="boardMember__name">Baba Hassan Kachalla</div>
                                        <div class="boardMember__job">Trustee</div>
                                    </div>
                                </div>
                                <div class="boardMember">
                                    <div class="boardMember__image">
                                        <img class="img-circle" alt="Jim Ovia" title="Jim Ovia" src="img/Jim-ovia.jpg">
                                    </div>
                                    <div class="boardMember__details">
                                        <div class="boardMember__name">Mrs Doris Yaro</div>
                                        <div class="boardMember__job">Trustee</div>
                                    </div>
                                </div>
                            </div>
                            <div class="boardBlock__detailWrapper">
                                <div class="boardMemberDetail">
                                    <div class="boardMemberDetail__desc">
                                        <p>
                                            Mr Jim Ovia CON is the founder and chairman of Zenith Bank Plc, West Africa’s largest bank. Zenith Bank is ranked 325th in the world (The Banker, Top 1000 World Banks, 2016) with over $16bn in assets and operations in international locations such as the UK, UASE, China. Ghana, Sierra Leone and the Gambia. In January 2017, Jim Ovia was appointed as a member of the World Economic Forum Community of Chairmen.
                                        </p>
                                        <p>
                                            As part of his philanthropic efforts, Jim Ovia is one of the founding directors of the Private Sector Health Alliance of Nigeria in collaboration with the Bill & Melinda Gates Foundation. In addition, he established the Jim Ovia foundation which has provided over 1,500 students with university scholarships.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="nect-projects">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                       <h2 class="section-header">Our Projects</h2>
                        <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                            <g>
                                <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
									   c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                <g>
                                    <g>
                                        <g>
                                            <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                        </g>
                                        <g>
                                            <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                        </g>
                                        <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
											   c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                        <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                    </g>
                                </g>
                                <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="col-md-5 col-sm-12">
                            <h3 class="h3 underline"><span>Learning Center 1</span></h3>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <p>
                                The flagship learning centre located in Maiduguri, Borno state is designed to sustainably accommodate up to 1000 children living and studying therein.
                            </p>
                            <p>
                                These children aged 5 to 18 years were selected from IDP camps within Borno and other states in the North East.
                            </p>
                            <p>
                                The Learning Center is situated on an expanse of 6.9 hectares, housing a total of 54 structures, comprising living, learning and recreational spaces including
                            </p>
                            <div class="">
                                <a class="project-droplink" href="javascript:void(0)">Classrooms</a>
                                <a class="project-droplink" href="javascript:void(0)">Homes with caregiver mothers and fathers</a>
                                <a class="project-droplink" href="javascript:void(0)">ICT Centre</a>
                                <a class="project-droplink" href="javascript:void(0)">Vocational Centre</a>
                                <a class="project-droplink" href="javascript:void(0)">Library</a>
                                <a class="project-droplink" href="javascript:void(0)">Innovation Hub</a>
                                <a class="project-droplink" href="javascript:void(0)">Laboratories</a>
                                <a class="project-droplink" href="javascript:void(0)">Clinic</a>
                                <a class="project-droplink" href="javascript:void(0)">Playground</a>
                                <a class="project-droplink" href="javascript:void(0)">The Farm</a>
                                <a class="project-droplink" href="javascript:void(0)">Kitchen, Store and Dining Hall</a>
                                <a class="project-droplink" href="javascript:void(0)">Security Block</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <hr class="mb48 mt32" style="border-color: #b9b388;">
                    </div>
                    <div class="">
                        <div class="col-md-5 col-sm-12">
                            <h3 class="h3 underline"><span>Learning Center 2</span></h3>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <p>
                                Learning centre 2 alternatively known as Maiduguri International School (Education Trust) is designed to improve access to and quality of education for over 600 students including orphaned and vulnerable children affected by the conflict who reside in host communities.
                            </p>
                            <p>
                                The school is co-educational and comprises of nursery, primary and secondary classes. NECT’s intervention includes provision of essential learning resources and infrastructure as well as continuous professional development of the teachers.
                            </p>
                            <p>
                                The Learning Center 2 comprises of adequately equipped learning and recreational spaces including
                            </p>
                            <div class="">
                                <a class="project-droplink" href="javascript:void(0)">54 Classrooms</a>
                                <a class="project-droplink" href="javascript:void(0)">Vocational Centre</a>
                                <a class="project-droplink" href="javascript:void(0)">ICT Centre</a>
                                <a class="project-droplink" href="javascript:void(0)">School Library</a>
                                <a class="project-droplink" href="javascript:void(0)">Physics, Chemistry and Biology laboratories</a>
                                <a class="project-droplink" href="javascript:void(0)">Multi-Purpose School Auditorium</a>
                                <a class="project-droplink" href="javascript:void(0)">Dining Hall</a>
                                <a class="project-droplink" href="javascript:void(0)">Water, Sanitation and Hygiene facilities</a>
                                <a class="project-droplink" href="javascript:void(0)">Religious Spaces</a>
                                <a class="project-droplink" href="javascript:void(0)">Security Outposts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="image-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                       <h2 class="section-header">Our Gallery</h2>
                        <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                            <g>
                                <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
									   c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                <g>
                                    <g>
                                        <g>
                                            <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                        </g>
                                        <g>
                                            <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                        </g>
                                        <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
											   c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                        <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                    </g>
                                </g>
                                <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <a href="img/educational-assessment.jpg" data-lightbox="waste-project" data-title="Educational Assessment Exercise">
                            <article class="image-card">
                                <figure class="image--item">
                                    <img src="img/educational-assessment.jpg" alt="">
                                </figure>
                                <div class="image-content">
                                    <span class="image--title">Educational Assessment Exercise</span>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <a href="#">
                            <article class="image-card">
                                <figure class="image--item">
                                    <img src="img/skill-acquisition.jpg" alt="">
                                </figure>
                                <div class="image-content">
                                    <span class="image--title">Skill Acquisition Classes</span>
                                </div>
                            </article>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <a href="#">
                            <article class="image-card">
                                <figure class="image--item">
                                    <img src="img/career-day.jpg" alt="">
                                </figure>
                                <div class="image-content">
                                    <span class="image--title">Career Day</span>
                                </div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="video-app--main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12">
                       <h2 class="section-header">Videos</h2>
                        <svg class="svg-divider" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1456 110.4" style="enable-background:new 0 0 1456 110.4;" xml:space="preserve">
                            <g>
                                <path class="svg-divider" d="M1389.8,5.8H789.7c-14.8,5.6-27.7,12.5-38.6,20.7c-11,8.2-18.7,17.7-23.1,28.5v0.4
									   c4.4,10.8,12.1,20.3,23.1,28.5c11,8.2,23.9,15.1,38.6,20.7h600.1"></path>
                                <g>
                                    <g>
                                        <g>
                                            <path class="svg-divider" d="M887.4,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M985,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1082.7,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1180.3,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5"></path>
                                            <path class="svg-divider" d="M1278,104.6c-14.8-5.6-27.7-12.5-38.6-20.7c-11-8.2-18.7-17.7-23.1-28.5H728"></path>
                                        </g>
                                        <g>
                                            <path class="svg-divider" d="M825.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M923.3,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1020.9,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1118.6,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                            <path class="svg-divider" d="M1216.2,55c4.4-10.8,12.1-20.3,23.1-28.5c11-8.2,23.9-15.1,38.6-20.7"></path>
                                        </g>
                                        <path class="svg-divider" d="M1252.1,5.8c6.8,3.6,17.8,11.7,23.6,15.5c17.5,11.7,30.8,22.9,39.8,33.7v0.4c-9,10.8-22.3,22-39.8,33.7
											   c-5.8,3.8-16.6,11.9-23.4,15.5"></path>
                                        <line class="svg-divider" x1="1456" y1="55" x2="1315.5" y2="55"></line>
                                    </g>
                                </g>
                                <line class="svg-divider" x1="728" y1="55.4" x2="0" y2="55.4"></line>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="video-wrapper">
                            <div class="video-container">
                                <iframe title="NECT Documentary" width="644" height="362" src="https://www.youtube.com/embed/-qZHjV3R9dk?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <blockquote>
                            <p>It was immediate—from that point on, we were able to do same-day IUD and implant placements. We have patients who still choose pills, patch, ring, or Depo because that’s their choice. But if a young woman chooses an implant or an IUD, they should be able to choose that with us as well and we’re glad to be able to offer that as a result of Upstream.”</p>
                            <cite>
                                Dr. Mariam Masha
                                <span>Director of Adolescent Health Services, The Door</span>
                            </cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="mailing-list-sect">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mailing-list">
                            <div class="mailing-list-text">
                                <p>Stay updated with our activities by subscribing to our quarterly newsletter.</p>
                            </div>
                            <div class="mailing-list-form">
                                <form action="" method="post">
                                    <div class="mailing-input-wrapper first">
                                        <input required="required" class="" placeholder="Full Name" type="text" name="full_name">
                                    </div>
                                    <div class="mailing-input-wrapper second">
                                        <input required="required" class="" placeholder="Email" type="email" value="" name="email">
                                    </div>
                                    <button name="button" type="submit" class="button expand mailing-list-sign-up-button">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">

                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-card">
                            <h6 class="">Contact</h6>
                            <div class="contact-address">
                                <span class="contact-icon fa fa-map-marker"></span>
                                <div>North East Children's Trust Fund Secretariat,<br>Borno State Ministry of Works &amp; Transport,<br>Maiduguri.<br>Nigeria</div>
                            </div>
                            <div class="contact-tel">
                                <span class="contact-icon fa fa-phone"></span>
                                <div>
                                    <a href="tel:+2348071158917">Tel. <span>+234 807 115 8917</span></a>
                                    <br>
                                </div>
                            </div>
                            <div class="contact-email">
                                <span class="contact-icon fa fa-envelope"></span>
                                <div>
                                    <a href="mailto:info@nect.ng">info@nect.ng</a>
                                    <br>
                                    <a href="mailto:nectng@gmail.com">nectng@gmail.com</a>
                                    <br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  -->
    </div>

<?php include('modules/footer.php'); ?>
