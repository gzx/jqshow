/* snb */
$(document).ready(function(){
    function closeSnb(){
        $(".lnb li a ").each(function(index, value){
            $(value).removeClass("active")
        })
        $("#snbWrap").fadeOut(500)
    }

    $(".lnb li a").mouseover(function(){
        if ($(this).hasClass("maintain")) {
            $("#snb dd").hide()
            return closeSnb()
        }

        $(".lnb li a ").each(function(index, value){
            $(value).removeClass("active")
        })

        var thisTab = $(".lnb li a").index(this);
        $(this).addClass("active")
        $("#snbWrap").show()
        $("#snb dd").hide()
        $("#snb dd").eq(thisTab).show()
    })

    $("#snbWrap").mouseleave(function(){
        closeSnb()
    })
})

/* family */
$(document).ready(function(){
    $(".family dt").mouseover(function(){
        $(".family dd").slideDown()
    })
    $(".family").mouseleave(function(){
        $(".family dd").slideUp()
    })
})