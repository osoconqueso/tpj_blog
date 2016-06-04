/**
 * Created by tracy on 6/4/2016.
 */

function colorFade()
{
    var opacity = 1,
        fps = 1000/60; //
    function decrease(){
        opacity -= 0.005;//smaller steps
        if(opacity<= 0){ //finished
            document.getElementById("splishtop").style.opacity=0;
            return true;
        }
        document.getElementById("splishtop").style.opacity = opacity;
        setTimeout(decrease, fps);
    }

    decrease();
}
