<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--	Fonts
	========================================================-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flaticon@1.0.0/dist/flaticon.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!---Required CSS --->
    <style>
        .justified-text {
            text-align: justify;
        }
    </style>



    <!--	Css Link-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <!--	Title -->
    <title>Profession Advisor</title>
</head>

<body>

<!--	Page Loader
=============================================================--> 
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("header.php"); ?>
            <!--	Header end  -->

            <!--	Banner Start   -->
            <div class=" w-100 slider-banner1 position-relative" style="background-image: url('img/bg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <center>
                                    <h1 class="mb-4"><span style="color:black;">Find here</span><br>
                                        Your Guide</h1>
                                    <form method="post" action="login.php">

                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" style="border-radius:30px;" class="btn btn-primary d-none d-xl-block w-100">Get Started</button>
                                            </div>
                                        </div>
                                </center>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->


        <!--	Text Block One -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                    </div>
                </div>
                <div class="text-box-one">

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Guide Student</a></h5>
                                <p class="justified-text">After completing 10th grade, students face an important crossroads in their educational journey. It is crucial to carefully evaluate their interests, strengths, and future goals to choose the right stream for higher secondary education.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Improve Interest</a></h5>
                                <p class="justified-text">This is a pivotal moment to explore subjects that truly captivate their curiosity and align with their passions. By engaging with knowledgeable counselors, attending career fairs, and seeking inspiration from role models, students can develop a keen understanding of the vast array of disciplines awaiting them.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Best Choice</a></h5>
                                <p class="justified-text">Each listing provides detailed information about the property, including its size, features, and amenities. We also provide high-quality photos and virtual tours to help you get a better sense of the property's layout and design.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-diagram text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Management</a></h5>
                                <p class="justified-text">When you invest with us, you can trust that your investment is in good hands. We are committed to transparency and communication, and we provide regular updates and reports on the performance of your investment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----  Our Services  ---->



        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('img/01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex">
                                    <i class="fa-solid fa-trophy"></i>
                                    <div class="pl-2">
                                        <h5 class="mb-3">Top Rated</h5>
                                        <span></span>
                                        <p class="justified-text">"The most popular and highly-rated websites on the internet cater to a wide range of interests and needs."</p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="fa-solid fa-star"></i>
                                    <div class="pl-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <span></span>
                                        <p class="justified-text">Experience quality is about how satisfied or happy someone feels from doing something. It is the level of enjoyment they get from an activity, product or service. </p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="fa-brands fa-figma"></i>
                                    <div class="pl-2">
                                        <h5 class="mb-3">Best Design UI</h5>
                                        <span></span>
                                        <p class="justified-text">The hallmarks of the best user interface (UI) designs are intuitive layouts, clean aesthetics, and a seamless user experience. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	why choose us -->

        <!--	How it work -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p class="justified-text">Students must carefully evaluate their interests, aptitudes, and long-term goals to select a stream that aligns with their desired career path.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Review</h5>
                            <p class="justified-text">When selecting an academic stream for their future career, students must thoroughly review various factors.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class='bx bx-line-chart' aria-hidden="true" style="font-size: 4rem;"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Display Roadmap</h5>
                            <p class="justified-text">It chart a roadmap for your career by exploring various options such as pursuing higher education, vocational training, or entering the workforce directly. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--	How It Work -->


        <!--	Testonomial -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-sidebar p-4">
                            <div class="mb-3 col-lg-12">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
                                <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">

                                    <?php

                                    $query = mysqli_query($con, "select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='0'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="item">
                                            <div class="p-4 bg-success down-angle-white position-relative">
                                                <p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
                                            </div>
                                            <div class="p-2 mt-4">
                                                <span class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize">
                                            </div>
                                        </div>
                                    <?php }  ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Testonomial -->
        <script>
            (function(w, d, s, o, f, js, fjs) {
                w["botsonic_widget"] = o;
                w[o] =
                    w[o] ||
                    function() {
                        (w[o].q = w[o].q || []).push(arguments);
                    };
                (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
                js.id = o;
                js.src = f;
                js.async = 1;
                fjs.parentNode.insertBefore(js, fjs);
            })(window, document, "script", "Botsonic", "https://widget.writesonic.com/CDN/botsonic.min.js");
            Botsonic("init", {
                serviceBaseUrl: "https://api-azure.botsonic.ai",
                token: "7df3ea59-bd1d-406d-a085-4bf5ad3b32ae",
            });
        </script>

        <!--	Footer   start-->
        <?php include("footer.php"); ?>
        <!--	Footer   start-->


        <!-- Scroll to top -->
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
        <!-- End Scroll To top -->
    </div>
    </div>



    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>