// 収録選択されたときにタイトル表示
$('.recording-header > .dropdown .dropdown-item').on('click', function() {
    $('.selected-recording').text($(this).text());
});

// 収録適性のトグル
$('.aptitude-list > a').on('click', function() {
    if($(this).hasClass('badge-light')) {
        $(this).removeClass('badge-light');
        $(this).addClass('badge-success');
    } else {
        $(this).removeClass('badge-success');
        $(this).addClass('badge-light');
    }
    // ステータスにも影響があるので再計算
    $(this).closest('.cast-info').find('.status > input').trigger('change');
});

// スキル追加
$('button[name="add-skill-btn"]').on('click', function() {
    const skill_num = $(this).parent().find('.skill').length + 1;
    const dom = create_skill_dom(skill_num);

    dom.insertBefore($(this));
});

// スキル削除
$('.trash').on('click', function() {
    $(this).closest('.skill').remove();
});

// 入力パラメータに変更があった時に再計算する
$('.status > input').on('change', function() {
    let status = 0;
    const inputs = $(this).parent().find('input');
    $(inputs).each((_, input) => {
        status += parseInt($(input).val());
    });

    if(isNaN(status)) return;

    // 満たしている配役適性の数を取得して、上昇倍率を計算
    const target_cast = $(this).closest('.cast-info');
    const apti_per = (1 + 0.1 * target_cast.find('.aptitude.badge-success').length);

    // 変更された属性が選択されている収録のカットと一致していれば再計算
    const attr = $(this).parent().find('span').text();
    const cuts = $('.cut-info > .cut');

    for(let i = 0; i < cuts.length; i++) {
        if($(cuts[i]).find('span.' + attr).length > 0) {
            target_cast.find('.cut-value:nth-of-type(' + (i + 1) + ')').find('.status').text(Math.ceil(status * apti_per - 0.000001));
        }
    }

    // 合計値への反映
    let cast_sum = 0;
    target_cast.find('.cut-value > .status').each((_, cut) => {
        cast_sum += parseInt($(cut).text());
    });
    target_cast.find('.cast-info-footer > span').text(cast_sum);
});

function create_skill_dom(skill_num) {
    const row_contents = {
        '発動率': 'precent',
        '発動カット': 'cut',
        '対象': 'target',
        '上昇値': 'up_val',
    };

    const skill_types = [
        '固定値上昇',
        '倍率上昇',
        'サブキャスト',
        '倍率上昇（サブキャスト付）',
    ];

    const skill = $('<div>', { 'class': 'skill' });

    const skill_header = $('<div>', { 'class': 'skill-header' });
    skill_header.append($('<span>', { text: 'スキル ' + skill_num }));
    skill_header.append($('<button>', {
        'class': 'trash btn btn-sm btn-outline-danger',
        text: '削除',
        click: function() {
            $(this).closest('.skill').remove();
        },
    }));
    skill.append(skill_header);

    const skill_items = $('<div>', { 'class': 'skill-items' });

    // スキルの種類選択のdom
    const row = $('<div>', { 'class': 'skill-row' });
    row.append($('<span>', { 'class': 'title', text: '種類' }));
    const select = $('<select>', { name: 'type' });
    for(let i = 0; i < skill_types.length; i++) {
        select.append($('<option>', { value: String(i), text: skill_types[i] }));
    }
    row.append(select);
    skill_items.append(row);

    // スキルの各値の入力のdom
    for(title in row_contents) {
        const row = $('<div>', { 'class': 'skill-row' });
        row.append($('<span>', { 'class': 'title', text: title }));
        row.append($('<input>', { type: 'text', name: row_contents[title], size: '10' }));
        skill_items.append(row);
    }
    skill.append(skill_items);

    skill.wrapInner('<form>');
    return skill;
}
