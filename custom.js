function load() {
    //onload(index.php);
    alert("WELCOME TO THE TECH HUB");
}
$(document).ready(function () {
    $("button").ready(function () {
        $(".bcolored1").click(function () {
            $(".bcolored1").hide();
        });
    });
    $("h3").ready(function () {
        $(".tech-club").hide();
    });
});
$(document).ready(function () {
    $("p").ready(function () {
        $(".java2").fadeToggle();
        $(".java2").fadeToggle("slow");
        $(".java2").fadeToggle(10000);
    });
});
$(document).ready(function () {
    $("h4").ready(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $(".count").animate({fontSize: '3em'}, "slow");
        $(".count").animate({fontSize: '1em'}, "slow");
    });
});
$(document).ready(function () {
    $("h4").mouseenter(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $(".count").animate({fontSize: '3em'}, "slow");
        $(".count").animate({fontSize: '1em'}, "slow");
    });
});

$(document).ready(function () {
    $("h3").ready(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $(".tech-club").animate({fontSize: '3em'}, "slow");
        $(".tech-club").animate({fontSize: '2em'}, "slow");
    });
});
$(document).ready(function () {
    $("h3").mouseenter(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $(".tech-club").animate({fontSize: '3em'}, "slow");
        $(".tech-club").animate({fontSize: '2em'}, "slow");
    });
});
$(document).ready(function () {
    $("p").ready(function () {
        $(".java").hide();
    });
});
function mydetails() {
    $(document).ready(function () {
        $("button").ready(function () {
            $(".btoptech4").click(function () {
                $(".btoptech4").hide();
                $("p").ready(function () {
                    $(".java").show();
                    $(".java3").hide();
                    window.print();
                    window.location.href = "Hub.php";
                });
            });
        });
    });
}
function adminprintprogress0() {
    $(document).ready(function () {
        $(".well-lg").hide();
        $(".lwrite").hide();
        $("hr").hide();
        $("button").ready(function () {
            $(".btoptech4").click(function () {
                $(".btoptech4").hide();
                $("p").ready(function () {
                    $(".java").show();
                    $(".java3").hide();
                    window.print();
                    window.location.href = "ProgressEngine.php";
                });
            });
        });
    });
}
function adminprintprogress1() {
    $(document).ready(function () {
        $(".well-lg").hide();
        $(".lwrite").hide();
        $("hr").hide();
        $("button").ready(function () {
            $(".btoptech4").click(function () {
                $(".btoptech4").hide();
                $("p").ready(function () {
                    $(".java").show();
                    $(".java3").hide();
                    window.print();
                    window.location.href = "ProgressEngine.php";
                });
            });
        });
    });
}
function adminprintprogress2() {
    $(document).ready(function () {
        $(".well-lg").hide();
        $(".lwrite").hide();
        $("hr").hide();
        $("button").ready(function () {
            $(".btoptech4").click(function () {
                $(".btoptech4").hide();
                $("p").ready(function () {
                    $(".java").show();
                    $(".java3").hide();
                    window.print();
                    window.location.href = "SProgressEngine.php";
                });
            });
        });
    });
}
function adminprintprogress3() {
    $(document).ready(function () {
        $(".well-lg").hide();
        $(".lwrite").hide();
        $("hr").hide();
        $("button").ready(function () {
            $(".btoptech4").click(function () {
                $(".btoptech4").hide();
                $("p").ready(function () {
                    $(".java").show();
                    $(".java3").hide();
                    window.print();
                    window.location.href = "AssignedStudent.php";
                });
            });
        });
    });
}
function adminprint() {
    $("hr").hide();
    $(document).ready(function () {
        $("button").ready(function () {
            $(".btoptech4").click(function () {
                $(".btoptech4").hide();
                $("h1").ready(function () {
                    $(".well-lg").hide();
                    $(".lwrite").hide();
                    $(".java3").hide();
                    window.print();
                    window.location.href = "SearchEngine.php";
                });
            });
        });
    });
}
//code for progress engine search
$(document).ready(function () {
    $('#search_progress').keyup(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#result2').html('');
            $.ajax({
                url: "Progress.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result2').html(data);
                }
            });
        }
        else {
            $('#result2').html('');
            $.ajax({
                url: "Progress.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result2').html(data);
                }
            });
        }
    });
});
//code for search engine start
$(document).ready(function () {
    $('#search_text').keyup(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
        else {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
    });
});
function loadresults() {
    $(document).ready(function () {
            var txt = $(this).val();
            if (txt != '') {
                $('#result').html('');
                $.ajax({
                    url: "fetch.php",
                    method: "post",
                    data: {search: txt},
                    dataType: "text",
                    success: function (data) {
                        $('#result').html(data);
                    }
                });
            }
            else {
                $('#result').html('');
                $.ajax({
                    url: "fetch.php",
                    method: "post",
                    data: {search: txt},
                    dataType: "text",
                    success: function (data) {
                        $('#result').html(data);
                    }
                });
            }
        });
}
//code for allocated stiudents search  start
$(document).ready(function () {
    $('#search_allocated').keyup(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#resultallocated').html('');
            $.ajax({
                url: "allocated.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultallocated').html(data);
                }
            });
        }
        else {
            $('#resultallocated').html('');
            $.ajax({
                url: "allocated.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultallocated').html(data);
                }
            });
        }
    });
});
function loadallocated() {
    $(document).ready(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#resultallocated').html('');
            $.ajax({
                url: "allocated.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultallocated').html(data);
                }
            });
        }
        else {
            $('#result').html('');
            $.ajax({
                url: "allocated.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultallocated').html(data);
                }
            });
        }
    });
}
/*start code for count down*/
// Set the date we're counting down to
var countDownDate = new Date("Aug 8, 2017 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "Days " + hours + "Hrs "
        + minutes + "Min " + seconds + "Sec";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        $(document).ready(function () {
            $("h4").ready(function () {
                $(".count").hide();
            });
            $("h3").ready(function () {
                $(".tech-club").show();
            });
        });
    }
}, 1000);
/*end of count down*/
//button for saving
$(document).ready(function () {
    $(".btn").click(function () {
        $(this).button("loading").delay(500).queue(function () {
            $(this).button("reset");
            $(this).dequeue();
        });
    });
});

/**
 * TODO VERY SOON SWEETALERTS
 * */
//sweetalerts
// $('.regsuper').click(function() {
// 	//var photoId = $(this).attr("data-photo-id");
// 	deletePhoto();
// 	registeredSupervisor()
// });
//
// function registeredSupervisor() {
// 	swal("Oops!", "Something went wrong on the page!", "success");
// }
//
// function deletePhoto() {
//
// 	// swal({
// 	// 	title: "Are you sure?",
// 	// 	text: "Are you sure that you want to delete this photo?",
// 	// 	type: "warning",
// 	// 	showCancelButton: true,
// 	// 	closeOnConfirm: false,
// 	// 	confirmButtonText: "Yes, delete it!",
// 	// 	confirmButtonColor: "#ec6c62"
// 	// }, function() {
// 	// 	$.ajax({
// 	// 			url: "/api/photos/" + photoId,
// 	// 			type: "DELETE"
// 	// 		})
// 	// 		.done(function(data) {
// 	// 			swal("Deleted!", "Your file was successfully deleted!", "success");
// 	// 		})
// 	// 		.error(function(data) {
// 	// 			swal("Oops", "We couldn't connect to the server!", "error");
// 	// 		});
// 	// });
// }