@extends('layouts.lk')

@section('content')
    <div class="card-lk">
        <div class="card-lk__header">
            <h3 class="card-lk__title">Уведомления ({{ count($notifications) }})</h3>
        </div>
        @if($notifications != [])
        <div class="card-lk__body card-lk-notifications">
            @foreach($notifications as $notification)
            <div class="card-lk-notification">
                <div class="card-lk-notification__header">
                    <div class="card-lk-notification__title">{{ $notification->data['status'] }}</div>
                    <div class="card-lk-notification__date">{{ $notification->created_at->format('d.m.Y') }}</div>
                </div>
                <div class="card-lk-notification__body">
                    <div class="card-lk-notification__descr">{{ $notification->data['notice'] }}
                        @if(isset($notification->data['noticeSecond']))
                            {{ $notification->data['noticeSecond'] }}
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
@endsection
