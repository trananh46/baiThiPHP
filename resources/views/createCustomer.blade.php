<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('customer.store') }}" method="post">
        @csrf

        <h1>Thêm Khách Hàng</h1>
        Ảnh Đại Diện : <br>
        <input type="text" name="anh-daidien"> <br>

        Họ Tên: <br>
        <input type="text" name="ten"> <br>
        
        giới tính: <br>

       Nam  <input type="radio" name="gioi-tinh" value="1"> 
       Nữ   <input type="radio" name="gioi-tinh" value="0"> <br>

       SĐT: <br>
       <input type="number" name="sdt"> <br>
       Email: <br>
       <input type="text" name="email-khachhang"><br>
       <br>
       <button>Xác Nhận</button>
    </form>
 

</body>
</html>