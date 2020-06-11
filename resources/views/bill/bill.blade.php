<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <LINK REL="SHORTCUT ICON"  HREF="http://localhost/webtravel/public/image/leaf.png">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <style>
        #left input[type=text],select{
    padding:9px 13px 9px 10px;
    width:80%;
    border-radius: 7px;
    outline: none;
    font-size: 15px;
    margin: 5px;
    font-family: 'Lato',Arial, Helvetica, sans-serif;
}
#left input[type=text]{
    border:0.2mm solid #999;
}
#left input[type=text]:focus{
    border:2px solid lightblue;
}
#left select:focus{
    border:2px solid lightblue;
}
#left textarea{
    padding:10px;
    border-radius: 7px;
    outline: none;
    width: 80%;
    height: 80px;
    margin: 5px;
}
#right{
    padding:20px 10px 10px 10px;
    background-color: #f7f7f7;
    font-family: 'Lato',Arial, sans-serif;
}
.avatar{
    width: 100px;
    height: 80px;
    margin-right: 20px;
}
#table1 input[type=text], input[type=number]
{
    padding:5px 7px 5px 10px;
    text-align: center;
    width: 50%;
    font-size: 15px;
    border:none;
    background-color: inherit;
}
 #table1 td,th{
    text-align: center;
    font-size: 16px;
}
#gg{
    margin: 10px 0;
    padding:auto;
}
#totaltb tr td{
    padding:5px 0px 7px 0px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="col-sm-6" id="left">
            <form action="{{url()->route('savebill')}}" method="POST">
                {{ csrf_field() }}
            <h2 style="color:lightblue;font-family:'Rock Salt' ">NKTravel</h2>
            <p style="font-size: 20px;font-weight: bold">Thông tin mua hàng</p>
            @if(Session::get('user_name')!=null)
            <?php $user=Session::get('user_name');?>
        <p><input type="text" name="name" id="name" placeholder="Họ và tên" value="{{$user[0]['NameCustomer']}}"></p>
            <p><input type="text" name="email" id="email" placeholder="Email" value="{{$user[0]['Email']}}"></p>
            <p><input type="text" name="phone" id="phone" placeholder="Số điện thoại" value="{{$user[0]['Phone']}}"></p>
            @elseif(Session::get('user')!=null)
            <p><input type="text" name="name" id="name" placeholder="Họ và tên" value="{{Session::get('user')->name}}"></p>
            <p><input type="text" name="email" id="email" placeholder="Email" value="{{Session::get('user')->email}}"`></p>
            <p><input type="text" name="phone" id="phone" placeholder="Số điện thoại" required></p>
            @else
            <p><input type="text" name="name" id="name" placeholder="Họ và tên" required></p>
            <p><input type="text" name="email" id="email" placeholder="Email" required></p>
            <p><input type="text" name="phone" id="phone" placeholder="Số điện thoại" required></p>
            @endif
            <p><select name="province" id="province" required>
                <option value="0">----Chọn tỉnh thành----</option>
                 @foreach ($city as $item)
                  <option value="{{$item->matp}}">{{$item->name}}</option>  
                 @endforeach
            </select></p>
            <p><select name="district" id="district" required>
                    <option value="0">----Chọn quận huyện----</option>
            </select></p>
            <p><input type="text" name="address" id="address" placeholder="Địa chỉ" required></p>
            <p><textarea name="note" id="note" placeholder="Ghi chú"></textarea></p>
            <hr>
        </div>
        <input type="text" name="id" value="{{$tour[0]['IDTour']}}" style="display:none">
        <div class="col-sm-6" id="right">
            <p style="font-size: 28px;font-weight: bold">Đơn hàng</p>
            <hr>
            <table>
                <tr>
                    <td>
                        <div class="col-sm-4" align="center"><img src='{{$tour[0]['Image']}}' class='avatar'></div>
                    <div class="col-sm-8"><p style="font-size: 16px;font-weight: bold;">{{$tour[0]['NameTour']}}</p><p>Ngày khởi hành : <input type="text" name="" id="" value="{{date('d-m-Y',strtotime($tour[0]['DepartureDay']))}}" style="padding:5px;border:none;outline:none;width: 50%;background-color: inherit;" readonly></p>
                    <input type="text" value="{{$tour[0]['DepartureDay']}}" id="date" name="date" style="display:none">
                         </div>
                    </td>
                </tr>   
            </table>
            <p style="margin-top: 16px;"><span style="font-size: 18px;font-weight: bold">Số lượng:</span> <input type="text" name="count" id="count" value="{{$adult+$young+$baby}}" readonly style="padding:7px 5px 7px 0px;font-size: 16px;width:15%;text-align: center;border:none;background-color: inherit;"><span style="float:right">Đơn vị: VNĐ</span></p>
            <table class="table" id="table1">
                <tr>
                    <th></th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <tr>
                    <td>Người lớn</td>
                <td><input type="number" name="a" id="a" value="{{$adult}}" readonly></td>
                    <td><input type="text" name="" id="" value="{{number_format(($tour[0]->money()->first()->Adult)*$adult)}}" readonly></td>
                </tr>
                <tr>
                        <td>Trẻ em</td>
                        <td><input type="number" name="b" id="b" value="{{$young}}" readonly></td>
                        <td><input type="text" name="" id="" value="{{number_format(($tour[0]->money()->first()->Child)*$young)}}" readonly></td>
                </tr>
                <tr>
                        <td>Em bé</td>
                        <td><input type="number" name="c" id="c" value="{{$baby}}" readonly></td>
                        <td><input type="text" name="" id="" value="{{number_format(($tour[0]->money()->first()->Baby)*$baby)}}" readonly></td>
                </tr>
                <tr>
                <td colspan="3" style="text-align: right;font-weight: bold;font-size: 18px;">Tổng: {{number_format($adult*$tour[0]->money()->first()->Adult+$young*$tour[0]->money()->first()->Child+$baby*$tour[0]->money()->first()->Baby)}} VNĐ</td>
                </tr>
            </table>
            <div id="gg">
                <input type="text" name="code" id="code" placeholder="Mã giảm giá" style="padding:8px; 7px 10px 10px;width:60%;margin-left:40px;border-radius:4px;border:0.3mm solid #ccc;"> <input type="button" value="Áp dụng" id="sale" style="padding:8px;margin-left: 10px;" class="btn btn-primary">
            </div>
            <div id="error"></div>
            <hr>
            <table style="width:100%;margin-bottom: 20px;" id="totaltb">
                <tr>
                    <td><span style="font-size: 17px;font-weight: bold;">Tạm tính:</span></td>
                    <td><input type="text" name="tt" id="tt" value="{{number_format($adult*$tour[0]->money()->first()->Adult+$young*$tour[0]->money()->first()->Child+$baby*$tour[0]->money()->first()->Baby)}}" style="font-size: 17px;text-align: right;border:none;background-color: inherit;outline: none;" readonly> VNĐ</td>
                </tr>
                <tr style="border-bottom: 0.2mm solid #ccc">
                    <td><span style="font-size: 17px;font-weight: bold;">Phí vận chuyển:</span></td>
                    <td><input type="text" name="" id="" value="35,000 VNĐ" style="font-size: 17px;text-align: right;border:none;background-color: inherit;outline: none;padding:0;" readonly></td>
                </tr>
                <tr>
                    <td><span style="font-size: 17px;font-weight: bold;">Tổng cộng:</span></td>
                    <td><input type="text" name="total" id="total" value="{{number_format($adult*$tour[0]->money()->first()->Adult+$young*$tour[0]->money()->first()->Child+$baby*$tour[0]->money()->first()->Baby+35000)}}" style="padding:0px;font-size: 17px;text-align: right;border:none;background-color: inherit;outline: none;" readonly> VNĐ </td>
                    <input type="text" name="realtotal" id="realtotal" value="{{$adult*$tour[0]->money()->first()->Adult+$young*$tour[0]->money()->first()->Child+$baby*$tour[0]->money()->first()->Baby+35000}}" style="display:none">
                </tr>
            </table>
            <span><a href="/NKTravel/public/detailtour/{{$tour[0]['IDTour']}}" style="font-size: 18px;text-decoration: underline;text-align: left">Quay lại</a></span>
            <input type="submit" value="Đặt hàng" name="" class="btn btn-primary" style="float:right;padding:5px 30px 5px 30px;font-size: 20px;font-weight: bold">
        </div>
    </form>    
    </div>
</body>
<script>
    $(document).ready(function()
    {
        $.ajaxSetup({
             headers:{
             	'X-CSRF-TOKEN':$('[name=csrf_token]').attr('content')
             }
         });
        $('#province').on('change',function()
        {
           var code=$('#province').val();
           event.preventDefault()
           $.ajax({
          url:'{{route('loadcity')}}',
          type:'get',
          data: {number:code},
          success:function(kq){
            var obj = JSON.parse(kq);   
            var chuoi=" ";
            for(var i=0;i<obj.length;i++){
               chuoi+='<option value='+obj[i]['maqh']+'>'+obj[i]['name']+'</option>';
            }
            $('#district').html(chuoi);
          }
         })
         .done(function(){
            console.log('done');
         })
         .fail(function(){
            console.log('fail');
         })     
         .always(function(){
             console.log('alway');
         });
        });
    });
</script>
<script>
    function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

    $(document).ready(function(){
      $('#sale').on('click',function(){
          var empty=" ";
            var code =$('#code').val();
            if(code==='midz'){
            var total=$('#realtotal').val();
            $('#tt').val(formatNumber(total/2));
            $('#total').val(formatNumber(35000+total/2));
            $('#code').val(' ');
            $('#error').html(empty);
            }
            else{
                $('#error').html("<p style='color:red;margin-left:30px;'>Mã giảm giá không chính xác !!!</p>")
            }
           
      });
    });
</script>
</html>