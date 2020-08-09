<div class="cast-info col-sm-12 col-md-6 col-xl-3">
    <div class="cast-header"> Cast <?= $i + 1 ?></div>
    <div class="aptitude-list">
        <a class="aptitude badge badge-light"> コメディ </a>
        <a class="aptitude badge badge-light"> ファンタジー </a>
        <a class="aptitude badge badge-light"> 真面目 </a>
        <a class="aptitude badge badge-light"> ミステリアス </a>
    </div>

    @include('inc.castStatusForm')

    <!-- システムによる計算 -->
    <div class="cut-value-list">
        <div class="cut-value">
            <span> Cut 1 </span> <span class="status"> 0 </span>
        </div>
        <div class="cut-value">
            <span> Cut 2 </span> <span class="status"> 0 </span>
        </div>
        <div class="cut-value">
            <span> Cut 3 </span> <span class="status"> 0 </span>
        </div>
    </div>
    <div class="skill-selector">
        <div class="border-bottom border-secondary"> Skills </div>
        <button name="add-skill-btn" class="btn btn-outline-secondary"> + </button>
    </div>
    <div class="cast-info-footer">
        <span > 0 </span>
    </div>
</div> <!-- .cast-info -->
