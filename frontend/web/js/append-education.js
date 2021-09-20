$(document).ready(function () {
    window.educationsFormIndex = 0;

    $('.add-education-form-button').click(function (e) {
        e.preventDefault();

        $.ajax({
            url: "/resume/add-education-form",
            success: function (result) {
                $("#educations-container").append(result.replaceAll('Education[index]', 'Education[' + window.educationsFormIndex + ']'));
                window.educationsFormIndex++;
            }
        });
    })
})
