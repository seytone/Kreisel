$(document).ready(function(){$("#lp1Y").click(function(){$("#lp1Y").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp1N").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp1").attr("value","1");p1=$("#vp1").val();$("#next1").fadeIn("slow")});$("#lp1N").click(function(){$("#lp1N").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp1Y").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp1").attr("value","0");p1=$("#vp1").val();$("#next1").fadeIn("slow")});$("#lp2Y").click(function(){$("#lp2Y").css({color:"yellow",
"text-shadow":"0px 0px 5px #000"});$("#lp2N").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp2").attr("value","1");p2=$("#vp2").val();$("#next2").fadeIn("slow")});$("#lp2N").click(function(){$("#lp2N").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp2Y").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp2").attr("value","0");p2=$("#vp2").val();$("#next2").fadeIn("slow")});$("#lp3Y").click(function(){$("#lp3Y").css({color:"yellow","text-shadow":"0px 0px 5px #000"});
$("#lp3N").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp3").attr("value","1");p3=$("#vp3").val();$("#next3").fadeIn("slow")});$("#lp3N").click(function(){$("#lp3N").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp3Y").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp3").attr("value","0");p3=$("#vp3").val();$("#next3").fadeIn("slow")});$("#lp4Y").click(function(){$("#lp4Y").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp4N").css({color:"black","text-shadow":"0px 0px 5px #fff"});
$("#vp4").attr("value","1");p4=$("#vp4").val();$("#next4").fadeIn("slow")});$("#lp4N").click(function(){$("#lp4N").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp4Y").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp4").attr("value","0");p4=$("#vp4").val();$("#next4").fadeIn("slow")});$("#lp5Y").click(function(){$("#lp5Y").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp5N").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp5").attr("value","1");p5=
$("#vp5").val();$("#next5").fadeIn("slow")});$("#lp5N").click(function(){$("#lp5N").css({color:"yellow","text-shadow":"0px 0px 5px #000"});$("#lp5Y").css({color:"black","text-shadow":"0px 0px 5px #fff"});$("#vp5").attr("value","0");p5=$("#vp5").val();$("#next5").fadeIn("slow")});$("#ver").click(function(){j1=$("ol#lista li").eq(0).text();j2=$("ol#lista li").eq(1).text();j3=$("ol#lista li").eq(2).text();j4=$("ol#lista li").eq(3).text();j5=$("ol#lista li").eq(4).text();$("#marcador, #logo").fadeOut(1E3);
$("#ajax").load("carta.php",{p1:p1,p2:p2,p3:p3,p4:p4,p5:p5,j1:j1,j2:j2,j3:j3,j4:j4,j5:j5},function(){$("#ajax").fadeIn("slow")})});$("#verj").click(function(){$("#ajaxToy").load("juguetes.php",{id:"dato"},function(){$("#ajaxToy").fadeIn("slow")})});var a=1;$("a.vlink"+a).addClass("selected");$("a.clk").click(function(){a=$(this).attr("id");$("#wrapper").scrollTo($("a.link"+a).attr("href"),800);setPosition($("a.link"+a).attr("href"),"#background","0px","800px","1600px","2400px","3200px","4000px","4800px",
"5400px");setPosition($("a.link"+a).attr("href"),"#cloud1","0px","300px","600px","900px","1200px","1500px","1800px","2100px");setPosition($("a.link"+a).attr("href"),"#cloud2","0px","400px","800px","1200px","1600px","2000px","2400px","2800px");setPosition($("a.link"+a).attr("href"),"#glob","6300px","5400px","4500px","3600px","2700px","1800px","900px","0px");setPosition($("a.link"+a).attr("href"),"#mount1","0px","800px","1600px","2400px","3200px","4000px","4800px","5400px");setPosition($("a.link"+a).attr("href"),
"#mount2","0px","900px","1800px","2700px","3600px","4500px","5400px","6300px");setPosition($("a.link"+a).attr("href"),"#arbol1","0px","500px","1000px","1500px","2000px","2500px","3000px","3500px");setPosition($("a.link"+a).attr("href"),"#arbol2","0px","700px","1400px","2100px","2800px","3500px","4200px","4900px");setPosition($("a.link"+a).attr("href"),"#frente","0px","1000px","2000px","3000px","4000px","5000px","6000px","7000px");$("a.vclk").removeClass("selected");$("a.vlink"+a).addClass("selected");
return!1});$("window").scroll(function(){alert("Evento del Scroll")});$("html").keydown(function(b){if(39==b.which){if(8>a)return a++,$("#wrapper").scrollTo($("a.link"+a).attr("href"),800),setPosition($("a.link"+a).attr("href"),"#background","0px","800px","1600px","2400px","3200px","4000px","4800px","5400px"),setPosition($("a.link"+a).attr("href"),"#cloud1","0px","300px","600px","900px","1200px","1500px","1800px","2100px"),setPosition($("a.link"+a).attr("href"),"#cloud2","0px","400px","800px","1200px",
"1600px","2000px","2400px","2800px"),setPosition($("a.link"+a).attr("href"),"#glob","5400px","4800px","4000px","3200px","2400px","1600px","800px","0px"),setPosition($("a.link"+a).attr("href"),"#mount1","0px","800px","1600px","2400px","3200px","4000px","4800px","5400px"),setPosition($("a.link"+a).attr("href"),"#mount2","0px","900px","1800px","2700px","3600px","4500px","5400px","6300px"),setPosition($("a.link"+a).attr("href"),"#arbol1","0px","500px","1000px","1500px","2000px","2500px","3000px","3500px"),
setPosition($("a.link"+a).attr("href"),"#arbol2","0px","700px","1400px","2100px","2800px","3500px","4200px","4900px"),setPosition($("a.link"+a).attr("href"),"#frente","0px","1000px","2000px","3000px","4000px","5000px","6000px","7000px"),$("a.vclk").removeClass("selected"),$("a.vlink"+a).addClass("selected"),!1;alert("Has llegado al limite")}})});