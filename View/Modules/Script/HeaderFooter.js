$(document).ready(function()
{
    //Menu and Submenue Mechanism
    let MenuItem = $(".HeaderBottomRight > ul > li");
    let SubmenuTitle = $(".HBRSubmenu > div");
    $(MenuItem).hover(function()
    {
        $(" > .HBRSubmenu", this).stop(true).fadeToggle();
    });
    $(SubmenuTitle).hover(function()
    {
        $(".HBRSubmenuTitle > a > img", this).attr("src", "./Asset/Icons/MenuItemsIcons/LeftArrowRed.png");
    }, function()
    {
        $(".HBRSubmenuTitle > a > img", this).attr("src", "./Asset/Icons/MenuItemsIcons/LeftArrow.png");
    });
});