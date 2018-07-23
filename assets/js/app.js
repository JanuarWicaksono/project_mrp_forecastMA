//function convertTo Rupiah
function convertToRupiah(data) {
    var rupiah = '';
    var angkarev = data.toString().split('').reverse().join('');
    for (var i = 0; i < angkarev.length; i++)
        if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
    return rupiah.split('', rupiah.length - 1).reverse().join('');
}