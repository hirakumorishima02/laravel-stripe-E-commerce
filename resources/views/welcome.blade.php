@extends('layouts.app')

@section('content')
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/top1.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>Welcome to Your Home Lawn Care Provider!</h3>
              <h5 class="light grey-text text-lighten-3">High Quality</h5>
            </div>
          </li>
          <li>
            <img src="img/top2.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>More than the price</h3>
              <h5 class="light grey-text text-lighten-3">Reasonable Price</h5>
            </div>
          </li>
          <li>
            <img src="img/top3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Agile lawn mowing</h3>
              <h5 class="light grey-text text-lighten-3">Stress-free waiting time</h5>
            </div>
          </li>
        </ul>
    </div>
    
    <!--------->
    <!--About-->
    <!--------->
    <div class='grey darken-4'>
        <h2 class='center-align' style='margin-top:0;padding-top:20px;color:white;'>About</h2>
        <p style='padding:10px 80px 50px 80px;color:white;'>
            If you are looking to change your lawn service company or you don’t want to do it yourself anymore,
            you have found the right place. This is also a place for current customers.
            Contact info is at the bottom of this page.
            <br>
            <br>
            We do lawn fertilizing, weed control and seeding.
            We do not mow the lawn. We are a small local company.
            Ultra Lawn Services, LLC provides knowledgable lawn maintenance services.
            Our team of licensed technicians are happy to work for you to give you the best looking lawn.
            We have many loyal customers with almost perfect lush green lawns.
        </p>
    </div>
    <!--------->
    <!--About-->
    <!--------->


    <!---------------------->
    <!--   Icon Section   -->
    <!---------------------->
      <div class="row" style='padding:0 50px 0 50px;'>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons large">sentiment_very_satisfied</i></h2>
            <h5 class="center">High Quality</h5>

            <p class="light">Our technicians are friendly and knowledgable.
            They are trained by our licensed owner and are licensed by the NJ DEP for pesticide use and safety.
            <br>
            <br>
            They are certified by Rutgers NJ Agricultural Experiment Station for professional fertilizer applicator
            certification and training. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons large">trending_down</i></h2>
            <h5 class="center">Value Price</h5>

            <p class="light">
            There are four lawn fertilizing programs to choose from. We have a Standard program that is
            basic fertilizing and weed control. The Standard Plus program adds lime, fungus and grub control.
            <br>
            <br>
            The Deluxe program includes all of the above with lawn seeding in the Fall.
            There is even a Lawn Builder program that is for starting over or establishing a new lawn.
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons large">fast_forward</i></h2>
            <h5 class="center">Fast</h5>

            <p class="light">
              We give free lawn evaluations with our estimates. 
            <br>
            <br>
              You will get a detailed analysis of your lawn’s size, predominant grass types, thatch layer, 
              turf density and soil pH.
            <br>
            <br>
              We will identify weed infestation, 
              insect and pest activity and then fungus and diseases that might be troubling your lawn.
              </p>
          </div>
        </div>
      </div>
    <!---------------------->
    <!--   Icon Section   -->
    <!---------------------->
    
    <!---------------------->
    <!--    Cards Menu    -->
    <!---------------------->
    <div class="row">
        <div class="col m4 l3 offset-l2">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <img src="img/subscription.jpg" sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Subscription Services</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4 l3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <img src="img/products.jpg"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Products</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4 l3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <img src="img/contact.jpg"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Contact Us</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <!---------------------->
    <!--    Cards Menu    -->
    <!---------------------->
    
    <!--------->
    <!--About-->
    <!--------->
    <div style='height:2px;background-color:#ee6e73;margin:0;'></div>
    <div class='grey darken-4' style='height:150px;'></div>
    <!--------->
    <!--About-->
    <!--------->
@endsection