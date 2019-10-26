@extends('layouts.admin')

@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('title', $title)

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form class="row login_form" id="metaForm">
                <div class="col-md-12 form-group">
                <h4>Top banner</h4>
                    <input type="checkbox" id="top-banner-available" name="top-banner-available">
                </div>
                <div class="col-md-12 form-group">
                    <input type="file" class="form-control" id="top-banner-image" name="top-banner-image">
                </div>
                <div class="col-md-1">
                    <label>Banner color</label>
                    <input type="color" class="form-control" id="top-banner-color" name="top-banner-color">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="top-banner-h4" name="top-banner-h4" placeholder="H4"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'H4'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="top-banner-h1" name="top-banner-h1" placeholder="H1"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'H1'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="top-banner-p" name="top-banner-p" placeholder="P"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'P'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="url" class="form-control" id="top-banner-url" name="top-banner-url" placeholder="Url"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Url'">
                </div>

                <div class="col-md-12 form-group">
                    <h4>Top products</h4>
                    <input type="checkbox" id="top-products-available" name="top-products-available">
                </div>
                <div class="col-md-12 form-group">
                    <input type="number" id="top-products-count" name="top-products-count" placeholder="Count">
                </div>
                <div class="col-md-12 form-group">
                    <h4>Middle banner</h4>
                    <input type="checkbox" id="middle-banner-available" name="middle-banner-available">
                </div>
                <div class="col-md-12 form-group">
                    <input type="file" class="form-control" id="middle-banner-image" name="middle-banner-image">
                </div>
                <div class="col-md-1">
                    <label>Banner color</label>
                    <input type="color" class="form-control" id="middle-banner-color" name="middle-banner-color">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="middle-banner-h4" name="middle-banner-h4" placeholder="H4"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'H4'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="middle-banner-h1" name="middle-banner-h1" placeholder="H1"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'H1'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="middle-banner-p" name="middle-banner-p" placeholder="P"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'P'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="url" class="form-control" id="middle-banner-url" name="middle-banner-url" placeholder="Url"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Url'">
                </div>
                <div class="col-md-12 form-group">
                    <h4>New products</h4>
                    <input type="checkbox" id="new-products-available" name="new-products-available">
                </div>
                <div class="col-md-12 form-group">
                    <input type="number" id="new-products-count" name="new-products-count" placeholder="Count">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="meta-title" name="title" placeholder="META title"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'META title'">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="meta-description" name="description" placeholder="META description"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'META description'">
                </div>
            </form>
        </div>
    </div>
@stop
