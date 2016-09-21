@extends('layout.admin.index')

@section('content')
    @foreach($articles as $article)
        <li>Name : {{$article->title}} | Author : {{$article->author}}</li>
    @endforeach
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Table design <small>Custom design</small></h2>
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

            <div class="x_content" style="display: block;">

                <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th>
                                    <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                </th>
                                <th class="column-title" style="display: table-cell;">ID </th>
                                <th class="column-title" style="display: table-cell;">Title </th>
                                <th class="column-title" style="display: table-cell;">Author </th>
                                <th class="column-title" style="display: table-cell;">Status </th>
                                <th class="column-title" style="display: table-cell;">Created Date </th>
                                <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                                </th>
                                <th class="bulk-actions" colspan="7" style="display: none;">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($articles as $article)
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                                        </div>
                                    </td>
                                    <td class=" ">121000040</td>
                                    <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$7.45</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 @endsection