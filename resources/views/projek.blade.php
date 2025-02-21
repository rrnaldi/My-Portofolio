@php
   $projeks = get_projeks_data(); 
@endphp

<x-layout>
    <div class="min-h-screen flex justify-center p-4" 
         style="background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5%);">
        <div class="grid md:grid-cols-4 sm:grid-cols-1 gap-4 w-full">
            <!-- Sidebar: List Proyek -->
            <div class="p-4 mt-2 rounded-lg sm:hidden md:block">
                <ul>
                    @foreach ($projeks as $projek)
                        <li class="mb-2 p-2 bg-blue-900 rounded-lg hover:bg-gray-700 cursor-pointer text-white font-bold"
                            onclick="showProject('{{ $projek->id }}', '{{ Storage::url($projek->imgprojek) }}', '{{ $projek->name }}', '{{ $projek->deskripsi }}')">
                            {{ $projek->name }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Detail Gambar Proyek -->
            <div class="col-span-3 p-6 rounded-lg text-center">
                <h1 id="project-name" class="text-2xl font-bold text-blue-900">Pilih Projek</h1>
                <p id="project-desc" class="text-blue-900 font-semibold">{{ $projek->deskripsi }}</p>
                <img id="project-image" src="{{ Storage::url($projek->imgprojek) }}" 
                     class="w-full sm:max-w-sm md:max-w-2xl lg:max-w-4xl mx-auto rounded-lg shadow-lg mt-4 object-cover">
            </div>
        </div>
    </div>

    <script>
        function showProject(id, imageUrl, name, deskripsi) {
            document.getElementById('project-name').innerText = name;
            document.getElementById('project-desc').innerText = deskripsi;
            document.getElementById('project-image').src = imageUrl;
        }
    </script>
</x-layout>

