<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
     <h3>
     {{URL::current()}}
     {{url()->current()}}
     </h3>
     <h3>
     {{URL::full()}}
     {{url()->full()}}
     </h3>
    <a href="{{URL::to('kevin')}}">go to kevin and check previous view</a>
    <a href="{{URL::to('login',['kevin'])}}">Go to Login page with name</a>
</div>
