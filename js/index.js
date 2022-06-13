// 用戶切換 mainNavTop
let oNavTop = document.getElementById("mainNavTop")
let oNavCon = document.getElementById("mainNavCon")
let aTopul = oNavTop.getElementsByTagName("ul")
let aConul = oNavCon.getElementsByTagName("ul")
let aTopli = oNavTop.getElementsByTagName("li")
let aConli = oNavCon.getElementsByTagName("li")

aConul[0].style.display = "flex"

for(let i=0;i<aTopli.length;i++){
    aTopli[i].index=i
    aTopli[i].onclick = function(){
        for(let i=0;i<aConul.length;i++){
            aConul[i].style.display = "none"
        }
        aConul[this.index].style.display = "flex"
    }
}


// for(let i=0;i<aProfile_info_row;i++){
//     aProfile_info_row[i].onclick
// }

// $(function(){
//     $(".CPN").hide(); $(".CPN-inner").hide();
//     $(".TCH").hide(); $(".TCH-inner").hide();
//     $(".US").hide(); $(".US-inner").hide();
//     // $("#mainNavTop ul"). eq(0).click(function(){
//     //     console.log("87")
//     // })
//     $(".STUctrl").click(function(){
//         $(".STU").show(); 
//         $(".CPN").hide(); $(".CPN-inner").hide();
//         $(".TCH").hide(); $(".TCH-inner").hide();
//         $(".US").hide(); $(".US-inner").hide();
//     })
//     $(".CPNctrl").click(function(){
//         $(".STU").hide(); $(".STU-inner").hide();
//         $(".CPN").show(); $("#CPN01").show();
//         $(".TCH").hide(); $(".TCH-inner").hide();
//         $(".US").hide(); $(".US-inner").hide();
//     })
//     $(".TCHctrl").click(function(){
//         $(".STU").hide(); $(".STU-inner").hide();
//         $(".CPN").hide(); $(".CPN-inner").hide();
//         $(".TCH").show(); $("#TCH01").show();
//         $(".US").hide(); $(".US-inner").hide();
//     })
//     $(".USctrl").click(function(){
//         $(".STU").hide(); $(".STU-inner").hide();
//         $(".CPN").hide(); $(".CPN-inner").hide();
//         $(".TCH").hide(); $(".TCH-inner").hide();
//         $(".US").show(); $("#US01").show();
//     })
// })


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

// CPN
// $(function(){
//     var $li = $('ul#CPN li');
//         $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.CPN-inner').hide(); 
    
//         $li.click(function(){
//             $($(this).find('a'). attr ('href')).show().siblings ('.CPN-inner').hide();
//             $(this).addClass('active'). siblings ('.active').removeClass('active');
//         });
// });
// TCH
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