$(document).ready(function($) {

    //Валидация формы команды
    var validatorOptions = {
        rules: {
            project_title: "required",
            project_description: "required",
            project_branch: "required",
            email_leader: {
                required: true,
                email: true,
                remote: {
                    url: "/form_ajax/uniqueleader",
                    type: "post"
                }
            },
            password: {
                required: true,
                minlength: 5
            },
            password_conf: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            project_title: "Пожалуйста, введите название доклада",
            project_description: "Пожалуйста, введите описание доклада",
            project_branch: "Пожалуйста, укажите, к какой отрасли относится доклад",
            email_leader: {
                required: "Пожалуйста, введите электронный адрес.",
                email: "Пожалуйста, введите корректный электронный адрес.",
                remote: "Данный электронный адрес уже занят!"
            },
            password: {
                required: "Пожалуйста, введите пароль.",
                minlength: "Пароль не должен быть короче 5 символов."
            },
            password_conf: {
                required: "Пожалуйста, повторите пароль.",
                equalTo: "Пароль и его повтор должны совпадать."
            }
        }
    };

    var form = $("#project_form");
    form.validate(validatorOptions);

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


    //Динамическое добавление/удаление приглашений (в прошлом - участников)
    var invitationsCurrent = 0,
        invitationsAmount = 0,
        maxInvitationsAmount = 7,
        invitations = $('#invitations');

    function addInvitation(invitationsCount) {
        var tmp = $('#invitation_template').clone();
        tmp.html(tmp.html().replace(/myid/g, invitationsCount));
        var newInvitation = tmp.children().clone().appendTo(invitations);
        newInvitation.slideDown().css('width', '100%');

        initializeCurrentInvitation(invitationsCount);
    }

    function initializeCurrentInvitation(invitationsCount)
    {
        $('#remove_author\\['+invitationsCount+'\\]').on('click', function() {
            if(invitationsAmount > 0)
            {
                invitationsAmount--;
                $('.collapse.author[data-id="'+invitationsCount+'"]').slideUp("slow", function () {
                    $(this).remove();
                });
            }
        });
        $('.add_author\\['+invitationsCount+'\\]').each(function() {
            $(this).on('click', function(){
                if(invitationsAmount < maxInvitationsAmount)
                {
                    invitationsCurrent++;
                    invitationsAmount++;
                    addInvitation(invitationsCurrent);
                }
            });
        });
        addRules(invitations);
    }

    initializeCurrentInvitation(invitationsCurrent);


    //Динамическое добавление/удаление вакансий
    var vacanciesCurrent = 0,
        vacanciesAmount = 0,
        maxVacanciesAmount = 7,
        vacancies = $('#vacancies');

    function addVacancy(vacanciesCount) {
        var tmp = $('#vacancy_template').clone();
        tmp.html(tmp.html().replace(/vid/g, vacanciesCount));
        var newVacancy = tmp.children().clone().appendTo(vacancies);
        newVacancy.slideDown().css('width', '100%');

        initializeCurrentVacancy(vacanciesCount);
    }

    function initializeCurrentVacancy(vacanciesCount)
    {
        $('#remove_vacancy\\['+vacanciesCount+'\\]').on('click', function() {
            if(vacanciesAmount > 0)
            {
                vacanciesAmount--;
                $('.collapse.vacancy[data-id="'+vacanciesCount+'"]').slideUp("slow", function () {
                    $(this).remove();
                });
            }
        });

        $('.add_vacancy\\['+vacanciesCount+'\\]').each(function() {
            $(this).on('click', function(){
                if(vacanciesAmount < maxVacanciesAmount)
                {
                    vacanciesCurrent++;
                    vacanciesAmount++;
                    addVacancy(vacanciesCurrent);
                }
            });
        });

        addRules(vacancies);
    }

    //Стартовые кнопки
    $('.add_vacancy').each(function() {
        $(this).on('click', function(){
            if(vacanciesAmount < maxVacanciesAmount)
            {
                vacanciesCurrent++;
                vacanciesAmount++;
                addVacancy(vacanciesCurrent);
            }
        });
    });

    $('.add_author').each(function() {
        $(this).on('click', function(){
            if(invitationsAmount < maxInvitationsAmount)
            {
                invitationsCurrent++;
                invitationsAmount++;
                addInvitation(invitationsCurrent);
            }
        });
    });
});

