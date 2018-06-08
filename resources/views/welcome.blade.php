@extends('layout')
@section('content')

        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/thumbs/featured/programacion.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#">Posts</a></span>

                                <h1><a href="/programacion" title="">Mira todos los posts disponibles</a></h1>

                                <div class="entry__info">
                                    <a href="/programacion" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/k.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Jorge Garcia</a></li>
                                        <li>Marzo 20, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('images/thumbs/featured/bootstrap.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category">Logueate<a href="/"></a></span>

                                <h1><a href="/diseño" title="">Logueate y suscribete para leer todos los posts</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/k.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Jorge Garcia</a></li>
                                        <li>Marzo 20, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('images/thumbs/featured/gata.jpeg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="/about">About</a></span>

                                <h1><a href="/about" title=""> Sobre nosotros</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/k.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Jorge Garcia</a></li>
                                        <li>Marzo 20, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

</section>
    <!-- s-content
    ================================================== -->
@endsection