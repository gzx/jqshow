<link rel="stylesheet" type="text/css" href="./css/index.css"/>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="./js/layout.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var num = 0;
        var maxNum = $(".visualRote ul li").size()-1
        function visual() {
            num++
            if(num>maxNum){num=0}
            $(".visualRote ul li").fadeOut(2000);
            $(".visualRote ul li").eq(num).fadeIn(2000);
        }
        setInterval(visual,4000)
    })
</script>