@extends('layouts.master')

@section('description')
    Give us a call if we can help you with related advice or help with key digital leadership hires.
@endsection

@section('main')
<div class='row'>
    <div class='col-12'>
        <div class="hero contact-image">
            <div class='row'>
                <div class='col-12 col-md-6 offset-md-3 cover-text'>
                    <h1>Get connected</h1>
                    <p>Give us a call if we can help you with related advice or help with key digital leadership hires.</p>
                    <p>
                    +44 (0) 203 865 1701 <br><a href="mailto:info@princedalepartners.com" onClick="ga('send', 'event', 'lead', 'amyemail', 'contactpage', 5, {'NonInteraction': 1});">info@princedalepartners.com</a>
                </p>
                <p>3rd Floor, <br>90 Westbourne Grove, <br> London, W2 5RT</p>
                </div>
            </div>
            <div class='row'>
                <div class='col-12 col-md-6 offset-md-3 cover-text'>
                    <a href="https://www.google.co.uk/maps/place/90+Westbourne+Grove,+London+W2+5RT/@51.5153603,-0.202371,15z/data=!4m5!3m4!1s0x48761001f9736d07:0x206de62369679be8!8m2!3d51.515357!4d-0.1936109" target="_blank" class="button">&gt; View our location on Google Maps</a>
                </div>
            </div>
        </div><!-- hero -->
    </div>
</div>
@endsection