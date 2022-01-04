
// cart slider
$(".cartBtn").on('click', () => {
    $(".containers").css("right", "0")
})
$(".sliderClose").on('click', () => {
    $(".containers").css("right", "-1000px")

})
// select 2
$(document).ready(function () {
    $('.js-example-basic-single').select2();
});
// counter
var counter = 0;
$(".minBtn").on('click', (e) => {
    if (this.counter <= 0) {
        return;
    } else {
        this.counter--
    }
    var inputField = $(e.target.parentNode.children[1])
    inputField.val(this.counter)
})
$(".addBtn").on('click', (e) => {
    this.counter++
    var inputField = $(e.target.parentNode.children[1])
    inputField.val(this.counter)
})
// collapse css
$(".collapseBtn button").on('click', (e) => {
    $(e.target).toggleClass("showingCollapse")
})
setTimeout(() => {
    $(".sizeDropDown").on('click', (e) => {
        var dropDown = e.target.parentNode.parentNode.parentNode.children[0];
        $(dropDown).toggleClass('rotate')
        console.log(dropDown)
    })
}, 1000);

const hovSection = () => {
    $(".hover-sec").toggleClass("show")
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        if (!$('.hover-sec').hasClass('show')) {
            setTimeout(() => {
                $(".hover-sec").css({
                    "opacity": "1",
                    "position": "fixed",
                    "top": "30px",
                })
            })
        } else {
            $(".hover-sec").css({
                "opacity": "0",
                "position": "fixed",
                "top": "-400px"
            })
    
        }
    }
    else{
        if (!$('.hover-sec').hasClass('show')) {
    
            setTimeout(() => {
                $(".hover-sec").css({
                    "opacity": "1",
                    "position": "fixed",
                    "top": "50px",
                })
            })
        } else {
            $(".hover-sec").css({
                "opacity": "0",
                "position": "fixed",
                "top": "-400px"
            })
    
        }

    }
}

$(".hoverButton").hover(() => {
    hovSection()
})
$(".hover-sec").hover(() => {
    hovSection()
})

window.onscroll = function () { myFunction() };

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        setTimeout(() => {
            document.getElementById("myP").classList.add('test');
        });
        $(".containers").css("top","70px")
    } else {
        setTimeout(() => {
            document.getElementById("myP").classList.remove('test');
        });
        $(".containers").css("top","94px")

    }
    // console.log(document.body.scroll);
}

