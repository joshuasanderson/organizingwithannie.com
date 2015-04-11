<?php

require_once('config.php');

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Organizing With Annie | Improving your space, time, and quality of life</title>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="lib/styles/css/font-awesome.min.css" />

    <!-- Stylesheets and JavaScript rels -->
    <link rel="stylesheet" href="lib/styles/css/screen.css" />
    <link rel="stylesheet" href="lib/styles/css/animate.css" />

    <script src="lib/js/jquery-1.11.1.min.js"></script>

    <script>
        $(document).ready(function () {
            // Random hero image on load.
            var images = [
                'lib/imgs/hero/1.jpg',
                'lib/imgs/hero/2.jpg',
                'lib/imgs/hero/3.jpg'
            ];

            var r = images[Math.floor(Math.random() * images.length)];

            var bgImage = r;
            var bgRepeat = 'no-repeat';
            var bgPosition = 'center center';

            $('#hero').css({backgroundImage : 'url('+bgImage+')'});
            $('#hero').css('background-repeat', bgRepeat);
            $('#hero').css('background-position', bgPosition);
        });
    </script>

    <script src="lib/js/functions.js"></script>
</head>

<body>

    <!-- Header and fixed menu -->
    <header>
        <nav class="main-nav">
            <ul>
                <li class="logo">
                    <a href="/">
                        <img src="lib/imgs/logo.png" />
                    </a>
                </li>
                <li><a href="#about" data-go="about">About</a></li>
                <li><a href="#services" data-go="services">Services</a></li>
                <li><a href="#testimonials" data-go="testimonials">Testimonials</a></li>
                <li><a href="#contact" data-go="contact">Contact</a></li>
                <li><a href="#faq" data-go="faq">FAQ</a></li>
            </ul>
        </nav>
        <nav class="main-nav-mobile">
            <a class="main-nav-mobile-logo-lg" href="/">
                <img src="lib/imgs/logo.png" />
            </a>
            <a class="main-nav-mobile-logo-sm" href="/">
                <img src="lib/imgs/logo-small.png" />
            </a>
            <div id="menu-icon" title="Menu"></div>
        </nav>
    </header>
    <!-- End Fixed menu -->

    <div id="mobile-menu">
        <div class="full-width-container">
            <div class="grid">
                <div class="twelve columns">
                    <ul>
                        <li><a class="mobile-a" href="#about">About</a></li>
                        <li><a class="mobile-a" href="#services">Services</a></li>
                        <li><a class="mobile-a" href="#testimonials">Testimonials</a></li>
                        <li><a class="mobile-a" href="#contact">Contact</a></li>
                        <li><a class="mobile-a" href="#faq">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="wrapper">

        <section data-section="home" id="hero">
            <div class="hero-header">
                <h1 class="hero-h1">Improving your space, time, and quality of life</h1>
                <div class="hero-h2-wrapper">
                    <h2 class="hero-h2">I want to preserve your memories while sharing the benefits of reusing, recycling, donating, or selling excess belongings.</h2>
                </div>
            </div>
            <a href="#about" class="learn-more button primary no-float centered-block">
                Learn More
                <span class="centered-block">
                    <i class="fa fa-arrow-down watermelon"></i>
                </span>
            </a>
        </section>

        <h5 id="about" class="sub-heading">MEET ANNIE</h5>
        <section class="about-section">
            <div class="container">
                <img src="lib/imgs/headshot.png" />
                <p>
                    Before starting my business, Organizing with Annie, I worked in various positions in housing, higher education, and counseling for nonprofits.  Most recently I have worked as an advocate and counselor for women, children and families experiencing violence.  Combining my skills as a counselor, a supervisor, and an advocate I have launched Organizing with Annie to create collaborative partnerships with my clients to help them find the best versions of their spaces and themselves.
                </p>
                <p>
                    I have built my business, Organizing with Annie, on the belief that everyone and everything deserves a home.  Whether you’re in an apartment you rent, or house you own, your living space should be safe, comfortable, and functional.  I’m a big believer in self-care and have learned through many different aspects of my career that we all, women especially, tend to care for everyone else first and never have time for ourselves.  I want to help make your home more organized so you will spend less time looking for things and have more time to treat yourself.
                </p>
                <p>
                    As a member of the New England chapter of the National Association of Professional Organizers (NAPO) I am continually building my skills and increasing my knowledge of the best products and resources to assist my clients in achieving the outcomes they want.  After a brief consultation I can take your concerns, challenges, and dreams for your spaces and provide you with systems that will work best for you.  It is a privilege and an honor to be invited into someone’s home to be part of making their spaces more comfortable for their family, their business, and their guests.
                </p>
            </div>
        </section>

        <h5 id="services" class="sub-heading">SERVICES</h5>
        <section class="services-section">

            <!-- Service 1 -->
            <div class="service">
                <div class="container grid service-summary">
                    <div class="twelve columns">
                        <h6>Garages, Basements, & Attics</h6>
                        Whether your garage never has room for your car, or your basement has piles so high you can’t walk through it, Organizing with Annie is the right choice for you.  I can help transform your garage into a neat and tidy room just for your cars.  If you struggle every year to find your warm sweaters when the temperature drops or you need your bathing suits as soon as the sun starts to shine I can help design a system that makes looking for off season items a breeze so you can spend more time bundled up by the fire or stretched out in the sand.
                    </div>
                </div>
            </div>
            <!-- End Service 1 -->

            <!-- Service 2 -->
            <div class="service">
                <div class="container grid service-summary">
                    <div class="twelve columns">
                        <h6>Customize Your Home Office</h6>
                        Do you have a home office that has never seemed to be as organized or as functional as you would like it to be?  Do you have paper files covering your desk, or so many emails in a day you can’t read?  Do you struggle with the boundaries of working out of your home?  We can work together to come up with the best possible solutions to make your home office a sanctuary of productivity that you’ll be excited to work in every day.
                    </div>
                </div>
            </div>
            <!-- End Service 2 -->

            <!-- Service 3 -->
            <div class="service">
                <div class="container grid service-summary">
                    <div class="twelve columns">
                        <h6>Moving & Packing Services</h6>
                        Are you planning a big move that feels overwhelming?  I have several years of experience organizing a wide range of moves from small moves down the street to large moves across the country.  My tips and tricks for making your next move a smooth and enjoyable experience will reduce stress and lower costs, as I work one on one with you ensuring that your belongings, no matter how large or small, make it safely from one location to the next.  Moving should be about the excitement of the new place, it shouldn’t be something you dread or feel anxious about.  I want to make your next move worry free and something to look forward to.
                    </div>
                </div>
            </div>
            <!-- End Service 3 -->

            <!-- Service 4 -->
            <div class="service">
                <div class="container grid service-summary">
                    <div class="twelve columns">
                        <h6>Students Moving to College</h6>
                        Going away to college is can be an exciting and anxious time for both the student and the rest of their family.  With more than 5 years of experience working in housing, on university campuses, I know just what each student needs and how to fit everything into their new, compact residence hall room.  I can also share ideas for a smooth transition when the student comes back to their childhood home to visit during school breaks.
                    </div>
                </div>
            </div>
            <!-- End Service 4 -->

            <!-- Service 5 -->
            <div class="service">
                <div class="container grid service-summary">
                    <div class="twelve columns">
                        <h6>Senior Citizen Downsizing</h6>
                        If you’re trying to move from the home where you raised your family to a smaller, more affordable or manageable location I can ease the process of knowing what to donate and what to bring with you.  It can be physically and emotionally exhausting to sort through years of memories, so I want to work with you to determine what to realistically keep and what you really don’t need to hold on to any longer.
                    </div>
                </div>
            </div>
            <!-- End Service 5 -->

            <!-- Service 6 -->
            <div class="service">
                <div class="container grid service-summary">
                    <div class="twelve columns">
                        <h6>Time Management</h6>
                        In addition to organizing your belongings I can help better manage your time so you can maximize each and every day.  Whether you need more time for your career, your partner, your children, your hobbies, or your friends, we can explore various techniques to help schedule everything that’s important to you.  If you need more time for relaxing, exercising, chores around the house, or all of the above I can help you map out a schedule for success.
                    </div>
                </div>
            </div>
            <!-- End Service 6 -->

        </section>

        <h5 id="testimonials" class="sub-heading">TESTIMONIALS</h5>
        <section id="testimonials" class="testimonials-section">
            <div class="container">
                <div class="grid">
                    <div class="one-half column">
                        <div class="testimonial">
                            <p>
                                Annie has organized two office spaces for me on two separate occasions. She is a consummate professional with a true talent for getting things in order. She is able to create harmony from chaos, and has a natural instinct for aesthetics. But what I really like about Annie is that she is patient and practical. She guided me through a lot of clutter in a very gentle and nonjudgmental way.  If you care about how your space will look, function, and make you feel, Annie is the person to call.
                                <div>Joy - Mashpee, MA</div>
                            </p>
                        </div>
                    </div>
                    <div class="one-half column">
                        <div class="testimonial">
                            <p>
                                Moving in general can be quite stressful; moving and downsizing is even more challenging. I went from having a master bedroom to a room barely large enough to fit the essentials of a bed, dresser, and desk. Annie assisted me with sorting my belongings, categorizing them, and then organizing them in a logical manner. Annie gives you options, not advice. I felt comfortable and not pressured to make my own decisions, while having support and encouragement from a professional organizer.
                                <div>Emily - Hyannis, MA</div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <h5 id="contact" class="sub-heading">CONTACT ME</h5>
        <section class="contact-section">
            <div class="container contact animated">
                <div class="twelve columns centered">
                    <div id="message" data-error="Please fill in all highlighted textboxes."></div>
                    <form id="contact_form" action="contact.php" method="post">
                        <div class="grid">
                            <div class="five columns">
                                <input type="text" name="name" class="req" placeholder="YOUR NAME" />
                                <input type="text" name="phone" class="req" placeholder="YOUR NUMBER" />
                                <input type="text" name="email" class="req" placeholder="YOUR EMAIL" />
                                <input type="text" name="answer" class="req" placeholder="<?php echo($CONTACT_US_QUESTION) ?>" />
                            </div>
                            <div class="seven columns">
                                <textarea name="message" cols="1" rows="5" class="req" placeholder="YOUR MESSAGE"></textarea>
                            </div>
                            <button name="submit" class="submit primary right" type="submit">
                                <i class="fa fa-circle-o-notch fa-spin green" id="loading"></i>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <h5 id="faq" class="sub-heading">Frequently Asked Questions</h5>
        <section id="faq" class="faq-section">

            <div class="faq-item">
                <div class="question">
                    <h6>What is NAPO?</h6>
                </div>
                <div class="answer container">
                    <p>
                        NAPO is the National Association of Professional Organizers.  I belong to both the national organization and the New England chapter.  NAPO offers, training, education, resources, and networking for professional organizers and consumers.
                    </p>
                    <p>
                        More information at <a href="http://www.napo.net/" title="National Association of Professional Organizers" target="_blank">www.napo.net</a>
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>Will my information be kept confidential?</h6>
                </div>
                <div class="answer container">
                    <p>
                        Yes.  As a member of NAPO I am always in compliance with the Code of Ethics which includes complete confidentiality for all clients.  I will keep all of your information private and will not sell, release, or share anything about your family, your home, or your organizing habits.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>How can a professional organizer help me?</h6>
                </div>
                <div class="answer container">
                    <p>
                        As a professional organizer I want to help make your spaces less cluttered, and your life easier.  Your time is precious so I want to help you make the most of it, without compromising the quality of your time.  I can help organize any room in your house including: kitchen, living room, bathroom, bedrooms, closets, garage, basement, attic, or home office.  If you have another idea send a quick email and if I’m not the expert I can refer you to another organizer who specializes in whatever need your looking to fulfill.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>How long will it take for me to get organized?</h6>
                </div>
                <div class="answer container">
                    <p>
                        This is a common question without an easy answer.  It depends on the number of rooms and number of projects in each room.  My role as the professional organizer is to give direction, teach skills, and provide support, but as the client it is up to you to make the decisions because after all it’s YOUR home we’re organizing.  Some people can make decisions relatively quickly, while others take a longer time to process; either way is just fine, but keep that in mind when determining the amount of time you want to work with an organizer.  I typically work with clients in 2-4 hour sessions during night and weekend hours.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>How will I be involved in the organizing process?</h6>
                </div>
                <div class="answer container">
                    <p>
                        As the client you will be 100% involved in all discussions, decisions, and actions in all of your spaces.  I believe that my clients all have the ability to organize and manage everything, and they hire me to provide structure and support throughout the process.  Once a new system is set up I might ask the client to try it out for a few weeks to see if it’s successful, so there’s a little homework in between sessions, but other than that our time together should be completely hands-on.  Outside of our sessions I will conduct any research necessary to make sure you have the most efficient and affordable products to help keep you organized long term.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>Do I need go out and buy organizing products ahead of time?</h6>
                </div>
                <div class="answer container">
                    <p>
                        NO, please don’t go out and purchase any organizing supplies before our first session.  While shopping for products sounds like fun, and believe me when the time is right it can be very fun, I want to work with the supplies you already have in your home and help you keep costs low.  If we decide that purchasing some products is the right decision we can talk about your own personal likes and dislikes of current products and I’m always happy to recommend my favorites as well.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>Can I hire you without telling my family?</h6>
                </div>
                <div class="answer container">
                    <p>
                        Some people think it might be easier to work with a professional organizer if their partner or their children don’t know about it.  However, I will not work with a client unless all members of the household are aware of the work.  The organizing will be most effective if the entire family participates and does their part, but if you have a partner or children who aren’t thrilled about the process, that’s okay, they can still benefit from the results.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="question">
                    <h6>How does the payment work?</h6>
                </div>
                <div class="answer container">
                    <p>
                        I accept cash, personal checks, as well as debit or credit cards.  After the initial free consultation, once we agree on a timeline that works for both of us, I require a 25% deposit at our first session.  If a client cancels for any reason, other than an emergency, a 50% cancellation fee will be required.  I value my time and your time, and as my client I want you to be fully and completely satisfied with all of our work together.
                    </p>
                </div>
            </div>

        </section>

        <footer>
            <div class="container">
                <div class="grid">
                    <div class="twelve columns">
                        <div class="napo">
                            <a href="http://www.napo.net" title="NAPO" alt="NAPO" target="_blank">
                                <img src="lib/imgs/napo.gif" title="NAPO" alt="NAPO" />
                            </a>
                        </div>
                        <p class="centered-text">
                            &copy; <script>document.write(new Date().getFullYear());</script> Organizing With Annie | Designed by <a href="mailto:joshuasa9@gmail.com" target="_top">Joshua Anderson</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- End Main Content -->

    <!-- Load JavaScript -->

    <script src="lib/js/jquery-easing-1.3.js"></script>
    <script src="lib/js/jquery.scrollto.js"></script>

    <!-- Initiate the auto smooth scroll for the menu -->
    <script>
        $(document).ready(function () {
            $('nav a, #hero a, #mobile-menu a').on('click', function (e) {
                e.preventDefault();
                $('html,body').scrollTo(this.hash, this.hash);
            });
        });
    </script>

</body>

</html>
