<!DOCTYPE html>
<html>
@extends('layout.app')
@section('head')
@parent

@endsection

<body>
    @section('nav')
    @parent
    @endsection

    @section('content')
    @parent
    <div id="container">
        <div class="content-Box" style="font-size: 20px;">
            <div class="d-flex w-100" style="flex-wrap: wrap;">
                <a class="col btn btn-primary" style="min-width: 200px; margin:5px;" href="{{route("CheckResume.show",$user_id)}}">履歷查看</a>
                <a class="col btn btn-success" style="min-width: 200px; margin:5px;" href="{{route("Download.show",$user_id)}}">履歷下載</a>
            </div>
            <form action="{{route("CheckResume.store")}}" method="POST">
                {{$user_id}} <br>
                @csrf
                <label>履歷評語:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="不具體的方式表達" id="inlineCheckbox1">
                    <label class="form-check-label" for="inlineCheckbox1">不具體的方式表達</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="缺少標點符號和文字錯誤" id="inlineCheckbox2">
                    <label class="form-check-label" for="inlineCheckbox2">缺少標點符號和文字錯誤</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="與應徵職缺無關的內容" id="inlineCheckbox3">
                    <label class="form-check-label" for="inlineCheckbox3">與應徵職缺無關的內容</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="專業用詞寫錯" id="inlineCheckbox4">
                    <label class="form-check-label" for="inlineCheckbox4">專業用詞寫錯</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="內容過少" id="inlineCheckbox5">
                    <label class="form-check-label" for="inlineCheckbox5">內容過少</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="缺少作品集" id="inlineCheckbox6">
                    <label class="form-check-label" for="inlineCheckbox6">缺少作品集</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Comment[]" value="完美的履歷" id="inlineCheckbox7">
                    <label class="form-check-label" for="inlineCheckbox7">完美的履歷</label>
                </div>
                <input type="hidden" name="user_id" value="{{$user_id}}">
                <br>
                <label name="else">其他:</label>
                <textarea class="w-100 h4" name="else" rows="4" cols="50"></textarea>
                <br>
                <input class="btn btn-dark w-100" type="submit" value="提交">
            </form>
        </div>
    </div>


    @endsection


    @section('footer')
    @parent

    @endsection
</body>

</html>