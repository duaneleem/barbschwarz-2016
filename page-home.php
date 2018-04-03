<?php
/*
    Template Name: Home Page
*/

/* ================================================================================
    Advanced Custom Fields
================================================================================ */
// Section: About
$strAbout_Description   = get_field("about_description");

// Section: Thought of the Day
$strThought_Quote       = get_field("totd_thought");
$strThought_Author      = get_field("totd_author");


get_header(); ?>

<!-- ================================================================================
    Parallax Intro
================================================================================ -->
<style>
    /*--------------------------------------------------------------
        Main Background
    --------------------------------------------------------------*/
    .home-bg {
        background:
            linear-gradient(
                rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0.3)
            ),
            url("<?php bloginfo("template_directory"); ?>/assets/images/wallpaper-parallax-main.png");
    } /* home-bg */
    
    @media screen and (min-width: 992px) {
        .home-bg {
            background-size: auto 100%;
        }
    }

    @media screen and (max-width: 991px) {
        .home-bg {
            background-size: auto 100%;
        }
    }
</style>
<section id="welcome"
    class="fullscreen-cover parallax home-bg"
    data-stellar-background-ratio="0.5">
    <div class="container v-align-transform text-center smooth-scroll">
        <div class="space-bottom-20"><img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/barb-schwarz.jpg" style="width: 200px; height: auto;" class="img-responsive center-block" alt="Barb Schwarz" /></div>
        <h1 class="text-uppercase margin-b-10">Barb Schwarz</h1>
        <p class="lead text-bold">
            The Creator of Home Staging®,
            The ASP®/ASPM® Designations &amp; Courses,
            Stagedhomes.com®,
            The Staging University®,
            The IAHSP® Home Staging Association &amp; Foundation &amp; World Wide Staging Service Week®, WWSSW®
        </p>
        <p class="lead text-bold">
            <a href="#about" du-smooth-scroll class="btn btn-lg btn-border btn-hvr btn-rounded hvr-sweep-to-top">Know more</a>
        </p>
    </div><!--end-container-->
    <div class="bottom-row">
        <ul class="list-inline">
            <li><a href="https://www.facebook.com/barbstagedhomes" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
    </div><!--end bottom row-->

</section>

<!-- ================================================================================
    About
================================================================================ -->
<section id="about">
    <div class="space-70"></div>
        <div class="container color-black">
            <div class="row margin-b-40">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h2>ABOUT BARB SCHWARZ</h2>

                    <div class="text-align-left">
                        <?php echo $strAbout_Description; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- House Pictures -->
        <div class="space-40"></div>
        <div class="container-fluid no-padd">
            <div class="row no-margin">
                <div class="col-sm-2 no-padd text-center">
                    <div class="team-style-2">
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/about-fountain-garden.jpg" alt="Lawn with Fountain" class="img-responsive" />
                    </div><!--team style  end-->
                </div><!--col end-->
                <div class="col-sm-2 no-padd text-center">
                    <div class="team-style-2">
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/about-kitchen.jpg" alt="Kitchen" class="img-responsive" />
                    </div><!--team style  end-->
                </div><!--col end-->
                <div class="col-sm-2 no-padd text-center">
                    <div class="team-style-2">
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/about-loft.jpg" alt="Loft" class="img-responsive" />
                    </div><!--team style  end-->
                </div><!--col end-->
                <div class="col-sm-2 no-padd text-center">
                    <div class="team-style-2">
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/about-living-room.jpg" alt="Living Room" class="img-responsive" />
                    </div><!--team style  end-->
                </div><!--col end-->

                <div class="col-sm-2 no-padd text-center">
                    <div class="team-style-2">
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/about-outside-house.jpg" alt="Home Yard" class="img-responsive" />
                    </div><!--team style  end-->
                </div><!--col end-->

                <div class="col-sm-2 no-padd text-center">
                    <div class="team-style-2">
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/about-outside-footsteps.jpg" alt="Outside House with Stairs" class="img-responsive" />
                    </div><!--team style  end-->
                </div><!--col end-->
            </div><!--row end-->
        </div>

        <div class="">
            <div class="space-70"></div>
            <div class="container color-black">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Barb Schwarz is The Creator of Home Staging® and The Home Staging Industry
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>
                                            Barb Schwarz has Educated Realtors®, Home Stagers, and the Public on Home Staging since the early 70’s. Barb is
                                            the Creator, Inventor and True Visionary who came up with the Staging Concept. She has built the Staging Industry
                                            from day one before any others had thought of it. There was no Staging concept in the Real Estate Industry at all
                                            until she came up with the Home Staging Concept. Barb Invented the Home Staging Concept and industry when she entered
                                            the world of Real Estate as an Agent in Bellevue, WA in the early 70’s. She quickly saw and realized the need sellers
                                            have of preparing their homes for sale. Her background in the theater in musicals and off Broadway plays gave her the
                                            idea of setting the scene and setting the Stage® in houses for buyers to see properties in the best way. This is how
                                            she came up with her concepts and called it Home Staging. Barb has frequently said that her invention of Home Staging
                                            was a gift from God.  Her focus, ideas, vision, and creativity in this area became her mission and to this very day her
                                            passion grows more every-day. Her mission is to help create a better world through better home environments through the
                                            magic of Home Staging.
                                        </p>

                                        <p>
                                            During Barb’s real estate career she personally Staged and Sold over 5,000 homes in the greater Seattle area. Now Barb
                                            has personally trained and taught over one million people in her classes since 1985. This year Barb marks her 32nd
                                            anniversary year as a Professional Speaker. She is a ‘Certified Speaking Professional’ designated by and awarded to
                                            Barb by The National Speakers Association in 1990.   Barb is rated in the top 50 Most Influential Women in Real Estate
                                            Around the World by The Real Estate Network. Barb Schwarz pioneered and created both the "Staging To Sell" and "Staging
                                            To Live" ® concepts. She traveled the country and North America extensively from 1985 to today spreading vision and
                                            mission of Home Staging to millions through her live trainings, seminars, best-selling books, and her award winning
                                            DVD’s.
                                        </p>

                                        <ul>
                                            <li>Creator of The Staged Homes Concept and Home Staging Industry</li>
                                            <li>Creator of The Accredited Staging Professional®, ASP®, Course and The ASP® Master Course</li>
                                            <li>Creator of The ASP® and ASPM® Designations</li>
                                            <li>Lifetime Achievement Award given to Barb Schwarz by The Seattle King County Association of Realtors® for inventing Home Staging</li>
                                            <li>Best Selling Author (please see her books named under The Author Category below)</li>
                                            <li>Creator of The CAREERBook®</li>
                                            <li>Award-Winning Professional Speaker</li>
                                            <li>Founder of StagedHomes.com®</li>
                                            <li>Founder of The Staging University®</li>
                                            <li>Founder and Chairwoman Emeritus of The International Association of Home Staging Professionals® IAHSP.com</li>
                                            <li>Founder of The IAHSP® Charitable Foundation</li>
                                            <li>Founder of The World Wide Staging Service Week®, WWSSW®</li>
                                            <li>Founder of The StagingShoppingCenter.com</li>
                                            <li>Rated as a Premier Top Producer as a Professional Real Estate Broker during her Real Estate Career</li>
                                        </ul>

                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Barb’s Career as a Certified Speaking Professional® Speaker
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>
                                            As a seasoned speaker and trainer Barb Schwarz has logged over 22,000 hours on the platform teaching Home Staging in
                                            her Staging Seminars and Trainings. Hundreds of thousands of REALTORS® have attended her various programs. By educating
                                            the public, REALTORS®, and Home Staging professionals she has taught over 1,000,000 people live in her programs.  Her
                                            wonderful gift for speaking and her ability to educate, motivate and entertain was recognized by the National Speakers
                                            Association in 1990 when they awarded her the coveted designation of ‘Certified Speaking Professional’® which has been
                                            earned by less than 250 speakers worldwide. Barb Schwarz is a leader, an innovator, a real visionary, and a truly gifted
                                            speaker who shares the wisdom of her personal triumphs. Those who experience Barb always say how they are struck by, or
                                            even blown away by her incredible heart felt energy as well as the highly educational and ground breaking ideas and
                                            innovative substance of her programs. In 2016 Barb marked her 32nd year as a Professional Speaker and Trainer.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSHC">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSHC" aria-expanded="false" aria-controls="collapseSHC">
                                            Barb is a World Renowned Best Selling Author
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSHC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSHC">
                                    <div class="panel-body">
                                        <p>
                                            Barb Schwarz has published countless articles in numerous national publications addressing a variety of Staging and
                                            Real Estate topics.   She is written about frequently in well-known newspapers and magazines all around the U.S.,
                                            Canada, such as The New York Times, The Washington Post, The San Francisco Chronicle, Ladies Home Journal, Money
                                            Magazine, Better Homes and Gardens and the list goes on.  Barb is internationally known as The Creator of Home
                                            Staging® and The Home Staging Industry around the world. Her video "How To Prepare Your Home For Sale...So It
                                            Sells" won the Consumer Education Product of the Year Award from the Real Estate Educators of America. Her Home
                                            Staging video entitled "How To Stage Your Home So It Sells For Top Dollar" is seen by literally millions of sellers
                                            and RE Agents and Stagers everywhere every year. Barb Schwarz is the author of her bestselling books entitled:
                                        </p>

                                        <ul>
                                            <li>"How To List And Sell Residential Real Estate Successfully" (Barb’s book changed the RE Industry with her innovative Real Estate Selling Concepts and Proven Ideas, such as her CAREERBook® concept, and it was the very first book ever published that introduced Barb’s Home Staging invention to the world).</li>
                                            <li>"Home Staging: The Winning Way to Sell Your House for More Money" (the very first book totally written and published on Home Staging). Published by Wiley and Sons</li>
                                            <li>"Building a Successful Home Staging Business' (the very first book written and published on How to Open, Run and Build a Home Staging Business). Published by Wiley and Sons</li>
                                            <li>"Staging To Sell: The Secret to Selling Homes" (this book contains Barb’s full Home Staging Course and Program and is for all kinds of Real Estate markets). Published by Wiley and Sons</li>
                                            <li>"If You Wear Out Your Body Where Will You Live"</li>
                                        </ul>

                                        <p>Each of her books are available in bookstores or on Amazon.com.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Barb Schwarz is The Creator and Founder of StagedHomes.com®
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>
                                            Barb Schwarz is the Founder of Stagedhomes.com. When Barb opened up the site Stagedhomes.com there was no educational site in the world
                                            exclusively for Home Staging. Therefore, StagedHomes.com was the very first Staging Educational website in the world and is the
                                            Internationally recognized world-wide today as the leader in the Home Staging Industry.  Barb knew when she built Stagedhomes.com that
                                            the public needed to be educated on what Home Staging is, she knew that Home Stagers needed to be trained, certified, designated, and
                                            accredited, Barb knew then that the public would want a directory to find the right Stager or Agent for them, she knew that people would
                                            want to find Staged Homes to buy, and that in addition to training Home Stagers and RE Agents they would need materials to use on a
                                            regular basis with their clients and she knew that a Home Staging Association would be crucial to set more standards to continue to raise
                                            the bar on the Home Staging industry she created. So Barb built Stagedhomes.com one page at a time and began with the 6 main sections that
                                            stand today to inform the world on the following:
                                        </p>

                                        <ol>
                                            <li>The Public Educational Section to educate the public on What Home Staging Is and What ASP® Stagers Really Do to set the scene and Stage® the house to sell so that the Seller receives top dollar for their home in the quickest amount of time.</li>
                                            <li>The Home Staging Training Section -  All education is listed with the information about each course of what people will learn. The locations and dates are shown so that those interested in studying by live in-the-classroom classes or by webinars can find the best way and location to attend. The ASP® Courses and ASP® Designations are earned by Home Stagers or by Real Estate students in the different classes that are offered. The ASP® Designation is the highest Staging Designation in the world and stands above all of the rest in reputation creditability. Please read below about The ASP® Courses and ASP® Designations.</li>
                                            <li>The Stagedhomes.com ASP®and ASPM® Home Staging Directory where the public finds ASP® Home Stagers to Stage® their homes and ASP® Real Estate Agents to list and sell their homes. Here it is so easy to find the right ASP® Professional to serve your needs as a seller.  ASP® and ASPM® Master Categories are shown and the public can select the area of the country and the category of the professional that they are looking for easily.</li>
                                            <li>The Stagedhomes.com ‘Staged Homes For Sale’ Portal which shows ASP® Staged Homes that are currently active for sale or sold as well.  Here is where ASP® Home Stagers and ASP® Real Estate Agents post the homes that are Staged and listed for sale. Homes Sell all of the time from the Staged Homes Portal of Stagedhomes.com. By Staging with an ASP® you receive this service as a seller at no extra service fee to you. Go to Stagedhomes.com today and find the Staged Home that is right for you!</li>
                                            <li>The Staging University®. Barb has developed through her 44 years of experience as The Creator of Home Staging® and as a RE Broker countless forms, marketing materials, materials to use with the sellers in Staging or listing their home, thousands of before and after pictures, she has had legal firms develop legal forms for the ASP®s, pricing information, business systems for ASP®’s to use and much, much more.  When she opened Stagedhomes.com® she said that she would open a Staging University® on line too where all of the information, forms, systems, marketing materials, examples and more could be placed so that ASP®’s did not have to reinvent the wheel. Therefore as ASP®’s graduate they are granted access to the priceless Staging University® for as long as they are an active, renewed, in good standing, ASP®. The Staging University® is updated and cutting edge on a continuing bases with hundreds of pages for ASP®’s to use in their business.</li>
                                            <li>The International Association of Home Staging Professionals®, IAHSP.com – Barb’s large vision imagined a world Home Staging Organization for ASP® Home Staging Professionals® so that they could be an important part of an organization that reaches around the world to bring Professional Stagers all together for sharing education, networking, improving the industry standards continually and to make the Staging Word better for all concerned. As a Crucial part of IAHSP® Barb also created the IAHSP® Foundation to give back to others. And as an important part of that she created ‘The World Wide Staging Service Week®, WWSSW®. WWSSW® is dear to Barb’s heart for all of the giving of ASP®’s talents and Staging Experience that ASP’s® give and do each year from September 12th-19th in serving their communities. Through the magic of donating ASP® Home Staging ASP’s® change thousands of lives as they give their talents to Organizations, individual homes, projects, children hospitals, women’s shelters and many, many community members in need.</li>
                                        </ol>

                                        <p>
                                            Stagedhomes.com® is based upon Barb Schwarz over 44 years of experience and leadership through her Creation and Invention of Home Staging,
                                            her RE selling experiences, her own Staging Experiences as she created the concepts of what works and what does not work, and her cutting
                                            edge innovation and idea. Stagedhomes.com® is THE resource to the Home Staging industry and sets the bar of excellence in the Home Staging
                                            world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Barb Schwarz is The Creator of The ASP® and ASPM® Courses and Designations
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>
                                            As The Creator of Home Staging® Barb developed the Accredited Staging Professional, ASP/ASPM® Courses and Designations. The ASP® designation is
                                            the premier Home Staging Designation in the Home Staging and Real Estate Industries. StagedHomes.com trains Real Estate agents, as they earn the
                                            ASP® Real Estate Designation, how to educate sellers on the benefits of Home Staging, how to price and market Staged Homes, Listing Presentation
                                            skills, and how to work with an ASP® Home Stager as well as Home Staging tips and ideas. Home Stagers earn the ASP® Stager Designation and learn
                                            in great detail how to open, market, run, and build a Home Staging Business. There are many, many parts to setting up, marketing, building, and
                                            growing a Home Staging Business of course.  ASP® Home Stagers as they graduate from the ASP® Home Stager Course will tell anyone they meet that
                                            they wish that they had taken the ASP® Home Stager Course before they ever opened their business.  This is because the ASP® Stager Course is built
                                            upon Barb’s 44 years of inventive ideas, experiences, methods for Staging, how to avoid mistakes, how to educate clients and agents, how to
                                            communicate to have the seller Stage® and do what the ASP® Stager recommends, how to Stage®, how to market, step by step how to open, build and
                                            grow a Home Staging business and much more. StagedHomes.com® trains real estate agents in a 2 day ASP® Course and Home Stagers in a 3 day
                                            extensive ASP® Home Staging Course. The ASP® Courses are currently taught across the United States, Canada and around the world! The Masters,
                                            ASPM®, Course Barb developed and wrote as an additional 5 day Staging Training Course for ASP®’s to become ASPM® Masters as well. The Masters
                                            Course is ‘hands on’ learning with the instructor so that the instructor can give feedback, give personal input and positive critique to each
                                            ASP® based on their performance in the Masters ASPM® Course. The ASP® and ASPM® Designations are the most respected, accredited, awarded, and
                                            internationally known Home Staging Designations in the world.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Barb Schwarz Created and Built The Staging University® For All Active ASP®’s
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                            The Staging University®. Barb created and has developed, through her 44 years of experience as The Creator of Home Staging® and as a RE Broker,
                                            countless forms, marketing materials, materials to use with the sellers in Staging or listing their home, thousands of before and after pictures,
                                            she has had legal firms develop legal forms for the ASP®s to use in their agreements with their clients,, pricing information, business systems for
                                            ASP®’s to use and much, much more.  When she opened Stagedhomes.com® she said saw the need to open a Staging University® on line too where all of
                                            the information, forms, systems, marketing materials, examples and more could be placed so that ASP®’s did not have to reinvent the wheel. Therefore
                                            as ASP®’s graduate they are granted access to the priceless Staging University® for as long as they are an active, renewed, and an ‘in good
                                            standing’ ASP®. The Staging University® is constantly updated and is always cutting edge on a continuing bases with hundreds of pages for ASP®’s to
                                            use in their business.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingIAHSP">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseIAHSP" aria-expanded="false" aria-controls="collapseIAHSP">
                                            Barb Schwarz Founded & Built The International Association of Home Staging Professionals®, IAHSP®, The IAHSP® Foundation, and The World Wide Staging Service Week®, WWSSW®
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseIAHSP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIAHSP">
                                    <div class="panel-body">
                                        <p>
                                            In 1999 Barb Founded and began to Build The International Association of Home Staging Professionals®, IAHSP.com, Association. Barb’s large
                                            vision imagined a World-Wide Home Staging Organization for Home Staging Professionals®. She wanted this organization to be an important part
                                            of the Home Staging Industry she invented and created so that it would reach around the world to bring Professional Stagers all together for
                                            sharing education, networking, improving the industry standards continually and to make the Staging Word more educated, professional and
                                            better for all concerned. As people become an ASP® Home Stager or an ASP® Real Estate Agent they can join IAHSP® and continue to build their
                                            business through more education offered through the IAHSP® Chapters, IAHSP® Conferences and Conventions, Monthly IAHSP® and stellar IAHSP®
                                            speakers and meetings.
                                        </p>

                                        <p>
                                            Also as a Crucial part of IAHSP® Barb also created the IAHSP® Foundation to give back to others. Scholarships, grants, gifts and more can be
                                            provided/given to worthy recipients through the IAHSP® Foundation each year. And as an important part of the IAHSP® Foundation Barb also
                                            created ‘The World Wide Staging Service Week®, WWSSW®.  WWSSW® is very dear to Barb’s heart as it is a way to help those in need in communities
                                            around the world.  WWSSW® is a yearly event/time for all ASP®’s to give back with their talents and Staging Experience. This most needed service
                                            week is held from September 12th-19th for ASP’s® to serve their communities. They do this so beautifully through the magic of donating their ASP®
                                            Home Staging Services to help change thousands of lives for the better as they give their ASP® Home Staging Talents to Organizations, individual
                                            homes, projects, children hospitals, women’s shelters and many, many community members in need.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingAccomplishments">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseAccomplishments" aria-expanded="false" aria-controls="collapseAccomplishments">
                                            Barb Schwarz Accomplishments Include:
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseAccomplishments" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAccomplishments">
                                    <div class="panel-body">
                                        <ul>
                                            <li>The Creator of Home Staging® and The Home Staging Industry</li>
                                            <li>Founder Stagedhomes.com®</li>
                                            <li>Founder and Chairwoman Emeritus of The International Association of Home Staging Professionals®, IAHSP®</li>
                                            <li>Founder of The IAHSP® Charitable Foundation®</li>
                                            <li>Founder of The Staging University®</li>
                                            <li>Creator of The Accredited Staging Professional®, ASP®, Courses, and ASP® Designation</li>
                                            <li>Creator of The Accredited Staging Professional Master®, ASPM®, Courses, and ASPM® Designation</li>
                                            <li>Keynote Speaker, Seminar Leader, Author, Visionary, Inventor, and Training Consultant.</li>
                                            <li>Over 2,200 Full Day Seminars, 22,000 Hours on the Platform, and over 1,300,000 attendees have attended her programs in the US, Canada and from around the world</li>
                                            <li>Guest speaker at The National Association of REALTORS® National Conventions throughout many years</li>
                                            <li>Lifetime Achievement Award presented to Barb Schwarz by The Seattle King County Association of Realtors® for inventing Home Staging</li>
                                            <li>Instructor of the Year by The Seattle King County Association of REALTORS® for the year 2006</li>
                                            <li>Recognized as the National and International Expert on Staging Homes For Sale.</li>
                                            <li>Barb Schwarz has written and published hundreds of articles on Staging Homes.</li>
                                            <li>Barb Schwarz is frequently featured on TV and Radio Shows nationally sharing her expertise, such as ABC’s 20/20, NBC’s The Today Show, CBS Evening News, PBS, CNN, Fox News, NPR Radio, Real Estate Today Radio Shows, NAR Realtor® radio shows and many, many more</li>
                                            <li>Nationally and Internationally known as the Number One Expert for preparing property to sell.</li>
                                            <li>Because Barb introduced her concept of Staging to the United States Real Estate Industry it has changed the way Real Estate is practiced in the USA and now around the world today.</li>
                                            <li>Barb holds the Federally registered trademark for The Creator of Home Staging®.</li>
                                            <li>An estimated 65,000,000 consumers nationally have benefited from using Barb's award winning video, "How To Prepare Your Home For Sale... So It Sells." This video demonstrates to property owners how to prepare their property for sale. The benefits are far reaching. Home sellers who use this video sell their homes faster and/or for more money.</li>
                                            <li>Author of "How To List and Sell Residential Real Estate Successfully"</li>
                                            <li>Author of "Home Staging: The Winning Way to Sell Your House for More Money"</li>
                                            <li>Author of "How To Build a Successful Home Staging Business"</li>
                                            <li>Author of "Staging To Sell: The Secret to Selling Homes."</li>
                                            <li>Author of “If You Wear Out Your Body Where Will You Live.”</li>
                                            <li>Barb Wrote, directed, produced, and acted in her one hour Staging video "How To Prepare Your Home For Sale...So It Sell." This video won the "Consumer Education Product of the Year" award, given nationally by the Real Estate Educators of America.</li>
                                            <li>Wrote, directed, produced, and acted in her one hour Staging videos "How To Stage Your Home To Sell For Top Dollar" and "How To Price Your Home For Top Dollar".</li>
                                            <li>Featured on ABC's 20-20 two different times for her work, vision, and invention of Home Staging. The 20-20 video is also available for viewing on our <a href="http://stagedhomes.com/mediacenter/mediacenter.php" target="_blank">ASP Media</a> page.</li>
                                            <li>Written about extensively in: The New York Times, Business Week Magazine, Southwest Airlines Magazine, The Home Magazine, New York Home Magazine, Realtor Magazine, US News and World Report, The Washington Post, The Wall Street Journal, Money Magazine, and Smart Money Magazine, Cosmopolitan Magazine, and many more hundreds of magazines and newspaper articles.</li>
                                            <li>Barb is frequently featured on various local news broadcasts around the U.S. as the Home Staging expert, such as ABC, CNN, FOX, NBC, CBS and PBS. <a href="http://stagedhomes.com/mediacenter/mediacenter.php" target="_blank">ASP Media</a> page.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Barb’s Personal Information -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingPersonalInfo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePersonalInfo" aria-expanded="false" aria-controls="collapsePersonalInfo">
                                            Barb’s Personal Information
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsePersonalInfo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPersonalInfo">
                                    <div class="panel-body">
                                        <p>
                                            Barb grew up in Kansas in her earlier years. She graduated from The University of Washington with degrees in Education, Music and Design. Barb
                                            taught school for several years before opening her decorating business, which then led her to become a Real Estate Broker. It is in Real Estate
                                            where she developed and created the concept of Staging in the early 70’s. After many successful years as a Real Estate Broker using her Staging
                                            Concept and ideas she became a professional speaker and trainer to help educate the world about Home Staging in 1985. Since then the rest is
                                            now history and with you above.
                                        </p>

                                        <p>
                                            Barb has been married for over 33 years to Kirk Bohrer! Kirk has worked side by side with Barb throughout her career. She always says he has been
                                            and still is the wind beneath her wings. Barb has a darling special needs daughter whom she loves so very much. She adores and learns so much from
                                            her. When Barb is not Staging her favorite hobby is gardening. She works tirelessly in her garden and Stages® her Garden as well. In every part
                                            of her life Barb always Stages® everything around her. There is no way Barb could stop Staging after creating the concept that has changed the Real
                                            Estate Industry forever. She also loves to write, create and develop new ideas, and shop for items for the home to recommend to others for Staging.
                                            Barb continues to help ASP®’s throughout the world who seek her help. She also helps others in her community often who are in need. Barb and her
                                            family reside in Washington State in the Seattle area.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Barb's Garden -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingBarbsGarden">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseBarbsGarden" aria-expanded="false" aria-controls="collapseBarbsGarden">
                                            Barb Schwarz Garden
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseBarbsGarden" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBarbsGarden">
                                    <div class="panel-body">
                                        <p>
                                            I like to say, ‘Enjoy the Beauty of the Garden of Life Everyday.’  Life is like a Garden and a
                                            Garden is like Life.  I see it all of the time and we are each an important part of the Garden
                                            of Life. As a child I had a garden and loved every minute in it. My Grandparents, especially
                                            my Grandmother, taught me ideas I use to this very day in my Garden now. I hope you will enjoy
                                            following me on my Face Book site of
                                            <a href="https://www.facebook.com/BarbSchwarzGarden/" target="_blank">BarbSchwarzGarden</a>.
                                            There I am sharing ideas and pictures about Staging Landscapes, all kinds of information about
                                            gardening ideas, growing flowers, roses, vegetables, fruits, shrubs, trees and more. Objectively
                                            I will share my favorite products, tools, and where to find items in which stores to save you
                                            time and ways to save dollars too.  I will tell you how do you keep your roses blooming all of
                                            the time.  How do you keep mold away from plants? How to keep the bugs at bay! How to have your
                                            garden or yard look like one from a magazine with flair and innovation that work for Your Style.
                                        </p>
                                        <p>
                                            Visit me there daily for a moment to brighten your day and pick up quick ideas and tips. I hope
                                            you will ‘like’ my
                                            <a href="https://www.facebook.com/BarbSchwarzGarden/" target="_blank">BarbSchwarzGarden</a>
                                            Facebook page and leave a comment for me and an idea also that I can share with others from
                                            you too.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col-xs-12" -->
                </div>

                <div class="space-70"></div>
            </div><!--container end-->
        </div><!-- /gray-bg -->

</section>

<!-- ================================================================================
    Barb's Sayings | Cube Portfolio
================================================================================ -->
<section id="sayings" class="section-divider gray-bg">
    <div class="space-70"></div>
    <div class="container">
        <h2 class="text-center">SOME OF BARB SCHWARZ STAGING SAYINGS</h2>

        <div class="space-top-40 text-center">
            <a data-pin-do="embedBoard" data-pin-board-width="1000" data-pin-scale-height="800" data-pin-scale-width="80" href="https://www.pinterest.com/barbstagedhomes/barb-schwarz-staging-sayings/"></a>
        </div>
    </div>
    <div class="space-70"></div>
</section><!-- /container -->

<!-- ================================================================================
    Thought of the Day
================================================================================ -->
<section class="section-divider">
    <div class="space-70"></div>
    <div class="container">
        <div class="row space-bottom-40">
            <div class="col-xs-12 text-center">
                <h2>Barb's Thought of The Day</h2>
            </div><!-- /col -->
        </div><!-- /row -->

        <div class="row margin-b-50">
            <div class="col-sm-12 text-center margin-b-30">
                <h3>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <?php echo $strThought_Quote; ?>
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                </h3>
                <?php if(!empty($strThought_Author)) : ?>
                    <p class="color-black"><?php echo $strThought_Author; ?></p>
                <?php endif; ?>
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</section>

<!-- ================================================================================
    Contact Form
================================================================================ -->
<div class="section-divider"></div>
<section ng-include="'<?php bloginfo("template_directory"); ?>/assets/js/angular/views/contact.html'" id="contact"class="gray-bg" ng-controller="ctrlSendEmail"></section>

<?php
get_footer();
