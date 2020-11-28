$("#login").on("click", function () {
    var code = $("#code").val();
    $.post('model/login.inc.php', {
        code: code
    }, function (response) {
        if (response === "success") {
            window.location.href = 'index.php';
        } else {
            $(".alert").show();
            $(".alert").html(response);
        }
    })
})

$("#addcollege").on("click", function () {
    var name_college = $("#name_college").val();
    $.post('model/addcollege.inc.php', {
        name_college: name_college
    }, function (response) {
        if (response === "success") {
            window.location.href = "add_college.php";
        } else {
            alert(response);
        }
    });
})

$("#adddepartment").on("click", function () {
    var name_departments = $("#name_departments").val();
    var stage = $("#stage").val();
    $.post('model/adddepartment.inc.php', {
        name_departments: name_departments,
        id_college: id_college,
        stage: stage
    }, function (response) {
        if (response === "success") {
            window.location.href = "add_department.php?id_college=" + id_college;
        } else {
            alert(response);
        }
    });
})

$("#addsubject").on("click", function () {
    var name_subject = $("#name_subject").val();
    var stage_num = $("#stage_num").val();

    $.post('model/addsubject.inc.php', {
        id_college: id_college,
        stage: stage,
        id_departments: id_departments,
        name_subject: name_subject,
        stage_num: stage_num
    }, function (response) {
        if (response === "success") {
            window.location.href = 'add_subject.php?stage=' + stage + '&id_college=' + id_college + '&id_departments=' + id_departments;
        } else {
            alert(response);
        }
    })
})

$("#addstudent").on("click", function () {
    var fullname = $("#fullname").val();
    var username = $("#username").val();
    var password = $("#password").val();
    var classdep = $("#class").val();
    var stage = $("#stage").val();

    $.post('model/addstudent.inc.php', {
        fullname: fullname,
        username: username,
        password: password,
        classdep: classdep,
        stage: stage,
        id_college: id_college,
        id_departments: id_departments,
        stageurl: stageurl
    }, function (response) {
        if (response === "success") {
            window.location.href = 'add_student.php?stage=' + stageurl + '&id_college=' + id_college + '&id_departments=' + id_departments;
        } else {
            alert(response);
        }
    })
})


$("#addadmin").on("click", function () {
    var username = $("#username").val();
    var password = $("#password").val();
    var id_college = $("#id_college option:selected").val();
    var rule = $("#rule option:selected").val();
    $.post('model/addadmin.inc.php', {
        username: username,
        password: password,
        id_college: id_college,
        rule: rule
    }, function (response) {
        if (response === "success") {
            window.location.href = 'add_admin.php';
        } else {
            alert(response);
        }
    })
})