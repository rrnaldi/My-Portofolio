@php
$home = get_sections_data('HOME');
@endphp

<x-layout :title="null">
    <div class="w-full h-screen flex flex-col items-center justify-center text-blue-900 font-poppins" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );">
        <p data-aos="fade-up" data-aos-delay="500" class="text-7xl font-bold">MY PORTOFOLIO</p>
        <p data-aos="fade-up" data-aos-delay="700" class="text-xl mt-4">Temukan pengalaman & karya saya di sini</p>
    </div>
</x-layout>