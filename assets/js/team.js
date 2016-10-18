$(document).ready(function($) {

    //Ограничение на количество вакансий
    var maxVacanciesAmount = 7;
    var $add_vacancy_forms = $(".add_vacancy");

    $add_vacancy_forms.each(function() {

        $(this).validate();

        var project_id = $(this).find('#project_id').val(),
            count_vacancies = $(this).find('#count_vacancies').val(),
            $vacancy = $('.vacancy[data-pid="'+project_id+'"]');

        if(count_vacancies < maxVacanciesAmount)
        {
            $vacancy.slideDown().css('width', '100%');
            addRules($vacancy);
        }
    });

    //Ограничение на количество приглашений
    var maxInvitationsAmount = 7;
    var $add_invitation_forms = $(".add_invitation");

    $add_invitation_forms.each(function() {

        $(this).validate();

        var project_id = $(this).find('#project_id').val(),
            count_invitations = $(this).find('#count_invitations').val(),
            $invitation = $('.invitation[data-pid="'+project_id+'"]');

        if(count_invitations < maxInvitationsAmount)
        {
            $invitation.slideDown().css('width', '100%');
            addRules($invitation);
        }
    });



    //Валидация динамических полей
    function addRules(objects) {
        objects.find(".val-required").each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Поле не должно быть пустым"
                }
            });
        });

        objects.find(".val-email").each(function () {
            $(this).rules('add', {
                email: true,
                messages: {
                    required: "Пожалуйста, введите корректный E-mail"
                }
            });
        });
    }


});

