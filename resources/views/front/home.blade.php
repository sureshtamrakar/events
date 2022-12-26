@extends('layouts.front')
@section('content')
<section class="content">
    <div class="container">
        <div class="mb-3">
            <form id="filter-event" action="{{route('front.event')}}" class="float-right" method="get">
                <select name="orderby" class="orderby">
                    <option @if($sort=="" ) selected="selected" @endif>Select</option>
                    <option value="finished-events" @if($sort=='finished-events' ) selected="selected" @endif>Finished Events</option>
                    <option value="upcoming-events" @if($sort=='upcoming-events' ) selected="selected" @endif>Upcoming Events</option>
                    <option value="upcoming-events-7-days" @if($sort=='upcoming-events-7-days' ) selected="selected" @endif>Upcoming Events Within 7 Days</option>
                    <option value="finshed-events-7-days" @if($sort=='finshed-events-7-days' ) selected="selected" @endif>Finished Events Of The Last 7 Days</option>
                </select>
            </form>
            <h3>Event List</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <tr>
                                <th style="width:25%;">SN.</th>
                                <th style="width:25%;">Title</th>
                                <th style="width:25%">Description</th>
                                <th style="width:25%">Start Date</th>
                                <th style="width:25%">End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($events->isEmpty())
                            <tr class="row1 text-center">
                                <td colspan="5"> No Event Found</td>
                            </tr>
                            @else
                            @foreach($events as $event)
                            <tr class="row1">
                                <td>{!!$loop->iteration!!}</td>
                                <td>{!!$event->title!!}</td>
                                <td>{!!$event->description!!}</td>
                                <td>{!!$event->start_date!!}</td>
                                <td>{!!$event->end_date!!}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {!! $events->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection