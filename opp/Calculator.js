/* Classe Calculator */
function Calculator() 
{ 	
	this.result = 0;
	
	
	this.add = function(x) {
		if( this.add.arguments.length == 1 &&
		  !isNaN(x) ){
			this.result += x;
		}
	}

	this.minus = function(x) {
		if( this.minus.arguments.length == 1 &&
		  !isNaN(x) ){
			this.result -= x;
		}
	}

	this.multiply = function(x) {
		if( this.multiply.arguments.length == 1 &&
		  !isNaN(x) ){
			this.result *= parseFloat(x);
		}
	}
	
	this.divide  = function(x) {
		if( this.divide.arguments.length == 1 &&
		  !isNaN(x) && x != 0){
			this.result = this.result / x;
		}
	}

}