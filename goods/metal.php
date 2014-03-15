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
        <link rel="stylesheet" type="text/css" href="../css/goods/metal.css"/>
        <link rel="stylesheet" href="../css/owl.carousel.css">

        <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="../js/layout.js" type="text/javascript"></script>
        <script src="../js/owl.carousel.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function() {
                $(".list").owlCarousel({
                    items: 5,
                    autoPlay: 3000,
                    pagination: false,
                    itemsDesktop: false,
                    itemsDesktopSmall: false,
                    itemsTablet: false,
                    itemsTablet: false,
                    itemsMobile: false
                });
                var owl = $(".list").data("owlCarousel")

                $(".prev").on("click", function() {
                    owl.prev()
                })

                $(".next").on("click", function() {
                    owl.next()
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
                <h2 class="visuallyhidden">完美屏蔽  守护新生</h2>
            </div>

            <div id="ContentWrap">

            <div class="listWrap">
                
                <div class="list">
                    <div>
                        <img src="../images/goods/metal_caro_01.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_02.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_03.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_04.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_05.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_06.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_07.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_08.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_09.jpg">
                    </div>
                    <div>
                        <img src="../images/goods/metal_caro_10.jpg">
                    </div>
                </div>

                <div class="navigation">
                    <span class="prev"></span>
                    <span class="next"></span>
                </div>

            </div>




                <div class="product">
                    <h2 class="visuallyhidden">more product</h2>
                </div>
                <div class="product-list">
                    <img src="../images/goods/metal_product_list01.jpg">
                </div>
                <ul class="paging clearfix pull-right">
                    <li>
                        <a href="javascript:"  class="left"  data-key="left"></a>
                    </li>
                    <li>
                        <a href="javascript:" class="num active" data-key="1">1</a>
                    </li>
                    <li>
                        <a href="javascript:" class="num"  data-key="2">2</a>
                    </li>
                    <li>
                        <a href="javascript:" class="num"  data-key="3">3</a>
                    </li>
                    <li>
                        <a href="javascript:"class="right"  data-key="right"></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- footer -->
        <?php include(dirname(__FILE__)."/../inc_foot.php");?>

        <script type="text/javascript">
            $(function(){
                var curNum = 1
                var maxNum = 3
                var imgUrl = ""
                var imgPrefix = "../images/goods/metal_product_list0"
                var imgBox = $(".product-list img")
                var actionHandle = function() {
                    imgUrl = imgPrefix + curNum + ".jpg"
                    imgBox.attr("src", imgUrl)
                    $(".paging .num").eq(curNum-1).addClass("active")
                }

                $(".paging a").on("click", function(event) {
                    var dataKey = $(this).attr("data-key")

                    if ($.isNumeric(dataKey)) {
                        curNum = Number(dataKey)
                        $(".paging .num").removeClass("active")
                        $(this).addClass("active")
                        actionHandle()
                    }
                    else{
                        if (dataKey == "left" && curNum != 1) {
                            curNum -= 1
                            $(".paging .num").removeClass("active")
                            actionHandle()
                        }
                        else if (dataKey == "right" && curNum != maxNum) {
                            curNum += 1
                            $(".paging .num").removeClass("active")
                            actionHandle()
                        }
                    }
                })
            })
        </script>

        <!-- //footer -->
    </body>

</html>