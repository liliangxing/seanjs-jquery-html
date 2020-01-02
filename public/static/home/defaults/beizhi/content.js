var scrollFlag = true;
var canScrollFlag = false;
window.onload = function () {
    var oWin = document.getElementById("win");
    var oLay = document.getElementById("overlay");
    var oBtn = document.getElementById("popmenu");
    var oClose = document.getElementById("close");
    var right_nav = document.getElementById("right_nav");
    var right_nav_click = document.getElementById("right_nav_click");
    right_nav_click.onclick = function () {
        right_nav.style.display = "block";
        right_nav_click.style.display = "none"
    };
    oBtn.onclick = function () {
        oLay.style.display = "block";
        oWin.style.display = "block"
    };
    oLay.onclick = function () {
        oLay.style.display = "none";
        oWin.style.display = "none"
    }
};

$(function(){

    $("#goTop").click(function () {
        scrollFlag = false;
        $('body,html').animate({scrollTop: 0}, 100);
        setTimeout(function () {
            canScrollFlag = true;
        }, 200);
    });
    $("#content img").click(function(){
        var imgArray = [];
        var curImageSrc = canonical_uri($(this).attr('src'), window.location.host +"/");
        console.log(curImageSrc);
        var oParent = $(this).parent();
        if (curImageSrc && !oParent.attr('href')) {
            $('#content img').each(function(index, el) {
                var itemSrc = canonical_uri($(this).attr('src'),window.location.host +"/");
                imgArray.push(itemSrc);
            });
            wx.previewImage({
                current: curImageSrc,
                urls: imgArray
            });
        }
    });

    $('.font_size_click').on('click',function(){
        var data_id = $(this).attr("data-id");
        $("#content p").css("font-size", data_id+"em");
        $(this).siblings().css("text-decoration","underline");
        $(this).css("text-decoration","");
        var i;
        if(data_id=="1.4"){
            i="0";
        }else if(data_id=="1.0"){
            i="2";
        }else {
            i="1";
        }
        setCookie(font_size_setting,i,7);
    });
    $('#search_btn').click(highlight);//点击search时，执行highlight函数；
    $('#search_close').click(function (e) {
        clearSelection();//先清空一下上次高亮显示的内容；
        $(this).hide();
        $("#search_btn").val("页内查找");
        $("#search_btn").css("position","static");
    });
    $('#searchstr').keydown(function (e) {
        var key = e.which;
        if (key == 13) highlight();
    });
    $(".ui-btn-left_pre").click(function(){
        var   backUrl= $(this).attr('data-url');
        if(history.length > 0){
            window.history.go( -1 );
        }else{
            window.location.href =backUrl;
        }
    });
});

var i = 0;
var sCurText;
function highlight(){
    clearSelection();//先清空一下上次高亮显示的内容；
    var flag = 0;
    var bStart = true;
    $('#tip').text('');
    $('#tip').hide();
    var searchText = $('#searchstr').val();
    var _searchTop = $('#searchstr').offset().top+30;
    var _searchLeft = $('#searchstr').offset().left;
    if($.trim(searchText)==""){
        //alert(123);
        showTips("请输入查找内容",_searchTop,3,_searchLeft);
        return;
    }
    var searchText = $('#searchstr').val();//获取你输入的关键字；
    var regExp = new RegExp(searchText, 'g');//创建正则表达式，g表示全局的，如果不用g，则查找到第一个就不会继续向下查找了；
    var content = $("#content").text();
    if (!regExp.test(content)) {
        showTips("没有找到要查找的内容",_searchTop,3,_searchLeft);
        return;
    } else {
        if (sCurText != searchText) {
            i = 0;
            sCurText = searchText;
        }
    }
    $('#content p,#content div').each(function(){
        var html = $(this).html();
        var newHtml = html.replace(regExp, '<span class="highlight">'+searchText+'</span>');//将找到的关键字替换，加上highlight属性；
        $(this).html(newHtml);//更新；
        flag = 1;
    });
    if (flag == 1) {
        if ($(".highlight").length> 1) {
            var _top = $(".highlight").eq(i).offset().top+$(".highlight").eq(i).height();

            var _left = $(".highlight").eq(i).offset().left;

            $("#tip").show();
            $("#tip").offset({ top: _top, left: _left });
            $("#search_btn").val("下一个 "+(i+1)+"/"+$(".highlight").length+"");
            $("#search_btn").css("position","fixed");
            $("#search_btn").css("top","0.3rem");
            $("#search_btn").css("right", (($(window).width()-$("body").width())/2+40) + "px");
            $("#search_btn").css("z-index","3");
            $("#search_close").css("right", (($(window).width()-$("body").width())/2+5) + "px");
            $("#search_close").show();
            $(".highlight").eq(i).css("backgroundColor","#ff9632");
            $(".highlight").eq(i).css("color","#000000");
        }else{
            $(".highlight").css("backgroundColor","#ff9632");
            $(".highlight").css("color","#000000");
            var _top = $(".highlight").offset().top+$(".highlight").height();
            var _left = $(".highlight").offset().left;
            $('#tip').show();
            $("#tip").html(_tip).offset({ top: _top, left: _left });
        }
        var _tWidth =  $(".highlight").eq(i).width();
        $("#tip").css("width",_tWidth);
        $("html, body").animate({ scrollTop: _top - 92 });
        i++;
        if (i > $(".highlight").length - 1) {
            i = 0;
        }
    }
}

function clearSelection(){
    $('#content p,#content div').each(function(){
        //找到所有highlight属性的元素；
        $(this).find('.highlight').each(function(){
            $(this).replaceWith($(this).html());//将他们的属性去掉；
        });
    });
}

//mask
var tipsDiv = '<div class="tipsClass"></div>';
$( 'body' ).append( tipsDiv );
function showTips( tips, height, time,left ){
    var windowWidth = document.documentElement.clientWidth;
    $('.tipsClass').text(tips);
    $( 'div.tipsClass' ).css({
        'top' : height + 'px',
        'left' :left + 'px',
        'position' : 'absolute',
        'padding' : '8px 6px',
        'background': '#000000',
        'font-size' : 14 + 'px',
        'font-weight': 900,
        'margin' : '0 auto',
        'text-align': 'center',
        'width' : 'auto',
        'z-index':'4',
        'color' : '#fff',
        'border-radius':'2px',
        'opacity' : '0.8' ,
        'box-shadow':'0px 0px 10px #000',
        '-moz-box-shadow':'0px 0px 10px #000',
        '-webkit-box-shadow':'0px 0px 10px #000'
    }).show();
    setTimeout( function(){$( 'div.tipsClass' ).fadeOut();}, ( time * 1000 ) );
}
var font_size_setting="font_size"+self.location.hostname.toString().replace(/\./g,"");
var font_size=getCookie(font_size_setting);
function canonical_uri(src, base_path)
{
    var root_page = /^[^?#]*\//.exec(location.href)[0],
        root_domain = /^\w+\:\/\/\/?[^\/]+/.exec(root_page)[0],
        absolute_regex = /^\w+\:\/\//;
    // is `src` is protocol-relative (begins with // or ///), prepend protocol
    if (/^\/\/\/?/.test(src))
    {
        src = location.protocol + src;
    }
    // is `src` page-relative? (not an absolute URL, and not a domain-relative path, beginning with /)
    else if (!absolute_regex.test(src) && src.charAt(0) != "/")
    {
        // prepend `base_path`, if any
        src = (base_path || "") + src;
    }
    // make sure to return `src` as absolute
    return absolute_regex.test(src) ? src : ((src.charAt(0) == "/" ? root_domain : root_page) + src);
}


function overrrideUrl(pageIndex) {

    var url = window.location.href;
    var   newUrl=  changeURLArg(url, "p", pageIndex);
    window.history.pushState({}, "", newUrl);
}
function changeURLArg(url, arg, arg_val) {
    /// <summary>
    /// url参数替换值
    /// </summary>
    /// <param name="url">目标url </param>
    /// <param name="arg">需要替换的参数名称</param>
    ///<param name="arg_val">替换后的参数的值</param>
    /// <returns>参数替换后的url </returns>
    var pattern = arg + '=([^&]*)';
    var replaceText = arg + '=' + arg_val;
    if (url.match(pattern)) {
        var tmp = '/(' + arg + '=)([^&]*)/gi';
        tmp = url.replace(eval(tmp), replaceText);
        return tmp;
    } else {
        if (url.match('[\?]')) {
            return url + '&' + replaceText;
        } else {
            return url + '?' + replaceText;
        }
    }
    return url + '\n' + arg + '\n' + arg_val;
}
//获取url中的参数
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg); //匹配目标参数
    if (r != null) return unescape(r[2]); return null; //返回参数值
}