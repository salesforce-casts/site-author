<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased">
        <header class="border-gray-750 relative top-0 left-0 z-40 flex h-10 w-full select-none items-center justify-between border-b bg-gray-900 transition-all duration-500 ease-in-out"></header>

<div class="border-gray-750 fixed top-0 left-0 z-30 h-full w-10 border-r bg-gray-900"></div>

<div class="border-gray-750 absolute right-0 z-20 flex h-screen w-64 flex-shrink-0 select-none flex-col border-l bg-gray-800 text-white">
  <div class="flex h-10 flex-shrink-0 items-center border-b border-gray-800 bg-gray-800">
    <div class="flex h-full w-full cursor-pointer items-center justify-center border-b border-transparent bg-gray-800 text-sm text-xs text-gray-100">Design</div>

    <div class="border-gray-750 flex h-full w-full cursor-pointer items-center justify-center border-b bg-gray-900 text-sm text-xs text-gray-400 hover:text-gray-100">History</div>
  </div>

  <div class="relative h-full w-auto">
    <div class="flex flex-col border-b border-gray-750">
      <div class="p-4 text-center">
        <div class="bg-gray-900 text-gray-400 border-0 border-gray-700 w-full flex flex-col items-center rounded-md justify-center py-6 px-5">
          <svg class="w-7 h-7 fill-current" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50 65.626a3.125 3.125 0 1 1-6.25 0 3.125 3.125 0 0 1 6.25 0Zm41.513-10.068s.006 0 .006.002a1.56 1.56 0 0 0-1.04 1.472c0 .415.167.787.431 1.067l3.572 3.572a8.228 8.228 0 0 1 0 11.636 8.213 8.213 0 0 1-2.469 1.685l-5.545 2.334a2.337 2.337 0 0 0-1.112 2.898c.043.114.075.203.096.27l1.773 4.282c2.313 5.58-.337 11.978-5.919 14.29-5.58 2.311-11.978-.34-14.29-5.92l-1.663-4.016c-.003-.003-.01.01-.012.005a2.746 2.746 0 0 0-2.512-1.634c-.367 0-.714.084-1.036.215l-5.27 2.22h-.01a9.253 9.253 0 0 1-12.763-8.563v-3.247a3.125 3.125 0 0 1 6.25 0v3.125c0 1.726 1.399 3.125 3.125 3.125.383 0 .746-.083 1.085-.208l5.204-2.188c.054-.021.096-.024.153-.049 4.492-1.875 9.654.245 11.53 4.737 0 .003.002.006.004.009l1.689 4.077a4.687 4.687 0 1 0 8.66-3.587l-1.829-4.418c-1.787-4.284.165-9.188 4.37-11.105l5.663-2.383c.004 0-.005-.003 0-.003a1.525 1.525 0 0 0 .54-2.5l-7.35-7.35a5.506 5.506 0 0 1-1.595-3.877A5.53 5.53 0 0 1 86.779 50h.721a6.25 6.25 0 0 0 6.25-6.25V12.5a6.25 6.25 0 0 0-6.25-6.25h-75a6.25 6.25 0 0 0-6.25 6.25v31.25A6.25 6.25 0 0 0 12.5 50h28.125c1.726 0 3.125-1.4 3.125-3.125V32.263a8.826 8.826 0 0 1 15.079-6.228c.029.028.027.012.049.03l16.665 16.666a3.31 3.31 0 0 1 1.02 2.386 3.32 3.32 0 0 1-3.32 3.32 3.309 3.309 0 0 1-2.387-1.019L53.789 30.353c-.008-.006 0 .017-.012.003A2.197 2.197 0 0 0 50 31.885v16.552a7.812 7.812 0 0 1-7.813 7.814H12.5C5.597 56.25 0 50.653 0 43.75V12.5C0 5.597 5.597 0 12.5 0h75C94.403 0 100 5.597 100 12.5v31.25c0 5.495-3.558 10.134-8.487 11.808Z" fill-rule="nonzero"></path></svg>
        </div>
      </div>
      <div class="mt-3 h-8 h-full w-full flex divide-x text-xs divide-gray-750 items-center justify-center border-t border-gray-750">
        <span class="pr-3 h-full flex w-1/2 items-center justify-center"><span>856</span>px</span>
        <span class="font-bold  h-full w-1/2 flex items-center justify-center">md</span>
      </div>
    </div>
  </div>
</div>
    
    </body>
</html>
