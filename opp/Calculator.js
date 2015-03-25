/* Classe Calculator */
function Calculator() 
{ 	
	this.result = 0;
	
	this.add = function(x) {
		this.result += parseFloat(x);
	}

	this.minus = function(x) {
		this.result -= parseFloat(x);
	}

	this.divide  = function(x) {
		this.result *= parseFloat(x);
	}

	this.multiply = function(x) {
		this.result /= parseFloat(x);
	}
}