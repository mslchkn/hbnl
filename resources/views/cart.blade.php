@foreach($products as $product)
    <tr class="product-cart">
        <td>
            <div class="media">
                <div class="d-flex">
                    <img style="padding-right: 10px" src="{{ URL::to('/') }}/assets/images/cart1.png" alt="">
                </div>
                <div class="media-body">
                    {{$product['item']['description']}}
                </div>
            </div>
        </td>
        <td>
            <h5>{{$product['item']['price']}}</h5>
        </td>
        <td>
            <div class="product_count">
                <input type="number" name="qty" maxlength="12" data-id="{{$product['item']['id']}}" value="{{$product['quantity']}}" title="Quantity:"
                       class="input-text cart-product-quantity qty">
            </div>
        </td>
        <td>
            <h5>{{(float)$product['quantity']*$product['item']['price']}} грн.</h5>
        </td>
    </tr>
@endforeach
<tr>
    <td>

    </td>
    <td>

    </td>
    <td>
        <h5>Subtotal</h5>
    </td>
    <td>
        <h5>{{$sum}} грн.</h5>
    </td>
</tr>
<tr class="out_button_area">
    <td class="d-none-l" colspan="3">
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
    </td>
    <td>

    </td>
</tr>
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
