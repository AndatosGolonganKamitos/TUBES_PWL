@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Kelola Users</h1>

    <div class="mb-4">
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah User
        </button>
    </div>

    <div class="bg-white shadow rounded-lg p-4">
        <table class="w-full border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2">No</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Role</th>
                    <th class="p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="p-2">1</td>
                    <td class="p-2">Admin</td>
                    <td class="p-2">admin@gmail.com</td>
                    <td class="p-2">Admin</td>
                    <td class="p-2 space-x-2">
                        <button class="bg-yellow-400 hover:bg-yellow-500 px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>

                <tr class="text-center">
                    <td class="p-2">2</td>
                    <td class="p-2">User 1</td>
                    <td class="p-2">user@gmail.com</td>
                    <td class="p-2">User</td>
                    <td class="p-2 space-x-2">
                        <button class="bg-yellow-400 hover:bg-yellow-500 px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection