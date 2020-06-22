$(function() {
    $(".contents").css("display", "none");
});


$(function() {


    var loadCount = 0;

    var aCnt = 0;


    $(".loading-Img").delay(500).fadeIn("slow");


    $("img").each(function() {


        var img = new Image();
        img.src = $(this).attr("src");

        var cnt = 0;
        var timer = setInterval(function() {
            cnt++;


            if (img.width > 0 || cnt > 10) {
                cnt = 0;

                clearInterval(timer);


                imgLength = $("img").length * 10;

                loadCount++;

                $(".loading-Bar").css({

                    "width": (loadCount / imgLength) * 100 + "%"
                });
            }
        }, 50);


        var tndST = setInterval(function() {
            loadCount++;
            aCnt++;

            if (aCnt > 9) {
                clearInterval(tndST);
                aCnt = 0;

            } else {
                $(".loading-Bar").css({

                    "width": (loadCount / imgLength) * 100 + "%"
                });
            }

            if (loadCount > imgLength) {

                $(".loading-Bar").delay(1800).fadeOut("normal");


                $(".loading-Img").delay(500).fadeOut("normal");

                $(".contents").delay(1500).fadeIn("slow");

            }
        }, 320);

    });
});