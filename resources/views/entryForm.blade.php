@extends('main')

@section('title', 'お問い合わせ 入力画面│株式会社スカラネクスト')

@section('content')
<div class="content">
    <div class="main">
        <div class="h1ttl">
            <h1>お問い合わせ　入力画面</h1>
        </div><!-- h1ttl -->

        <div class="mainbox">
            <form method="post" action=" {{ route('inquiry.confirm') }} ">
                @csrf
                <div id="form_caution">
                    <p>株式会社スカラネクストへのお問い合わせは、下記フォームからお願いいたします。</p>
                    <div class="form_list">
                        <ul>
                            <li>半角カタカナは使用しないでください。数字は半角でお願いします。</li>
                            <li>当フォームは、128bit SSL通信(暗号化通信)によって、第三者の盗聴、改ざん、なりすましなどから保護されています。</li>
                            <li>送信いただいた情報は、お問い合わせ対応以外には使用しません。</li>
                        </ul>
                    </div>
                </div>

                @if($errors->any())
                    <div id="box_message">
                        @if(session('message'))
                            <p> {{ session('message') }} </p>
                        @endif 
                        <p>下記の入力項目が未入力か、入力内容に不備があるようです。<br>お手数ですが、「入力画面に戻る」ボタンで前のページに戻り、入力内容をご確認下さい。</p>
                    </div>
                @endif 

                <div class="entry_detail">
                    <div id="form_inq">
                        <div class="h2ttl">
                            <h2>お問い合わせ項目</h2>
                        </div>
                        <div class="table_area">
                            <table>
                                <tr class="required {{ $errors->first('subject') ? 'error' : ''}}">
                                    <th>お問い合わせ内容</th>
                                    
                                    <td>
                                        <select name="subject" size="1" class="txt">
                                            <option {{ (old('subject') == '' ? "selected" : "") }} class="ser-" value="" disabled>下記から項目をお選びください</option>
                                            @foreach($items as $key => $item)
                                                <option {{ (old('subject') == $item ? "selected" : '') }} class="{{'ser' . $key}}" value="{{ $item }}">{{ $item }}について</option>
                                            @endforeach
                                        </select>
                                        @if($errors->first('subject'))
                                            <p class="error_mes">項目を選択してください</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr class="reqrired {{ $errors->first('opinion') ? 'error' : ''}}">
                                    <th>内容<br>(できるだけ具体的に<br>お書き下さい)</th>
                                    <td>
                                        <textarea class="broad" wrap="physical" rows="5" cols="60" name="opinion" placeholder="内容を入力してください">{{old('opinion')}}</textarea>
                                        @if($errors->first('opinion'))
                                            <p class="error_mes">内容を入力してください</p>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div><!-- /.table_area -->
                    </div><!-- /#form_inq -->

                    <div id="form_info">
                        <div class="h2ttl">
                            <h2>お客さまの情報</h2>
                        </div>
                        <div class="table_area">
                            <table>
                                <tr class="reqrired {{ $errors->first('company') ? 'error' : ''}}">
                                    <th>会社名 / 団体名</th>
                                    <td><input type="text" name="company" placeholder="会社名を入力してください" value="{{old('company')}}">
                                    @if($errors->first('company'))
                                        <p class="error_mes">会社名/団体名を入力してください</p>
                                    @endif
                                    </td>
                                </tr>
                                <tr class="optional ">
                                    <th>部署名</th>
                                    <td><input type="text" name="section" placeholder="部署名を入力してください" value="{{old('section')}}">
                                    </td>
                                </tr>
                                <tr class="reqrired {{ $errors->first('name') ? 'error' : ''}}">
                                    <th>お名前</th>
                                    <td><input type="text" name="name" class="required" placeholder="お名前を入力してください" value="{{old('name')}}">
                                    @if($errors->first('name'))
                                        <p class="error_mes">お名前を入力してください</p>
                                    @endif
                                    </td>
                                </tr>
                                <tr class="optional ">
                                    <th>ふりがな</th>
                                    <td><input type="text" name="ruby" class="required" placeholder="ふりがなを入力してください" value="{{old('ruby')}}">
                                    </td>
                                </tr>
                                <tr class="reqrired {{ $errors->first('tel') ? 'error' : ''}}">
                                    <th>電話番号<br>(半角数字/ハイフン無し)</th>
                                    <td><input type="text" name="tel" placeholder="電話番号を入力してください" value="{{old('tel')}}">
                                    @if($errors->first('tel'))
                                        <p class="error_mes">電話番号を入力してください</p>
                                    @endif
                                    </td>
                                </tr>
                                <tr class="reqrired {{ $errors->first('mailaddress') ? 'error' : ''}}">
                                    <th>メールアドレス(半角英数字)</th>
                                    <td><input type="text" name="mailaddress" class="required" placeholder="メールアドレスを入力してください" value="{{old('mailaddress')}}">
                                    @if($errors->first('mailaddress'))
                                        <p class="error_mes">メールアドレスを入力してください</p>
                                    @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div><!-- /#form_info -->

                    <div id="form_notice">
                        <div class="h2ttl">
                            <h2>お問い合わせをいただく前の注意</h2>
                        </div>
                        <div class="form_notice_area">
                            <div class="form_list">
                                <ul>
                                    <li>お客様のご入力いただく個人情報を含む情報は、問い合わせに対する回答を差し上げるために利用させていただきます。</li>
                                    <li>お客様は、お客様ご自身の個人情報について、開示、訂正、削除をご請求いただけます。その際には下記お問い合わせ先までご連絡ください。</li>
                                    <li>同意いただけない場合には、弊社からのご回答を差し上げることができない場合がございますので、ご了承ください。</li>
                                    <li>お客様の個人情報の取扱全般に関する当社の考え方をご覧になりたい方は、下記の個人情報保護方針のページをご覧ください。</li>
                                </ul>
                            </div>
                            <div class="to_inquiry">
                                <p>お問い合わせ先：株式会社スカラネクスト<br>TEL:03-6418-3972</p>
                            </div>
                        </div>
                        <!-- /.form_notice_area -->

                        <div class="doui_area">
                            <p>お問い合わせいただく前の注意に同意いただける場合は、<br>下記の「同意する」にチェックをつけ、「確認画面へ進む」ボタンを押してください。</p>
                            <div class="privacy_check">
                                <input type="checkbox" name="agree" id="doi"><label for="doi">同意する</label>
                            </div>
                        </div><!-- ./doui_area -->

                    </div>
                    <!-- /.form_notice -->

                    <div class="btn_area">
                        <input type="submit" name="send" value="確認画面へ進む" class="btn btn_confirm">
                        <input type="hidden" name="token" value="">
                    </div>

                </div><!-- /.entry_detail -->
            </form>

        </div><!-- /.mainbox -->

    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/inquiry-common.js')}}"></script>
@endsection