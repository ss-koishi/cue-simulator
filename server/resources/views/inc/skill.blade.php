<div class="skill">
    <form>
        <div class="skill-header">
            スキル {{ $index }}
            <!-- <button class="trash btn btn-sm btn-outline-danger">削除</button> -->
        </div>
        <div class="skill-items">
            <div class="skill-row">
                <span class="title">種類</span>
                <select name="type">
                    <option value="-1">なし</option>
                    <option value="0">固定値上昇</option>
                    <option value="1">倍率上昇</option>
                    <option value="2">サブキャスト</option>
                    <option value="3">倍率上昇（サブキャスト付）</option>
                </select>
            </div>
            <div class="skill-row">
                <span class="title">発動率</span>
                <input type="text" name="percent" size="10">
            </div>
            <div class="skill-row">
                <span class="title">発動カット</span>
                <input type="text" name="cut" size="10">
            </div>
            <div class="skill-row">
                <span class="title">対象</span>
                <input type="text" name="target" size="10">
            </div>
            <div class="skill-row">
                <span class="title">上昇値</span>
                <input type="text" name="up_val" size="10">
            </div>
        </div>
    </form>
</div>
