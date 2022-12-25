@extends('layouts.dashboard')
@section('content')
<div class="my-3">
    <h1 class="h3 h3 d-inline align-middle pl-3">
        Event List
    </h1>
</div>
<div class="response">
    @if (session('status'))
    <div class="alert alert-success mx-3">
        {{ session('status') }}
    </div>
    @endif
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div id="datatables-reponsive_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="datatables-reponsive_info">
                            <thead>
                                <tr>
                                    <th style="width:5%;">SN.</th>
                                    <th style="width:25%;">Title</th>
                                    <th style="width:25%">Description</th>
                                    <th style="width:25%">Start Date</th>
                                    <th style="width:25%">End Date</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontents">
                                @foreach($events as $event)
                                <tr class="row1">
                                    <td class="sn">{!!$loop->iteration!!}</td>
                                    <td>{!!$event->title!!}</td>
                                    <td>{!!$event->description!!}</td>
                                    <td>{!!$event->start_date!!}</td>
                                    <td>{!!$event->end_date!!}</td>
                                    <td class="table-action">
                                        <a href="{{route('event.edit', $event->id)}}"><i class="text-dark align-middle me-2 fa-solid fa-pen-to-square"></i> </a>
                                        <a href="javascript:void(0);" class="remove-event" data-id="<?php echo $event->id; ?>"><i class="text-dark align-middle me-2 fa-solid fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection