@extends('layouts.app')

@section('content')
<div class="p-user-index">

  @foreach($users as $user)
    <div class="tphoto">
      <img src="{{ $user->img_url }}" title="tphoto" alt="Tinder Photo" />
      <div class="tname">{{ $user->name }}</div>
    </div>

    <div class="tcontrols">
      <div class="container">
        <div class="row">
            <div class="col-md-6 mb-1">
                <div class="tno"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="tyes"><i class="fa fa-heart" aria-hidden="true"></i></div>
            </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
