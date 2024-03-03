@extends('frontend.layout.master')

@section('content')
    

<section id="home">
    <div class="content">
        <h4>Your Trusted Route to Reliable Delivery</h4>


    </div>
</section>

<section id="about">
    <div class="container">
        <div class="heading">About<span> Us</span></div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="{{asset('frontend/images/delivered.jpg')}}" alt="">

                </div>
            </div>
            <div class="col-md-6">
                <h3>What Makes Us Special?</h3>
                <p> "We are dedicated to providing reliable and efficient courier
                    services tailored to meet your shipping needs. With years of industry experience, our team
                    is committed to delivering packages swiftly and securely to destinations worldwide.<br> We
                    prioritize customer satisfaction and strive to exceed expectations with every delivery. From
                    same-day local shipments to international logistics solutions, trust us for
                    all your courier needs. Discover why countless businesses and individuals rely on us for
                    seamless shipping experiences."</p>
            </div>
        </div>
    </div>
</section>

@endsection