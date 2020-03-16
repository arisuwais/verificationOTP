@if (session('otp'))
<div class="alert alert error alert-block">
    <center><strong style="color:red;"> {{ session('otp') }} </strong></center>
</div>
@endif