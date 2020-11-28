$("#login").on("click", function () {
    var username = $("#username").val();
    var password = $("#password").val();
    $.post('model/login.inc.php', {
        username: username,
        password: password
    }, function (response) {
        if (response === "success") {
            window.location.href = 'index.php';
        } else {
            $(".alert").show();
            $(".alert").html(response);
        }
    })
})