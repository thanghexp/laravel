@extends('layout.admin.index')

@section('content')
    <div class="col-md-8 col-sm-8 col-xs-8">
        <div class="x_panel">
                <div class="x_title">
                    <h2>List Detail <small>Articles</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                        {!! Form::open() !!}
                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12">
                                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                <thead>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <tr role="row">
                                        <th>{!! Form::checkbox('id','0',FALSE, ['id' => 'id_all']) !!}</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 265px;">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 419px;">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 157px;">Author</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 201px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 113px;">Start Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 201px;">End date</th>

                                        <th style="width: 157px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                     @foreach($articles as $article)
                                         <tr role="row" class="even">
                                             <td>{!! Form::checkbox('ids[]', $article->id, FALSE, ['class' => 'check_dels']) !!}</td>
                                            <td class="sorting_1">{!! $article->id !!}</td>
                                            <td>{!! $article->title !!}</td>
                                            <td>{!! $article->author !!}</td>
                                            <td>{!! $article->status !!}</td>
                                            <td>{!! $article->created_at !!}</td>
                                            <td>{!! $article->updated_at !!}</td>
                                             <td>
                                                 <a href="#"><i class="fa fa-trash" style="font-size:20px"></i></a>
                                                <a href="#"><i class="fa fa-edit" style="font-size:20px"></i></a>
                                             </td>
                                        </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="pull-left">
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class="" ="modal" data-target="#myModal"> --}}
                            {{--Launch demo modal--}}
                        {{--</button>--}}
                        {!! Form::button('Delete', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#myModal']) !!}
                    </div>
                    <div class="pull-right">{!! $articles->render() !!}</div>
                </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <div class="x_panel">
            <div class="x_title">
                <h2>Default Example <small>Users</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirm</h4>
                </div>
                <div class="modal-body">
                    <p>Have you want realy delete ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="save">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- Choose checkbox to delete--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#id_all').click(function() {
                $('.check_dels').click();
            })

            var ids = [];
            var id;

            $('#save').click(function(){
                $('.check_dels:checked').each(function(key){
                    id = $(this).attr('value')
                    ids.push(id)
                })

                $.ajax({
                    url: '{{ URL::to('Admin/articles/delete') }}',
                    data: {'data': ids },
                    method: 'POST',
                    dataType: 'json',
                    success: function(){
                        //window.location.reload()
                    }
                })
            })




        });
    </script>
 @endsection