@php
  $email = get_contact_value('_email');
  $WA = get_contact_value('_WA');
  $ig = get_contact_value('_instagram');
@endphp

<x-layout>


  <div class="flex flex-col items-center min-h-screen text-blue-900 justify-center" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );"> <!-- Untuk memusatkan konten di tengah halaman -->
      <div class="w-full max-w-4xl"> <!-- Mengatur lebar konten dan memposisikan di tengah -->
          <!-- Membuat grid dengan 2 kolom -->
          <div class="grid grid-cols-2 gap-8 mt-4 text-lg font-semibold">
              <!-- Kolom pertama (Nomor WhatsApp) -->
              <div class="flex justify-end">
                  <p>Nomor WhatsApp :</p>
              </div>
              <div class="flex justify-start">
                  <p>{{ $WA }}</p>
              </div>
              
              <!-- Kolom kedua (Email) -->
              <div class="flex justify-end">
                  <p>Email :</p>
              </div>
              <div class="flex justify-start">
                  <p>{{ $email }}</p>
              </div>

              <div class="flex justify-end">
                <p>Instagram :</p>
            </div>
            <div class="flex justify-start">
                <p>{{ $ig }}</p>
            </div>
          </div>
      </div>
  </div>

</x-layout>
