@php
$home = get_sections_data('HOME');
@endphp

<x-layout :title="null">
    <div class=" h-screen flex flex-col items-center justify-center text-blue-900 font-poppins" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );">
        <p data-aos="fade-up" data-aos-delay="500" class="text-4xl sm:text-6xl md:text-7xl font-bold text-center">MY PORTOFOLIO</p>
        <p data-aos="fade-up" data-aos-delay="700" class="text-sm sm:text-base md:text-lg lg:text-xl mt-4 text-center max-w-sm leading-relaxed">
            Temukan pengalaman & karya saya di sini
        </p>        
        
    </div>
</x-layout>