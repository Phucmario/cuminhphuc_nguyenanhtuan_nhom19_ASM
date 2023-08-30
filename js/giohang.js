// Hàm xóa một mục khỏi giỏ hàng
function deleteItem(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
    updateItem();
}

// Hàm cập nhật giỏ hàng và tính tổng số tiền
function updateItem() {
    var table = document.getElementById("cart-table");
    var rows = table.getElementsByTagName("tr");
    var total = 0;

    // Lặp qua từng hàng của bảng (loại bỏ hàng tiêu đề)
    for (var i = 1; i < rows.length - 1; i++) {
        var row = rows[i];
        var checkbox = row.getElementsByTagName("input")[0];
        var quantityInput = row.getElementsByClassName("quantity")[0];
        var price = parseFloat(row.cells[4].innerText.replace(" đ", "").replace(".", ""));
        var subtotalCell = row.getElementsByClassName("subtotal")[0];

        // Cập nhật tổng phụ cho từng mục
        var quantity = parseInt(quantityInput.value);
        var subtotal = quantity * price;
        subtotalCell.innerText = formatCurrency(subtotal) + " đ";

        // Tính tổng số tiền
        if (checkbox.checked) {
            total += subtotal;
        }
    }

    // Cập nhật tổng số tiền trong hàng cuối cùng
    document.getElementById("total-amount").innerText = formatCurrency(total) + " đ";
}

// Định dạng tiền tệ chỉ với giá trị
function formatCurrency(amount) {
    return amount.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}