@extends('frontend.layouts/list-template-page')

@section('header')
    Novel List - Novel Inspiration
@endsection
@section('content')
<div class="section text-center">
    <h2 class="title">Novel List</h2>
 @foreach ($ftitle as $t)
 <div class="card card-plain card-blog">
    <div class="row">
        <div class="col-md-2">
            <div class="card-image">
                <img class="img img-raised" src="{{ asset('images/'.$t->cover)  }}" width="100px" height="300px"/>
            </div>
        </div>
        <div class="col-md-6">
            <!--<h6 class="category text-info">Enterprise</h6>-->
            <h4 class="card-title">
                <a href="{{ route('ftitle.show', $t->id) }}">{{$t->name}}</a>
            </h4>
            <p class="card-description">
                {{Str::limit($t->sinopsis,50)}} <a href="{{ url('ftitle/' . $t->id) }}"> Read More </a>
            </p>
            <p class="author">
                Author : <a href="#pablo"><b>{{$t->userName}}</b></a>
            </a>
            <p class="author">
                Genre :
                <span class="label label-default"><a href="http://">Action</a></span>
                <span class="label label-default"><a href="http://">Romance</a></span>
                <span class="label label-default"><a href="http://">Sci-fi</a></span>
                <span class="label label-default"><a href="http://">Fantasy</a></span>
                <span class="label label-default"><a href="http://">Thriller</a></span>
            </a>
        </div>
    </div>
</div>
 @endforeach

        <ul class="pagination pagination-primary">
            <!--
                color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
            -->
                <li><a href="{!! $ftitle->links() !!}"></a></li>


            </ul>
    </div>

</div>
@endsection
