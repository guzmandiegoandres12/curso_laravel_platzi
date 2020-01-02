@extends('layouts.base')
@section('content')
    <section>
        <h1 class="text-center">Edit Report</h1>
    </section>
    <section class="my-5">
        <a href="http://localhost/proyecTLaravel/public/expense_reports" class="btn btn-outline-info">Go to Back</a>
    </section>
    <section>

        <form action="http://localhost/proyecTLaravel/public/expense_reports/{{$report->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="title" value={{$report->title}}>
              <small id="helpId" class="form-text text-muted">Text of title</small>
            </div>
        <button type="submit" class="btn btn-outline-primary">Create New Report</button>
        </form>

    </section>

@endsection
