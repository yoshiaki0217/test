<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    header {
      background-image: linear-gradient(to right, #2af598 0%, #009efd 100%);
      width: 100%;
    }

    .h_inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 1080px;
      margin: 0 auto;
    }

    h1 {
      font-size: 20px;
    }

    .dropdown-item {
      font-weight: 700;
      font-size: 16px;
      list-style: none;
      text-decoration: none;
      color: #000;
    }

    main {
      margin: 0 auto;
      width: 1080px;
    }
  </style>
</head>
<body>
  <header>
    <div class="headr">
      <div class="h_inner">
        <h1>マイページ</h1>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
      </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </header>

  <main>
    @yield('index')
  </main>

</body>
</html>
