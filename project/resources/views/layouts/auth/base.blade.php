<!DOCTYPE html>
<html lang="ja">
<head>
  @include('layouts.head')
</head>
<body>
  <div class="bg-gray-light min-h-screen">
    <header class="fixed left-0 top-0 right-0 z-30">@include('layouts.auth.navbar')</header>
    <div class="pt-28 flex">
      <aside class="px-4 basis-1/5 max-w-xs">
        <nav class="rounded-lg shadow-lg bg-white overflow-hidden">
          <ul>
            <li class="border-b border-slate-100 last:border-none">
              <a href="{{ route('admin.dashboard') }}" class="flex text-lg font-bold py-4 px-6 hover:bg-viva hover:text-white">Dashboard</a>
            </li>
            <li class="border-b border-slate-100 last:border-none">
              <a href="{{ route('admin.item.index') }}" class="flex text-lg font-bold py-4 px-6 hover:bg-viva hover:text-white">Items</a>
            </li>
          </ul>
        </nav>
      </aside>
      <main class="grow">
        <div class="container mx-auto">@yield('main')</div>
      </main>
    </div>
  </div>
</body>
</html>