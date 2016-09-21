@extends('layout.admin.index')

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>
    <table class="table table-bordered table-responsive">
        <tr class="bg-primary">
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{!! $customer->id !!}</td>
                <td>{!! $customer->name !!}</td>
                <td>{!! $customer->age !!}</td>
                <td>{!! $customer->phone !!}</td>
            </tr>
        @endforeach
    </table>
    {!! $customers->render() !!}
@endsection