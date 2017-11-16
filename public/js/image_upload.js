
$(document).ready(function(){
    $('.drama_img').change(function(){
        var val = $(this).val();
        var thisDom = $(this)[0];

        console.log("val : " + val);
        console.log("thisDom : " + thisDom);

        if (thisDom.files && thisDom.files[0]) {
            var reader = new FileReader();
                    reader.onload = function (e) {
                $('#d_img').attr('src', e.target.result);
                // $('drama_img').prepend('#d_img').attr('src', e.)
            }
            reader.readAsDataURL(thisDom.files[0]);
        }
    });
});

$(document).ready(function(){
    $('.contest_img').change(function(){
        var val = $(this).val();
        var thisDom = $(this)[0];

        console.log("val : " + val);
        console.log("thisDom : " + thisDom);

        if (thisDom.files && thisDom.files[0]) {
            var reader = new FileReader();
                    reader.onload = function (e) {
                $('#c_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(thisDom.files[0]);
        }
    });
});

$(document).ready(function(){
    $('.ppl_img').change(function(){
        var val = $(this).val();
        var thisDom = $(this)[0];

        console.log("val : " + val);
        console.log("thisDom : " + thisDom);

        if (thisDom.files && thisDom.files[0]) {
            var reader = new FileReader();
                    reader.onload = function (e) {
                $('#p_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(thisDom.files[0]);
        }
    });
});

$(document).ready(function(){
    $('.equipment_img').change(function(){
        var val = $(this).val();
        var thisDom = $(this)[0];

        console.log("val : " + val);
        console.log("thisDom : " + thisDom);

        if (thisDom.files && thisDom.files[0]) {
            var reader = new FileReader();
                    reader.onload = function (e) {
                $('#e_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(thisDom.files[0]);
        }
    });
});
