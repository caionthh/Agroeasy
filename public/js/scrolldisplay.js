
//Vars
var activedisplay = 1;
var maxdisplay = 2;
var animationtime = 500;
var forward = true;
var transitioning = false;

//Interval
window.setInterval(startTransition, 10000);

function startTransition() {

    if (transitioning == true) {
        return;
    }


    transitioning = true;
    transitionFrame();
    animationsTest(transitionEnd, animationtime);

}

//Get
function getNextDisplay() {
    var nextframeindex = 1;

    if (forward == true) {
         nextframeindex = activedisplay + 1;
        if (nextframeindex > maxdisplay) {
            nextframeindex = 1;
        }
    }
    else{
        nextframeindex = activedisplay - 1;
        if (nextframeindex < 1) {
            nextframeindex = maxdisplay;
        }
    }

    return nextframeindex;
}

function transitionFrame() {
    var currentframe = document.getElementById("np".concat(String(activedisplay)));

    if (forward == true) {

        currentframe.className = "newproductcontainer disappearing";

        var nextframeindex = getNextDisplay();
        var nextframe = document.getElementById("np".concat(String(nextframeindex)));
        nextframe.className = "newproductcontainer appearing";
    }
    else{

        currentframe.className = "newproductcontainer disappearinglr";

        var nextframeindex = getNextDisplay();
        var nextframe = document.getElementById("np".concat(String(nextframeindex)));
        nextframe.className = "newproductcontainer appearinglr";
    }

}

function transitionEnd() {

    var currentframe = document.getElementById("np".concat(String(activedisplay)));
    currentframe.className = "newproductcontainer hiddensection";

    var nextframeindex = getNextDisplay();
    var nextframe = document.getElementById("np".concat(String(nextframeindex)));
    nextframe.className = "newproductcontainer";

    if (forward == true) {
        displayNext();
    }
    else{
        displayPrevious();
    }

    forward = true;
    transitioning = false;
}

function animationsTest (callback, animtime) {
    // Test if ANY/ALL page animations are currently active

    var testAnimationInterval = setInterval(function () {
        if (! $.timers.length) { // any page animations finished
            clearInterval(testAnimationInterval);
            callback();
        }
    }, animtime);
};

function displayNext() {
    activedisplay += 1;
    if (activedisplay > maxdisplay) {
        activedisplay = 1;
    }
}
function displayPrevious() {
    activedisplay -= 1;
    if (activedisplay < 1) {
        activedisplay = maxdisplay;
    }
}


function BindSwipe() {
    var displayFrame = document.getElementById("newproductbox");

    //Left
    Hammer(displayFrame).on('swipeleft', function(){
        forward=true;
        startTransition();  
    });  
    //Right
    Hammer(displayFrame).on('swiperight', function(){
        forward=false;
        startTransition();  
    });    

}