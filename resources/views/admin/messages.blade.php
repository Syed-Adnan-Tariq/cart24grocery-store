@extends('admin.master.master')

@section('title')
    Message
@endsection

@section('content')

    <div class="container">
        <h2>{{$type}} messages</h2>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>Sr.#</th>
                <th>Customer</th>
                <th>Message</th>
                <th>date and time</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php $count=0;?>
            @foreach($feedbacks as $feedback)

            <tr>
                <td>{{$count}}</td>
                <td>{{$feedback->name}}</td>
                <td>{{$feedback->message}}</td>
                <td>{{$feedback->created_at}}</td>
                <td>{{$feedback->email}}</td>

            </tr>
               <?php $count++;?>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection