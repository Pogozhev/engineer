$(document).ready(function($) {

    //Валидация формы изменения профиля
    var validatorOptionsProfile = {
        rules: {
            competences: "required",
            interests: "required",
        },
        messages: {
            competences: "Пожалуйста, опишите свои компетенции",
            interests: "Пожалуйста, опишите сферы своих интересов",
        }
    };

    var validatorOptionsPassword = {
        rules: {
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

    var profileForm = $("#profile_form");
    profileForm.validate(validatorOptionsProfile);
    addRules(profileForm);
    initializeSlideDowns();

    //Валидация полей
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

    //Инициализация интерактивных полей
    function initializeSlideDowns()
    {
        $("input[type=radio].school").on('change', function () {
            if (!this.checked) return;
            $(".collapse.university").slideUp();
            $(".collapse.school").slideDown();
        }).trigger("change");

        $("input[type=radio].university").on('change', function () {
            if (!this.checked) return;
            $(".collapse.school").slideUp();
            $(".collapse.university").slideDown();
        }).trigger("change");

        $("input[type=radio].elit_no").on('change', function() {
            if (!this.checked)  return;
            $(".collapse.elit").slideUp();
        }).trigger("change");

        $("input[type=radio].elit_yes").on('change', function() {
            if (!this.checked)  return;
            $(".collapse.elit").slideDown();
        }).trigger("change");
    }

    //Валидация формы изменения пароля
    var validatorOptionsPassword = {
        rules: {
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

    var passwordForm = $("#password_form");
    passwordForm.validate(validatorOptionsPassword);
});

