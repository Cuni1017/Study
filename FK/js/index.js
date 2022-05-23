// // 用戶切換 mainNavTop

// // var content=document.getElementById("mainNavTop"); 
// // var items=content.getElementsByTagName("ul"); 
// // var iSTU=items[0].getElementsByTagName("li");
// // var iCPN=items[1].getElementsByTagName("li");

// // console.log(STU)

$(function(){
    $(".CPN").hide(); $(".CPN-inner").hide();
    $(".TCH").hide(); $(".TCH-inner").hide();
    $(".US").hide(); $(".US-inner").hide();
    // $("#mainNavTop ul"). eq(0).click(function(){
    //     console.log("87")
    // })
    $(".STUctrl").click(function(){
        $(".STU").show(); 
        $(".CPN").hide(); $(".CPN-inner").hide();
        $(".TCH").hide(); $(".TCH-inner").hide();
        $(".US").hide(); $(".US-inner").hide();
    })
    $(".CPNctrl").click(function(){
        $(".STU").hide(); $(".STU-inner").hide();
        $(".CPN").show(); $("#CPN01").show();
        $(".TCH").hide(); $(".TCH-inner").hide();
        $(".US").hide(); $(".US-inner").hide();
    })
    $(".TCHctrl").click(function(){
        $(".STU").hide(); $(".STU-inner").hide();
        $(".CPN").hide(); $(".CPN-inner").hide();
        $(".TCH").show(); $("#TCH01").show();
        $(".US").hide(); $(".US-inner").hide();
    })
    $(".USctrl").click(function(){
        $(".STU").hide(); $(".STU-inner").hide();
        $(".CPN").hide(); $(".CPN-inner").hide();
        $(".TCH").hide(); $(".TCH-inner").hide();
        $(".US").show(); $("#US01").show();
    })
})

// // 用戶內選單 mainNavCon
// // STU
// $(function(){
//     var $li = $('ul#STU li');
//         $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.STU-inner').hide(); 
    
//         $li.click(function(){
//             $($(this).find('a'). attr ('href')).show().siblings ('.STU-inner').hide();
//             $(this).addClass('active'). siblings ('.active').removeClass('active');
//         });
// });

// // CPN
// $(function(){
//     var $li = $('ul#CPN li');
//         $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.CPN-inner').hide(); 
    
//         $li.click(function(){
//             $($(this).find('a'). attr ('href')).show().siblings ('.CPN-inner').hide();
//             $(this).addClass('active'). siblings ('.active').removeClass('active');
//         });
// });
// // TCH
// $(function(){
//     var $li = $('ul#TCH li');
//         $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.TCH-inner').hide(); 
    
//         $li.click(function(){
//             $($(this).find('a'). attr ('href')).show().siblings ('.TCH-inner').hide();
//             $(this).addClass('active'). siblings ('.active').removeClass('active');
//         });
// });
// // US
// $(function(){
//     var $li = $('ul#US li');
//         $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.US-inner').hide(); 
    
//         $li.click(function(){
//             $($(this).find('a'). attr ('href')).show().siblings ('.US-inner').hide();
//             $(this).addClass('active'). siblings ('.active').removeClass('active');
//         });
// });



document.write("<script language=javascript src="+"../"+"></script>")