$(document).ready(function()
{
    //Nav-Map Mechanism
    let MapSection = $(".Map-Item > .Map-Section");
    let MapLineFill = $(".Map-Line .Fill-Color");
    let MainSection = $(".Main-Section > div");
    let MapNavSelected = 0;
    function cardMap(item)
    {
        MainSection.eq(MapNavSelected).css("display", "none");
        MapSection.removeClass("Map-Section-Active");
        MapNavSelected = item.index();
        MainSection.eq(MapNavSelected).css("display", "block");
        for(let i = 0, j = 0; i<=MapNavSelected; i++)
        {
            j = (i*34) - 2;
            MapSection.eq(i).addClass("Map-Section-Active");
            MapLineFill.css({"width" : j+"%"});
        }
    }
    MapSection.click(function()
    {
        cardMap($(this));
    });
});