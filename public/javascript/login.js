//Roll Controller mechanism
$(document).ready(function()
{
    let ActionBotton = $(".RollController > .ActionButton > input");
    let RollController = $(".RollController");
    let Logo = $(".RollController > .Logo")
    let Title = $(".RollController > .Title");
    let Login = $(".LoginFrame");
    let CreateAccount = $(".CreateAccountFrame");
    function onRollController()
    {
        if($(".TitleSignUp", Title).css("display") != "none")
        {
            $(RollController).animate({"margin-left":600}, 1000);
            $(Logo).animate({"margin-left":315}, 1000);
            $(Login).animate({"width":"40%"}, 1000);
            $(CreateAccount).animate({"width":"60%"}, 1000);
            $(".TitleSignUp", Title).hide();
            $(".TitleSignIn", Title).fadeIn(600);
            setTimeout(function(){ActionBotton.attr("value","وارد شوید")}, 400);
        }
        else if($(".TitleSignIn", Title).css("display") != "none")
        {
            $(RollController).animate({"margin-left":0}, 1000);
            $(Logo).animate({"margin-left":0}, 1000);
            $(CreateAccount).animate({"width":"40%"}, 1000);
            $(Login).animate({"width":"60%"}, 1000);
            $(".TitleSignIn", Title).hide();
            $(".TitleSignUp", Title).fadeIn(600);
            setTimeout(function(){ActionBotton.attr("value","ثبت‌نام کنید")}, 400);
        }
    }
    $(ActionBotton).click(function()
    {
        setTimeout(function(){onRollController()}, 50);
    });
    //Show and Hide Pass
    let PassToggle = $(".EyePass");
    let PasswordInput = $("#txtPassword");
    function toggleVisibilityPassword(element)
    {
        if($("#txtPassword", element).attr("type") == "password")
        {
            $(" > #txtPassword", element).attr("type", "text");
            $(".EyePass", element).css("background-image", "url('./Asset/Icons/LoginIcons/HidePass.png')");  
        }
        else if($("#txtPassword", element).attr("type") == "text")
        {
            $("#txtPassword", element).attr("type", "password");
            $(".EyePass", element).css("background-image", "url('./Asset/Icons/LoginIcons/ShowPass.png')");  
        } 
    }
    $(PassToggle).click(function()
    {
        toggleVisibilityPassword($(this).parent());
    });
    //ForgotPassword Windows
    let ForgotLink = $(".SigninBox > a");
    let ForgotPass = $(".ForgotPassword");
    let MainLoginFrame = $(".MainLoginFrame");
    let CloseForgotPass = $(".ForgotPassword > span");
    ForgotLink.click(function()
    {
        // MainLoginFrame.animate({"filter":"blur(5px)"}, 800);
        // ForgotPass.animate({"display":"block"}, 1000);
        MainLoginFrame.css("filter", "blur(5px)");
        MainLoginFrame.css("pointer-events", "none");
        ForgotPass.css("display", "block");
    });
    CloseForgotPass.click(function()
    {
        MainLoginFrame.css("filter", "none");
        MainLoginFrame.css("pointer-events", "auto");
        ForgotPass.css("display", "none");
    });
});