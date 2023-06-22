<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...your-integrity-hash-here..." crossorigin="anonymous" />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
    </head>

<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form>
        
        {{-- <!-- component -->
<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    @foreach ($chirps as $chirp)

    <!-- This is an example component -->
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 
    border rounded-lg bg-gradient-to-r from-blue-100 to-cyan-100">
        <div class="relative flex gap-4">
            <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" 
            class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" 
            alt="" loading="lazy">
            <div class=" flex flex-col w-full">
                <div class="flex flex-row justify-between">
                    <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">{{ $chirp->user->name }}</p>
                    <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                </div>
                <p class="text-gray-400 text-sm">{{ $chirp->created_at->format('j M Y, g:i a') }}</p>
            </div>
        </div>
        <p class="-mt-4 text-gray-500">{{ $chirp->message }}</p>
    </div>
    
    @endforeach
    
    </div> --}}

    <!-- This is an example component -->
    @foreach ($chirps as $chirp)
<div class='max-w-2xl mx-auto p-4 sm:p-6 lg:p-8'>  
    <div class="relative grid grid-cols-1 p-4 mb-8 
    border rounded-lg bg-white">
    {{-- bg-gradient-to-r from-blue-100 to-cyan-100"> --}}
    <div class="flex w-full items-center justify-between border-b pb-3">
      <div class="flex items-center space-x-3">
        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
        <div class="text-lg font-bold text-slate-700">{{ $chirp->user->name }}</div>
      </div>
      <div class="flex items-center space-x-8">
        {{-- <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">Category</button> --}}
        <div class="text-xs text-neutral-500">{{ $chirp->created_at->format('j M Y, g:i a') }}</div>
      </div>
    </div>

    <div class="mt-4 mb-6">
      <div class="mb-3 text-xl font-bold">Title of the discussion/ Forum. blablablabla</div>
      <div class="text-sm text-neutral-600">{{ $chirp->message }}</div>
    </div>

    <div>
      <div class="flex items-center justify-between text-slate-500">
        <div class="flex space-x-4 md:space-x-8">
          <div class="flex cursor-pointer items-center transition hover:text-slate-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
            <span>125</span>
          </div>
          <div class="flex cursor-pointer items-center transition hover:text-slate-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg>
            <span>4</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach



        {{-- <div class="flex justify-center max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

            <!-- This is an example component -->
            <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg">
                @foreach ($chirps as $chirp)
                <div class="p-6 flex space-x-2">
                    
                    <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" 
                    class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" 
                    alt="" 
                    loading="lazy">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row justify-between">
                            <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">{{ $chirp->user->name }}</p>
                            <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <p class="text-gray-400 text-sm">{{ $chirp->created_at->format('j M Y, g:i a') }}</p>
                    </div>
                </div>
                <p class="-mt-4 text-gray-500">{{ $chirp->message }}</p>
                @endforeach
            </div> 
            </div> --}}

        {{-- <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($chirps as $chirp)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $chirp->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $chirp->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $chirp->message }}</p>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>
</x-app-layout>
