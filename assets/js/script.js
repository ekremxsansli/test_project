$(document).ready(function(){
	$.get("/assets/templates/post.html",function(template){
	    $.ajax({
	        type: "GET",
	        url: "/welcome/getPost",
	        data: {},
	        success: function (result) {
				$("#postDiv").append(Mustache.render(template,JSON.parse(result)));	
	        }
		});
	});
});
function sendLikeInfo(link,username,userId){
	var picture = $('#postDiv img').attr('src'),
		content = $('#postDiv p').html();
		$.ajax({
        	type: "POST",
			url: "/welcome/sendLikeInfo",
			data: {picture: picture,link:link,liked_name:username,content:content,userId:userId},
			success: function (result) {
				
			}
		});
};
function likeControl(userId,callback){
	$.ajax({
    	type: "GET",
		url: "/welcome/likeControl",
		data: {userId:userId},
		success: function (result) {
			callback(result);
		}
	});
}

window.fbAsyncInit = function() {
  // init the FB JS SDK
  FB.init({
    appId      : '658738800857721',                        // App ID from the app dashboard
    status     : true,                                 // Check Facebook Login status
    xfbml      : true                               // Look for social plugins on the page
  });
  FB.getLoginStatus(function(response) {
	  console.log(response);
	  if(response.status == "connected"){
			FB.api('/me', function(response) {
				console.log(response);
				likeControl(response.id,function(callback){
					console.log(callback);
					if(callback > 0)
						$('#fbDiv').hide();
				});
				//	sendLikeInfo(link,response.name,response.id);
			});
	  }
  }, true);
FB.Event.subscribe('edge.create',
    function(link) {
		FB.api('/me', function(response) {
			console.log(response);
			sendLikeInfo(link,response.name,response.id);
		});
    }
);

  // Additional initialization code such as adding Event Listeners goes here
};

// Load the SDK asynchronously
(function(){
   // If we've already installed the SDK, we're done
   if (document.getElementById('facebook-jssdk')) {return;}

   // Get the first script element, which we'll use to find the parent node
   var firstScriptElement = document.getElementsByTagName('script')[0];

   // Create a new script element and set its id
   var facebookJS = document.createElement('script'); 
   facebookJS.id = 'facebook-jssdk';

   // Set the new script's source to the source of the Facebook JS SDK
   facebookJS.src = '//connect.facebook.net/en_US/all.js';

   // Insert the Facebook JS SDK into the DOM
   firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
 
 }());
 