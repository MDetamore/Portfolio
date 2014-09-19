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
        }
        else if(scrollTop < 25 && navbar.hasClass("fixed")) {
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

    

    $(".btnmore").click(function(){
        
        $("#summarymore").slideDown(400);
    }, function() {
        console.log("clicked");
        $(this).html() == "Read more" ? $(this).html("Less") : $(this).html("Read more");
        $("#summarymore").toggle();
        //css({visibility:"visible"}).show();
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


    $("#skillstable .name")
        .mouseout(function() {
            $(this).removeClass("hovered");
        })
        .mouseover(function() {
            $(this).addClass("hovered");
        });

    $("#contactform").submit(function() {

    var url = "sendmessage.php";

    $.ajax({
           type: "POST",
           url: url,
           data: $("#contactform").serialize(),
           success: function(data)
           {
            alert(data);
               $("#messagesent").show();
               $("#messagesent").html(data);
           }
         });

    return false;
});


    $("#skillstable .name").click(function(){
        $("#skillstable .name").removeClass("bigtext");
        $("#skilldesc, #skilldescinner").removeClass();
        $(this).hasClass("leftbar") ? $("#skilldesc").addClass("leftarrow") : $("#skilldesc").addClass("rightarrow");
        
        $("#skilldesc").load("skills/"+$(this).html().replace(/\s/g,"%20")+".txt");
        $("#skilldesc").addClass("arrow"+$(this).parents("tr").index());
        $(this).addClass("bigtext");
    });

    /*    $(".ratingbarfull, .name")
        .mouseout(function() {
            $(this).parents("tr").find("td.name").removeClass("hovered");
            //$siblingText.hasClass("bigtext") ? false : $siblingText.css("font-size","18px");//$(this).children(".ratingbarfiller").css("background-color","#55FF55");
            $(".ratingbarfiller",this).removeClass("hovered");//("background-color","#22CC22");//$(this).parent("tr").find(".name").css("font-size","35px");
        })
        .mouseover(function() {
            $(this).parents("tr").find("td.name").addClass("hovered");//css("font-size","35px");
            $(".ratingbarfiller",this).addClass("hovered");//css("background-color","#55FF55");
        });
*/

/*
    $("#skillstable").find(".name, .ratingbarfull").click(function(){
        $("#skillstable").find(".name").removeClass("bigtext");
        $("#skilldesc").removeClass();
        //var className = "arrow"+$("#skillstable tr").index($(this).parent("tr"));
        $("#skilldesc").addClass("arrow");
        $("#skilldesc").addClass("arrow"+$(this).parents("tr").index());
        $("#skilldesc").load("skills/"+$(this).parents("tr").find("td.name").html()+".txt");
        $(this).parents("tr").find("td.name").addClass("bigtext");//$(this).addClass("bigtext");//.{font-size:"35px",color:"#000000");
        console.log("Class: " + $(this).attr("class") + "; HTML: " + $(this).html() + "; Index: " + $("#skillstable tr").index($(this).parent("tr")));

    });

    $("#skillstable2").find(".name, .ratingbarfull").click(function(){
        $("#skillstable2").find(".name").removeClass("bigtext");
        $("#skilldesc2").removeClass();
        //var className = "arrow"+$("#skillstable tr").index($(this).parent("tr"));
        $("#skilldesc2").addClass("arrow");
        $("#skilldesc2").addClass("arrow"+$(this).parents("tr").index());
        $("#skilldesc2").load("skills/"+$(this).parents("tr").find("td.name").html()+".txt");
        $(this).parents("tr").find("td.name").addClass("bigtext");//$(this).addClass("bigtext");//.{font-size:"35px",color:"#000000");
        //console.log("Class: " + $(this).attr("class") + "; HTML: " + $(this).html() + "; Index: " + $("#skillstable tr").index($(this).parent("tr")));

    });
*/
});

