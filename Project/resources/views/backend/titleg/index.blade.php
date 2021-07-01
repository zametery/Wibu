@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <i class="material-icons">close</i>
    </button>
    <span>
      <b> Success - </b> {{ $message }}"</span>
</div>
@endif
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Genre Title Table</h4>
              <p class="card-category"> Tabel Data Genre Title</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Title Name
                    </th>
                    <th>
                      Genre Name
                    </th>
                    <!--<th>
                      Sinopsis
                    </th>
                    <th>
                      Favorit
                    </th>
                    <th>
                      Author
                    </th>
                    <th>
                      Created at
                    </th>
                    <th>
                      Tanggal Terupdate
                    </th>-->
                    <th>

                    </th>
                  </thead>
                  <tbody>
                      @foreach ($titleg as $item)
                      <tr>
                        <td>
                            {{$item->titlegenre_id}}
                        </td>
                        <td>
                            {{$item->title_id}}
                        </td>
                        <td>
                            {{$item->genre_id}}
                        </td>
                        <!--<td>
                            {{$item->sinopsis}}
                        </td>
                        <td>
                            {{$item->favorit}}
                        </td>
                        <td>
                            {{$item->creator_id}}
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                        <td>
                            {{$item->updated_at}}
                        </td>-->
                        <td class="td-actions text-right">
                        <form action="{{ route('titleg.destroy',$item->titlegenre_id) }}" method="POST">
                          <a href="{{ route('titleg.edit',$item->titlegenre_id) }}"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i></a>
                          </button>
                          @csrf
                          @method('DELETE')
                          <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" onclick="return confirm('Yakin akan menghapus data?')">
                            <i class="material-icons">close</i>
                          </button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                {!! $titleg->links() !!}
              </div>
            </div>
          </div>
          <a href="{{ route('titleg.create') }}"><button type="button" class="btn btn-info">Tambah</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
