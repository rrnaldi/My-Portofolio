@php
  $email = get_contact_value('_email');
  $WA = get_contact_value('_WA');
  $ig = get_contact_value('_instagram');
@endphp

<x-layout>
    <div class=" min-h-screen flex items-center justify-center p-6"  style="background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5%);">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Information</h2>
                <div class="mb-2">
                    <p class="text-gray-700 font-semibold">Email:</p>
                    <p class="text-gray-600">{{ $email }}</p>
                </div>
                <div class="mb-2">
                    <p class="text-gray-700 font-semibold">WhatsApp:</p>
                    <p class="text-gray-600">{{ $WA }}</p>
                </div>
                <div class="mb-2">
                    <p class="text-gray-700 font-semibold">Instagram:</p>
                   <a href="{{ $ig }}">rnaldi24</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
