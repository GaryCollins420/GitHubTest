@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Datum</th>
                                    <th>Naam</th>
                                    <th>Product</th>
                                    <th>Specificatie</th>
                                    <th>Verwijderen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invoices as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->date}}</td>
                                        <td>{{$row->street}}</td>
                                        <td>{{$row->product}}</td>
                                        <td><a href="/invoice/{{ $row->id }}">Details</a></td>
                                        <td>
                                            <form method="POST" action="{{ route('invoicedestroy', [$row->id]) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button
                                                        @php
                                                        $expirationDate = new \DateTime();
                                                        $expirationDate->sub(new \DateInterval("P7Y"));
                                                        $invoiceDate = \DateTime::createFromFormat("Y-m-d", $row->date);

                                                        if ($expirationDate < $invoiceDate) {
                                                            echo "disabled";
                                                        }
                                                        @endphp
                                                        type="submit" class="btn btn-danger" onclick="return confirm('Weet je zeker dat je deze factuur wilt verwijderen?')">Verwijder</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
