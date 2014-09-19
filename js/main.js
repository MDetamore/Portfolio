this.imagePreview = function(){ 
        xOffset = -20;
        yOffset = 40;       
        
    $(".projectscreenshot").hover(function(e){
        this.t = this.title;
        this.title = "";    
         var c = (this.t != "") ? "<br/>" + this.t : "";
         $("body").append("<p id='preview'><img src='"+ this.src +"' alt='Image preview' />"+ c +"</p>");                               
         $("#preview")
            .css({
                top:(e.pageY + 20) + "px",
                left:(e.pageX - $("#preview").width()/2) + "px"
            })
            .fadeIn("slow");
    },
    
    function(){
        this.title = this.t;
        $("#preview").remove();

    }); 
    
    $(".projectscreenshot").mousemove(function(e){
        $("#preview")
            .css("top",(e.pageY + 20) + "px")
            .css("left",(e.pageX -  $("#preview").width()/2) + "px");
    });         
};


function setExpandables() {
    $(".coursetablediv").css("display","none");
    $(".courses").hover(function(){
        $(this).children(".coursetablediv").slideDown(400); 
    }, function() { 
        $(this).children(".coursetablediv").css({
            "z-index":10,
            visibility:"visible"
        }).hide(); 
    });
}

function setSkillBars() {
    $.each($(".ratingbarfiller"), function(key, val) {
        var skillPercent = $(this).children("p").html() * 10;
        $(this).css({width:skillPercent+"%"});
    });
}

function updateSkillsBox(f) {
    console.log(f);
    $("#skillstable .name").removeClass("bigtext");
    $("#skilldesc, #skilldescinner").removeClass();
    $("#skilldesc").load("skills/"+f);
}

function validateForm() {
    var emailRegex = /^[A-Za-z0-9\._%-]+@[A-Za-z0-9\.-]+\.[A-Za-z]{2,4}$/;
    var phoneRegex = /[0-9\._\-\s]+/;
    var url = "sendmessage.php";
    if($("#contactname").val() == "" || ($("#replyto").val() == "" || !emailRegex.test($("#replyto").val()) ||           !phoneRegex.test($("#replyto").val()) )  || $("#contactmessage").val() == "") {
        if($("#contactname").val() == "") {
               $("#contactname").parent().append('<b style="color:red;font-size:1.4em;">*</b>');
           }
        if($("#replyto").val() == "" || !emailRegex.test($("#replyto").val()) || !phoneRegex.test($("#replyto").val()) ) {
               $("#replyto").parent().append('<b style="color:red;font-size:1.4em;">*</b>');
           }
        if($("#contactmessage").val() == "") {
               $("#contactmessage").parent().append('<b style="color:red;font-size:1.4em;">*</b>');
           }
        
    } else {
        $.ajax({
           type: "POST",
           url: url,
           data: $("#contactform").serialize(),
           success: function(data)
           {
            //alert(data);
               $("#contactform").hide();
               $("#messagesent").show();
               $("#messagesent").html(data);
           }
        });
    }
    
    return false;
}


$(document).ready(function(){

    imagePreview();
    setExpandables();
    setSkillBars();

    $(window).scroll(function() {

        var scrollTop = document.body.scrollTop;
        var navbar = $("#buttons-div");
        var navbarTop = parseInt(navbar.css("margin-top").replace("px",""));

        if(scrollTop > navbarTop && !navbar.hasClass("fixed")) {
                navbar.addClass("fixed");
                $("#hidebtn, #navtop").css("visibility","visible");
                // console.log("go floated");
        } else if(scrollTop < 25 && navbar.hasClass("fixed")) {
                // console.log("return to normal");
                navbar.removeClass("fixed").show();
                $("#hidebtn, #navtop").css("visibility","hidden");
                $("#hidebtn").removeClass("collapsed");
        }
    });

    $("#hidebtn").click(function() {

        $("#buttons-div").toggle();
        $(this).hasClass("collapsed") ? $(this).removeClass("collapsed") : $(this).addClass("collapsed");
    });

    $(".navbtn").click(function(){
      $('body').animate({
        scrollTop: $($(this).attr("href")).offset().top
      }, 500, 'swing');
    });

    $("#navtop").click(function(){
      $('body').animate({
        scrollTop: $('body').offset().top
      }, 500, 'swing');
    });

    $("body").click(function() {
        
        updateSkillsBox("General.txt");
    }).not($("#skillstable"));
    
    $("#skillstable .name")
        .mouseout(function() {
            $(this).removeClass("hovered");
        })
        .mouseover(function() {
            $(this).addClass("hovered");
        });

    $("#skilldesc").click(function(e){
        e.stopPropagation();
    });
    $(".web, .data, .mobile").click(function(e){
       console.log(this); 
        if($(this).hasClass("web")){
            //updateSkillsBox("Perl.txt");
            $("#skillstable td.name.leftbar").first().click();
        }else if($(this).hasClass("mobile")){
            //updateSkillsBox("Java.txt");
            $("#skillstable td.name.leftbar")[2].click();
        }else{
            //updateSkillsBox("MySQL.txt"); 
            $("#skillstable td.name.leftbar")[1].click();
        }
        e.stopPropagation();
    });
    $("#skillstable .name").click(function(e){
        var txtFile = $(this).html().replace(/\s/g,"%20")+".txt";
        updateSkillsBox(txtFile);
        $(this).hasClass("leftbar") ? $("#skilldesc").addClass("leftarrow") : $("#skilldesc").addClass("rightarrow");
        
        $("#skilldesc").addClass("arrow"+$(this).parents("tr").index());
        $(this).addClass("bigtext");
        e.stopPropagation();
    });
});

(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
    m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-30966573-1', 'micahdetamore.com');
ga('send', 'pageview');
var _paq = _paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
var u=(("https:" == document.location.protocol) ? "https" : "http") + "://www.micahdetamore.com/analytic/piwik/";
_paq.push(['setTrackerUrl', u+'piwik.php']);
_paq.push(['setSiteId', 1]);
var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();





