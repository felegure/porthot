@extends('layout')
 
@section('content')
    <br>
    <div class="container-fluid rounded" id="contact">
        <div class="col-12 mb-4 mx-1 text-white">
          <br><br><br>
            <h4 class="card-header">Contact us</h4>
        </div>
        <div class="row space-between rounded align-center text-center">
          <div class="col-6 col-md-4 offset-md-1 contactForm rounded"> 
<!--            <div class="row card text-white bg-dark">  -->
              <div class="card-body">
             
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}  text-info" name="name" id="name" placeholder="Your name" value="{{ old('name') }}">
                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} text-info" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <input type="subject" class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }} text-info" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                        {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }} text-info" name="message" id="message" placeholder="Your message">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <button type="submit" class="btn btn-info align-center text-center">Submit</button>
                </form>
              </div>   
            
          </div>
          <div class="col-6 col-md-6 text-center d-flex flex-column justify-content-center backCust rounded">
                <div class="embed-responsive-item -4by3 row1">
                    <iframe width="80%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Denderstraat%2076%20bus%201%209300%20Aalst&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/purevpn-coupon/"></a>
                </div>
            </div>
        </div>
       </div> 
    </div>
@endsection
