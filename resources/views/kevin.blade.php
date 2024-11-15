<div>
    @include('common.header')
</div>
<div>
   here is our kevin view.
</div>
<div>
    Lets use loops and conditional statements.
    @if ($name == 'kevin')
    <h1>hello {{ $name }}</h1>
    @endif
</div>
<div>
    @for ($i=0; $i<10; $i++)
    {{$i}}
    @endfor
    <br />
    @foreach ($users as $user)
    {{$user}}
    @endforeach
</div>
<div>
    @includeif('common.common',['from' =>'from kevin view'])
    @include('common.inner',['from' =>'from kevin view'])
</div>
<div>
    <!-- check previous view -->
    {{URL::previous()}}
</div>
