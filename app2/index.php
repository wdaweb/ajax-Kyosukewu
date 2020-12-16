<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>學生資料管理系統</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!---匯入要使用的函式庫--->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
  <h1 class="header">學生資料管理系統</h1>
  <h5>新增學生</h5>
  <form action="api/insert.php" method="post">
    <div>姓名<input type="text" name="name" id="name"></div>
    <div>班級<input type="text" name="classes" id="classes"></div>
    <div>座號<input type="text" name="num" id="num"></div>
    <div>成績<input type="text" name="score" id="score"></div>
    <!-- <input type="submit" value="新增"> -->
    <input type="button" value="新增" onclick="create()">
  </form>
  <table>
    <tr id="header">
      <td>id</td>
      <td>name</td>
      <td>classes</td>
      <td>num</td>
      <td>score</td>
    </tr>
    <tbody id="body">

    </tbody>
    <!-- <?php
    $rows=$Stu->all();
    foreach($rows as $row){
    ?>
    <tr>
      <td><?=$row['id'];?></td>
      <td><?=$row['name'];?></td>
      <td><?=$row['classes'];?></td>
      <td><?=$row['num'];?></td>
      <td><?=$row['score'];?></td>
    </tr>
    <?php
    }
    ?> -->
  </table>
</body>
</html>
<script>
/************************************
* 1.考慮觸發行為的事件
* 2.建立監聽行為
* 3.考慮是否需要代入參數
* 4.是否會有回傳值？回傳值的功用及處理？
* 5.是否需要更新畫面內容？更新畫面的方法？
************************************/
query() //觸發動作

//新增資料的函式
function create(){
  let name=$("#name").val();
  let classes=$("#classes").val();
  let num=$("#num").val();
  let score=$("#score").val();
  
  $.post("api/insert.php",{name,classes,num,score},function(res){ //callback函式 用來確認資料傳輸
    console.log(res)
    if(res=='成功'){
      alert('新增成功')
      query()
    }else{
      alert('新增失敗')
    }
  })
}

//查詢資料的函式
function query(){
  $.get("api/query.php",function(res){
    $('#body').html(res)
  })
}

//編輯資料的函式
function update(){

}

//刪除資料的函式
function del(){

}

</script>