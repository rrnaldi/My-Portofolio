@php
   $expers = get_expers_data();
@endphp
<x-layout>
  <x-slot:title>
    <h1 class="text-4xl font-bold text-center mt-1">{{ $title }}</h1>
  </x-slot:title>

<div class="min-h-screen flex items-center justify-center text-blue-900"  style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(147,230,241,1) 0%, rgba(145,192,241,1) 45.5% );">
  <div class="max-w-5xl mx-auto py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
        @foreach($expers as $exper)
        <!-- Timeline Block -->
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center">
                <div class="h-full w-1 bg-blue-900"></div>
            </div>
            <div class="ml-6 mb-8">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-900 w-4 h-4 rounded-full"></div>
                    <h3 class="ml-4 text-lg font-semibold">{{ date('M Y', strtotime($exper->start_date)) }} – {{ date('M Y', strtotime($exper->end_date)) }}</h3>
                </div>
                <h4 class="text-xl font-semibold">{{ $exper->company }}</h4>
                <ul class="list-disc list-inside mt-2">
                    @foreach(explode("\n", $exper->description) as $desc)
                        <li>{{ $desc }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

</x-layout>
