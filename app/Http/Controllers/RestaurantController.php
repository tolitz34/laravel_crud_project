<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\Category;


class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::active()
            ->withCount('menuItems')
            ->paginate(12);

        return view('restaurants.index', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        $restaurant->load(['menuItems' => function($query) {
            $query->available()->with('category');
        }]);

        $categories = Category::whereHas('menuItems', function($query) use ($restaurant) {
            $query->where('restaurant_id', $restaurant->id);
        })->get();

        return view('restaurants.show', compact('restaurant', 'categories'));
    }

}
