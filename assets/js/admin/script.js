$(document).ready(function(){
	var pusher = new Pusher('cf0db392af3bcc976e4a');
	var channel = pusher.subscribe('test_channel');
	channel.bind('my_event', function(data) {
		data.message.date = "yeni";
		$.get("/assets/templates/admin/like-row.html",function(template){
			$("#likeTable").prepend(Mustache.render(template,data.message)).hide().fadeIn();	
		});
	});
});