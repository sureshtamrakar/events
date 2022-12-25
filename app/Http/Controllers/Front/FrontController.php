<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        if (isset($_GET['orderby'])) {
            switch ($_GET['orderby']) {
                case 'finished-events':
                    $events = Event::where('end_date', '<', date('Y-m-d'))->orderBy('start_date')->paginate(10);
                    $sort = 'finished-events';
                    break;
                case 'upcoming-events':
                    $events = Event::where('start_date', '>', date('Y-m-d'))->orderBy('start_date')->paginate(10);
                    $sort = 'upcoming-events';
                    break;
                case 'upcoming-events-7-days':
                    $date = Carbon::now()->addDays(7);
                    $events = Event::whereBetween('start_date', [date('Y-m-d'), $date])->orderBy('start_date')->paginate(10);
                    $sort = 'upcoming-events-7-days';
                    break;
                case 'finshed-events-7-days':
                    $date = Carbon::now()->subDays(7);
                    $events = Event::whereBetween('end_date', [$date, date('Y-m-d')])->orderBy('start_date')->paginate(10);
                    $sort = 'finshed-events-7-days';
                    break;
                default:
                    $events = Event::where('start_date', '>', date('Y-m-d'))->orderBy('start_date')->paginate(10);
                    $sort = "";
            }
            return view('front.home', ['events' => $events, 'sort' => $sort]);
        } else {
            $events = Event::where('start_date', '>', date('Y-m-d'))->orderBy('start_date')->paginate(10);
            $sort = "";
            return view('front.home', ['events' => $events, 'sort' => $sort]);
        }
    }
}
