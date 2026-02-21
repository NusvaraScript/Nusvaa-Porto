@extends('layout.user')
@section('title', 'Home')
@section('content')
<section class="text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-hero title="Halo, Saya Nusvara">
            <p>Saya membangun sebuah aplikasi web dan dapat membuat model prediksi sederhana yang akurat.</p>
            <div class="flex space-x-4 items-center mt-4">
                <x-button route="{{ route('projects') }}" variant="solid" text="Project Saya"></x-button>
                <x-button route="{{ route('contact') }}" variant="outline" text="Hubungi Saya"></x-button>
            </div>
        </x-hero>
        <x-section section="About Me"
            title="Saya adalah sebuah web developer dan memiliki sedikit pengalaman di bidang machine learning"
            description="Lorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet consectetur adipisicing elit.">
            <div class="flex space-x-4 items-center">
                <x-button variant="outline" text="PHP"></x-button>
                <x-button variant='outline' text='Python'></x-button>
                <x-button variant="outline" text="Java"></x-button>
                <x-button variant="outline" text="JavaScript"></x-button>
                <x-button variant="outline" text="HTML"></x-button>
                <x-button variant="outline" text="CSS"></x-button>
            </div>
        </x-section>
        <x-section class="text-center" section="skills" title="Tech yang saya kuasasi"
            description="Tools dan teknolosi yang saya gunakan pada project saya.">

        </x-section>
    </div>
</section>
@endsection
