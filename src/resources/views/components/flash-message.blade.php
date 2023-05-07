@props(['status' => 'info'])

@php
if (session('status') === 'info') {
    $bgColor = 'bg-info';
}
if (session('status') === 'alert') {
    $bgColor = 'bg-danger';
}
@endphp

@if (session('message'))
    <div class="{{ $bgColor }} w-1/2 mx-auto p-2 my-4 text-white text-center">
        {{ session('message') }}
    </div>
@endif