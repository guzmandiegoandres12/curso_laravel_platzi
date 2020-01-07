@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center">Report Detail {{$reportData->title}}</h1>
    </section>
    <section class="my-5">
        <a href="/expense_reports" class="btn btn-outline-info">Go to Back</a>

    </section>
        <section class="my-5 text-center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Description</th>
                        <th>Creation</th>
                        <th>Anout</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reportDetails as $item)

                     <tr>
                         <td>{{$item->description}}</td>
                         <td>{{$item->created_at}}</td>
                         <td>{{$item->amount}}</td>
                     </tr>

                    @endforeach

                </tbody>
            </table>
        </section>
        <section class="my-5">
            <a href="/expense_reports/{{$reportData->id}}/expenses/create" class="btn btn-outline-info">New expense</a>
            <a href="/expense_reports/{{$reportData->id}}/confirmSendEmail" class="btn btn-outline-info">Send Email</a>
        </section>
    </section>

@endsection
