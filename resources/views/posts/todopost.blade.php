@extends('admin.adminlayout')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Todos los Posts</h3>
              <a href="/posts/create" class="btn btn-info pull-right">Crear</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Titulo</th>
                  <th>Id del usuario</th>
                  <th>Categoria</th>
                  <th>Grado</th>
                  <th>Borrar</th>
                  <th>Editar</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                     <tr>
                  <td style="width: 8%;">({{ $post->updated_at->format("Y-m-d") }})</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->user_id }}</td>
                  <td>{{ $post->category->name }}</td>
                  <td>{{ $post->grade->name }}</td>
                  <td> {!!Form::open(['route'=>['posts.destroy', $post->id] , 'method'=>'DELETE']) !!}
                    <button class="btn btn-sn btn-danger">Eliminar</button>
                    {!!Form::close()!!}</td>
                  <td><a href="{{route('posts.edit',$post->id)}}">Editar</a></td>
                </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection