/* Classe Enigma */
function Enigma() 
{ 	
	var textCrypter = "jdwovarig xunsyqcp'fmztkhbel.,:;";
	var texteDecrypter =   "abcdefghijklmnopqrstuvwxyz '.,:;";
	
	this.encrypt = function (text) {
		textResult = "";
		var j;
		for (var i=0; i < text.length; i++){
			j = texteDecrypter.indexOf(text[i]);
			textResult += textCrypter.charAt(j);
		}
		
		return textResult;
	}
	this.decrypt = function (text) {
		textResult = "";
		var j;
		for (var i=0; i < text.length; i++){
			j = textCrypter.indexOf(text[i]);
			textResult += texteDecrypter.charAt(j);
		}
		return textResult;
	}
}