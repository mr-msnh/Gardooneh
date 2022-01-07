$(document).ready(function()
{
    //Menu and Submenue Mechanism
    let MenuItem = $(".HeaderBottomRight > ul > li");
    let SubmenuTitle = $(".HBRSubmenu > div");
    $(MenuItem).hover(function()
    {
        $(" > .HBRSubmenu", this).stop(true).fadeIn();
    }, function()
    {
        $(" > .HBRSubmenu", this).stop(true).fadeOut();
    });
    $(SubmenuTitle).hover(function()
    {
        $(".HBRSubmenuTitle > a > img", this).attr("src", "./Asset/Icons/MenuItemsIcons/LeftArrowRed.png");
    }, function()
    {
        $(".HBRSubmenuTitle > a > img", this).attr("src", "./Asset/Icons/MenuItemsIcons/LeftArrow.png");
    });

    //Menu Mobile Mechanism
    let MenuIcon = $(".HeaderBottomRight > span");
    let MainMenu = $(".HeaderBottomRight > ul");

    MenuIcon.click(function()
    {
        MainMenu.stop(true).fadeToggle();
    });
    $(".Container").click(function()
    {
        MainMenu.fadeOut();
    });
});