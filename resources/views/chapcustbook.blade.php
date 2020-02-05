@extends('layouts')

@section('content')

<main class="py-4">
<!-- chapcustbook.blade.php -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center"><h1> Booking </h1></div>
            <div class="card-body">
                Agree to terms and conditions Copy
             <form class="needs-validation" novalidate>
                    {{csrf_field()}}
               <div class="form-row">
                 <div class="col-md-4 mb-3">
                   <label for="validationCustom01">First name</label>
                   <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                   <div class="valid-feedback">
                     Looks good!
                   </div>
                 </div>
                 <div class="col-md-4 mb-3">
                   <label for="validationCustom02">Last name</label>
                   <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                   <div class="valid-feedback">
                   	Looks good!
                   </div>
                 </div>
                 <div class="col-md-4 mb-3">
                   <label for="validationCustomUsername">Username</label>
                   <div class="input-group">
                     <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupPrepend">@</span>
                   </div>
                   <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                   <div class="invalid-feedback">
                     Please choose a username.
                   </div>
                 </div>
               </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                   Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <select class="custom-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
             </div>
             <div class="form-group">
             <div class="form-check">
               <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
               <label class="form-check-label" for="invalidCheck">
                 Agree to terms and conditions
               </label>
               <div class="invalid-feedback">
                 You must agree before submitting.
               </div>
             </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>

  </div>
</main>

<script type="text/javascript">

    $('.date').datepicker({

       format: 'mm-dd-yyyy'

     });

</script>
