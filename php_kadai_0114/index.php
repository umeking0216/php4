<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

   <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
                body {
        font-family: 'Lato', sans-serif;
        color: white;
        background-color: teal;
        }
        /* h1 {
        font-size: 60px;
        margin: 0px;
        padding: 0px;
        }
        h3 {
        margin: 0px;
        padding: 0px;
        color: #999;
        } */

        /* div.wrap {
        width: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        vertical-align: middle;
        } */

        .title{
            color: white;
        }

        div.wrap div {
        position: relative;
        margin: 20px 0;
        }

        label {
        position: absolute;
        top: 0;
        font-size: 20px;
        margin: 10px;
        padding: 0 10px;
        background-color: teal;
        -webkit-transition: top .2s ease-in-out, 
                            font-size .2s ease-in-out;
        transition: top .2s ease-in-out, 
                    font-size .2s ease-in-out;
        }

        .active {
        top: -25px;
        font-size: 20px;
        }

        input[type=text] {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: teal;
        color: white;
        } 

        input[type=text]:focus {
        outline: none;
        }

        select {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: teal;
        color: white;
        } 

        select:focus {
        outline: none;
        }

        input[type=date] {
        width: 100%;
        padding: 20px;
        border: 1px solid white;
        font-size: 20px;
        background-color: teal;
        color: white;
        } 

        input[type=date]:focus {
        outline: none;
        }

        .btn-border {
        border: 2px solid #000;
        border-radius: 0;
        background: #fff;
        }

        .btn-border:hover {
        color: #fff;
        background: #000;
        }

        .btn {
    font-size: 1.6rem;
    font-weight: 700;
    line-height: 1.5;
    position: relative;
    display: inline-block;
    padding: 1rem 4rem;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    text-align: center;
    vertical-align: middle;
    text-decoration: none;
    letter-spacing: 0.1em;
    color: #212529;
    border-radius: 0.5rem;

 }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div> 
                <div class="navbar-header"><a class="navbar-brand" href="new_login.php">新規登録</a></div> 
            </div>
        </nav>
    </header>

<!-- <div class="wrap">
  <h1>Rise</h1>
  <h3>I built something similar as an engineer on Identity.com</h3>
  <div>
    <label for="fname">First Name</label>
    <input id="fname" type="text" class="cool"/>
  </div>

  <div>
    <label for="lname">Last Name</label>
    <input id="lname" type="text" class="cool"/>
  </div>
  
  <div>
    <label for="email">Some Long Copy Goes Here</label>
    <input id="email" type="text" class="cool"/>
  </div>
</div> -->
    <form method="POST" action="insert.php">
        <div class="wrap">
            <fieldset>
                <legend class="title">家庭環境調べ登録画面</legend>
                <div>
                    <label>生徒氏名</label>
                    <input type="text" name="name" class="cool"><br>
                </div>
                <div>
                    <label>ふりがな</label>
                    <input type="text" name="name_kana" class="cool"><br>
                </div>
                <div>
                    <label>性別</label>
                    <select name="sex" class="cool">
                      <option value="">  </option>
                      <option value="男">男</option>
                      <option value="女">女</option>
                      <option value="その他">その他</option>
                    </select>
                 </div>
                <div>
                    <label>生年月日</label>
                    <input type="date" name="birthday" class="cool"><br>
                </div>
                <div>
                    <label>郵便番号</label>
                    <input type="text" name="postal_code" class="cool"><br>
                </div>
                <div>
                    <label>現住所</label>
                    <input type="text" name="address" class="cool"><br>
                </div>
                <!-- <label><a href=map.php>地図を開いてピン止め</a>：<input type="text" name="map"></label><br> -->
                <div>
                    <label>連絡先</label>
                    <input type="text" name="phone_number" class="cool"><br>
                </div>
                <div>
                    <label>連絡先メールアドレス</label>
                    <input type="text" name="email" class="cool"><br>
                </div>
                <div>
                    <label>出身小学校</label>
                    <input type="text" name="primary_school" class="cool"><br>
                </div>
                <div>
                    <label>保護者（１）氏名</label>
                    <input type="text" name="parent_name" class="cool"><br>
                </div>
                <div>
                    <label>ふりがな</label>
                    <input type="text" name="parent_kana" class="cool"><br>
                </div>
                <div>
                    <label>勤務先</label>
                    <input type="text" name="workplace" class="cool"><br>
                </div>
                <div>
                    <label>勤務先TEL</label>
                    <input type="text" name="workplace_phone_number" class="cool"><br>
                </div>
                <div>
                    <label>携帯</label>
                    <input type="text" name="parent_phone_number" class="cool"><br>
                </div>
                <div>
                    <label>身体状況</label>
                    <input type="text" name="health_level" class="cool"><br>
                </div>
                <div>
                    <label>習い事・クラブ活動等</label>
                    <input type="text" name="club" class="cool"><br>
                </div>
                <div>
                    <label>保護者の要望</label>
                    <input type="text" name="request" class="cool"><br>
                </div>

                <input type="submit" value="送信" class="btn btn-border">
            </fieldset>
        </div>
    </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$('input').on('focusin', function() {
  $(this).parent().find('label').addClass('active');
});

$('input').on('focusout', function() {
  if (!this.value) {
    $(this).parent().find('label').removeClass('active');
  }
});

$('select').on('focusin', function() {
  $(this).parent().find('label').addClass('active');
});

$('select').on('focusout', function() {
  if (!this.value) {
    $(this).parent().find('label').removeClass('active');
  }
});
</script>

</body>

</html>