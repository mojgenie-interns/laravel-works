<x-layout>
    <x-slot:heading>Login</x-slot:heading>
        <form method="POST" action="/login">
          @csrf
          
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      {{-- <h2 class="text-base/7 font-semibold text-gray-900">Create A New Job</h2> --}}
      {{-- <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}

      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <x-form-field>
          <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input type="email" id="email" name="email" placeholder="" required/>
            <x-form-error name="email"/>
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="password">Password</x-form-label>
          <div class="mt-2">
            <x-form-input type="password" id="password" name="password" placeholder="" required/>
            <x-form-error name="password"/>
          </div>
        </x-form-field>

        {{-- <div class="col-span-full">
          <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
        </div> --}}
      </div>
      {{-- @if ($errors -> any())
        <ul>
          @foreach ($errors->all() as $error)
            <li class="text-red-500">{{$error}}</li>
          @endforeach
        </ul>
      @endif --}}
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <x-form-button>Login</x-form-button>
  </div>
</form>


</x-layout>
