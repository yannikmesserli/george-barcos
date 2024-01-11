var Tourniquet = new Class({
		initialize: function(required){
			this.container = $(required.container);
			
			
			
			this.tabs = this.container.getChildren('.item');
			this.max = this.tabs.length-1;
			this.cur = 0;
			
			this.positionLeft = this.tabs[0].getStyle('margin-left');
			this.windowSize = this.container.getSize().x;
			
			/* TRIGGER FOR THE ARROW */
			this.previous_btn = $(required.previous);
			this.previous_btn.addEvent('click',(function(e){
				e.stop();
				this.previous();
			}).bind(this));
			this.next_btn = $(required.next);
			this.next_btn.addEvent('click',(function(e){
				e.stop();
				this.next();
			}).bind(this));
			
			[this.container, this.previous_btn, this.next_btn].each(function(el){ el.setStyles({'position': 'absolute'});});

			//Desactive some btn
			this.control_btn();

			this.effects = []; 
			this.Curposition = 0;
			this.tabs.each(function(el, i){
				el.setStyle('position', 'absolute');
				if(i != 0 ) el.setStyles({'opacity': 0});
				this.effects.push( new Fx.Morph(el, {
						duration: 1000, 
						transition: Fx.Transitions.Cubic.easeOut,
						onComplete: function() {
							if(this.getStyle('opacity') == 1){
								this.fireEvent('entered');
							}
						}.bind(el),
						onStart: function() {
							if(this.getStyle('opacity') == 1){
								this.fireEvent('departure');
							}
						}.bind(el)
					})    );
			}, this);



			},
		next: function(){
			if( this.cur < this.max){
	
				// Make the element out
				this.effects[this.cur].pause();
				
				this.effects[this.cur].start({'opacity': 0 });

				// Make a new element enter
				this.cur = this.cur +1;
				this.effects[this.cur].pause();
				this.effects[this.cur].start({'opacity': 1});
				
				this.control_btn();

			}
		},

		previous: function(){

			if( this.cur > 0){

				// Make the element out
				this.effects[this.cur].pause();
				this.effects[this.cur].start({'opacity': 0 });
				
				// Make a new element enter
				this.cur = this.cur -1;
				this.effects[this.cur].pause();
				this.effects[this.cur].start({'opacity': 1});

				this.control_btn();
			}

		},
		control_btn: function(){
			/* Just for the home*/
			if(this.cur == this.max){
				this.next_btn.addClass('inactive');
			}else{
				this.next_btn.removeClass('inactive');
			}
			
			if(this.cur == 0){
				this.previous_btn.addClass('inactive');
			}else{
				this.previous_btn.removeClass('inactive');
			}
		}
	});
	
	