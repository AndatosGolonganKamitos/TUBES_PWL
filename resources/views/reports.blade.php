@extends('layouts.app')

@section('title', 'Reports')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Reports</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <p class="text-gray-700 mb-4">
            Ini adalah halaman laporan.
        </p>

        
        <table class="w-full border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2">No</th>
                    <th class="p-2">Nama Barang</th>
                    <th class="p-2">kode barang</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="p-2">1</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">2026-04-04</td>
                </tr>
            </tbody>
            <tbody>
                <tr class="text-center">
                    <td class="p-2">2</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">2026-04-04</td>
                </tr>
            </tbody>
            <tbody>
                <tr class="text-center">
                    <td class="p-2">3</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">Contoh Data</td>
                    <td class="p-2">2026-04-04</td>
                </tr>
            </tbody>
        </table>
        <div class="inline-flex rounded-base shadow-xs -space-x-px" role="group ">
<button type="button" class="inline-flex items-center text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-3 focus:ring-neutral-tertiary-soft font-medium leading-5 rounded-s-base text-sm px-3 py-2 focus:outline-none">
<svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/></svg>
Download
</button>
<button type="button" class="text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-3 focus:ring-neutral-tertiary-soft font-medium leading-5 rounded-e-base text-sm px-3 py-2 focus:outline-none" disabled>
456k
</button>
</div>  
    </div>
</div>
@endsection