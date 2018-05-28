@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Factuur aanmaken</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                <label for="company_name" class="col-md-4 control-label">Bedrijfsnaam</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name"
                                           value="{{ old('company_name') }}" required autofocus>

                                    @if ($errors->has('company_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                <label for="company_name" class="col-md-4 control-label">Bedrijfsnaam</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name"
                                           value="{{ old('company_name') }}" required autofocus>

                                    @if ($errors->has('company_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('street') || $errors->has('street') ? ' has-error' : '' }}">
                                <label for="street" class="col-md-4 control-label">Straat</label>

                                <div class="col-md-3">
                                    <input id="street" type="text" class="form-control" name="street"
                                           value="{{ old('street') }}" required>

                                    @if ($errors->has('street'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="house_number" class="col-md-1 control-label">Huisnummer</label>

                                <div class="col-md-3">
                                    <input id="house_number" type="text" class="form-control" name="house_number"
                                           value="{{ old('house_number') }}" required>

                                    @if ($errors->has('house_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('house_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('zipcode') || $errors->has('zipcode') ? ' has-error' : '' }}">
                                <label for="zipcode" class="col-md-4 control-label">Postcode</label>

                                <div class="col-md-3">
                                    <input id="zipcode" type="text" class="form-control" name="zipcode"
                                           value="{{ old('zipcode') }}" required>

                                    @if ($errors->has('zipcode'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="city" class="col-md-1 control-label">Stad</label>

                                <div class="col-md-3">
                                    <input id="city" type="text" class="form-control" name="city"
                                           value="{{ old('city') }}" required>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('tax_number') ? ' has-error' : '' }}">
                                <label for="tax_number" class="col-md-4 control-label">BTW nummer</label>

                                <div class="col-md-6">
                                    <input id="tax_number" type="text" class="form-control" name="tax_number"
                                           value="{{ old('tax_number') }}" required autofocus>

                                    @if ($errors->has('tax_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tax_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('kvk_number') ? ' has-error' : '' }}">
                                <label for="kvk_number" class="col-md-4 control-label">KVK nummer</label>

                                <div class="col-md-6">
                                    <input id="kvk_number" type="text" class="form-control" name="kvk_number"
                                           value="{{ old('kvk_number') }}" required autofocus>

                                    @if ($errors->has('kvk_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('kvk_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-4 control-label">Datum</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date"
                                           value="{{ old('date') }}" required autofocus>

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('product_id') ? ' has-error' : '' }}">
                                <label for="company_name" class="col-md-4 control-label">Product</label>

                                <div class="col-md-6">
                                        <select name="product_id">
                                            @foreach($products as $name => $id)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>

                                    @if ($errors->has('product_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('product_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Aantal</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount"
                                           value="{{ old('amount') }}" required autofocus>

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Prijs</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="company_name"
                                           value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Factuur aanmaken
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
