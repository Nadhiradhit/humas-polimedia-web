@extends('components.layouts.admin-layout')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="flex flex-col">
        <div class="lg:w-[40rem] p-4 rounded-xl bg-primary">
            <h1 class="text-4xl font-bold">
                Halo, <span class="font-light"> {{Auth::user()->name}} </span>
            </h1>
        </div>
    </div>
@endsection
