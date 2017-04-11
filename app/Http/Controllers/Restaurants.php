<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Restaurants extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function search(Request $request) {

        # store search results
        $filteredRestaurants = [];

        # validate form options
        $this->validate($request, [
            'budget' => 'required',
            'dineInOrOut' => 'required',
            'waitTime' => 'required|numeric',
        ]);

        $restaurantsRawData = file_get_contents(database_path().'/restaurants.json');

        $restaurants = json_decode($restaurantsRawData, true);

        foreach($restaurants as $restaurant) {
            # filter if no cuisine type is selected
            if (strtolower($request->input('cuisineType')) == 'any' && $request->input('budget') == $restaurant['price']  && $request->input('dineInOrOut') == $restaurant['dining']  &&  $request->input('waitTime') >= $restaurant['wait_time']){
              $filteredRestaurants[] = $restaurant;
            }
            # filter on all forms
            else if (strtolower($request->input('cuisineType')) == $restaurant['type'] && $request->input('budget') == $restaurant['price'] &&  $request->input('dineInOrOut') == $restaurant['dining'] && $request->input('waitTime') >= $restaurant['wait_time']){
              $filteredRestaurants[] = $restaurant;
            }
         }

        # sort the array by restaurant name
        $filteredRestaurants = array_values(array_sort($filteredRestaurants, function ($value) {
            return $value['name'];
        }));

        # retain data on next view
        $request->flash();

        # return search results and counter(used for displaying option number) 
        return view('restaurants.search', [
            'filteredRestaurants' => $filteredRestaurants,
            'counter' => '1',
        ]);
    }
}
