@extends('admin.adminlayout')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Todos los Usuarios</h3>
              <a href="/users/create" class="btn btn-info pull-right">Crear</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Nombre</th>
                  <th>email</th>
                  <th>Estado</th>
                  <th>Borrar</th>
                  <th>Editar</th>
                </tr>
                </thead>
                <tbody> 
                   @foreach ($users as $user)
                     <tr>
                  <td style="width: 8%;">({{ $user->updated_at->format("Y-m-d") }})</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->status }}</td>
                  <td>{!!Form::open(['route'=>['users.destroy', $user->id] , 'method'=>'DELETE']) !!}
                    <button class="btn btn-sn btn-danger">Eliminar</button>
                    {!!Form::close()!!}</td>
                  <td><a href="{{route('users.edit',$user->id)}}">Editar</a></td>
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