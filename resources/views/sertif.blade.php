@php
   $sertifs = get_sertifs_data(); // Mendapatkan data sertifikat dari database
@endphp

<x-layout>
  <div class="flex justify-center" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );">
      <!-- Konten Sertifikat -->
      <div class="w-3/4 p-4">
          <div class="grid grid-cols-2 gap-4">
              @foreach ($sertifs as $sertif)
                  <div class="bg-blue-900 p-4 rounded-lg shadow-lg text-white">
                      <img data-aos="zoom-in" src="{{ Storage::url($sertif->imagesertif) }}" alt="{{ $sertif->name }}" 
                          class="w-full h-40 object-cover rounded-lg cursor-pointer hover:opacity-75"
                          onclick="openModal(this, '{{ $sertif->name }}', '{{ $sertif->description }}')">
                      <h3 class="mt-2 text-lg font-semibold">{{ $sertif->name }}</h3>
                      <p class="text-sm text-gray-400">{{ $sertif->description }}</p>
                  </div>
              @endforeach
          </div>
      </div>
  </div>

  <!-- Modal -->
  <!-- Modal -->
  <div id="imageModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden" onclick="closeModal()">
    <div class="relative">
        <span class="absolute top-2 right-2 bg-white text-black p-2 rounded-full cursor-pointer" onclick="closeModal()">&#10005;</span>
        <img id="modalImage" class="max-w-screen-md max-h-screen-md rounded-lg" onclick="event.stopPropagation()">
    </div>
</div>

<!-- JavaScript untuk modal -->
<script>
    function openModal(imgElement) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imgElement.src;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>
</x-layout>
