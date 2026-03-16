@extends('layout.user')
@section('title', 'Nusvaa - About')
@section('content')
<div class="text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sm text-blue-400 text-center"> -- Still Being Worked On -- </p>
        <x-hero title="Who am i?">
            <p>I dont know, i guess i am a web developer.</p>
        </x-hero>
        <x-section image="images/175510726.jpg" section="More About Me" title="Who am i? Really" description=""
            description2="">
        </x-section>
        <x-section class="text-center items-center" section="School Background" title="School I Attend To"
            description="" description2="">
        </x-section>
        <x-section image="images/175510726.jpg" section="Where I Come From" title="Who am i? Really" description=""
            description2="" :reverse="true">
        </x-section>
        <x-cta></x-cta>
    </div>
</div>
@endsection
