require('./bootstrap');


$(document).ready(function () {

    // references
    var filter = $('#gender');
    var container = $('.students');
    var api_url = window.location.protocol + '//' + window.location.host + '/api/students/gender';


    // handlebars init
    var src = $('#student-template').html();
    var template = Handlebars.compile(src);

    // ajax on select
    filter.on('change', function () {
        var gender = $(this).val();

        $.ajax({
            url: api_url,
            method: 'POST',
            data: {
                filter: gender
            }
        }).done(function (res) {
            if (res.response.length > 0) {
                // clear container
                container.html('');

                for (var i = 0; i < res.response.length; i++) {
                    var item = res.response[i];

                    var context = {
                        name: item.name,
                        slug: item.slug,
                        img: item.img,
                        age: item.age,
                        company: item.company,
                        assunzione: (gender == 'm') ? 'Assunto' : 'Assunta',
                        role: item.role,
                        description: item.description
                    }

                    var output = template(context);
                    container.append(output);
                }
            }

        }).fail(function () {
            console.log(res.error);

        });

    });
}); // end doc ready