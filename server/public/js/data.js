
$('#run').on('click', function() {
    let data = {};
    data['main_casts'] = get_main_casts_info();
    data['sub_casts'] = get_sub_casts_info();
    data['link_bonus'] = $('input[name="link_bonus"]').val();

    console.log(data);
    $.ajax({
        type: 'POST',
        url: '/recording',
        data: { 'data': data },
    }).done(function(res) {
        console.log(res);
    });
});

/**
 * メインキャスト（ + extraキャスト ）情報の取得
 * @return array
 */
function get_main_casts_info() {
    let casts = [];
    $('.cast-info, .extra-cast').each((_, cast) => {
        let cast_data = {};
        cast_data['aptitude_cnt'] = $(cast).find('.aptitude.badge-success').length;

        // キャストの各属性値を取得
        $(cast).find('.cast-status-form > .status').each((_, status) => {
            let sum = 0;
            const attr = $(status).find('span').text();
            $(status).find('input').each((_, input) => sum += parseInt($(input).val()));
            cast_data[attr] = sum;
        });

        // スキル情報の取得
        let skills = [];
        $(cast).find('.skill-selector > .skill').each((_, skill) => {
            let skill_data = {};
            skill_data['type'] = $(skill).find('select[name="type"]').val();
            skill_data['percent'] = $(skill).find('input[name="percent"]').val();
            skill_data['target'] = $(skill).find('input[name="target"]').val();
            skill_data['cut'] = $(skill).find('input[name="cut"]').val();
            skill_data['up_val'] = $(skill).find('input[name="up_val"]').val();
            skills.push(skill_data);
        });
        cast_data['skills'] = skills;
        casts.push(cast_data);
    });

    return casts;
}

/**
 * サブキャスト情報の取得
 * @return array
 */
function get_sub_casts_info() {
    let casts = [];
    $('.sub-cast').each((_, cast) => {
        let cast_data = {}, skills = [];
        $(cast).find('.skill').each((_, skill) => {
            let skill_data = {};
            skill_data['type'] = $(skill).find('select[name="type"]').val();
            skill_data['percent'] = $(skill).find('input[name="percent"]').val();
            skill_data['target'] = $(skill).find('input[name="target"]').val();
            skill_data['cut'] = $(skill).find('input[name="cut"]').val();
            skill_data['up_val'] = $(skill).find('input[name="up_val"]').val();
            skills.push(skill_data);
        });
        cast_data['skills'] = skills;
        casts.push(cast_data);
    });

    return casts;
}
