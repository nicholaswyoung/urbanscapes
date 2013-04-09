var ShoppingCart = window.ShoppingCart = function () {
	this.items = [];
};

ShoppingCart.prototype.add = function (item) {
	this.items.push(item);
};