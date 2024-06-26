@extends('layouts.admin-layout')
@section('title', 'Tenants')
@section('content')


<section class="mt-3 content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Filtrar: <input type="text" name="" id=""></h3>
                    </div>

                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example2_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Rendering engine: activate to sort column descending"
                                                    aria-sort="ascending">Cliente</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    CNPJ</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Cidade</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                   Contato</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tenants as $tenant)

                                            <tr>
                                                <td>{{$tenant->nome}}</td>
                                                <td>{{$tenant->cnpj_cpf}}</td>
                                                <td>{{$tenant->cidade->municipio}} - {{$tenant->cidade->UF}}</td>
                                                <td>{{$tenant->telefone}}</td>
                                                <td>
                                                    <a href="{{ route('tenant.edit', ['id' => $tenant->id]) }}"> <i class="nav-icon fas fa-pen"></i></a>
                                                </td>
                                            </tr>

                                            @endforeach

                                    </table>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12 col-md-7">

                                    {{ $tenants->links('pagination::bootstrap-4') }}
                                    {{-- <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="example2_previous"><a href="#" aria-controls="example2"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                    data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                    data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                    data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                    data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                    data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                                    aria-controls="example2" data-dt-idx="7" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>



@endsection


@section('js')
<script>
    $(function () {

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
