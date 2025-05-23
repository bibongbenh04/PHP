@extends('users.admin.layouts.master')
@section('content')
    <div class="profile">
        <div class="profile-body">
            <div class="profile-container">
                @if(isset($timeschedule) && $timeschedule)
                <h1>Doctors in this time schedule</h1>
                <ul>
                    @foreach($timeschedule->doctors as $doc)
                        <li>{{$doc->first_name}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

    </div>
@endsection
