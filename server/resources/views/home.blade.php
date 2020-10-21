@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 recording-header">
        <div class="dropdown">
            <!-- 切替ボタンの設定 -->
            <button type="button" class="btn btn-secondary dropdown-toggle" id="recording-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                収録タイトル
            </button>

            <!-- TODO: DBから収録情報の読み取り -->
            <div class="dropdown-menu" aria-labelledby="recording-dropdown">
                <a class="dropdown-item" href="#">Override Legendary</a>
            </div><!-- .dropdown-menu -->
        </div><!-- .dropdown -->

        <div class="selected-recording">
            収録を選択してください。
        </div>
    </div> <!-- .recording-header.col-12 -->

    <div class="col-12 cut-info">
        収録属性
        <span class="cut"> Cut 1 <span class="voice">voice</span> </span>
        <span class="cut"> Cut 2 <span class="technique">technique</span> </span>
        <span class="cut"> Cut 3 <span class="voice">voice</span> </span>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="link-bonus-form col-12">
                <span>Link Bonus</span> <input type="text" name="link_bonus" value="0"/> %
            </div>

            <!-- メインキャスト -->
            @php for($i = 0; $i < 4; $i++) : @endphp
                @include('inc.cast')
            @php endfor; @endphp

            <!-- サブキャスト -->
            <div class="col-sm-12 col-md-6 col-xl-9">
                <div class="cast-header"> Subcast </div>
                <div class="row sub-cast-list">
                @php for($i = 0; $i < 9; $i++) : @endphp
                    <div class="sub-cast col-sm-6 col-md-12 col-lg-6 col-xl-4">
                        <div class="sub-cast-header">
                            <a data-toggle="collapse" href="#collapse-{{$i}}" aria-expanded="false" aria-controls="collapse-{{$i}}">subcast {{$i + 1}}</a>
                        </div>
                        <div id="collapse-{{$i}}" class="collapse">
                            @include('inc.skill', [ 'index' => 1 ])
                            @include('inc.skill', [ 'index' => 2 ])
                        </div>
                    </div>
                @php endfor; @endphp
                </div>
            </div>

            <!-- Extraキャストだけ別フォーマット -->
            <div class="extra-cast col-sm-12 col-md-6 col-xl-3">
                <div class="cast-header"> Extra </div>
                @include('inc.castStatusForm')
                @include('inc.cutValueList')
                <div class="skill-selector">
                    <div class="border-bottom border-secondary"> Skills </div>
                    <button name="add-skill-btn" class="btn btn-outline-secondary"> + </button>
                </div>
                <div class="cast-info-footer">
                    <span > 0 </span>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .col-12 -->
    <div class="col-12">
        <button id="run" class="btn btn-primary w-100">Run</button>
    </div>
</div>
@endsection
