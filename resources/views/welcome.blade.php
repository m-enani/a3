@extends('layouts.master')

@section('title')
    Lunch Out
@endsection

@push('head')
    <link href='css/main.css' rel='stylesheet'>
@endpush

@section('content')

    <form  method='GET' action='/search'>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
            <label for="cusinieType">Cuisine:</label>
                <select name="cuisineType" class="form-control" id="cusinieType">
                <option @if(old('cuisineType') == 'Any') selected @endif>Any</option>
                <option @if(old('cuisineType') == 'Chinese') selected @endif>Chinese</option>
                <option @if(old('cuisineType') == 'American') selected @endif>American</option>
                <option @if(old('cuisineType') == 'Indian') selected @endif>Indian</option>
                <option @if(old('cuisineType') == 'Japanese') selected @endif>Japanese</option>
                <option @if(old('cuisineType') == 'Mediterranean') selected @endif>Mediterranean</option>
                <option @if(old('cuisineType') == 'Mexican') selected @endif>Mexican</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Budget(required):</label><br>
            <label class="radio-inline"><input type="radio" name="budget" value="high" @if(old('budget') == 'high') checked @endif>High</label>
            <label class="radio-inline"><input type="radio" name="budget" value="medium" @if(old('budget') == 'medium') checked @endif>Medium</label>
            <label class="radio-inline"><input type="radio" name="budget" value="low" @if(old('budget') == 'low') checked @endif>Low</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Dine in/Take out?(required)</label><br>
            <label class="radio-inline"><input type="radio" name="dineInOrOut" value='in' @if(old('dineInOrOut') == 'in') checked @endif>Dine-in</label>
            <label class="radio-inline"><input type="radio" name="dineInOrOut" value='out' @if(old('dineInOrOut') == 'out') checked @endif>Take-out</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <label for="usr">Maximum amount of time (mins) you are willing to wait (required): </label>
             <input type="text" class="form-control" name ="waitTime" id="usr" value='{{old('waitTime')}}'>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <br>
            <input type="submit" class="btn btn-primary btn-small">
            <a href="\" class="btn btn-warning">Clear</a>
        </div>
    </div>
    </form>

    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-12">
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection
