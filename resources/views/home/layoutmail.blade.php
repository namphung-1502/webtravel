<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<p>Kính gửi ông/bà: {{$name}}</p>
<p>Quý khách đã đặt thành công 1 tour {{$tour}}</p>
<p>Số lượng người: </p>
<p> - Người lớn: {{$Adult}} (Người)</p>
<p> - Trẻ em: {{$Young}} (Người)</p>
<p> - Em bé: {{$Baby}} (Người)</p>
<p>Ngày khởi hành: {{date('d-m-Y',strtotime($Day))}}</p>
<p>Chúng tôi sẽ liên lạc với quý khách trong thời gian sớm nhất. Cảm ơn đã sử dụng dịch vụ của chúng tôi.</p>
<p>Thân ái!!!!</p>
<p style="font-size: 13px">Mọi câu hỏi xin liên hệ: 0338253456</p>
</body>
</html>