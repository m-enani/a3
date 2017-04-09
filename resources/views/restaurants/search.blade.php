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
                <select name="cuisineType" class="form-control" id="cusinieType" value='{{ $cusinieType or 'Any'}}'>
                <option>Any</option>
                <option>American</option>
                <option>Chinese</option>
                <option>Indian</option>
                <option>Japanese</option>
                <option>Mediterranean</option>
                <option>Mexican</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Budget:</label><br>
            <label class="radio-inline"><input type="radio" name="budget" value='{{$budget = 'high'}}'>High</label>
            <label class="radio-inline"><input type="radio" name="budget" value='{{$budget = 'medium'}}'>Medium</label>
            <label class="radio-inline"><input type="radio" name="budget" value='{{$budget = 'low'}}'>Low</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Dine in/Take out?</label><br>
            <label class="radio-inline"><input type="radio" name="optInOut" value='{{$optInOut = 'in'}}'>Dine-in</label>
            <label class="radio-inline"><input type="radio" name="optInOut" value='{{$optInOut = 'out'}}'>Take-out</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <label for="usr">Maximum amount of time you are will to wait (mins): </label>
             <input type="text" class="form-control" name ="waitTime" id="usr" value='{{$waitTime or ''}}'>
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

    @if(count($filteredRestaurants) == 0)
        No restaurants found
    @else
        @foreach($filteredRestaurants as $type => $restaurant)
        <div class='restaurant'>
          <br>
          <h2 class="lunchOptions">Option <?=$counter++?></h2>
            <h2><?=$restaurant['name']?></h2>

            <img src =<?=$restaurant['image']?> alt=<?=$restaurant['name']?>>

            <h4>Cuisine Type: <?=ucfirst($restaurant['type'])?></h4>

            <h4>Address: <a href="http://maps.google.com/?q=<?=$restaurant['address']?>"  target="_blank" ><?=$restaurant['address']?></a></h4>
        </div>
        @endforeach
    @endif


@endsection
