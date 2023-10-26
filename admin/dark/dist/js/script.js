GetUrlQuery();

function GetUrlQuery() {
    let url_string = location.href;
    let url = new URL(url_string);
    let st = url.searchParams.get("status");
    if (st === "ok") {
        swal({
            title: "Əla!",
            text: "Əməliyyat uğurla icra edildi!",
            icon: "success",
            button: "Ok!",
        });
        setTimeout(Redirect, 1500);
    }
    if (st === "no") {
        swal({
            title: "Təəssüf!",
            text: "Əməliyyat icra edilmədi!",
            icon: "error",
            button: "Ok!",
        });
        setTimeout(Redirect, 1500);
    }
}

function Del(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    })
        .then((willDelete) => {
            if (willDelete) {
                location.href = `${RedirectURL()}?del=ok&id=${id}`;
            } else {
                swal("İmtina edildi!");
            }
        });
}

function Redirect() {
    location.href = location.protocol + "//" + location.host + location.pathname;
}

function RedirectURL() {
    return location.protocol + "//" + location.host + location.pathname;
}

GetUrlQuery();

// BLOG  //

function BlogKatRedakte(id, i) {
    let clc = document.getElementsByClassName("blogcategoryedit")[i];
    let Ad = clc.getElementsByTagName("td")[1].textContent;
    let Slug = clc.getElementsByTagName("td")[2].textContent;
    document.getElementById("ad").value = Ad;
    document.getElementById("slug").value = Slug;
    document.getElementById("id").value = id;
}

function DelBlogKat(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    })
        .then((willDelete) => {
            if (willDelete) {
                location.href = `${RedirectURL()}?delblogkat=ok&id=${id}`;
            } else {
                swal("İmtina edildi!");
            }
        });
}

function BlogKatStatus(id) {
    $.ajax({
        url: "../settings/code/blog.php",
        data: {bkstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });
}

function BlogStatus(id) {
    $.ajax({
        url: "../settings/code/blog.php",
        data: {bstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });
}

function DelBlog(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    })
        .then((willDelete) => {
            if (willDelete) {
                location.href = `${RedirectURL()}?delblog=ok&id=${id}`;
            } else {
                swal("İmtina edildi!");
            }
        });
}

// BLOG END //

function IstStatus(id) {
    $.ajax({
        url: "../settings/code/istifadeciler.php",
        data: {iststatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });
}

function DelMktb(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delmktb=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}