$(document).ready(function () {
// Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    ;
    $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 30), '='].join(' '));
    //EXAMPLE REGISTER FORM
    $('#registerForm').bootstrapValidator({
        message: 'El Campo No Puede Estar Vacio Es Requerido!.',
        fields: {
            usuario_user_name: {
                message: 'El Nombre De Usuario No Es Valido!.',
                validators: {
                    notEmpty: {
                        message: 'El Nombre Del Usuario Es Requerido Y no Puede Estar Vacio!.'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El nombre Del Usuario Debe Ser Minimo 6 y Maximo 30 caracteres!.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El nombre del usuario Solo Permite Alfanumericos No Permite Simbolos!.'
                    },
                    different: {
                        field: 'usuario_password_1',
                        message: 'El Usuario y Password no Puede Ser Iguales!.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            usuario_password_1: {
                validators: {
                    notEmpty: {
                        message: 'EL Password Es Requerido Y No Puede estar Vacio!.'
                    },
                    identical: {
                        field: 'usuario_password_2',
                        message: 'Los Password Ingresados No Son Iguales!.'
                    },
                    different: {
                        field: 'usuario_user_name',
                        message: 'El Password no Puede Ser Igual al Nombre Del Usuario!.'
                    }
                }
            },
            usuario_password_2: {
                validators: {
                    notEmpty: {
                        message: 'El Password Es Requerido Y No Puede estar Vacio!.'
                    },
                    identical: {
                        field: 'usuario_password_1',
                        message: 'Los Password Ingresados No Son Iguales!.'
                    },
                    different: {
                        field: 'usuario_user_name',
                        message: 'El Password no Puede Ser Igual al Nombre Del Usuario!.'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'Necesitas Aceptar Los Terminos Y Condiciones!.'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function (value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
    $('#eventForm').bootstrapValidator({
        message: 'El Campo No Puede Estar Vacio Es Requerido!.',
        fields: {
            evento_nombre: {
                message: 'El Nombre Del Evento No Es Valido!.',
                validators: {
                    notEmpty: {
                        message: 'El Nombre Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    stringLength: {
                        min: 6,
                        max: 45,
                        message: 'El nombre Del Evento Debe Ser Minimo 6 y Maximo 45 caracteres!.'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'El nombre del Evento Solo Permite Alfanumericos No Permite Simbolos!.'
                    }
                }
            },
            evento_direccion: {
                message: 'La Direccion No Es Valida!.',
                validators: {
                    notEmpty: {
                        message: 'La Direccion Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    stringLength: {
                        min: 10,
                        max: 150,
                        message: 'La Direccion Del Evento Debe Ser Minimo 10 y Maximo 150 caracteres!.'
                    }
                }
            },
            evento_imagen: {
                message: 'tipo De Archivo No Es Valido!.',
                validators: {
                    notEmpty: {
                        message: 'La Imagen Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    }
                }
            },
            evento_fecha_inicial_evento: {
                validators: {
                    notEmpty: {
                        message: 'La Fecha Inicial  Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    date: {
                        format: 'MM/DD/YYYY h:m A',
                        message: 'EL Dato Ingresado No Es Una Fecha Y Hora Valida!.'
                    }

                }
            },
            evento_fecha_final_evento: {
                validators: {
                    notEmpty: {
                        message: 'La Fecha Final  Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    date: {
                        format: 'MM/DD/YYYY h:m A',
                        message: 'EL Dato Ingresado No Es UnaFecha Y Hora Valida!.'
                    }
                }
            },
            evento_descripcion: {
                message: 'La Descripcion No Es Valida!.',
                validators: {
                    notEmpty: {
                        message: 'La Descripcion Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    stringLength: {
                        min: 15,
                        max: 1024,
                        message: 'La Descripcion Del Evento Debe Ser Minimo 15 y Maximo 1024 caracteres!.'
                    }
                }
            },
            evento_fecha_inicial_publicacion: {
                validators: {
                    notEmpty: {
                        message: 'La Fecha Inicial De Publicacion  Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    date: {
                        format: 'MM/DD/YYYY h:m A',
                        message: 'EL Dato Ingresado No Es Una Fecha Y Hora Valida!.'
                    }
                }
            },
            evento_fecha_final_publicacion: {
                validators: {
                    notEmpty: {
                        message: 'La Fecha Final De Publicacion  Del Evento Es Requerido Y no Puede Estar Vacio!.'
                    },
                    date: {
                        format: 'MM/DD/YYYY h:m A',
                        message: 'EL Dato Ingresado No Es UnaFecha Y Hora Valida!.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            evento_categoria_id: {
                validators: {
                    notEmpty: {
                        message: 'El Tipo Del Evento Debe Estar Establecido Y No Vacio!.'
                    },
                    digits: {
                        message: 'Solo Puede Contener Digitos'
                    }
                },
            
            }
        }
    });

    function validate()
    {
        var extensions = new Array("jpg", "jpeg", "gif", "png", "bmp");

        /*
         // Alternative way to create the array
         
         var extensions = new Array();
         
         extensions[1] = "jpg";
         extensions[0] = "jpeg";
         extensions[2] = "gif";
         extensions[3] = "png";
         extensions[4] = "bmp";
         */

        var evento_imagen = document.form.evento_imagen.value;

        var image_length = document.form.evento_imagen.value.length;

        var pos = evento_imagen.lastIndexOf('.') + 1;

        var ext = evento_imagen.substring(pos, image_length);

        var final_ext = ext.toLowerCase();

        for (i = 0; i < extensions.length; i++)
        {
            if (extensions[i] == final_ext)
            {
                return true;
            }
        }

        alert("Solo Puedes Subir Imagenes con Una De Las Siguientes extensiones: " + extensions.join(', ') + ".");
        return false;
    }

    //EXAMPLE CONTACT FORM
    $('#contactForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            name: {
                message: 'Name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Name is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'Name can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            Contactmessage: {
                validators: {
                    notEmpty: {
                        message: 'Message is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Message must be more than 6 characters long'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function (value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#ExpressionValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            color: {
                validators: {
                    hexColor: {
                        message: 'The input is not a valid hex color'
                    }
                }
            },
            zipCode: {
                validators: {
                    usZipCode: {
                        message: 'The input is not a valid US zip code'
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#NotEmptyValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#IdenticalValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
    //Regular expression based validators
    $('#OtherValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            ages: {
                validators: {
                    lessThan: {
                        value: 100,
                        inclusive: true,
                        message: 'The ages has to be less than 100'
                    },
                    greaterThan: {
                        value: 10,
                        inclusive: false,
                        message: 'The ages has to be greater than or equals to 10'
                    }
                }
            }
        }
    });
});