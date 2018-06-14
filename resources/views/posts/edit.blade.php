@extends('admin.adminlayout')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Actualiza el Post</h3>
				<form method="POST" action="/posts/{{ $post->id }}">
                {{ csrf_field() }} {{ method_field('PUT') }}
                        <div>
                            <label>Titulo</label>
                            <div>
                                <input name="title" value="{{ $post->title }}">
                            </div>
                        </div>

                        <div>
                            <label>Excerpt</label>
                            <div >
                                <input name="excerpt" value="{{ $post->excerpt}}">
                            </div>
                        </div>
                         <div>
                            <label>Body</label>
                            <div >
                                <textarea name="body" >{{ $post->body }}</textarea> 
                            </div>
                        </div>
                        <div>
                            <label>Categoria</label>
                            <div >
                            <select name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{($category->id==$post->category_id)?'selected':''}}>
                                 {{ $category->name }}
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
                                <option value="{{ $grade->id }}" {{($grade->id==$post->grade_id)?'selected':'' }}>
                                	{{ $grade->name }}
                                </option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                     
                        <br>
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
    </section>
 @endsection