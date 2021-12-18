const inputRange = document.getElementById('input-range')
const output = document.getElementById('input-range-output')

// money format function
var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'IDR',
});

inputRange.addEventListener('change', function() {
    output.innerHTML = formatter.format(this.value)
})