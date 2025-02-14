@php
$about = get_sections_data('ABOUT');
@endphp
<x-layout>
  <div class="p-6 md:p-10 font-poppins text-blue-900" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );">
    <img src="{{ Storage::url($about->image) }}" alt="Foto Saya" 
     class="w-full h-96 object-cover rounded-lg" 
     loading="lazy"
     srcset="{{ Storage::url($about->image) }} 1x, {{ Storage::url($about->image) }} 2x">

    <p class="text-4xl font-bold mt-4">{{ $about->name }}</p>
    <p class="text-xl font-bold mt-1">{{ $about->skill }}</p>
    <hr class="border-t-1 border-blue-900 w-full mt-2">
    <p class="text-lg mt-3 leading-relaxed text-justify">{!! $about->about !!}</p>
    <hr class="border-t-1 border-blue-900 w-full mt-3">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
      <div>
        <ul class="list-none space-y-2">
          <li><strong>Nama:</strong> Renaldi</li>
          <li><strong>Tempat Lahir:</strong> Bekasi</li>
          <li><strong>Tanggal Lahir:</strong> 24 April 2002</li>
          <li><strong>Universitas:</strong> Bina Sarana Informatika</li>
        </ul>
      </div>
      
      <div>
        <ul class="list-none space-y-2">
          <li><strong>Jurusan:</strong> Informatika</li>
          <li><strong>Minat:</strong> Teknologi</li>
          <li><strong>Email:</strong> renaldi240402@gmail.com</li>
          <li><strong>Telepon:</strong> 088213351902</li>
        </ul>
      </div>
    </div>
  </div>
</x-layout>
