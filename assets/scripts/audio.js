/*

@Author: Yannik Messerli (myre.ch)
@Date: 22.02.2011

Let's have some inspiration:
http://dev.opera.com/articles/view/everything-you-need-to-know-about-html5-video-and-audio/

*/

window.addEvent('domready', function(){
 
 $$('.samples .sample a').each(function(el){
 	var audioElement = document.createElement('audio');
 	audioElement.setAttribute('src', el.getProperty('href'));

 	var on = true;
 	el.addEvent('click', function(e){
 		e.stop();
 		el.getElement('img').setProperty('src', '/assets/images/spinner.gif');
 		audioElement.load();
 		audioElement.addEvent("load", function() {
 		  if(on){
 		  	 el.getElement('img').setProperty('src', '/assets/images/icon/play.png');
 		  }else{
 		    el.getElement('img').setProperty('src', '/assets/images/icon/pause.png');
 		  }
 		});
 		if(on){
 		audioElement.play();
 		on = false;
 		el.getElement('span.control').set('text', 'STOP');
 		el.getElement('img').setProperty('src', '/assets/images/icon/pause.png');
 		}else{
 		audioElement.pause();
 		on = true;
 		el.getElement('span.control').set('text', 'LIRE');
 		el.getElement('img').setProperty('src', '/assets/images/icon/play.png');
 		}
 	})
 	
 
 });
 
 
});