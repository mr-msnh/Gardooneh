$(document).ready(function()
{
    //Product Card
    $(".SOIProductContent > .AddCart > img").hover(function()
    {
        $(this).attr("src","./Asset/Icons/ProductIcons/AddIconLight.png");
    }, function()
    {
        $(this).attr("src","./Asset/Icons/ProductIcons/AddIcon.png");
    });
    $(".SOIProductContent > .Review > .Star > img").hover(function()
    {
        $(this).attr("src","./Asset/Icons/ProductIcons/StarIconLight.png");
    }, function()
    {
        $(this).attr("src","./Asset/Icons/ProductIcons/StarIcon.png");
    });
    //Gallery Slider Mechanism
    let mainGalleryImage = $(".Product-Gallery > .Main-Image > img");
    let otherImages = $(".Product-Gallery > .Other-Image > ul > li > img");
    otherImages.click(function()
    {
        let newMainImage = $(this).attr("src");
        $(this).attr("src", mainGalleryImage.attr("src"));
        mainGalleryImage.attr("src", newMainImage);
    });
});