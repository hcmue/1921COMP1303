<?php
$x = "10";
$y = 10;
echo $x == $y ? "true" : "false";
echo $x === $y ? "true" : "false";
$gia = number_format(6490000);
$sp = <<< SP
<div class="owl-item" style="width: 240px;"><div class="item" data-index="2">
                        <!--#region Ngành hàng chính -->
        <a href="/dtdd/oppo-a91">
                <img width="180" height="180" src="https://cdn.tgdd.vn/Products/Images/42/217287/oppo-a91-trang-600x600-400x400.jpg" alt="OPPO A91">
            <h3>OPPO A91</h3>
            <h6 class="textkm"></h6>
                        <div class="price">
                            <strong>6.490.000₫</strong>
                            <span>{$gia}₫</span>
                        </div>
            
                <div class="promo noimage">
                        <p> Tặng 2 suất mua Đồng hồ thời trang giảm 40% (không áp dụng thêm khuyến mãi khác)</p>
                </div>
            <label class="discount">GIẢM 500.000₫</label>
                    <img src="https://cdn.tgdd.vn/ValueIcons/1/Label_01-05.png" class="icon-imgNew cate42 left">
            <input class="spInfo" data-brand="OPPO" data-cat="Điện thoại" data-code="0131491001971" data-price="6990000" id="data217287" name="data217287" type="hidden" value="217287">
        </a>
    <!--#endregion -->

                </div></div>
SP;
echo $sp;
?>