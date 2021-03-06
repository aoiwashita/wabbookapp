@extends('layouts.form')

@section('title','資料削除画面')

@section('content')
<table>
  <tr>
   <th>ISBN番号</th>
   <td>{{$item->catalog_number}}</td>
  </tr>
  <tr>
   <th>資料名</th>
   <td>{{$item->catalog_name}}</td>
  </tr>
  <tr>
   <th>分類コード</th>
   <td>{{$item->catalog_code}}</td>
  </tr>
  <tr>
   <th>著者</th>
   <td>{{$item->catalog_author}}</td>
  </tr>
  <tr>
   <th>出版社</th>
   <td>{{$item->catalog_publishername}}</td>
  </tr>
  <tr>
   <th>出版日</th>
   <td>{{$item->catalog_publication}}</td>
  </tr>
  <tr>
   <th>資料ID</th>
   <td>{{$item->catalog_id}}</td>
  </tr>
</table>
<form class="" action="document_delete_complete" method="post">
  @csrf
  <table>
    <tr>
      <th>廃棄年月日</th><td><input type="text" name="disposal_date" value="<?php echo date('Y/m/j');?>" required></td>
    </tr>
    <tr>
      <th></th>
      <td>@error('disposal_date')
      <span class="errorMsg">{{$message}}</span>
      @enderror</td>
    </tr>
    <tr>
      <th>備考</th><td><textarea name="catalog_remark" rows="4" cols="22"></textarea></td>
      <tr>
        <th></th>
        <td>@error('catalog_remark')
        <span class="errorMsg">{{$message}}</span>
        @enderror</td>
      </tr>
    </tr>
    <tr>
      <th></th>
      <td><input type="hidden" name="catalog_id" value="{{$item->catalog_id}}"></td>
    </tr>
  </table>
  <button type="button" name="back" class="back_button" onclick="histry()">戻る</button>
  <input type="submit" class="next_button" value="削除する">
</form>
@endsection
