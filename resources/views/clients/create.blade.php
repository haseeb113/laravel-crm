<x-app-layout>
  <x-slot name="header"><h2 class="font-semibold text-xl">Add Client</h2></x-slot>
  <div class="max-w-xl mx-auto py-6 px-4">
    <form method="POST" action="{{ route('clients.store') }}">
      @csrf
      <div class="mb-4">
        <label>Name</label>
        <input type="text" name="name" class="w-full border rounded p-2" required>
      </div>
      <div class="mb-4">
        <label>Email</label>
        <input type="email" name="email" class="w-full border rounded p-2" required>
      </div>
      <div class="mb-4">
        <label>Phone</label>
        <input type="text" name="phone" class="w-full border rounded p-2">
      </div>
      <div class="mb-4">
        <label>Birthday</label>
        <input type="date" name="birthday" class="w-full border rounded p-2" required>
      </div>
      <div class="mb-4">
        <label>Notes</label>
        <textarea name="notes" class="w-full border rounded p-2"></textarea>
      </div>
      <button class="bg-blue-600 text-white px-4 py-2 rounded">Save Client</button>
    </form>
  </div>
</x-app-layout>