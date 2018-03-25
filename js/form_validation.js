function CustomValidation(input) {
	this.invalidities = [];
	this.validityChecks = [];

	this.inputNode = input;

	this.registerListener();
}

CustomValidation.prototype = {
	addInvalidity: function(message) {
		this.invalidities.push(message);
	},
	getInvalidities: function() {
		return this.invalidities.join('. \n');
	},
	checkValidity: function(input) {
		for ( var i = 0; i < this.validityChecks.length; i++ ) {

			var isInvalid = this.validityChecks[i].isInvalid(input);
			if (isInvalid) {
				this.addInvalidity(this.validityChecks[i].invalidityMessage);
			}

			var requirementElement = this.validityChecks[i].element;

			if (requirementElement) {
				if (isInvalid) {
					requirementElement.classList.add('invalid');
					requirementElement.classList.remove('valid');
				} else {
					requirementElement.classList.remove('invalid');
					requirementElement.classList.add('valid');
				}

			} 
		}
	},
	checkInput: function() { 

		this.inputNode.CustomValidation.invalidities = [];
		this.checkValidity(this.inputNode);

		if ( this.inputNode.CustomValidation.invalidities.length === 0 && this.inputNode.value !== '' ) {
			this.inputNode.setCustomValidity('');
		} else {
			var message = this.inputNode.CustomValidation.getInvalidities();
			this.inputNode.setCustomValidity(message);
		}
	},
	registerListener: function() { 

		var CustomValidation = this;

		this.inputNode.addEventListener('keyup', function() {
			CustomValidation.checkInput();
		});


	}

};



var usernameValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="username"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="username"] .input-requirements li:nth-child(2)')
	}
];


var passwordValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 8 | input.value.length > 100;
		},
		invalidityMessage: 'This input needs to be between 8 and 100 characters',
		element: document.querySelector('label[for="password"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			return !input.value.match(/[0-9]/g);
		},
		invalidityMessage: 'At least 1 number is required',
		element: document.querySelector('label[for="password"] .input-requirements li:nth-child(2)')
	},
	{
		isInvalid: function(input) {
			return !input.value.match(/[a-z]/g);
		},
		invalidityMessage: 'At least 1 lowercase letter is required',
		element: document.querySelector('label[for="password"] .input-requirements li:nth-child(3)')
	},
	{
		isInvalid: function(input) {
			return !input.value.match(/[A-Z]/g);
		},
		invalidityMessage: 'At least 1 uppercase letter is required',
		element: document.querySelector('label[for="password"] .input-requirements li:nth-child(4)')
	},
	{
		isInvalid: function(input) {
			return !input.value.match(/[\!\@\#\$\%\^\&\*]/g);
		},
		invalidityMessage: 'You need one of the required special characters',
		element: document.querySelector('label[for="password"] .input-requirements li:nth-child(5)')
	}
];


var nameValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="name"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="name"] .input-requirements li:nth-child(2)')
	}
];


var fatherValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="father"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="father"] .input-requirements li:nth-child(2)')
	}
];


var motherValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="mother"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="mother"] .input-requirements li:nth-child(2)')
	}
];


var emailValidityChecks = [
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Enter valid email',
		element: document.querySelector('label[for="email"] .input-requirements li:nth-child(1)')
	}
];


var contactValidityChecks = [
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^0-9]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="contact"] .input-requirements li:nth-child(1)')
	}
];

var addressValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="address"] .input-requirements li:nth-child(1)')
	}
];


var cityValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="city"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="city"] .input-requirements li:nth-child(2)')
	}
];


var stateValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="state"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="state"] .input-requirements li:nth-child(2)')
	}
];


var pinValidityChecks = [
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^0-9]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="pin"] .input-requirements li:nth-child(1)')
	}
];


var countryValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="country"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="country"] .input-requirements li:nth-child(2)')
	}
];


var nationValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="nation"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="nation"] .input-requirements li:nth-child(2)')
	}
];


var deptValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="dept"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="dept"] .input-requirements li:nth-child(2)')
	}
];


var rollValidityChecks = [
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^0-9/]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Should be in format XX/YY/ZZ',
		element: document.querySelector('label[for="roll"] .input-requirements li:nth-child(1)')
	}
];


var sessionValidityChecks = [
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^0-9]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Year of joining college to year of expected passout.',
		element: document.querySelector('label[for="session"] .input-requirements li:nth-child(1)')
	}
];

var school12ValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="school12"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="school12"] .input-requirements li:nth-child(2)')
	}
];


var affiliated12ValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="affiliated12"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="affiliated12"] .input-requirements li:nth-child(2)')
	}
];


var percent12ValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length > 4;
		},
		invalidityMessage: 'Calculated w.r.t 100%',
		element: document.querySelector('label[for="percent12"] .input-requirements li:nth-child(1)')
	}
];

var school10ValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="school10"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="school10"] .input-requirements li:nth-child(2)')
	}
];


var affiliated10ValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="affiliated10"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters are allowed',
		element: document.querySelector('label[for="affiliated10"] .input-requirements li:nth-child(2)')
	}
];


var percent10ValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length > 4;
		},
		invalidityMessage: 'Calculated w.r.t 100%',
		element: document.querySelector('label[for="percent10"] .input-requirements li:nth-child(1)')
	}
];

var usernameInput = document.getElementById('username');
var passwordInput = document.getElementById('password');
var nameInput = document.getElementById('name');
var emailInput = document.getElementById('email');
var contactInput = document.getElementById('contact');
var pinInput = document.getElementById('pin');
var fatherInput = document.getElementById('father');
var motherInput = document.getElementById('mother');
var addressInput = document.getElementById('address');
var cityInput = document.getElementById('city');
var stateInput = document.getElementById('state');
var countryInput = document.getElementById('country');
var nationInput = document.getElementById('nation');
var deptInput = document.getElementById('dept');
var rollInput = document.getElementById('roll');
var sessionInput = document.getElementById('session');
var school12Input = document.getElementById('school12');
var affiliated12Input = document.getElementById('affiliated12');
var percent12Input = document.getElementById('percent12');
var school10Input = document.getElementById('school10');
var affiliated10Input = document.getElementById('affiliated10');
var percent10Input = document.getElementById('percent10');



usernameInput.CustomValidation = new CustomValidation(usernameInput);
usernameInput.CustomValidation.validityChecks = usernameValidityChecks;

passwordInput.CustomValidation = new CustomValidation(passwordInput);
passwordInput.CustomValidation.validityChecks = passwordValidityChecks;

nameInput.CustomValidation = new CustomValidation(nameInput);
nameInput.CustomValidation.validityChecks = nameValidityChecks;

fatherInput.CustomValidation = new CustomValidation(fatherInput);
fatherInput.CustomValidation.validityChecks = fatherValidityChecks;

motherInput.CustomValidation = new CustomValidation(motherInput);
motherInput.CustomValidation.validityChecks = motherValidityChecks;

emailInput.CustomValidation = new CustomValidation(emailInput);
emailInput.CustomValidation.validityChecks = emailValidityChecks;

contactInput.CustomValidation = new CustomValidation(contactInput);
contactInput.CustomValidation.validityChecks = contactValidityChecks;

addressInput.CustomValidation = new CustomValidation(addressInput);
addressInput.CustomValidation.validityChecks = addressValidityChecks;

cityInput.CustomValidation = new CustomValidation(cityInput);
cityInput.CustomValidation.validityChecks = cityValidityChecks;

stateInput.CustomValidation = new CustomValidation(stateInput);
stateInput.CustomValidation.validityChecks = stateValidityChecks;

pinInput.CustomValidation = new CustomValidation(pinInput);
pinInput.CustomValidation.validityChecks = pinValidityChecks;

countryInput.CustomValidation = new CustomValidation(countryInput);
countryInput.CustomValidation.validityChecks = countryValidityChecks;

nationInput.CustomValidation = new CustomValidation(nationInput);
nationInput.CustomValidation.validityChecks = nationValidityChecks;

deptInput.CustomValidation = new CustomValidation(deptInput);
deptInput.CustomValidation.validityChecks = deptValidityChecks;

rollInput.CustomValidation = new CustomValidation(rollInput);
rollInput.CustomValidation.validityChecks = rollValidityChecks;

sessionInput.CustomValidation = new CustomValidation(sessionInput);
sessionInput.CustomValidation.validityChecks = sessionValidityChecks;

school12Input.CustomValidation = new CustomValidation(school12Input);
school12Input.CustomValidation.validityChecks = school12ValidityChecks;

affiliated12Input.CustomValidation = new CustomValidation(affiliated12Input);
affiliated12Input.CustomValidation.validityChecks = affiliated12ValidityChecks;

percent12Input.CustomValidation = new CustomValidation(percent12Input);
percent12Input.CustomValidation.validityChecks = percent12ValidityChecks;

school10Input.CustomValidation = new CustomValidation(school10Input);
school10Input.CustomValidation.validityChecks = school10ValidityChecks;

affiliated10Input.CustomValidation = new CustomValidation(affiliated10Input);
affiliated10Input.CustomValidation.validityChecks = affiliated10ValidityChecks;

percent10Input.CustomValidation = new CustomValidation(percent10Input);
percent10Input.CustomValidation.validityChecks = percent10ValidityChecks;


var inputs = document.querySelectorAll('input:not([type="submit"])');


var submit = document.querySelector('input[type="submit"');
var form = document.getElementById('registration');

function validate() {
	for (var i = 0; i < inputs.length; i++) {
		inputs[i].CustomValidation.checkInput();
	}
}

submit.addEventListener('click', validate);
form.addEventListener('submit', validate);