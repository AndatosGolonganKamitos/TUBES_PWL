@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Settings</h1>

    <div class="bg-white shadow rounded-lg p-6 space-y-6">

        <div>
            <h2 class="text-lg font-semibold mb-3">Profile</h2>
            <div class="grid grid-cols-2 gap-4">
                <input type="text" placeholder="Nama" class="border p-2 rounded w-full">
                <input type="email" placeholder="Email" class="border p-2 rounded w-full">
            </div>
        </div>

        <div>
            <h2 class="text-lg font-semibold mb-3">Password</h2>
            <div class="grid grid-cols-2 gap-4">
                <input type="password" placeholder="Password Baru" class="border p-2 rounded w-full">
                <input type="password" placeholder="Konfirmasi Password" class="border p-2 rounded w-full">
            </div>
        </div>

        <div class="text-right">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan Perubahan
            </button>
        </div>

    </div>
</div>
@endsection