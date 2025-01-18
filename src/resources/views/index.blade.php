@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="attendance__alert">
    <p>{{ Auth::user()->name }}さんお疲れ様です！</p>
</div>

<div class="attendance__content">
    <div class="attendance__panel">
        <form action="/work-start" method="post" class="attendance__button">
            @csrf
            <button class="attendance__button-submit" type="submit" name="work_start">勤務開始</button>
        </form>
        <form action="/work-end" method="post" class="attendance__button">
            @csrf
            <button class="attendance__button-submit" type="submit" name="work_end">勤務終了</button>
        </form>
    </div>

    <div class="break__panel">
        <form action="/rest-start" method="post" class="break__button">
            @csrf
            <button class="break__button-submit" type="submit" name="rest_start">休憩開始</button>
        </form>
        <form action="/rest-end" method="post" class="break__button">
            @csrf
            <button class="break__button-submit" type="submit" name="rest_end">休憩終了</button>
        </form>
    </div>

</div>
@endsection