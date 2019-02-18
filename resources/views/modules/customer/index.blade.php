<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Manager</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Phone number</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @foreach($listCustomer as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phonenumber}}</td>
            <td><a href="{{route('edit',$item->id)}}">Edit</a> |<a href="{{route('delete',$item->id)}}">Delete</a></td>

        </tr>
    @endforeach
    {{--<tr>--}}
        {{--<td>1</td>--}}
        {{--<td>Thien Hoang</td>--}}
        {{--<td>0988888888</td>--}}
        {{--<td>email.test@mail.com</td>--}}
        {{--<td>--}}
            {{--<a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a>--}}
        {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
        {{--<td>2</td>--}}
        {{--<td>Super Shazam</td>--}}
        {{--<td>01234567890</td>--}}
        {{--<td>email1.test@mail.com</td>--}}
        {{--<td>--}}
            {{--<a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>--}}
        {{--</td>--}}
    {{--</tr>--}}

    </tbody>
</table>
</body>
</html>