
<div class="panel panel-default ">
    <div class="panel-body">
    <h3 class="text-center" style="margin:30px 0px"> Civicilab Registration Form </h3>
    @if($errors)
        @foreach( $errors as $error)
            {{$error}}
        @endforeach
    @endif

    
      <form class="form-horizontal" action="/" method="POST">

       <div class="form-group">

         @if( session('status'))
            <div class="text-center alert alert-success col-sm-offset-3 col-sm-6">
            {{session('status')}}
            </div>
        @endif

        </div>

       {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="control-label col-sm-3" >Full Name </label> 
            <div class="col-sm-6">
            <input type="text" name="full_name" class="form-control" id="name" />
            </div>
        </div>

         <div class="form-group">
            <label for="email" class="control-label col-sm-3" > Email</label> 
            <div class="col-sm-6">
            <input type="text" name="email_address" class="form-control" id="email" />
            </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="control-label col-sm-3" > Mobile </label> 
            <div class="col-sm-6">
            <input type="text" name="mobile" class="form-control" id="mobile" />
            </div>
        </div>


         <div class="form-group">
            <label for="address" class="control-label col-sm-3" > Organisation Name </label> 
            <div class="col-sm-6">
            <input type="text" name="address" class="form-control" id="address" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
            <input type="submit" class="btn btn-success btn-full" name="submit__btn" value="Register">
            </div>
        </div>

       
        </div>

      </form>
    </div>
</div>
