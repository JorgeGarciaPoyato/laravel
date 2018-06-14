@extends('layout')
@section('content')
</section>
 <section class="s-content s-content--narrow">
        <div class="row">
             <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    {{ $post->title }}
                </h1>
            </div>
            <ul>
                        <p style="color: CornflowerBlue; text-align: center;">{{ $post->category->name }}  {{ $post->grade->name }}</p>
                        
               
            </ul> <!-- end s-content__header -->
            <div>

                <p class="lead">{{ $post->body }}</p>
                
            </div>
            <p class="date"><{{ $post->updated_at }}></p>
        </article>
</section>

@endsection