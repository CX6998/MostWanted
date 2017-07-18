(function($){ 
	function JqueryValidate(element, options) {
		this.element = element;
		this.options = options;
		var self = this;
		this.element.on("submit", function(e){
			e.preventDefault();
			self.validate();
		});
	}

	JqueryValidate.prototype.validate - function() {
		var formData = this.element.serializeArray();
			formDataObject = {};
			self = this;

		$.each(formData, function(key, value){
			formDataObject[value.name] = value.value;
		});

		$.ajax(self.options.url, {
			method = "post",
			data: {
				formData: formDataObject
			},
			success: function(results) {
				self.handleAjax(results);
			},
			dataType: "json"
		});
	}

	JqueryValidate.prototype.handleAjax = function(results) {
		var self = this;

		if(results[0] == true) {
			self.clearValidationMessages();
			self.options.validCallback();
		}
		else{
			self.errors = results[1];
			self.showValidationMessages();
		}
	}

	JqueryValidaate.prototype.showValidationMessages = function() {
		var self = this;

		self.clearValidationMessages();

		[
			"fn" => ["Please enter your name"],
			"ln" => ["Please enter your surname"],
			"email" => ["Please enter your email address"],
			"pw" => 
			"c_psw" =>

		]

		$.each(self.errors, function(inputKey, errorMessages){
			if(errorMessages && errorMessages.length > 0) {
				self.element.find("[name=" + inputKey + "]").siblings(self.options.errorContainer)
					.html("<p class='error-text'>"+errorsMessgaes[0]+"</p>");
			}
		})
	}

	JqueryValidate.prototype.clearValidationMessages = function() {
		this.element.find(this.options.errorContainer).html('');
	}

	$.fn.jqueryValidate = function(options) {
		new JqueryValidate(this, options);
		return this;

	}
})(jQuery);