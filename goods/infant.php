<!DOCTYPE html>
<html>
    <head>
        <title>
            意大利JoynCleon婧麒防辐射服官网,专业防辐射孕妇装供应商
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Keywords" content="婧麒孕妇防辐射服,防辐射服,防辐射孕妇装,婧麒官网,婧麒旗舰店,孕妇装,婧麒官方网站,婧麒网,婧麒防辐射服,意大利婧麒防辐射服">
        <meta name="Description" content="意大利婧麒全球防辐射服领先品牌，专注于健康环保服饰领域，独家研发深海沉碇防辐射面料，产品防辐射效果超强;她简约大方的风格在服饰界可谓独树一帜，深受广大消费者喜爱！秉承“因爱而生”的品牌理念，专为年轻个性、热爱生活、健康自信的女性而设计。">

        <link rel="stylesheet" type="text/css" href="../css/index.css"/>
        <link rel="stylesheet" type="text/css" href="../css/goods/infant.css"/>

        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.theme.css">

        <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="../js/layout.js" type="text/javascript"></script>
        <script src="../js/owl.carousel.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function() {
                $(".box1 .carousel").owlCarousel({
                    singleItem:true,
                    autoPlay: true,
                    pagination: false,
                    navigation: true,
                    navigationText: ["&#60;", "&#62;"]
                });
                $(".box2 .carousel").owlCarousel({
                    singleItem:true,
                    autoPlay: true,
                    pagination: false,
                    navigation: true,
                    navigationText: ["&#60;", "&#62;"]
                });

                var box1 = $(".box1 .carousel").data("owlCarousel")
                $(".box1 .prev").on("click", function() {
                    box1.prev()
                })

                $(".box1 .next").on("click", function() {
                    box1.next()
                })

                var box2 = $(".box2 .carousel").data("owlCarousel")
                $(".box2 .prev").on("click", function() {
                    box2.prev()
                })

                $(".box2 .next").on("click", function() {
                    box2.next()
                })
            });
        </script>

    </head>
    
    <body>
        <!-- header -->
        <?php include(dirname(__FILE__)."/../inc_head.php");?>
        <!-- //header -->

        <div class="wrap">
            <div id="contentsBanner">
                <h2 class="visuallyhidden">纳米银离子束流电镀技术</h2>
            </div>

            <div id="ContentWrap">
                <div class="imgbox box1">
                    <div class="carousel">
                        <div>
                            <img src="../images/goods/infant-caro01.jpg">
                        </div>
                        <div>
                            <img src="../images/goods/infant-caro02.jpg">
                        </div>
                        天然 &#8226; 透气 &#8226; 舒心
                    </div>

                </div>
                <img src="../images/goods/infant_02.jpg" height="840">
                <div class="imgbox box2">
                    
                    <div class="carousel">
                        <div>
                            <img src="../images/goods/infant-caro03.jpg">
                        </div>
                        <div>
                            <img src="../images/goods/infant-caro04.jpg">
                        </div>
                        舒适 &#8226; 健康 &#8226; 环保
                    </div>

                </div>
                <img src="../images/goods/infant_04.jpg" height="495">
            </div>
        </div>

        <!-- footer -->
        <?php include(dirname(__FILE__)."/../inc_foot.php");?>
        <!-- //footer -->
    </body>

</html>