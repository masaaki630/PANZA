// 商品ごとの価格
const productPrices = [10000, 10000, 10000, 10000]; // 各商品の価格を適切に設定する

// 初期合計金額
let totalAmount = 0;

// 合計金額を計算して表示する関数
function updateTotal() {
  totalAmount = productPrices.reduce((sum, price) => sum + price, 0);
  document.getElementById('total').textContent = `合計: ￥${totalAmount}`;
}

// 商品削除ボタンの処理
function removeProduct(button) {
  const productContainer = button.closest('.product');
  const productIndex = Array.from(productContainer.parentNode.children).indexOf(productContainer);
  
  // 商品を削除
  productPrices.splice(productIndex, 1);
  productContainer.remove();

  // 合計金額を更新
  updateTotal();
}

// ページ読み込み時に合計金額を初期化
window.onload = updateTotal;