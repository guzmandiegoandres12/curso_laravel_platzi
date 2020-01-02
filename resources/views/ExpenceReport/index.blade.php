@extends('layouts.base')
@section('content')
    <section>
        <h1 class="text-center">Reports</h1>
    </section>
    <section class="my-5">
        <a href="./expense_reports/create" class="btn btn-outline-primary">Create New Report</a>
    </section>
    <section>
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th>titulo</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ExpenceReports as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td class="d-flex justify-content-center"><a href="./expense_reports/{{$item->id}}/edit" class="btn btn-outline-warning">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
