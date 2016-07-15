<?php
  $errors = array();
  $error_messages = array();
  
  //例外を返す関数
  function e($message, $previous = null) {
    return new Exception($message, 0, $previous);
}

  //例外を配列に格納
  function exception_to_array(Exception $e) {
    do {
          $errors[] = $e->getMessage();
      } while ($e = $e->getPrevious());
      return array_reverse($errors);
    }
  //第一引数(日付や時刻)を第二引数の日付・時刻フォーマットと照合し一致すればtrueを返す関数
  function validateDateTime($date, $format = 'Y-m-d H:i:s') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
    }



  if (!empty($_POST)) {
  try{
    $e = null;
    if (!isset($_POST['title'])) {
      $e = e('Please input a title.', $e);
    } else {
        $_POST['title'] = trim(mb_convert_kana($_POST['title'], "s", 'UTF-8'));
        if ($_POST['title'] === '') {
            $e = e('Please input a title.', $e);
            } else if (strlen($_POST['title']) > 50) {
              $e = e('The title is over 50 characters.', $e);
        }
    }


    if (!isset($_POST['detail'])) {
      $e = e('Please input a detail.', $e);
    } else {
        $_POST['detail'] = trim(mb_convert_kana($_POST['detail'], "s", 'UTF-8'));
        if ($_POST['detail'] === '') {
            $e = e('Please input a detail.', $e);
              } else if (strlen($_POST['detail']) > 500) {
                $e = e('The detail is over 500 characters.', $e);
            }
        }

    if (empty($_POST['date'])) {
      $e = e('Please input a date.', $e);
    } else {
      if (!validateDateTime($_POST['date'], 'Y-m-d')) {
        $e = e('The form of the date is wrong.', $e);
      }
    }

    if (empty($_POST['starting_time'])) {
        $e = e('Please input a starting time.', $e);
    } else {
      if (!validateDateTime($_POST['starting_time'], 'H:i')) {
        $e = e('The form of starting time is wrong.', $e);
      }
    }

    if (!empty($_POST['closing_time'])) {
      if (!validateDateTime($_POST['closing_time'], 'H:i')) {
        $e = e('The form of closing time is wrong.', $e);
      }
    }

    if (empty($_POST['place_name']) || empty($_POST['latitude']) || empty($_POST['longitude'])) {
        $e = e('Please input a place.', $e);
    } else {
      if (gettype(floatval($_POST['latitude'])) !== 'double' || gettype(floatval($_POST['longitude'])) !== 'double') {
        $e = e('The parameter of place is wrong.', $e);
      }
    }

    if (!empty($_POST['capacity'])) {
      $_POST['capacity'] = ltrim(mb_convert_kana($_POST['capacity'], "n", 'UTF-8'), '0');
      if (!ctype_digit(strval($_POST['capacity']))) {
          $e = e('The value of the capacity is invalid.', $e);
        } else if (strlen($_POST['capacity']) > 5) {
            $e = e('The capacity is over 5 digit.', $e);
        }
      }

    if (empty($_POST['category'])) {
      $e = e('Please select a category.', $e);
    } else {
        if (!ctype_digit(strval($_POST['category']))) {
          $e = e('The value of the category is invalid.', $e);
      }
    }

    for ($i=0; $i<4; $i++) {

    $pic = 'pic'.$i;
    // 未定義である・1つのinputタグに対し複数ファイルである・$_FILES Corruption 攻撃を受けた
    // どれかに該当していれば不正なパラメータとして処理する
    if (
        !isset($_FILES[$pic]['error']) ||
        !is_int($_FILES[$pic]['error'])
    ) {
        $e = e('The parameter of picture'.$i.' is wrong.', $e);
    }
    if ($_FILES[$pic]['error'] === 0) {


    // ここで定義するサイズ上限のオーバーチェック
    // (必要がある場合のみ)
    if ($_FILES[$pic]['size'] > 10485760) {
        $e = e('The filesize of picture'.$i.' is over 10MB.', $e);
    }


        // $_FILES['upfile']['mime']の値はブラウザ側で偽装可能なので
        // MIMEタイプに対応する拡張子を自前で取得する
        if (!$ext = array_search (
            mime_content_type($_FILES[$pic]['tmp_name']),
            array(
                'jpg' => 'image/jpg',
                'jpeg' => 'image/jpeg',
                'png' => 'image/png',
            ),
            true
        )) {
            $e = e('The extension of picture'.$i.'is wrong.', $e);
          }


    $image = '';
    switch ($ext) {
      case 'png':
        $image = imagecreatefrompng($_FILES[$pic]['tmp_name']);
        break;
      case 'jpg' or 'jpeg':
        $image = imagecreatefromjpeg($_FILES[$pic]['tmp_name']);
        break;
  }
    list($width, $height) = getimagesize($_FILES[$pic]['tmp_name']);

    $new_width = 800;

    $new_height = 600;

    $new_image = ImageCreateTrueColor($new_width, $new_height);
 
    ImageCopyResampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    ImageJPEG($new_image, $_FILES[$pic]['tmp_name'], 100);
 
    ImageDestroy($image);

    ImageDestroy($new_image);

      $_FILES[$pic]['content'] = file_get_contents($_FILES[$pic]['tmp_name']);
      $_FILES[$pic]['ext'] = $ext;
    } else if ($_FILES[$pic]['error'] !== 4) {
      switch($_FILES[$pic]['error']) {
        case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
        case UPLOAD_ERR_FORM_SIZE: //form定義の最大サイズ超過
          $e = e('The filesize of picture'.$i.' is over 10MB.', $e);
        default:
          $e = e('Something wrong happened with picture'.$i.'.', $e);
      }
    }
  }
    if ($e) {
      throw $e;
    }

    
        $_SESSION['events'] = $_POST + $_FILES;
       echo '<script> location.replace("/portfolio/cebroad/events/confirm"); </script>';
//        header('Location: /cebroad/events/confirm');
      exit();
    } catch (Exception $e) {
    $error_messages = exception_to_array($e);
  }
}

  $sql = "SELECT * FROM event_categories";
  $rtn = mysqli_query($db, $sql) or die('Sorry, something wrong happened. Please retry.');

  $title = '';
  $capacity = '';
  $category = '';
  $detail = '';

  if ($id === 'rewrite') {
    $_POST = $_SESSION['events'];
  }

    if (!empty($_POST['title'])) {
      $title = $_POST['title'];
    }
    if (!empty($_POST['capacity'])) {
      $capacity = $_POST['capacity'];
    }
    if (!empty($_POST['category'])) {
      $category = $_POST['category'];
    }
    if (!empty($_POST['detail'])) {
      $detail = $_POST['detail'];
    }


?>

@extends('common.layout')
@section('TitleAndCss')
<title>新規メンタリング作成</title>
<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{('/assets/css/events.css')}}}">
@stop

@secsion('content')
<div class="container">


    <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">

      <div class="row">

      <div class="testvar hidden-xs col-sm-2 col-md-2">
        </div>

        <div class="col-sm-8 col-md-8">
            <h1>新規メンタリング作成</h1>
            <h3 class="cebroad-pink">※赤文字は必須入力です</h3>
        </div>

        <div class="col-sm-8 col-md-8">
            <div class="form-group">
                <label class="cebroad-pink">タイトル</label>
                <input type="text" name="title" id="title" class="form-control" required value="<?=h($title)?>" placeholder="50 character limit">
                <p id="title_count"></p>
            </div>
        </div>


        <div class="col-sm-4 col-md-4">            
            <div class="form-group">
                <label class="cebroad-pink">カテゴリー</label>
                <select name="category" id="category" class="form-control">
                  <?php while ($cat = mysqli_fetch_assoc($rtn)): ?>
                  <option value="<?=$cat['id']?>" 
                  <?php if ($category === $cat['id']){
                    echo 'selected';
                  } ?>>
                  <?=$cat['name']?></option>
                  <<?php endwhile; ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4 col-md-4">          
            <div class="form-group">
                <label>価格</label>
                <input type="number" name="capacity" id="capacity" class="form-control" min="1" value="<?=h($capacity)?>" placeholder="5 digit limit">
                <p id="capacity_count"></p>
            </div>
        </div>
        
        
        <div class="col-sm-8 col-md-8">
            <div class="form-group">
                <label class="cebroad-pink">detail</label>
                <textarea name="detail" id="detail" class="form-control" rows="6" required placeholder="500 character limit"><?=h($detail)?></textarea>
                <p id="detail_count"></p>
            </div>
        </div>

        <div class="col-sm-8 col-md-8">
            <label>サムネイル写真</label>
            <input class="pic" name="pic0" id="pic0" type="file" style="display:none">
            <div class="input-group">
              <input type="text" id="photoCover0" class="form-control" placeholder="Select jpg or png(Maximum of 10MB)">
              <span class="input-group-btn"><button type="button" class="btn btn-cebroad" onclick="$('#pic0').click();">Browse</button></span>
            </div>
            <label id="label0" class="cebroad-pink"></label>
            <div class="events-pad">
              <img src="" id="preview0" style="display:none; width: 300px;">
            </div>
        </div>

        <div class="col-sm-8 col-md-8">
          <?php foreach($error_messages as $error): ?>
            <label class="cebroad-pink"><?=$error?></label>
          <?php endforeach; ?>
        </div>

        <div class="col-sm-8 col-md-8" class="events-pad">
            <div class="form-group">
                <a href="/portfolio/cebroad/events/index">戻る</a>
                <input type="submit" id="confirm" class="btn btn-cebroad" disabled="disabled" value="確認">
            </div>
        </div>
 
      </div>
    </form>
  </div>
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('/assets/js/add.js')}}}"></script>
@stop
