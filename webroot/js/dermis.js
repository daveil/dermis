 $( document ).ready(function() {
	var ASYNC_REQUESTS = [];
	$.each($('.async-request'),function(ri,ro){
		var _url = $(ro).data('request-url');
		var _elm =  $(ro).find('.request-canvas');
		var _request = {'url':_url,'elem':_elm};
		ASYNC_REQUESTS.push(_request);
	});
	fetch_request(0);
	function fetch_request(index){
		if(index<ASYNC_REQUESTS.length){
			var _request = ASYNC_REQUESTS[index];
			$.ajax({
				'url':_request.url,
				'beforeSend':function(){},
				'success':function(_response){
					_request.elem.html(_response);
					return fetch_request(index+1);
				}
			});
		}
		
	}
});