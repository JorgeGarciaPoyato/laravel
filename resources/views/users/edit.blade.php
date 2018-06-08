@extends('admin.adminlayout')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Crea un Usuario</h3>
				<form method="POST" action="/users/{{ $user->id }}">
                {{ csrf_field() }} {{ method_field('PUT') }}
                        <div>
                            <label>Nombre</label>
                            <div>
                                <input name="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div>
                            <label>Email</label>
                            <div >
                                <input type="email" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div>
                            <label>Contraseña</label>
                            <div >
                                <input type="password" name="password">
                            </div>
                        </div>
                        <br>
                        <div >
                            <div>
                                <button type="submit" class="btn btn-primary">Editar
                                </button>
                            </div>
                        </div>
                  </form>
                 
             </div>
        </div>
@endsection