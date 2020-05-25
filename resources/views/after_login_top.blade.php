@extends('layouts.webbookapp')

@section('title', 'トップメニュー画面')

@section('content')
<div class="menu_wrap">
<button name="member_register" class="member" onclick="location.href='./member_register'">会員登録</button>
<button name="member_search"  class="member" onclick="location.href='./member_search'">会員検索</button>
<button name="document_search" class="document" onclick="location.href='./document_search'">資料検索</button>
<button name="document_add" class="document" onclick="location.href='./document_add'">資料追加</button>
<button name="circulation" class="circulation" onclick="location.href='./circulation'">貸出</button>
<button name="returns" class="circulation" onclick="location.href='./returns'">返却</button>
</div>
@endsection
