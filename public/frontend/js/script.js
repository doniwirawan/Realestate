const inputRange = document.getElementById('input-range')
const output = document.getElementById('input-range-output')
const price = document.getElementById('price')


// money format function
var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'IDR',
});

inputRange.addEventListener('change', function() {
    output.innerHTML = formatter.format(this.value)
})


price.addEventListener('change', function () {
    // this.value = formatter.format(this.value)
    this.value = 'testing'
})

console.log(price)
console.log('test')