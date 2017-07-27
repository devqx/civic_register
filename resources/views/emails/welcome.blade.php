
@include('emails.header')
@section('title', 'Thank You')
<style>

.fa {
    width:48px;
    height:48px;
    border-radius:50%;
    padding:10px;
    background:#fff;
    color:#2C3E50;
    margin:10px 0px;

}
.social{
    width:63%;
    margin:5px auto;

}
a{
   color:#2C3E50;
}
body{
    overflow-x:hidden;
}

</style>
<div class="row text-center">
    <div class="">
        <div class="col-sm-12">
        <div class="panel">
            <div style="background-color:#2C3E50">
                <center><img style="padding:10px 0px" src="{{$message->embed('http://civicilab.com/wp-content/themes/civictheme/assets/images/logo.png')}}" />
                </center>
            </div>
            <div class="panel-body">
            <br>
            <span> Dear <i> {{$full_name}} ,</i> </span>
            <br>
            <h3> Thank You For Visiting </h3>
            <hr style="width:60px">
            
            <p>We look forward to working with you in the nearest future. <br>
            You can utilize our workstation or join in on our social innovation programs.</p>

            <p>Our newsletters will have the information of our events as they unfold, so look out for them!</p>

            <p>You can also follow us on social media at the following handles. </p>
            Twitter: <a href="https://www.twitter.com/civicilab">@civicilab</a><br>
            Instagram:  <a href="https://www.instagram.com/civicilab">@civicilab</a> <br>
            Facebook: <a href="https://www.facebook.com/civicilab">Civic Innovation Lab. </a><br>

            <p></p>
            <p>You’re welcome to visit us again and we hope to see you soon!</p>

            <p>Warm Regards,</p>

            <span style="margin:10px 0px"><i>Civic Innovation Lab </i></span>

            <div class="row" style="background-color:#2C3E50;color:#fff;height:80px">
            <div class="container social"> 

            <div class="col-sm-4">
                <span><a href="https://www.facebook.com/civicilab"><i class="fa fa-2x fa-facebook"></i></a></span>
            </div>  
            <div class="col-sm-4">
                <span><a href="https://www.twitter.com/civicilab"><i class="fa fa-2x fa-twitter"></i></a></span>
            </div>
            <div class="col-sm-4">
                <span><a href="https://www.instagram.com/civicilab"><i class="fa fa-2x fa-instagram"></i></a></span>
            </div>
        </div>
    </div>
    </div>
    
</div>
</div>
</div>

