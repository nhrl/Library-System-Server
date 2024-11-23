<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Dashboard</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="head">
        <div class="user">
            <div class="logo"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#181b20}</style><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg></div>
            <h1></h1>
        </div>
        <div class="system_title">
            <h1>Library System</h1>
        </div>
        <div class="logout">
          <a class="logout-btn" href="{{url('/logout')}}"><div class="button">Logout</div></a>
        </div>
    </header>
    <div class="main">
        <div class="button" id="Open">Add Book</div>
    </div>
    <main class="table-container">
       <div class="wrapper">
        <table>
            <tr class="row1">
                <td class="col1">ID</td>
                <td class="col2">Title</td>
                <td class="col3">Publisher</td>
                <td class="col4">Author</td>
                <td class="col5">Year publish</td>
                <td class="col6">Volume</td>
            </tr>
            @foreach ($books as $book)
              <tr>
                <td class="data">{{$book->id}}</td>
                <td class="data">{{$book->title}}</td>
                <td class="data">{{$book->publisher}}</td>
                <td class="data">{{$book->author}}</td>
                <td class="data">{{$book->year_publish}}</td>
                <td class="data">{{$book->volume}}</td>
                <td class="edit" id="editshow" ><a href="{{url('edit-book/'.$book->id)}}" >
                  
                  <input class="btn-edit" type="submit" value="Edit"></a></td>
                <td class="delete">
                  <form action="{{route('destroy.book',['book' => $book])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn-delete" value="Delete">
                  </form>
                </td>
              </tr>
            @endforeach
        </table>
            
       </div>
    </main>

    <div id="addfrm" class="add-container p-3">
        <form action="{{route('book.store')}}" method="post">
          @csrf
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" placeholder="Enter Title">
              </div>
              <div class="form-group">
                <label >Publisher</label>
                <input name="publish" type="text" class="form-control"  placeholder="Publisher">
              </div>
              <div class="form-group">
                <label >Authors</label>
                <input name="author" type="text" class="form-control" placeholder="Authors">
              </div>
              <div class="form-group">
                <label >Year Publish</label>
                <input name="year_pub" type="text" class="form-control" placeholder="Year Publish">
              </div>
              <div class="form-group">
                <label >Volume</label>
                <input name="volume" type="text" class="form-control" placeholder="Volume">
              </div>
              <div class="btn-container">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <div id="close" class="btn btn-primary mt-3">Close</div>
              </div>
        </form>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>