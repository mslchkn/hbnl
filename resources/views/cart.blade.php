@foreach($products as $product)
    <div class="product-cart">
            <div class="product_image">
                <img style="padding-right: 10px" src="{{ URL::to('/') }}/assets/images/cart1.png" alt="">
                <p>{{$product['item']['description']}}</p>
            </div>
            <div>
                <h5>{{$product['item']['price']}} грн.</h5>
            </div>
            <div class="product_count">
                <input type="number" name="qty" maxlength="12" data-id="{{$product['item']['id']}}" value="{{$product['quantity']}}" title="Quantity:"
                       class="input-text cart-product-quantity qty">
            </div>
            <div class="product_total">
                <h5>{{(float)$product['quantity']*$product['item']['price']}} грн.</h5>
            </div>
    </div>
@endforeach
<div class="subtotal-row">
    <h5>Subtotal</h5>
    <h5 class="sum">{{$sum}} грн.</h5>
</div>
<div class="details">
        <div>
            <input type="text" class="form-control mb-1" name="name" placeholder="Имя">
        </div>
        <div>
            <input type="email" class="form-control mb-1" name="email" placeholder="Email">
        </div>
        <div>
            <input type="text" class="form-control mb-1" name="phone" placeholder="Телефон">
        </div>
        <div>
            <textarea name="comment" class="form-control mb-1" placeholder="Комментарий"></textarea>
        </div>
</div>
<tr class="out_button_area">
    <td class="d-none-l">

    </td>
    <td class="">

    </td>
    <td>

    </td>
    <td>
        <div class="checkout_btn_inner d-flex align-items-center">
            <a class="gray_btn" id="sendCart" href="#">Отправить</a>
        </div>
    </td>
</tr>
