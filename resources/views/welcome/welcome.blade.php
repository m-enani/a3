@extends('layouts.master')

@section('title')
    Lunch Out
@endsection

@push('head')
    <link href='css/main.css' rel='stylesheet'>
@endpush

@section('content')
    <form  method='GET' action='index.php'>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
            <label for="cusinieType">Cuisine:</label>
                <select name="cuisineType" class="form-control" id="cusinieType">
                <option value="any">Any</option>
                <option value="american">American</option>
                <option value="chinese">Chinese</option>
                <option value="indian">Indian</option>
                <option value="japanese">Japanese</option>
                <option value="mediterranean">Mediterranean</option>
                <option value="mexican">Mexican</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Budget:</label><br>
            <label class="radio-inline"><input type="radio" name="budget" value="high">High</label>
            <label class="radio-inline"><input type="radio" name="budget" value="medium">Medium</label>
            <label class="radio-inline"><input type="radio" name="budget" value="low">Low</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Dine in/Take out?</label><br>
            <label class="radio-inline"><input type="radio" name="optinout" value="in">Dine-in</label>
            <label class="radio-inline"><input type="radio" name="optinout" value="out">Take-out</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <label for="usr">Maximum amount of time you are will to wait (mins): </label>
             <input type="text" class="form-control" name ="waitTime" id="usr">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <br>
            <input type="submit" class="btn btn-primary btn-small">
            <a href="index.php" class="btn btn-warning">Clear</a>
        </div>
    </div>
    </form>
@endsection
