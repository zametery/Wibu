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
              <h4 class="card-title ">Carousel Table</h4>
              <p class="card-category"> Carousel Tag Title</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Image
                    </th>
                    <th>
                      Title
                    </th>
                    <th>
                      Text
                    </th>
                    <th>
                      Link
                    </th>
                    <th>
                      Created at
                    </th>
                    <th>
                      Updated at
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
                      @foreach ($carousel as $item)
                      <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            <img class="img img-raised" src="{{ asset('images/'.$item->image)  }}" width="300px" height="200px"/>
                        </td>
                        <td>
                            {{$item->title}}
                        </td>
                        <td>
                            {{$item->text}}
                        </td>
                        <td>
                            {{$item->link}}
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                        <td>
                            {{$item->updated_at}}
                        </td>
                        <!--<td>
                            {{$item->created_at}}
                        </td>
                        <td>
                            {{$item->updated_at}}
                        </td>-->
                        <td class="td-actions text-right">
                        <form action="{{ route('carousel.destroy',$item->id) }}" method="POST">
                          <a href="{{ route('carousel.edit',$item->id) }}"><button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
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
                {!! $carousel->links() !!}
              </div>
            </div>
          </div>
          <a href="{{ route('carousel.create') }}"><button type="button" class="btn btn-info">Tambah</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
