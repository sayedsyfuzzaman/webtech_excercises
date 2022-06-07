<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function all_news(){

        $all_news = array();

        for($i=0; $i<5; $i++){

            $news = array(
                "category" => "Sports",
                "title" => "Taijul’s sights on the extraordinary",
                "date" => "12 NOV 22",
                "content" => "The Daily Star (DS): Another away tour is approaching. How’s your preparation for the West Indies series?",
                "thumbnail" => "https://images.thedailystar.net/sites/default/files/styles/big_201/public/images/2022/06/07/taijul_latest.jpg"
            );
            $all_news[] = (object) $news;
        }

        // $news = array(
        //     "category" => "Sports",
        //     "title" => "Taijul’s sights on the extraordinary",
        //     "date" => "12 NOV 22",
        //     "content" => "The Daily Star (DS): Another away tour is approaching. How’s your preparation for the West Indies series?",
        //     "thumbnail" => "https://images.thedailystar.net/sites/default/files/styles/big_201/public/images/2022/06/07/taijul_latest.jpg"
        // );
        // $all_news[] = (object) $news;

        // $news = array(
        //     "category" => "Cricket",
        //     "title" => "Women's cricket booms in Brazil",
        //     "date" => "12 NOV 22",
        //     "content" => "On a concrete playground in a poor hillside neighborhood in Brazil, ecstatic children are chasing a ball at top speed.",
        //     "thumbnail" => "https://images.thedailystar.net/sites/default/files/styles/big_202/public/images/2022/06/07/women_cricket_brazil_1.jpg"
        // );
        // $all_news[] = (object) $news;

        return view('news')->with("all_news", $all_news);
    }
}
