@extends('layouts.master')

@section('description')
    Princedale Partners is a fast growth leading specialist digital headhunting firm, proud to work with some of the world’s best loved brands and exciting growth companies that look to hire the very best digital leadership across Europe.
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"></script>
@endsection

@section('main')
<div class='row'>
        <div class='col-12'> 
            <div class="hero about-image">
                <div class="row">
                    <div class='col-12 col-md-8 offset-md-2 cover-text'>
                        <h1>Working wonders</h1>	
                        <p>Princedale Partners is a fast growth leading specialist digital headhunting firm, proud to work with some of the world’s best loved brands and exciting growth companies that look to hire the very best digital leadership across Europe.</p>
                        <a href="#about" class="button">&or; Find Out More</a>
                    </div>
                </div>

                <div class="row">
                    <div class='col-6 offset-3'>
                        <h2>Example Searches</h2>
                        <p class='d-block d-md-none'>Click on a logo to read a full case study</p>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-4 col-lg-3'>
                            <a href="case-studies/coca-cola.html">
                                <img src="img/logo-coca-cola.png" alt="Coca Cola Logo">
                            </a>
                            <a href="case-studies/coca-cola.html" class='d-none d-md-inline'>
                                <span>Digital Director</span><br>&gt; Read full case study
                            </a>
                    </div>
                    <div class='col-6 col-md-4 col-lg-3'>
                            <a href="case-studies/thomas-cook.html">
                                <img src="img/logo-thomas-cook.png" alt="Thomas Cook Logo">
                            </a>
                            <a href="case-studies/thomas-cook.html" class='d-none d-md-inline'>
                                <span>Group Head, Digital Experience</span><br>&gt; Read full case study
                            </a>
                    </div>
                    <div class='col-6 col-md-4 col-lg-3'>
                            <a href="case-studies/holland-barrett.html">
                                <img src="img/logo-holland-barrett.png" alt="Holland and Barrett Logo">
                            </a>
                            <a href="case-studies/holland-barrett.html" class='d-none d-md-inline'>
                                <span>Director, Digital/Ecommerce</span><br>&gt; Read full case study
                            </a>
                    </div>
                    <div class='col-6 col-md-4 col-lg-3'>
                            <a href="case-studies/body-shop.html">
                                <img src="img/logo-body-shop.png" alt="Body Shop Logo">
                            </a>
                            <a href="case-studies/body-shop.html" class='d-none d-md-inline'>
                                <span>Chief Digital Officer</span><br>&gt; Read full case study
                            </a>
                    </div>
                    <div class='col-6 col-md-4 col-lg-3'>
                        <a href="case-studies/zalando.html">
                            <img src="img/logo-zalando.png" alt="Zalando Logo">
                        </a>
                        <a href="case-studies/zalando.html" class='d-none d-md-inline'>
                            <span>UK Country Manager</span><br>&gt; Read full case study
                        </a>
                    </div>	
                    <div class='col-6 col-md-4 col-lg-3'>
                        <a href="case-studies/photobox.html">
                            <img src="img/logo-photobox.png" alt="Photobox Logo">
                        </a>
                        <a href="case-studies/photobox.html" class='d-none d-md-inline'>
                            <span>Director, Customer Insight</span><br>&gt; Read full case study
                        </a>
                    </div>
                    <div class='col-6 col-md-4 col-lg-3'>
                        <a href="case-studies/secret-escapes.html">
                            <img src="img/logo-secret-escapes.png" alt="Secret Escapes Logo">
                        </a>
                        <a href="case-studies/secret-escapes.html" class='d-none d-md-inline'>
                            <span>Merchandising Director</span><br>&gt; Read full case study
                        </a>
                    </div>
                    <div class='col-6 col-md-4 col-lg-3'>
                        <a href="case-studies/audio-network.html">
                            <img src="img/logo-audio-network.png" alt="The Audio Network Logo">
                        </a>
                        <a href="case-studies/audio-network.html" class='d-none d-md-inline'>
                            <span>Product Director</span><br>&gt; Read full case study
                        </a>
                    </div>			
                </div> 
            </div>     
        </div>
    </div>				

    {{-- <div class="section group about">		 --}}
    <div class='row about-section'>
        {{-- <div class="col span_3"> --}}
        <div class='col-12 col-md-5 offset-md-1'>
                <div id="about"></div><!-- Anchor for Button Above -->		
            <h2>Digital transformation &amp; fast growth</h2>
            <p>We are experts in digital transformation &amp; fast growth leadership appointments with a focus on executive leadership roles that help clients sell, market and engage through digital. Having worked in the digital ecosystem for many years, we are particularly well placed to help clients with often difficult hiring needs, where upfront advice is key to ensuring a smooth hiring process of the best talent in any given marketplace.</p>
            <h2>Roles we specialise in</h2>
            <p>Chief Executive Officer, Chief Digital Director, Chief Customer Officer, Digital Director, Digital Transformation Director, Chief Marketing Officer, Digital Marketing Director, Chief Product Officer and Product Directors, eCommerce/Online Trading Director, Talent Director.</p>
            <h2>Executive search timeline &amp; process</h2>
            <p>The knack with any executive search assignment is in setting expectations upfront. Our skill is in taking as detailed a brief as possible and advising and guiding our clients on the most appropriate profile sought. We invest a significant amount of time upfront with every search. From initial briefing we typically introduce at least one benchmark candidate in the first two weeks for early calibration and assessment. We then recommend the shortlist of the strongest recommendations, with the full market mapping and intelligence report within 6 weeks from the search start date.</p>
            <p>We offer clients up to the minute access to our progress throughout the search using cutting edge technology.</p>	
        </div>
        
        <div class='col-12 col-md-5 offset-md-1'>
            <p class="testimonial">I would highly recommend Rupert to any organisation looking to make a key executive level digital hire. I certainly will use Rupert’s services again and strongly endorse him and Princedale Partners.</p>
            <img src="img/dotted.svg" alt="Dotted Line" class="dotted">
            <p><span>Mike Xenakis</span><br>OpenTable, Managing Director International</p>			
        </div>
        
    </div><!-- section -->
    <div class='row'>
        <div class='offset-1 col-10 col-md-8 offset-2'>
            <div class='bxslider'>
                <div class="phase">
                    <img src="img/search-phase-01.jpg" alt="Search Phase 1 graphic">
                    <h3>Search Phase 1</h3>
                    <p>Thorough client briefing</p>
                </div>
                
                <div class="phase">
                    <img src="img/search-phase-02.jpg" alt="Search Phase 2 graphic">
                    <h3>Search Phase 2</h3>
                    <p>Benchmark candidate sought for calibration</p>
                </div>
                
                <div class="phase">
                    <img src="img/search-phase-03.jpg" alt="Search Phase 3 graphic">
                    <h3>Search Phase 3</h3>
                    <p>Methodical proactive and targeted headhunting campaign</p>
                </div>
                
                <div class="phase">
                    <img src="img/search-phase-04.jpg" alt="Search Phase 4 graphic">
                    <h3>Search Phase 4</h3>
                    <p>Client feedback on benchmark candidate interview</p>
                </div>												
                
                <div class="phase">
                    <img src="img/search-phase-05.jpg" alt="Search Phase 5 graphic">
                    <h3>Search Phase 5</h3>
                    <p>In-person candidate assessment of the 15+ most relevant individuals</p>
                </div>
                
                <div class="phase">
                    <img src="img/search-phase-06.jpg" alt="Search Phase 6 graphic">
                    <h3>Search Phase 6</h3>
                    <p>Shortlist recommended and market intelligence shared with our client</p>
                </div>
                
                <div class="phase">
                    <img src="img/search-phase-07.jpg" alt="Search Phase 7 graphic">
                    <h3>Search Phase 7</h3>
                    <p>Client interviews. These can take place at Princedale Partners offices to ensure confidentiality if required.</p>
                </div>
                
                <div class="phase">
                    <img src="img/search-phase-08.jpg" alt="Search Phase 8 graphic">
                    <h3>Search Phase 8</h3>
                    <p>Preferred choice selected and offer extended. Offer acceptance, and start date confirmed.</p>
                </div>
            </div>												      
        </div>
    </div>
    <div class='row'>
        <div class='col-6 offset-3 col-md-4 offset-md-4'>
            <a href='/meet-the-team2' class='button' style='color:black;'>Meet the Team</a>
        </div>
    </div>
@endsection

@section('script')
{{-- <script src="{{asset('js/jquery.bxslider.min.js')}}"></script> --}}
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                slideWidth: 310,
                minSlides: 1,
                maxSlides: 4,
                moveSlides: 1,
                pager: false,
                controls:true,
                nextText: "<img src='img/next.png'>",
                prevText: "<img src='img/prev-min.png'>"
            });
        });
    </script>	
@endsection