$(document).ready(() => {
    getData();

    $('.form').submit(() => {
        var civility = $('.civility').val();
        var firstname = $('.firstname').val();
        var lastname = $('.lastname').val();
        var email = $('.email').val();
        var address = $('.address').val();
        var city = $('.city').val();
        var country = $('.country').val();
        var zip = $('.zip').val();
        var job = $('.job').val();
        var message = $('.message').val();

        $.post('insert.php', {civility:civility,firstname:firstname,lastname:lastname,email:email,address:address,city:city,country:country,zip:zip,job:job,message:message}, (info) => {
            $('.return').html(info).slideDown();
            $('.civility').prop('checked', false);
            $('.firstname').val('');
            $('.lastname').val('');
            $('.email').val('');
            $('.address').val('');
            $('.city').val('');
            $('.country').val('');
            $('.zip').val('');
            $('.job').val('');
            $('.message').val('');
            getData();
        })
        return false;
    });

    function getData() {
        $.post('get.php', (data) => {
            $('.liste').html(data);
        })
    }

    setInterval(getData,1000);
})