@php
   $skills = get_skills_data();
@endphp
<x-layout>
  <div class="min-h-screen flex items-center justify-center text-blue-900"
       style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );">
    <div class="max-w-4xl w-full mx-auto mt-8">
      <div class="grid grid-cols-2 gap-6">
          @foreach($skills as $skill)
          <div class="mb-4">
              <p class="font-semibold text-lg">{{ $skill->skills }}</p>
              <div class="w-full h-4 bg-gray-200 rounded-full">
                  @php
                      $colorClass = $skill->percentage >= 80 ? 'bg-green-500' : ($skill->percentage >= 50 ? 'bg-yellow-500' : 'bg-red-500');
                  @endphp
                  <div class="{{ $colorClass }} h-full rounded-full progress-bar" data-percentage="{{ $skill->percentage }}"></div>
              </div>
              <span class="text-sm">{{ $skill->percentage }}%</span>
          </div>
          @endforeach
      </div>
    </div>
  </div>

  <script>
document.addEventListener("DOMContentLoaded", function() {
  // Set waktu transisi dalam milidetik
  const duration = 1000;
  const intervalTime = 5000;

  // Ambil semua elemen progress bar dengan kelas 'progress-bar'
  const progressBars = document.querySelectorAll('.progress-bar');

  function resetBars() {
    // Reset setiap progress bar ke 0%
    progressBars.forEach(bar => {
      bar.style.transition = 'none'; // Hapus transisi sementara
      bar.style.width = '0%'; // Reset ke 0%
    });
  }

  function animateBars() {
    // Setelah reset, tambahkan transisi dan set lebar berdasarkan data-percentage
    setTimeout(() => {
      progressBars.forEach(bar => {
        const percentage = bar.getAttribute('data-percentage'); // Ambil nilai persentase dari data-percentage
        bar.style.transition = `width ${duration}ms ease-in-out`;
        bar.style.width = `${percentage}%`; // Set width sesuai persentase
      });
    }, 100); // Delay sedikit agar reset terlihat
  }

  // Jalankan animasi saat halaman dimuat
  animateBars();

  // Atur interval untuk mereset dan memulai ulang animasi setiap 5 detik
  setInterval(() => {
    resetBars(); // Reset ke 0%

    // Tunggu sedikit sebelum memulai ulang animasi agar reset terlihat
    setTimeout(() => {
      animateBars();
    }, 100); // Delay 100ms agar reset terlihat
  }, intervalTime); // Ulang setiap 5 detik
});

  </script>
  

</x-layout>
