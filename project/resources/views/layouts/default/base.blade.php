<!DOCTYPE html>
<html lang="ja">
<head>
  @include('layouts.head')
</head>
<body>
  <div class="flex w-screen h-screen overflow-hidden">
    <div class="shadow-lg basis-1/5 max-w-xs bg-gray-light">@include('layouts.default.sidebar')</div>
    <div class="grow p-16 overflow-y-scroll">
      <div class="container mx-auto">@yield('main')</div>
    </div>
  </div>
</body>
</html>