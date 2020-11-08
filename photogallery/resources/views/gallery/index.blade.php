@extends('layouts.main')
@section('content')
        <div class="off-canvas-content" data-off-canvas-content>
          <div class="title-bar hide-for-large">
            <div class="title-bar-left">
              <button class="menu-icon" type="button" data-toggle="fomenu"></button>
              <span class="title-bar-title">Laravel Photo Gallery</span>
            </div>
          </div>
          <div class="callout primary">
            <div class="row column">
              <h1>Hello! This is the portfolio of a very witty person.</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 large-up-3">
            @for($i=0;$i<1;$i++)
                <div class='column'>
                    <!--<img class='thumbnail' src='http://lorempixel.com/400/200/sports/'>-->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3NycM9lYdRI" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jYnllpLJqYc" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hlWiI4xVXKY" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                    <h5>My Site</h5>
                </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
@endsection

@section('header')
    Ez a fejléc szekció.
@endsection