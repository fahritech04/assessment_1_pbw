{{-- 6706223009 - Muhammad Raihan Fahrifi --}}

<x-app-layout>
 <x-slot name="header">
     <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('Daftar Kendaraan') }}
     </h2>
 </x-slot>

 <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900 dark:text-gray-100">
                 <h2>{{ __("Daftar Koleksi Perpustakaan") }}</h2>
                 @if(count($vehicles) === 0)
                     <p>Data Kendaraan kosong.</p>
                 @else
                     <table class="table-auto w-full mt-4 border border-collapse">
                         <thead>
                             <tr>
                                 <th class="px-4 py-2 border">Nama Kendaraan</th>
                                 <th class="px-4 py-2 border">Type</th>
                                 <th class="px-4 py-2 border">License</th>
                                 <th class="px-4 py-2 border">Daily Price</th>
                                 <th class="px-4 py-2 border">Status</th>
                                 <th class="px-4 py-2 border">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             {{-- @php
                                 $jenisKoleksiLabels = [
                                     '1' => 'Buku',
                                     '2' => 'Majalah',
                                     '3' => 'Cakram Digital',
                                 ];
                             @endphp --}}
                             @foreach($vehicles as $vehicle)
                                 <tr>
                                     <td class="px-4 py-2 border">{{ $vehicle->name }}</td>
                                     <td class="px-4 py-2 border">{{ $vehicle->typeId }}</td>
                                     <td class="px-4 py-2 border">{{ $vehicle->license }}</td>
                                     <td class="px-4 py-2 border">{{ $vehicle->dailyPrice }}</td>
                                     <td class="px-4 py-2 border">{{ $vehicle->status }}</td>
                                     {{-- <td class="px-4 py-2 border">{{ $jenisKoleksiLabels[$collection->jenisKoleksi] }}</td> --}}
                                     {{-- <td class="px-4 py-2 border">{{ $vehicle->jumlahKoleksi }}</td> --}}
                                     <td class="px-4 py-2 border">
                                         {{-- <a href="{{ route('koleksi.infoKoleksi', $collection->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a> --}}
                                         {{-- <a href="{{ route('koleksi.update', $collection->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a> --}}
                                         
                                         {{-- <form action="{{ route('koleksi.update', $collection->id) }}" method="PUT" class="inline">
                                             @csrf
                                             <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                         </form> --}}
                                         {{-- <form action="{{ route('koleksi.destroy', $collection->id) }}" method="POST" class="inline">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                         </form> --}}
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 @endif
             </div>
         </div>

         <div class="flex items-center justify-end mt-4">
             <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                 {{-- <a href="{{ route('koleksi.registrasi') }}">Tambah Data</a> --}}
             </button>
         </div>
     </div>
 </div>
</x-app-layout>
