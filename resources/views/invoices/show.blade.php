@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Factuur {{ date('d-m-Y', strtotime($invoice->date)) }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row" style="margin-top: 30px">
                            <div class="col-md-6">
                                [LOGO]
                            </div>
                            <div class="col-md-6">
                                <ul style="list-style: none; padding-left: 0;">
                                    <li>Soliz"Facturen"</li>
                                    <li>Straatnaam 50</li>
                                    <li>1111 XX Amsterdam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                &nbsp
                            </div>
                            <div class="col-md-6">
                                <ul style="list-style: none; padding-left: 0;">
                                    <li>KVK: 1111111</li>
                                    <li>BTW: NL001234567B01</li>
                                    <li>Bank: NL91ABNA0417164300</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul style="list-style: none; padding-left: 0;">
                                    <li>{{ $invoice->company_name }}</li>
                                    <li>{{ $invoice->street }} </li>
                                    <li>{{ $invoice->zipcode }} </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Factuur</h4><!--dynamic-->
                                <p>Factuurnummer: {{ $invoice->invoice_number }}</p>
                            </div>
                            <div class="col-md-6">
                                <table style="margin-top: 7px">
                                    <tr>
                                        <td>Factuurdatum: </td>
                                        <td>{{ date('d-m-Y', strtotime($invoice->date)) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Vervaldatum:</td>
                                        <td>{{ (((new DateTime())->setTimestamp(strtotime($invoice->date)))->add(new DateInterval("P31D")))->format("d-m-Y") }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <table style="width: 100%; margin: 30px 15px 50px 15px">
                                <tr>
                                    <th style="border-bottom: 1px solid black;">Omschrijving</th>
                                    <th style="border-bottom: 1px solid black;">Bedrag</th>
                                    <th style="border-bottom: 1px solid black;">Totaal</th>
                                    <th style="border-bottom: 1px solid black;">BTW</th>
                                </tr>
                                <tr>
                                    <td style="border-bottom: 1px solid black;">Random stuff
                                    <td style="border-bottom: 1px solid black;">€ {{ $invoice->price }}</td>
                                    <td style="border-bottom: 1px solid black;">€ {{ $invoice->price * $invoice->amount }}</td>
                                    <td style="border-bottom: 1px solid black;">{{ $invoice->tax_percentage }}%</td>
                                </tr>
                                <tr>
                                    <td></td><!--dynamic-->
                                    <td style="border-bottom: 1px solid black;">Subtotaal</td><!--dynamic-->
                                    <td style="border-bottom: 1px solid black;">€ {{ $invoice->price * $invoice->amount }}</td>
                                    <td></td><!--dynamic-->
                                </tr>
                                <tr>
                                    <td></td><!--dynamic-->
                                    <td style="border-bottom: 1px solid black;">{{ $invoice->tax_percentage }}% BTW</td><!--dynamic-->
                                    <td style="border-bottom: 1px solid black;">€ {{ $invoice->price * $invoice->amount / 100 * $invoice->tax_percentage }}</td
                                    <td></td><!--dynamic-->
                                </tr>
                                <tr><td></td></tr>
                                <tr>
                                    <td></td><!--dynamic-->
                                    <td style="border-top: 1px solid black;">Totaal</td><!--dynamic-->
                                    <td style="border-top: 1px solid black;">€ {{ $invoice->price * $invoice->amount / 100 * ($invoice->tax_percentage + 100) }}</td>
                                    <td></td><!--dynamic-->
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
