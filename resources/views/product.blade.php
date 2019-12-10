<div class="view-product-body">
    <div class="col-lg-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($product->files as $k=>$file)
                    @if($k==0)
                    <div class="carousel-item active">
                        <img class="card-img" src="{{ URL::to('/') . $file['path'] }}" alt="">
                    </div>
                    @else
                        <div class="carousel-item">
                            <img class="card-img" src="{{ URL::to('/') . $file['path'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-lg-11 offset-lg-1">
        <div class="s_product_text">
            <h3>{{$product['name']}}</h3>
            <h2>{{(float)$product['price']}} грн.</h2>
            <ul class="list">
                <li><a class="active" href="#"><span>Коллекция</span> : {{$product->category['name']}}</a></li>
                <li><a href="#"><span>Наличие</span> : @if($product['quantity'] > 0)На складе @else Нет на складе @endif</a></li>
            </ul>
            <p>{{$product['description']}}</p>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="button button-hero" data-dismiss="modal">Close</button>
</div>
