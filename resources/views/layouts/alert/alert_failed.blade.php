@if (session('otp'))
<div class=" alert alert-danger">
    <center><strong style="color:red;"> {{ session('otp') }} </strong></center>
</div>
@endif