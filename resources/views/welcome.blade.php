<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nikhil Agarwal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Font Awesome Script -->
        <script src="https://use.fontawesome.com/c5966ebbff.js"></script>

        <style>

            *{
                font-family: 'Roboto';
            }

            .section-heading{
                text-decoration: underline;
                text-align: right;
                margin-top: 0;
            }

            @media(max-width: 767px){
                .section-heading{
                    text-decoration: underline;
                    text-align: left;
                    margin-top: 0;
                }
            }


            .cover{
                padding-top: 10%;
                padding-bottom: 10%;
            }
            .white-text{
                color: #FFFFFF;
            }
            .rs-heading{
                color: #FD5AE8;
            }
            .wd-heading{
                color: #5AE8FD;
            }
            .rs-text{
                color: #FD5AE8;
                font-family: 'Share Tech Mono';
            }
            .wd-text{
                color: #5AE8FD;
                font-family: 'Share Tech Mono';
            }
            .thick{
                background-color: #FFFFFF;
                height: 1px;
            }
            #go-down{
                text-align: center;
                margin-top: 10%;
            }

            .big-text {
                font-size: 1.3em;
                font-weight: 600;
                vertical-align: middle;
                display: inline-block;
                margin-bottom: 1em;
                margin-top: 0.2em;
                font-family: 'Roboto', sans-serif;
            }

            .dark-background{
                background-color: #222222;
            }

            #what, #about{
                margin-top: 10%;
            }

            .m-m-t{
                margin-top: 30px;
            }

            .m-m-b{
                margin-bottom: 30px;
            }

            .tech-text{
                font-family: 'Share Tech Mono';
            }

            li{
                font-family: 'Share Tech Mono';
                margin-bottom: 10px;
            }


            .bottom{
                height: 500px;
            }

        </style>
        
    </head>
    <body>


    <div class="dark-background">
        <div class="cover container">

            <div class="row" id="intro">
                <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <h1 class="white-text">Nikhil Agarwal</h1>
                    <h2>
                        <span class="rs-heading">Rocket Scientist</span><br>
                        <span class="wd-heading">& Web Developer</span>
                    </h2>

                    <hr class="thick">

                    <blockquote>
                        <span class="rs-text">I design airplanes at Boeing in Seattle, WA</span> <br>
                        <span class="wd-text">& I create websites at Bloggercasts from my couch</span>
                    </blockquote>
                </div>
            </div>

            <div class="row" id="go-down">
                <div class="col-lg-12">
                    <p class="white-text"><small>See how</small></p>
                    <a id="down" href="#what"><i class="fa fa-chevron-down white-text" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container" id="what">
        <div class="row">

            <div class="col-sm-3 col-md-offset-2 col-md-4">
                <h2 class="section-heading">What I do</h2>
            </div>

            <div class="col-sm-9 col-md-4">

                <p class="big-text">
                    Help technophobic entrepreneurs amplify their impact online
                </p>

                <p class="m-m-t m-m-b tech-text">
                     I can be your CTO or manage the details.
                </p>

                <p class="big-text">
                    The CTO Approach
                </p>
                <p>
                    When you need a partner who dives deep to understand your business.
                </p>

                <ul class="m-m-b">
                    <li>Manage all aspects of your online business</li>
                    <li>Web Platform Selection</li>
                    <li>Design & Development</li>
                    <li>Operations Training</li>
                    <li>Digital Marketing</li>
                </ul>

                <p class="big-text m-m-t">
                    Or maybe just like your favorite employee?
                </p>
                <p>
                    When you need that reliable someone who gets it done.
                </p>
                <ul>
                    <li>Small Business Sites</li>
                    <li>E-commerce Sites</li>
                    <li>Membership Sites</li>
                    <li>Facebook Ads</li>
                    <li>Search Ads</li>
                    <li>Display Ads</li>
                </ul>

                <p class="big-text m-m-b m-m-t">¯\_(ツ)_/¯</p>

                <ul>
                    <li>Not sure what you need? I can help with that too</li>
                </ul>

            </div>

        </div>
    </div>

    <div class="container" id="about">
        <div class="row">

            <div class="col-sm-3 col-md-offset-2 col-md-4">
                <h2 class="section-heading">About</h2>
            </div>

            <div class="col-sm-9 col-md-4">

                <p class="big-text">
                    Tl;dr
                </p>

                <p class="m-m-t m-m-b tech-text">
                    Aerospace engineer, web developer, data-miner, digital marketer, indian, always learning, squash player, outdoors lover.
                </p>

                {{--<p class="big-text">--}}
                    {{--Story--}}
                {{--</p>--}}

                {{--<p class="tech-text">--}}
                    {{--I was born in Memphis, TN. My mum wanted to make sure I had access to the higher educational opportunities in the United States. Soon after I was born, I returned to Hyderabad, India and spent my childhood there. 18 years later, I moved to Urbana, IL in pursuit of my dream of being a rocket scientist.  And finally to Seattle, WA in 2012 to work at Boeing.--}}
                {{--</p>--}}

                {{--<p class="tech-text">--}}
                    {{--Since high school, I have been building websites. First for family businesses, then for my own entrepreneurial ventures (like my failed online tutoring center for college students), then for blogger and eventually for businesses of all shapes and sizes.--}}
                {{--</p>--}}

                {{--<p class="tech-text">--}}
                    {{--Building websites hasn't ever been the dream or my means of supporting myself. As an engineer, my network tends to have a lot of engineers. I build websites to meet a more diverse set of people and expand my view of the world.--}}
                {{--</p>--}}

                {{--<p class="tech-text">--}}
                    {{--I studied Aerospace Engineering at University of Illinois at Urbana-Champaign. Beyond academics, I got into the robotics club and designed a robot to mine the moon's dirt for a NASA competition. Our robot didn't do that well but it was a lot of fun.--}}
                {{--</p>--}}

                {{--<p class="tech-text">--}}
                    {{--At Boeing, I design the next generation of airplanes. Right now, I am working on the 777X and I won't say more than that :).--}}
                {{--</p>--}}
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="big-text">
                            This remainder of this website is under construction! The updated site will be ready by September 10, 2017. Until then, reach out to me via <a href="mailto:nikhil.agarwal@live.com">email</a>  if I can be of help.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>


    </body>
</html>
