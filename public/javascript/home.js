$(document).ready(function()
{
    //MainSlide Mechanism
    let SliderImage      = $(".MainSlide > .SliderImage").find("img");
    let SliderController = $(".MainSlide > .SliderController").find("span");
    let SlideNumber      = 0;
    let SlideNumberMax   = SliderImage.length;
    let SlideTimeInterval;
    function onSlideImage(nextSlideNumber)
    {
        $(SliderImage).eq(SlideNumber).hide();
        $(SliderController).eq(SlideNumber).removeClass("SlideSelectedImage");
        if(nextSlideNumber >= SlideNumberMax)
        {
            nextSlideNumber = 0;
        }
        SlideNumber = nextSlideNumber;
        $(SliderImage).eq(SlideNumber).fadeIn();
        $(SliderController).eq(SlideNumber).addClass("SlideSelectedImage");
    }
    //First Appere in Home For Slide
    onSlideImage(0);
    $(SliderController).click(function()
    {
        onSlideImage($(this).index());
        clearInterval(SlideTimeInterval);
        SlideTimeInterval = setInterval(function(){onSlideImage(SlideNumber+1);}, 7000);
    });
    SlideTimeInterval = setInterval(function(){onSlideImage(SlideNumber+1);}, 7000);
    //SpecialOffer And Products
    //Timer Converter
    function convertEngToFaDigit(digit)
    {
        switch(digit)
        {
            case 0 : return "۰"; break;
            case 1 : return "۱"; break;
            case 2 : return "۲"; break;
            case 3 : return "۳"; break;
            case 4 : return "۴"; break;
            case 5 : return "۵"; break;
            case 6 : return "۶"; break;
            case 7 : return "۷"; break;
            case 8 : return "۸"; break;
            case 9 : return "۹"; break;
            default: return "۰";
        }
    }
    function getNumber(number)
    {
        let i = number;
        let exprot = "";
        const digits = new Array();
        while(i>0)
        {
            digits.push(parseInt(i%10));
            i = parseInt(i/10);
        }
        for(let j = digits.length-1; j >= 0; j--)
        {
            exprot += convertEngToFaDigit(digits[j]).toString();
        }
        return exprot;
    }
    
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

    let SOTHour = 12;
    let SOTMinute = 34;
    let SOTSecond = 48;
    function sotTimer()
    {
        if(SOTSecond == 0)
        {
            SOTMinute -= 1;
            SOTSecond = 59;
            if (SOTMinute == 0)
            {
                SOTHour -= 1;
                SOTMinute = 59;
            }
        }
        SOTSecond -= 1;
        if((SOTHour.toString().length) == 1)
        {
            document.querySelector("#SOTHour").innerHTML = "۰" + getNumber(SOTHour);   
        }
        else 
        {
            document.querySelector("#SOTHour").innerHTML = getNumber(SOTHour); 
        }
        if((SOTMinute.toString().length) == 1)
        {
            document.querySelector("#SOTMinute").innerHTML = "۰" + getNumber(SOTMinute);   
        }
        else 
        {
            document.querySelector("#SOTMinute").innerHTML = getNumber(SOTMinute);  
        }
        if((SOTSecond.toString().length) == 1)
        {
            document.querySelector("#SOTSecond").innerHTML = "۰" + getNumber(SOTSecond);   
        }
        else 
        {
            document.querySelector("#SOTSecond").innerHTML = getNumber(SOTSecond);  
        }
    }
    setInterval(function(){sotTimer();}, 1000);
    //ItemsSlide Rotation
    let SpecialOfferItemsList       =   $(".SpecialOfferItemsList");
    let SpecialOfferItemsNext       =   $(".SpecialOfferItemsNext");
    let SpecialOfferItemsPrevious   =   $(".SpecialOfferItemsPrevious");
    let SlideRotateSize = 0;
    
    function rotateItems()
    {
        if(SlideRotateSize < -1052)
        {
            SlideRotateSize = 0;
        }
        else if(SlideRotateSize > 0)
        {
            SlideRotateSize = -1052;
        }
        SpecialOfferItemsList.stop(true).animate({"margin-right":SlideRotateSize}, 1000);
    }
    $(SpecialOfferItemsNext).click(function(){
        SlideRotateSize -= 263;
        rotateItems()
    });
    $(SpecialOfferItemsPrevious).click(function(){
        SlideRotateSize += 263;
        rotateItems()
    });
});