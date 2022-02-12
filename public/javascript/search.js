$(document).ready(function()
{
    let filterBoxToggle = $(".FBHeader > span");
    let filterCheckBox = $(".FilterBox > .FBContent > .FilterCheckbox > span > input");
    let selectedFiltersBox = $(".FilterBox > .FBContent > .FilterItemsHolder");
    let clearAllFilters = $(".FBHeader > a");
    let filterSwitch = $(".FilterSwitch > span");
    // let filterItemsLength = filterItems.length;
    clearAllFilters.click(function()
    {
        selectedFiltersBox.find(".FilterItems").remove();
        $(this).parents(".FilterBoxFrame").css({"display":"none"});
        filterCheckBox.prop("checked", false);
    });
    filterCheckBox.click(function()
    {
        if(selectedFiltersBox.find(".FilterItems[data-num='" + $(this).parents(".FilterCheckbox").attr("data-num") + "']").length > 0)
        {
            selectedFiltersBox.find(".FilterItems[data-num='" + $(this).parents(".FilterCheckbox").attr("data-num") + "']").remove();
        }
        else 
        {
            if($(".FilterItemsHolder").parents(".FilterBoxFrame").css("display") == "none")
            {
                $(".FilterItemsHolder").parents(".FilterBoxFrame").css({"display":"block"});
            }
            selectedFiltersBox.append('<div class="FilterItems" data-num="' + $(this).parents(".FilterCheckbox").attr("data-num") + '">' + $(this).parents(".FilterCheckbox").find(".CheckBox-Title").text() + '<span></span></div>');
        }
        selectedFiltersBox.find(".FilterItems > span").click(function()
        {
            $(this).parents(".FilterItems").remove();
            $(".FilterCheckbox[data-num='" + $(this).parents(".FilterItems").attr("data-num") + "']").find("span > input").prop("checked", false);
            if(selectedFiltersBox.find(".FilterItems").length == 0)
            {
                $(".FilterItemsHolder").parents(".FilterBoxFrame").css({"display":"none"});
            }
        });
        if(selectedFiltersBox.find(".FilterItems").length == 0)
        {
            $(".FilterItemsHolder").parents(".FilterBoxFrame").css({"display":"none"});
        }
    });
    
    filterSwitch.click(function()
    {
        $(this).toggleClass("FilterSwitchActive");
    });
    filterBoxToggle.click(function()
    {
        $(".FBContent", $(this).parents(".FilterBox")).slideToggle();
    });

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
});