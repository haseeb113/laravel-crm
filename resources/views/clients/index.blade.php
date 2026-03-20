<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl">Clients</h2>
  </x-slot>
  <div class="max-w-7xl mx-auto py-6 px-4">
    <a href="{{ route('clients.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Add Client</a>
    @if(session('success'))
      <p class="text-green-600 mt-2">{{ session('success') }}</p>
    @endif
    <table class="w-full mt-4 border-collapse">
      <thead>
        <tr class="bg-gray-100">
          <th class="p-2 text-left">Name</th>
          <th class="p-2 text-left">Email</th>
          <th class="p-2 text-left">Birthday</th>
          <th class="p-2 text-left">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clients as $client)
        <tr class="border-t">
          <td class="p-2">{{ $client->name }}</td>
          <td class="p-2">{{ $client->email }}</td>
          <td class="p-2">{{ $client->birthday->format('M d') }}</td>
          <td class="p-2">
            <a href="{{ route('clients.edit', $client) }}" class="text-blue-500">Edit</a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline">
              @csrf @method('DELETE')
              <button class="text-red-500 ml-2">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $clients->links() }}
  </div>
</x-app-layout>