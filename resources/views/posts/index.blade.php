@extends('layout')
@section('content')
    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 style="color: CornflowerBlue" class="lead">Todos los Posts</h1>
            </div>
        </div>
         
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>
                
                 @foreach ($posts as $post)

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                    <div class="entry__text">
                        <div class="entry__header">
                            <h3 class="entry__title"><a style="color: CornflowerBlue"  href="#"> {{$post->title}} </a></h2>   
                        </div>
                        <div class="entry__excerpt">
                            <p style="color: Black">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        @if ( Auth::check() )
                        <div class="entry__excerpt">
                            <a href="{{ (Auth::user()->status == 'suscrito') ? route('posts.show',$post->id) :  route('suscripcion')}}">Leer el post</a>
                        </div>
                         @endif
                         @if (!Auth::check() )
                        <div class="entry__excerpt">
                            <p>Logueate para leer el post</a>
                        </div>
                         @endif
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <p>{{ $post->category->name}} {{ $post->grade->name }}</p>
                           </span>
                      
                        </div>
                        <div class="entry__date">
                                <a href="#">{{ $post->updated_at }}</a>
                        </div>
    
                </article> 
              @endforeach
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

    </section> <!-- s-content -->
</section>
@endsection