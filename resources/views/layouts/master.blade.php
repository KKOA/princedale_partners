<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{csrf_token()}}">  
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Princedale Partners</title>

        {{-- External CSS --}}
        <link rel="stylesheet" href="{{asset('css/master.css')}}">
        @yield("style")

        {{-- External JS --}}
        <script src="{{asset('js/master.js')}}"></script>

    </head>
    <body>
         {{-- {{url()->current()}} --}}
         {{-- {{Request::path()}} --}}
        <div class="head">
            <a href="index.html" class="logo"><img src="img/princedale-partners-logo.svg" alt="Princedale Partners Logo"></a>
            
            <ul id="nav">
                {{-- <li><a href="index" class="active">HOME</a></li> --}}
                <li><a href="/home">HOME</a></li>
                <li><a href="/about-us">ABOUT US</a></li>
                <li><a href="/case-studies">CASE STUDIES</a></li>
                <li><a href="/meet-the-team">MEET THE TEAM</a></li>
                <li><a href="/digitalinsight/">DIGITAL INSIGHT</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
            
            <div class="desktop-footer">
                <h4>Contact Us</h4>
                <p>3rd Floor <br>90 Westbourne Grove <br> London <br>W2 5RT</p>
                <p> +44 (0) 20 7221 2019 </p>
                <p>
                    <a href="mailto:info@princedalepartners.com" onClick="ga('send', 'event', 'lead', 'email', 'homepage', 5, {'NonInteraction': 1});">info@princedalepartners.com</a>
                </p>
                
                <div class="social">
                    <a href="https://twitter.com/PrincedalePtnrs" target="_blank">
                        <img src="img/twitter.svg" alt="Visit Princedale Partners on Twitter">
                    </a>
                    <a href="https://www.linkedin.com/company-beta/2855381/" target="_blank">
                        <img src="img/linkedin.svg" alt="Join Princedale Partners on Linked In">
                    </a>
                </div>
                <img src="img/talent-advisers-stacked.svg" alt="Digital Headhunters and Talent Advisers" class="strapline">
                <p class="copyright">&copy; Copyright 2017 <br>Princedale Partners Limited.</p>
            </div><!-- desktop-footer -->	
        </div>
        <div class="content">
            @yield("main")

            <div class="mobile-footer">
		
                    <img src="img/talent-advisers.svg" alt="Digital Headhunters and Talent Advisers" class="strapline">
        
                    <div class="social">
                        <a href="https://twitter.com/DigitalSnrJobs?ref_src=twsrc%5Etfw" target="_blank"><img src="img/twitter.svg" alt="Visit Princedale Partners on Twitter"></a>
                        <a href="https://www.linkedin.com/company-beta/2855381/" target="_blank"><img src="img/linkedin.svg" alt="Join Princedale Partners on Linked In"></a>
                    </div>
                    
                    <h4>Contact Us</h4>
                    <p>3rd Floor <br>90 Westbourne Grove <br> London <br>W2 5RT</p>
                    <p><a href="tel:+442072212019" onClick="ga('send', 'event', 'lead', 'phone', 'homepage', 10, {'NonInteraction': 1});">+44 (0) 20 7221 2019</a> 
        <br> 
        <a href="mailto:info@princedalepartners.com" onClick="ga('send', 'event', 'lead', 'email', 'homepage', 5, {'NonInteraction': 1});">info@princedalepartners.com</a></p>
                    
                    <p class="copyright">&copy; Copyright 2017 Princedale Partners Limited.</p>			
                
                </div><!-- mobile-footer -->
        </div>

        <script type="text/javascript">
            $("#nav").addClass("js").before('<div id="menu">&#9776;</div>');
            $("#menu").click(function(){
                $("#nav").slideToggle();
            });
            $(window).resize(function(){
                if(window.innerWidth > 800) {
                    $("#nav").removeAttr("style");
                }
            });
        </script>
        
        <script>
        $(document).ready(function()
        {
            //Get Current url path
            const current_page_path ="/<?php echo Request::path() ?>";
            // console.log(current_page_path);
            $("#nav a").each(function(){
                $this = $(this);
                let current_path = $this.attr('href');
                console.log(current_path);

                if(current_path === current_page_path)
                {
                    // console.log('match '+ current_path);
                    $this.addClass('active');
                    $this.attr('href','');
                }
            }
            );
        });
        </script>

        @yield('script')

        <!-- Google Analytics -->		
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
          ga('create', 'UA-64940710-1', 'auto');
          ga('send', 'pageview');
         
        </script>	
    
    </body>
</html>