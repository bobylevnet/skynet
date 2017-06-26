$.notify.addStyle('happyblue', {
  html: "<div><span data-notify-text/></div>",
  classes: {
    base: {
      "white-space": "nowrap",
      "background-color": "lightblue",
      "padding": "5px"
    },
    superblue: {
      "color": "white",
      "background-color": "gray"
    }
  }
});


$(".clmn a").first().click( function () {
	
	$(this.parentElement).notify(
			  $(this.parentElement).find("input[name='detail']").val(),
			  { position:"right",
				style: "happyblue",
				
			  
			  }
			);

	
	
});

