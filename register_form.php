<?php

include('db.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Validation</title>
</head>
<body>
<h3>แบบฟอร์มลงทะเบียน</h3>
<form action="dopost.php" method="post" class="a">
    ชื่อ-นามสกุล: <br/>
    <input type="text" class="text" name="name" id="name" /> <br/>
    อีเมล: <br/>
    <input type="email" class="text" name="email" id="email" /> <br/>
    เพศ: <br/>
    <input type="radio" class="radio" name="sex" id="M" value="M" /> ชาย
    <input type="radio" class="radio" name="sex" id="F" value="F" /> หญิง
    <br />
    ความสนใจ: <br/>
    <input type="checkbox" class="checkbox" name="study" id="study" /> เรียน
    <input type="checkbox" class="checkbox" name="game" id="game" /> เกมส์
    <br />
    ที่อยู่: <br/>
    <textarea class="text" name="address" id="address" rows="4" cols="50" ></textarea>
    <br />
    จังหวัด: <br/>
    <select name="province" id="province">
        <option value="">---เลือกจังหวัด---</option>
        <?php $query = "SELECT * FROM provinces ORDER BY PROVINCE_NAME" ;
        $result = $conn->query($query);
        while ($row = $result->fetch_object()){
        ?> <option value="<?php echo $row->PROVINCE_ID;?>"> <?php echo $row->PROVINCE_NAME;?>
        </option>
        <?php
        }
        ?>
        
        
    </select><br />

    <br/><br/>
    <input type="submit" id="submit" value="Submit" name="submit" />
</form>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$('#submit').on('click', function(event){
    var valid = true;
    errorMessage = "";

    if($('#name').val() == ''){
        errorMessage = "โปรดป้อนชื่อ-นามสกุล \n";
        valid = false;
    }

    if($('#address').val() == ''){
        errorMessage += "โปรดป้อนที่อยู่\n";
        valid = false;
    }

    if($('#email').val() == ''){
        errorMessage += "โปรดป้อน email\n"
        valid = false;
    }
    
     if($('#M').prop("checked") == false && $('#F').prop("checked") == false){
        errorMessage += "โปรดป้อน เพศ\n"
        valid = false;
    }

     if($('#study').prop("checked") == false && $('#game').prop("checked") == false){
        errorMessage += "โปรดป้อน ความสนใจ\n"
        valid = false;
    }

    if($('#province').val() == ''){
        errorMessage += "โปรดป้อนจังหวัด\n";
        valid = false;
    }

    if(!valid && errorMessage.length>0){
        alert(errorMessage);
        event.preventDefault();
    }
});
</script>
<a href="er.png">ER</a>
</body>
</html>




