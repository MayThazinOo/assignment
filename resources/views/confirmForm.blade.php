@extends('main')

@section('title', 'お問い合わせ 確認画面│株式会社スカラネクスト')

@section('content')

<div class="content">

    <!-- main -->
    <div class="main">
        <div class="h1ttl">
            <h1>お問い合わせ　確認画面</h1>
        </div><!-- h1ttl -->

        <div class="mainbox">
            <form method="post" action="{{ route('inquiry.complete') }}">
                @csrf
                <div class="entry_detail">
                    <div id="form_inq">
                        <div class="h2ttl">
                            <h2>お問い合わせ項目</h2>
                        </div>
                        <div class="table_area">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>お問い合わせ内容</th>
                                        <td>
                                        <input type="text" name="subject" value="{{$info['subject']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>内容<br>(できるだけ具体的に<br>お書き下さい)</th>
                                        <td>
                                            <textarea name="opinion" cols="30" rows="10" readonly style="border: none; padding: 0">{{$info['opinion']}}</textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--  #form_inq-->

                    <div id="form_info">
                        <div class="h2ttl">
                            <h2>お客さまの情報</h2>
                        </div>
                        <div class="table_area">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>会社名 / 団体名<br></th>
                                        <td>
                                            <input type="text" name="company" value="{{$info['company']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>部署名</th>
                                        <td>
                                            <input type="text" name="section" value="{{$info['section']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>お名前</th>
                                        <td>
                                            <input type="text" name="name" value="{{$info['name']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ふりがな</th>
                                        <td>
                                            <input type="text" name="ruby" value="{{$info['ruby']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>
                                            <input type="text" name="tel" value="{{$info['tel']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>
                                            <input type="text" name="mailaddress" value="{{$info['mailaddress']}}" readonly style="border: none; padding: 0">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- #form_info -->
                    
                    <div class="btn_area">
                        <a href="#"><input type="button" value="戻る" class="btn btn_back" onclick="window.history.back()"></a>
                        <input type="submit" value="送　信" class="btn btn_entry">
                    </div>

                </div>
                <!-- /.entry_detail -->
            </form>

        </div><!-- /.mainbox -->

    </div>
    <!-- /main -->

</div>

@endsection