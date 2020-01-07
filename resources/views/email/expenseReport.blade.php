<section>
    <div>
    <h1>Expense report {{$report->id}}: {{$report->title}}</h1>
    </div>
</section>
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
            @foreach ($report->expenses as $item)

             <tr>
                 <td>{{$item->description}}</td>
                 <td>{{$item->created_at}}</td>
                 <td>{{$item->amount}}</td>
             </tr>

            @endforeach

        </tbody>
    </table>
</section>
