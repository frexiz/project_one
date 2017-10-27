<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>

    <link rel="stylesheet" href="css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>


    <title>Contac Form Project</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Page Title
    ============================================= -->

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <?php

                if (isset($_SESSION['success'])) {

                    ?>

                    <div class="style-msg successmsg">
                        <div class="sb-msg">
                            <p></p> <i class="icon-user2"></i>
                            <?php echo $_SESSION['success'];
                            unset($_SESSION['success']); ?></p>
                        </div>
                    </div>

                    <?php
                }

                ?>


                <?php

                if (isset($_SESSION['errors'])) {

                    foreach ($_SESSION['errors'] as $err) {

                        ?>

                        <div class="style-msg errormsg">
                            <div class="sb-msg">
                                <p></p> <i class="icon-remove"></i>
                                <?php echo $err;
                                unset($_SESSION['errors']);
                                ?></p>
                            </div>
                        </div>

                        <?php
                    }

                }

                ?>

                <div class="col_full">

                    <div class="fancy-title title-dotted-border">
                        <h3>Контактна форма</h3>
                    </div>

                    <div class="contact-widget">

                        <div class="contact-form-result"></div>

                        <form class="nobottommargin" id="template-contactform" action="includes/functionality.php"
                              method="post">

                            <div class="form-process"></div>

                            <div class="col_full">
                                <label for="firstname">Име
                                    <small>*</small>
                                </label>
                                <input type="text" id="firstname" name="firstname" class="sm-form-control required"/>
                            </div>

                            <div class="col_full">
                                <label for="lastname">Фамилия
                                    <small>*</small>
                                </label>
                                <input type="text" id="lastname" name="lastname"
                                       class="required email sm-form-control required"/>
                            </div>

                            <div class="col_full">
                                <label for="email">Електронна поща
                                    <small>*</small>
                                </label>
                                <input type="email" id="email" name="email"
                                       class="required email sm-form-control required"/>
                            </div>

                            <div class="col_full col_last">
                                <label for="description">Описание</label>
                                <input type="text" id="description" name="description" class="sm-form-control"/>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="currentwork">Месторабота
                                    <small>*</small>
                                </label>
                                <input type="text" id="currentwork" name="currentwork" value=""
                                       class="required sm-form-control"/>
                            </div>

                            <div class="col_full">
                                <label for="adress">Адрес
                                    <small>*</small>
                                </label>
                                <input type="text" id="adress" name="adress" value="" class="required sm-form-control"/>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <button type="submit" id="submit-button" tabindex="5" class="button button-3d nomargin">
                                    Изпрати
                                </button>
                            </div>

                        </form>
                    </div>

                </div><!-- Contact Form End -->

                <div class="clear"></div>

                <!-- Contact Info
                ============================================= -->
                <div class="row clear-bottommargin">

                    <div class="col-md-3 col-sm-6 bottommargin clearfix">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-map-marker2"></i></a>
                            </div>
                            <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin clearfix">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-phone3"></i></a>
                            </div>
                            <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin clearfix">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-skype2"></i></a>
                            </div>
                            <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 bottommargin clearfix">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-twitter2"></i></a>
                            </div>
                            <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                        </div>
                    </div>

                </div><!-- Contact Info End -->

            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/validate.js"></script>

</body>
</html>