<!doctype html>
<html lang="ja">
  <head>
    <title>行き先</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="p-3">
    <h2 style="margin-top: 10px" >行き先一覧</h2>
    <p><a href="<?php echo route('destination.create') ?>" class="btn btn-primary">追加</a></p>
    <br/>
    <table class="table table-light table-bordered" style="width: 40%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">カテゴリーID</th>
                <th scope="col">行き先</th>
                <th scope="col">紹介</th>
                <th scope="col">住所</th>
                <th scope="col">リンクグーグルマップ</th>
                <th scope="col">開始時間</th>
                <th scope="col" style="display:flex;justify-content:center;">オプション</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->categoryId }}</td>
                <td>{{ $destination->name }}</td>
                <td>{{ $destination->description }}</td>
                <td>{{ $destination->address }}</td>
                <td>{{ $destination->link }}</td>
                <td>{{ $destination->openingTime }}</td>
                <td style="display:flex;justify-content:space-around;">
                    <a href="#" class="btn btn-warning">修正</a> 
                    <a href="#" class="btn btn-danger">削除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>