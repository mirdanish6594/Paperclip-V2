$(function(){
	$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            finish: "Submit",
            next: "Forward",
            previous: "Backward"
        },
        onFinished: function (event) {

            var formData = $("#wizard").serialize();
            formData += '&category=' + $("#category").text();
            var productID = Date.now() + Math.floor(Math.random() * 1000);
            formData += '&productID='+ productID;
            console.log(formData);
            $.ajax({
                type: "POST",
                url: "http://localhost/pushListing.php",
                data: formData,
                success: function(response) {
                  // Process the response from PHP (if needed)
                  console.log(response);
                },
                error: function(xhr, status, error) {
                  // Handle errors (if any)
                  console.error(error);
                }
              });
        }
    });
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide(); 
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })    
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })
})
