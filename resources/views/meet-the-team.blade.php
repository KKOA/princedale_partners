@extends('layouts.master')

@section('description')
    We like to think we are a team with a great dynamic with strong ethics, drive and enthusiasm in all that we do both in and outside of work. Supported by a high profile Advisor &amp; Digital industry expert, we are based in stunning offices in the heart of West London.
@endsection

@section('main')
<div class='row'>
        <div class='col-12'>   
            <div class="hero team-image">
                {{-- <div class="section group"> --}}
                    <div class='row'>
                    {{-- <div class="col span_3"> --}}
                    <div class='col-12 col-md-6 cover-text '>
                    <h1>Who we are</h1>	
                    <p>We like to think we are a team with a great dynamic with strong ethics, drive and enthusiasm in all that we do both in and outside of work. Supported by a high profile Advisor &#38; Digital industry expert, we are based in stunning offices in the heart of West London.</p>
                    </div>
                </div>
                
            </div><!-- hero -->
        </div>
    </div>

                


    {{-- <div class="section group bios">
        <div class="col span_3 profile"> --}}
    <div class='row team'>
        <div class='col-12 col-md-6 col-lg-4'>
            <figure>  
                <img src="{{asset('img/2-min.jpg')}}" class='d-none d-md-inline-block' alt='Rupert Jupp'>
                {{-- <figcaption class='text-center'>Rupert Jupp</figcaption>  --}}
            </figure>
            <h2>Rupert Jupp</h2>
            <p><img src="{{asset('img/2-min.jpg')}}" style='width:50%; margin-right: 10px; margin-bottom: 10px;' class="rounded float-left d-md-none" alt='Rupert Jupp'> Rupert is Princedale’s Founder and Managing Partner having established the business in 2012. He has almost 20 years’ experience in head hunting and has specialised in the digital talent world since 2008. He has worked internationally for some of the leading headhunting firms and within each firm he has been either responsible for establishing a new specialist function or a new international office. He has worked in Barcelona, Hong Kong and Tokyo and has a strong grasp of the nuances of finding exceptional leadership talent in different marketplaces and regions.</p>
            <p>Rupert is known for his tenacity, authenticity and rigorous interviewing style. Candidates often describe his interviews as unlike any other head hunters’ as he pushes candidates to assess themselves honestly and analytically. He always has the client’s best interest at heart and mitigates the risk very early on to prevent any surprises down the line with the confidence to push back on a client when necessary.</p>
            <p>&nbsp;</p>
        </div>

        <div class='col-12 col-md-6 col-lg-4'>
            <figure>  
                <img src="{{asset('img/3-min.jpg')}}" class='d-none d-md-inline-block' alt='Jamie Homer'>
                {{-- <figcaption class='text-center'>Jamie Homer</figcaption> --}}
            </figure> 
            <h2>Jamie Homer</h2>
            <p><img src="{{asset('img/3-min.jpg')}}" style='width:50%; margin-right: 10px; margin-bottom: 10px;' class="rounded float-left d-md-none" alt='Jamie Homer'>Jamie brings over 15 years of Retail &#38; Consumer experience to Princedale. His role as Partner is to expand the firm’s reach deeper into retail, consumer &#38; leisure in the UK and throughout EMEA. With an extensive background in executive search, both internally and externally, Jamie is passionate about helping businesses establish a complete and thorough ‘customer first’ experience that blends the digital and physical experience and specialises in appointing such talent to own this.</p>
            <p>Before Princedale, he spent 7 years at URBN Urban Outfitters Inc. as the Group HR & International Business Development Director building the Urban Outfitters, Anthropologie and Free People brands Internationally and recruiting the Senior leadership functions for all brands. Within this role he held direct responsibility for 2500 employees, 70 stores across the EU and Asia for all HR, Employment law and Recruitment. Jamie’s remit also included a broader Business Development focus with a mandate to open up new markets and channels of business around the EU, Middle East and Asia.</p>
            <p>&nbsp;</p>
        </div>
        <div class='col-12 col-md-6 col-lg-4'>
                <img src="{{asset('img/4-min.jpg')}}" class='d-none d-md-inline-block' alt='Spencer Corin'>
            <h2>Spencer Corin</h2>
            <p><img src="{{asset('img/4-min.jpg')}}" style='width:50%; margin-right: 10px; margin-bottom: 10px;' class="rounded float-left d-md-none" alt='Spencer Corin'> Spencer is a core member of the Princedale team. He joined in February 2015 as Rupert’s Researcher and is now Research Consultant. After graduating with a degree in Law from Queen Mary, University of London in 2012, Spencer went straight into another search firm before Rupert head-hunted him for his own team. Spencer executes the full search lifecycle co-manages each stage alongside Rupert or Jamie from identification, assessment and selection through to appointment.</p>
        </div>
        <div class='col-12 col-md-6 col-lg-4'>
                <img src="{{asset('img/1-min.jpg')}}" class='d-none d-md-inline-block' alt='Amy Witchalls'>    
            <h2>Amy Witchalls</h2>
            <p><img src="{{asset('img/1-min.jpg')}}" style='width:50%; margin-right: 10px; margin-bottom: 10px;' class="rounded float-left d-md-none" alt='Amy Witchalls'> Amy is the Executive Assistant to the Partners and is also the Events Manager. She joined Princedale in January 2016 and manages everything from the Partners’ diaries &amp; travel, all client/candidate interviews, all of Princedale’s events, the blog, office management and accounting. Amy studied at Quest Professional (a business training school) on the Executive PA Programme and prior to joining Princedale Partners she was a PA at another search firm for 2 years.</p>
        </div>
    </div>
    <!-- section -->
@endsection