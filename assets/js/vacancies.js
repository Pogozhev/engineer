$(document).ready(function($) {
    $(".select2-input-tags").select2({
        tags: true
    });

    var validatorOptions = {
        rules: {
            title: "required",
            description: "required"
        },
        messages: {
            title: "Пожалуйста, введите название идеи",
            description: "Пожалуйста, введите содержание идеи"
        }
    };

    var $forms = $('.form_idea');
    $forms.each(function(){
        $(this).validate(validatorOptions);
    });

    var $edit_btn = $('.edit_btn');
    $edit_btn.on('click', function () {
        var iid = $(this).data('iid');

        $(".form"+iid).slideToggle();
        $(".idea"+iid).slideToggle();
    });
});

