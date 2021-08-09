<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="">
        <h2>Tìm Kiếm Khách Hàng</h2>
        Nhập tên khách : <input type="text" name="search" value="{{ $search }}">
    </form>
    <br>
    <h1>Danh sách Khách Hàng</h1>
    <table border="2">
        <tr>
            <td>STT</td>
            <td>Ảnh Đại Diện</td>
            <td>Họ Tên</td>
            <td>giới tính</td>
            <td>sdt</td>
            <td>email</td>
        </tr>
        @foreach ($khachhang as $detail)
            
    
        <tr>
            <td>{{ $detail->maKhachHang }}</td>
            <td>{{ $detail->anhDaiDien }}</td>
            <td>{{ $detail->hoTen }}</td>
            <td>
                @if ($detail->gioiTinh == 1)
                    {{ 'Nam' }}
                @else
                {{ 'Nữ' }}
                @endif
               
            
            </td>
            <td>{{ $detail->sđt }}</td>
            <td>{{ $detail->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>