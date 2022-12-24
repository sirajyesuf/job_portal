<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <title>Job Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">

</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper-with-transparent-header">

        <!-- Header Container
================================================== -->
       @include('layouts/header')
        <div class="clearfix"></div>
        <!-- Header Container / End -->



        <!-- Intro Banner
================================================== -->
        <div class="intro-banner dark-overlay" data-background-image="images/home-background-02.jpg">

            <!-- Transparent Header Spacer -->
            <div class="transparent-header-spacer"></div>

            <div class="container">

                <!-- Intro Headline -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-headline">
                            <h3>
                                <strong>Hire experts freelancers for any job, any time.</strong>
                                <br>
                                <span>Huge community of designers, developers and creatives ready for your
                                    project.</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-banner-search-form margin-top-95">

                            <!-- Search Field -->
                            <div class="intro-search-field with-autocomplete">
                                <label for="autocomplete-input" class="field-title ripple-effect">Where?</label>
                                <div class="input-with-icon">
                                    <input id="autocomplete-input" type="text" placeholder="Online Job">
                                    <i class="icon-material-outline-location-on"></i>
                                </div>
                            </div>

                            <!-- Search Field -->
                            <div class="intro-search-field">
                                <label for="intro-keywords" class="field-title ripple-effect">What you need
                                    done?</label>
                                <input id="intro-keywords" type="text" placeholder="e.g. build me a website">
                            </div>

                            <!-- Search Field -->
                            <div class="intro-search-field">
                                <select class="selectpicker default" multiple data-selected-text-format="count"
                                    data-size="7" title="All Categories">
                                    <option>Admin Support</option>
                                    <option>Customer Service</option>
                                    <option>Data Analytics</option>
                                    <option>Design & Creative</option>
                                    <option>Legal</option>
                                    <option>Software Developing</option>
                                    <option>IT & Networking</option>
                                    <option>Writing</option>
                                    <option>Translation</option>
                                    <option>Sales & Marketing</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <div class="intro-search-button">
                                <button class="button ripple-effect"
                                    onclick="window.location.href='freelancers-grid-layout-full-page.html'">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="intro-stats margin-top-45 hide-under-992px">
                            <li>
                                <strong class="counter">1,586</strong>
                                <span>Jobs Posted</span>
                            </li>
                            <li>
                                <strong class="counter">3,543</strong>
                                <span>Tasks Posted</span>
                            </li>
                            <li>
                                <strong class="counter">1,232</strong>
                                <span>Freelancers</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <!-- Content
================================================== -->

        <!-- Popular Job Categories -->
        <div class="section margin-top-65 margin-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">

                        <!-- Category -->
                        <div class="sidebar-widget">
                            <h3>Category</h3>
                            <div class="btn-group bootstrap-select show-tick default">
                                <select class="selectpicker default" multiple="" data-selected-text-format="count"
                                    data-size="7" title="All Categories" tabindex="-98">
                                    <option>Admin Support</option>
                                    <option>Customer Service</option>
                                    <option>Data Analytics</option>
                                    <option>Design &amp; Creative</option>
                                    <option>Legal</option>
                                    <option>Software Developing</option>
                                    <option>IT &amp; Networking</option>
                                    <option>Writing</option>
                                    <option>Translation</option>
                                    <option>Sales &amp; Marketing</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-9 col-lg-8 content-left-offset">
                        <style>
                            ul {
                                list-style-type: none;

                            }

                            a {
                                color: black;
                                font-size: 16px;
                            }

                            .custom {
                                height: 250px;
                                width: 1000px;
                                overflow-y: auto;
                                overflow-x: auto
                            }

                        </style>
                        <!-- Freelancers List Container -->
                        <div class="custom freelancers-container freelancers-grid-layout margin-top-35">
                            <div class="col-xl-12">
                                <div class=" border-top  margin-bottom-25">
                                    <h2>Search and Find Jobs in Ethiopia</h2>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-md-4">
                                        <div class="overflow-auto">
                                            <ul class="none ">
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">Business
                                                        Development job</a><span>(45)<span> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>


                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-xl-4 col-md-4">
                                        <div class=" ">
                                            <ul class="">
                                                <li><a class="icon-material-outline-arrow-right"
                                                        href="/all_job_list">Purchasing and Procurement Jobs</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-4">
                                        <div class=" card">
                                            <ul class="">
                                                <li><a class="icon-material-outline-arrow-right"
                                                        href="/all_job_list">Purchasing and Procurement Jobs</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a> </li>
                                                <li><a class="icon-material-outline-arrow-right" href="/all_job_list">JOb
                                                        1</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>




    <!-- Recent Jobs -->
    <div class="section gray padding-top-65 padding-bottom-75 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-35">
                        <h3>Recent Jobs</h3>
                        <a href="jobs-list-layout-full-page-map.html" class="headline-link">Browse All Jobs</a>
                    </div>

                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">

                        <!-- Job Listing -->
                        <a href="single-job-page.html" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-01.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bank officer</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>

                                            <li><i class="icon-material-outline-location-on"></i> Dessie</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>

                    </div>
                    <!-- Jobs Container / End -->
                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">

                        <!-- Job Listing -->
                        <a href="single-job-page.html" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-01.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bank officer</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>

                                            <li><i class="icon-material-outline-location-on"></i> Dessie</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>

                    </div>
                    <!-- Jobs Container / End -->
                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">

                        <!-- Job Listing -->
                        <a href="single-job-page.html" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-01.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bank officer</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>

                                            <li><i class="icon-material-outline-location-on"></i> Dessie</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>

                    </div>
                    <!-- Jobs Container / End -->
                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">

                        <!-- Job Listing -->
                        <a href="single-job-page.html" class="job-listing with-apply-button">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Logo -->
                                <div class="job-listing-company-logo">
                                    <img src="images/company-logo-01.png" alt="">
                                </div>

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title">Bank officer</h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>

                                            <li><i class="icon-material-outline-location-on"></i> Dessie</li>
                                            <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Apply Button -->
                                <span class="list-apply-button ripple-effect">Apply Now</span>
                            </div>
                        </a>

                    </div>
                    <!-- Jobs Container / End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Recent Jobs / End -->
    <!-- Featured Employes -->
	
    <div class="section  padding-top-65 padding-bottom-70 full-width-carousel-fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-25">
                        <h3>Featured Employers</h3>
                        <!-- <a href="freelancers-grid-layout.html" class="headline-link">Browse All Freelancers</a> -->
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="default-slick-carousel freelancers-container freelancers-grid-layout">
                        <!--Freelancer -->
                        <div class="freelancer">
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Freelancer / End -->
                        <!--Freelancer -->
                        <div class="freelancer">
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Freelancer / End -->
                        <!--Freelancer -->
                        <div class="freelancer">
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Freelancer / End -->
                        <!--Freelancer -->
                        <div class="freelancer">
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Freelancer / End -->
                        <!--Freelancer -->
                        <div class="freelancer">
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Freelancer / End -->
                        <!--Freelancer -->
                        <div class="freelancer">
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">
                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <span>UI/UX Designer</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Freelancer / End -->
                    </div>
                </div>

            </div>
        </div>
    </div>

	<script src="text/javascript">
		var start = new Date();
		var end = start.setMinutes(start.getMinutes() +1); //one minute in the future
		var pixelsToMove =100;
		var oneMinute = (60 * 1 * 1000);

		function move()
		{
			var percentMoved = 1 - (end- new Date())/ oneMinute;
			$('.test').css({left: (percentMoved * pixelsToMove), position:'absolute'});
			if(percentMoved <= 1){
				setTimeout(move,100);
			}
		}

		move();
	</script>

    <!-- Featured Employes / End-->
    <!-- Icon Boxes -->
    <div class="section gray padding-top-65 padding-bottom-65">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline centered margin-top-0 margin-bottom-5">
                        <h3>How It Works?</h3>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box with-line">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-line-awesome-lock"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Create an Account</h3>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination going forward.
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box with-line">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-line-awesome-legal"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Post a Task</h3>
                        <p>Efficiently unleash cross-media information without. Quickly maximize return on investment.
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class=" icon-line-awesome-trophy"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Choose an Expert</h3>
                        <p>Nanotechnology immersion along the information highway will close the loop on focusing
                            solely.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Icon Boxes / End -->

    <!-- Counters -->
    <div class="section padding-top-70 padding-bottom-75">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="counters-container">

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-suitcase"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">1,586</span></h3>
                                <span class="counter-title">Jobs Posted</span>
                            </div>
                        </div>

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-legal"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">3,543</span></h3>
                                <span class="counter-title">Tasks Posted</span>
                            </div>
                        </div>

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-user"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">2,413</span></h3>
                                <span class="counter-title">Active Members</span>
                            </div>
                        </div>

                        <!-- Counter -->
                        <div class="single-counter">
                            <i class="icon-line-awesome-trophy"></i>
                            <div class="counter-inner">
                                <h3><span class="counter">99</span>%</h3>
                                <span class="counter-title">Satisfaction Rate</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters / End -->


    <!-- Footer
================================================== -->
@include('layouts/footer')
    <!-- Footer / End -->

    </div>
    <!-- Wrapper / End -->

    <!-- Sign In Popup
================================================== -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#login">Log In</a></li>
                <li><a href="#register">Register</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Login -->
                <div class="popup-tab-content" id="login">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>We're glad to see you again!</h3>
                        <span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
                    </div>

                    <!-- Form -->
                    <form method="post" id="login-form">
                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress"
                                placeholder="Email Address" required />
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password" id="password"
                                placeholder="Password" required />
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit"
                        form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>
                    <div class="social-login-buttons">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via
                            Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via
                            Google+</button>
                    </div>

                </div>

                <!-- Register -->
                <div class="popup-tab-content" id="register">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Let's create your account!</h3>
                    </div>

                    <!-- Account Type -->
                    <div class="account-type">
                        <div>
                            <input type="radio" name="account-type-radio" id="freelancer-radio"
                                class="account-type-radio" checked />
                            <label for="freelancer-radio" class="ripple-effect-dark"><i
                                    class="icon-material-outline-account-circle"></i> Freelancer</label>
                        </div>

                        <div>
                            <input type="radio" name="account-type-radio" id="employer-radio"
                                class="account-type-radio" />
                            <label for="employer-radio" class="ripple-effect-dark"><i
                                    class="icon-material-outline-business-center"></i> Employer</label>
                        </div>
                    </div>

                    <!-- Form -->
                    <form method="post" id="register-account-form">
                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="emailaddress-register"
                                id="emailaddress-register" placeholder="Email Address" required />
                        </div>

                        <div class="input-with-icon-left" title="Should be at least 8 characters long"
                            data-tippy-placement="bottom">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password-register"
                                id="password-register" placeholder="Password" required />
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password-repeat-register"
                                id="password-repeat-register" placeholder="Repeat Password" required />
                        </div>
                    </form>

                    <!-- Button -->
                    <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit"
                        form="register-account-form">Register <i
                            class="icon-material-outline-arrow-right-alt"></i></button>

                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>
                    <div class="social-login-buttons">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via
                            Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via
                            Google+</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div id="sign-in-dialog_job" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#login">Log In</a></li>
                <li><a href="#register">Register</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Login -->
                <div class="popup-tab-content" id="login">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>We're glad to see you again!</h3>
                        <span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
                    </div>

                    <!-- Form -->
                    <form method="post" id="login-form">
                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress"
                                placeholder="Email Address" required />
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password" id="password"
                                placeholder="Password" required />
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit"
                        form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>
                    <div class="social-login-buttons">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via
                            Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via
                            Google+</button>
                    </div>

                </div>

                <!-- Register -->
                <div class="popup-tab-content" id="register">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Let's create your account!</h3>
                    </div>

                    <!-- Account Type -->
                    <div class="account-type">
                        <div>
                            <input type="radio" name="account-type-radio" id="freelancer-radio"
                                class="account-type-radio" checked />
                            <label for="freelancer-radio" class="ripple-effect-dark"><i
                                    class="icon-material-outline-account-circle"></i> Freelancer</label>
                        </div>

                        <div>
                            <input type="radio" name="account-type-radio" id="employer-radio"
                                class="account-type-radio" />
                            <label for="employer-radio" class="ripple-effect-dark"><i
                                    class="icon-material-outline-business-center"></i> Employer</label>
                        </div>
                    </div>

                    <!-- Form -->
                    <form method="post" id="register-account-form">
                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="emailaddress-register"
                                id="emailaddress-register" placeholder="Email Address" required />
                        </div>

                        <div class="input-with-icon-left" title="Should be at least 8 characters long"
                            data-tippy-placement="bottom">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password-register"
                                id="password-register" placeholder="Password" required />
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password-repeat-register"
                                id="password-repeat-register" placeholder="Repeat Password" required />
                        </div>
                    </form>

                    <!-- Button -->
                    <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit"
                        form="register-account-form">Register <i
                            class="icon-material-outline-arrow-right-alt"></i></button>

                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>
                    <div class="social-login-buttons">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via
                            Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via
                            Google+</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Sign In Popup / End -->
    <!-- Scripts
================================================== -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-migrate-3.1.0.min.html"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/tippy.all.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/snackbar.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function () {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });

    </script>
</body>


</html>
