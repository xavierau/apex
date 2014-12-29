@include('front.partials.head')
<div id="wrapper">
    <div id="outterContainer">
        @include('front.partials.header')
        @include('front.partials.righticons')
        @yield('content')
        @include('front.partials.footer')
    </div>
</div>
@include('front.partials.blocks.js')