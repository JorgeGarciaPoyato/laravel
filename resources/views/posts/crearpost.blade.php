@extends('admin.adminlayout')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Crea un Post</h3>
				<form method="POST" action="/posts">
				{{ csrf_field() }}
                        <div>
                            <label>Titulo</label>
                            <div>
                                <input name="title">
                            </div>
                        </div>

                        <div>
                            <label>Excerpt</label>
                            <div >
                                <input name="excerpt">
                            </div>
                        </div>
                         <div>
                            <label>Body</label>
                            <div >
                                <textarea name="body"></textarea> 
                            </div>
                        </div>
                        <div>
                            <label>Categoria</label>
                            <div >
                            <select name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                	{{$category->name}}
                                </option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div>
                            <label>Grado</label>
                            <div >
                            <select name="grade_id">
                                @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">
                                	{{$grade->name}} 
                                </option>
                                @endforeach
                            </select>
                            </div>
                        </div>
       
                        <br>
                        <br>
                        <div >
                            <div>
                                <button type="submit" class="btn btn-primary">Crear
                                </button>
                            </div>
                        </div>
                  </form>
             </div>
        </div>
    </section>
 @endsection