<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク詳細</h1>
    <p>[タイトル]</p>
    <p>{{ $task->title }}</p>

    <p>[内容]</p>
    <p>{{ $task->body }}</p>

    <div class="button">
        <input type="submit" value="一覧に戻る" onclick="location.href='/tasks'">
        <input type="submit" value="編集する" onclick="location.href='/tasks/{{ $task->id }}/edit'">
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>
</html>