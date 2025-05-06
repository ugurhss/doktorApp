<div>
    <h2 class="text-2xl font-bold mb-4">News Form</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 p-2 rounded mb-4">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
        <input type="text" wire:model="title" placeholder="Title" class="border p-2 w-full mb-2">
        <textarea wire:model="details" placeholder="Details" class="border p-2 w-full mb-2"></textarea>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            {{ $updateMode ? 'Update' : 'Create' }}
        </button>
    </form>

    <hr class="my-4">

    <table class="w-full border mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Title</th>
                <th class="border px-4 py-2">Details</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsList as $news)
            <tr>
                <td class="border px-4 py-2">{{ $news->id }}</td>
                <td class="border px-4 py-2">{{ $news->title }}</td>
                <td class="border px-4 py-2">{{ $news->details }}</td>
                <td class="border px-4 py-2">
                    <button wire:click="edit({{ $news->id }})" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                    <button wire:click="delete({{ $news->id }})" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
