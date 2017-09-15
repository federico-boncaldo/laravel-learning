var start;

var analytics = function (userAgent, uri, mid, cat) {
	
    start = new Date();
    var page = uri
    var getMid = mid
    var getCat = cat
    var userag = userAgent
    var inactive = false
    
    coun = localStorage['count']
    if (coun == 5) {
    	postData()
		localStorage.setItem('count', 0);
    }
      
    function inactiveTimer() {
		window.inactivetime = 0;
		block = 1000;
				
		if(window.previousinactive > 0)
			window.inactivetime = window.previousinactive;

		
		window.newinterval = setInterval(function() {
			window.inactivetime += block;
			window.previousinactive = window.inactivetime;
			if(window.inactivetime == 5000)
			{
				inactive = true
				saveData()
				postData()
				window.inactivetime = 0
				window.previousinactive = 0
				clearInterval(window.newinterval);
			}
		}, block);
	}

	var inactivityCheck = function () {
	    var t;
	    window.onload = resetTimer;
	    document.onmousemove = resetTimer;
	    document.onkeypress = resetTimer;
	    document.onscroll = resetTimer;
	
	    function resetTimer() {
		    if(inactive == true)
		    {
			    start = new Date();
			    inactive = false;
		    }
		    clearInterval(window.newinterval);
	        clearTimeout(t);
	        t = setTimeout(inactiveTimer, 5000);
	    }
	};
    
    inactivityCheck();
    
    function pad(n, width, z) {
	  z = z || '0';
	  n = n + '';
	  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
	}

    function saveData() {
        finish = new Date();
        res = finish.getTime() - start.getTime();
        
        var date = new Date();
        var time_now = date.getUTCFullYear() + "-" + pad(date.getMonth()+1,2) + "-" + pad(date.getUTCDate(),2) + " " + pad(date.getUTCHours(),2) + ":" + pad(date.getUTCMinutes(),2) + ":" + pad(date.getUTCSeconds(),2);
        res = Math.ceil(res/100)*100
        	
        coun = localStorage['count']
        if (coun == "" || coun == null)
            coun = 0
        ++coun;

        var prev = localStorage['previous']
        if (prev == "" || prev == null)
            prev = '0'

        var collection = {
            "currentScreen": page,
            "mid": getMid,
            "category": getCat,
            "userAgent": userag,
            "timeOnScreen": res,
            "previousPage": prev, 
            "logged_on": time_now 
        }
        localStorage.setItem('collecting' + coun, JSON.stringify(collection));
        localStorage.setItem('previous', page);
        localStorage.setItem('count', coun);
    }

    function postData() {
	    if(localStorage['count'] > 0)
	    {
	       var arr = []
	        var prev = localStorage['previous'];
	        var foortheloop = (parseInt(localStorage['count']) + parseInt(1));
	
	        for (var i = 1; i < foortheloop; i++) {
	            arr.push(localStorage['collecting' + i])
	        }
	       $.ajax({
	            type: "POST",
	            url: "log.handle",
	            data: {data: JSON.stringify(arr)},
	            dataType: 'json'
	        });
	        localStorage.clear();
	        localStorage.setItem('previous', prev);
	        localStorage.setItem('count', 0);

	    }
 
    }

    $(window).unload(function () {
        saveData();
    });

};