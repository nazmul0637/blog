<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Posts.PDF</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
    </tr>
    @foreach($posts as $p)
        <tr>
            <td>{{$p->title}}</td>
            <td>{{$p->body}}</td>
        </tr>
    @endforeach
</table>
</body>

</html>