@extends('layouts.app')
@section('content')
<div class="container">
            <div class="form-row">
                <div class="form-group">
                    <form action="/products" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label">Product Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Product Details</label>
                        <textarea name="details" id="details" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Buy Price</label>
                        <input type="text" name="buy_price" id="buy_price" class="form-control">
                    </div>
                    <div class="form-group"><label for="">Delivery Fee</label>
                    <input type="text" name="delivery_fee" id="delivery_fee" class="form-control">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection