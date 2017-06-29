$.notify.addStyle('happyblue', {
  html: "<div><span data-notify-html/></div>",
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


$(".clmn .tarifs").parent('a').click( function () {
	
	$(this.parentElement).notify(
			  $(this.parentElement).find("input[name='detail']").val(),
			  { position:"right",
				style: "happyblue",
			  }
			);
	

});



