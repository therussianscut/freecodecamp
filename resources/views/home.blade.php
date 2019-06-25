@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
        <img src="https://scontent-lhr3-1.cdninstagram.com/vp/e8a9c5ac05e3255e8c11901972a5185e/5DA14CC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com" class="rounded-circle"
        style="max-height: 100px">

    </div>


    <div class="col-9 pt-5">
        <div> <h1> {{$user->username}}</h1></div>
        <div class="d-flex">
            <div class="pr-5"><strong> 150</strong> Posts </div>
            <div class="pr-5"><strong> 23K</strong> Followers </div>
            <div class="pr-5"><strong> 212</strong> Following </div>
        </div>

        <div class="pt-4 font-weight-bold" > FreeCodeCamp</div>
        <div> We're a global community of millions of people learning to code together.
            We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
        <div><a href="http://www.freecodecamp.org">www.freecodecamp.org</a></div>

    </div>

    </div>


    <div class="row pt-4">

        <div class="col-4" class="w-100">

            <img src="">

        </div>

        <div class="col-4">

            <img src="" class="w-100">

        </div>

        <div class="col-4">

            <img src="" class="w-100">

        </div>


    </div>

</div>
@endsection
