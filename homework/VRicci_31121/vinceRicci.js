// This first example only works if the non-number is in quotes. Otherwise it errors out.

function isHighest(a, b, c) {
	var maxValue = 0;

	if (a > b){
		maxValue = a;
	} else {
		maxValue = b;
	}
	if (c > maxValue) {
		maxValue = c;
	}
	if (maxValue >= 'maxValue') {
		maxValue = null;
	}
	return maxValue
}

// This one still returns the highest number even if one is not a number

function isHighest(a, b, c) {
	var maxValue = 0;

	if (a > b){
		maxValue = a;
	} else {
		maxValue = b;
	}
	if (c > maxValue) {
		maxValue = c;
	}
	if (isNaN(maxValue)) {
		maxValue = null;
	}
	return maxValue
}