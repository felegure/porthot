@extends('layout')
@section('content')
<div class="container-fluid" id="contact">
        <div class="col-12 mb-4 mx-1 text-white">
             <br><br>  <br><br>
            <h2>Contact</h2>
        </div>
       
        <div class="row space-between">
            <div class="col-6 col-md-4 offset-md-1 contactForm">
                <form action="mailto:contact@hotel.com" method="post" enctype="plain">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjet</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter the object of the mail">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" placeholder="Enter your message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
            <!--           <div class="col-6 col-md-5 offset-md-1 mesgForm">  -->
            <div class="col-6 col-md-6 text-center d-flex flex-column justify-content-center backCust">
                <div class="embed-responsive-item -4by3 row1">
                    <iframe width="80%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Denderstraat%2076%20bus%201%209300%20Aalst&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/purevpn-coupon/"></a>
                </div>
            </div>
        </div>
    </div>

    @endsection
    <!-- ********************Fww.embedgooglemap.net/blog/purevpn-coupon/"></a>
