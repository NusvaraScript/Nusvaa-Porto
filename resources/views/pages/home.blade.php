@extends('layout.user')
@section('title', 'Home')
@section('content')
<div class="text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-hero title="Halo, Saya Nusvara">
            <p>Saya membangun sebuah aplikasi web dan dapat membuat model prediksi sederhana yang akurat.</p>
            <div class="flex space-x-4 items-center mt-4">
                <x-button route="{{ route('projects') }}" variant="solid" text="Project Saya"></x-button>
                <x-button route="{{ route('contact') }}" variant="outline" text="Hubungi Saya"></x-button>
            </div>
        </x-hero>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center py-6">
            <div class="relative mx-auto">
                <img src="{{ asset('images/175510726.jpg') }}" alt="Nusvara"
                    class="w-auto h-auto object-cover rounded-3xl">
            </div>
            <x-section section="About Me" title="Saya sangat tertarik dengan perkembangan teknologi"
                description="Saya adalah seorang programmer yang mengulik dalam bidang web developer dan juga pada bidang machine learning. Saya adalah developer yang bertempat tinggal di Indonesia."
                description2="Diluar bidang teknologi saya memiliki hobi catur, dan kadang kadang juga mencoba gambar random.">
                <div class="flex space-x-4 items-center">
                    <x-button variant="outline" text="PHP"></x-button>
                    <x-button variant='outline' text='Python'></x-button>
                    <x-button variant="outline" text="Java"></x-button>
                    <x-button variant="outline" text="JavaScript"></x-button>
                    <x-button variant="outline" text="HTML"></x-button>
                    <x-button variant="outline" text="CSS"></x-button>
                </div>
            </x-section>
        </div>
        <x-section class="text-center" section="skills" title="Tech yang saya kuasasi"
            description="Tools dan teknolosi yang saya gunakan pada project saya.">
            <div class="flex flex-row flex-wrap justify-center">
                <x-card title="Laravel" description="Framework PHP untuk membuat aplikasi web."></x-card>
            </div>
        </x-section>
        <x-section section="projects" title="Beberapa projek saya">
            <x-button route="{{ route('projects') }}" variant="outline" text="Lihat Semua"></x-button>
            <div class="flex flex-row flex-wrap justify-center">
            </div>
        </x-section>

        <x-cta></x-cta>
    </div>
</div>
@endsection
