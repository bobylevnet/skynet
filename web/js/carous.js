'use strict'
//функция выполонения последовательных действий сечас не используется
function Queue() {
    this.index= 0;
     Queue.prototype.constructor = function ()  {};
     this._this = this;
    this.defferent = [];  
    }

 Queue.prototype.addFunc = function (callback){ 
     this.defferent.push(callback);
        return    this;
    }
 Queue.prototype.runF = function ()
 {
     this.defferent[this.index].apply(this,arguments);
     this.index++;
 }

var queue  = new Queue();






function Animate(options) 
{
	
	var selectElements = Array.prototype.slice.call(arguments);
	//проуент увеленичения времени анимации
	var timeAnimate = 1.80;
	this.animating = function(a,time) {
	//	return new Promise(function (resolve, reject) 
		//{
	for (var index=0; index<=selectElements.length-1; index++)
		{
		time = time * timeAnimate;
		var element = $('.item.active').find(selectElements[index]);
		element.animate(
			{top: a[index] + "%"},
			{duration: time,
			
			
			 //complete: function () {
			//	  if (f) f.apply(this,arguments);
			// } 
			});
			}
	time=100;
//	return element.parent().prop('className');
	}

	
	
}


Animate.prototype.start = function (a)
{
	
	return this.animating(["10","0","20","30"],100);
	
}

Animate.prototype.stop = function ()
{

	this.animating(["100","100","100","100"],0);
	
}





var animate  = new Animate(".imgslidehide" ,".header" ,".txt-msg" ,".btn");


 
//после начала показа
$('#w0').on('slid.bs.carousel', function (e) {
	//$("#slide").removeClass();	
	//возвраещет класс для установки цвета фона элемента
//	$("#slide").addClass();
	animate.start()
});
//перед началом показа
$('#w0').on('slide.bs.carousel', function () {
		
	//сбрасываем с анимированные элементы
	animate.stop();

});




animate.start();









