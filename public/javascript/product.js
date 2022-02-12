$(document).ready(function()
{
    //Product Card
    $(".SOIProductContent > .Review > .Star > i").hover(function()
    {
        $(this).attr("class","far fa-star");
    }, function()
    {
        $(this).attr("class","fas fa-star");
    });

    $(".SOIProductContent > .AddCart > i").hover(function()
    {
        $(this).attr("class","far fa-plus-circle fa-lg");
    }, function()
    {
        $(this).attr("class","fas fa-plus-circle fa-lg");
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