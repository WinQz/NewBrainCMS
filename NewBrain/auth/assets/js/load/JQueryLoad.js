// Yannick niet aankomen, anders breek je mijn javascript code!!!!!!!!!!!!!

$(document).ready(function(){
        var trigger = $('a'),
            container = $('#yada-load').fadeOut(0).fadeIn(600);
			
        trigger.on('click', function(){
          var $this = $(this),//.fadeOut(0).fadeIn(500),
            target = $this.data('target');
       
          container.load(target).fadeOut(0).fadeIn(600);
          
          return false;
        });
      });