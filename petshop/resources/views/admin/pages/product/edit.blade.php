@extends('admin.layouts.master')
@section('title')
@foreach($products as $product)
{{$product->product_name}}
@endforeach
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <script type="text/javascript">
                    Page();
                </script>
                <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                    aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                <div id="products-show" class="product-detail page">
                    <div class="aviary-modal-bg">
                        <div class="aviary-modal"></div>
                    </div>
                    @foreach($products as $product)
                    <form autocomplete="off" data-url="{{route('product.update', $product->product_slug)}}"
                        id="form-edit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_id" value="{{$product->product_name}}">
                        <header class="ui-title-bar-container">
                            <div class="ui-title-bar">
                                <div class="ui-title-bar__navigation">
                                    <div class="ui-breadcrumbs">
                                        <a href="{{route('product.list')}}"
                                            class="ui-button ui-button--transparent ui-breadcrumb">
                                            <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#chevron-left-thinner"></use>
                                            </svg>
                                            <span class="ui-breadcrumb__item">Quay lại danh sách sản phẩm</span>
                                        </a>
                                    </div>

                                    <div class="ui-title-bar__pagination">
                                        <ul class="segmented">
                                            <li>
                                                <a class="btn tooltip tooltip-bottom tooltip-right-align js-prev-btn <?php if($prev->count() != 0){
                                                        echo '';
                                                    }else echo 'disabled';  
                                                    ?>" href="<?php if($prev->count() != 0){
                                                        echo $prev[0]->product_slug;
                                                    }else echo 'javascript:void(0)';  
                                                    ?>">
                                                    <span class="tooltip-container">
                                                        <span class="tooltip-label">Trước</span>
                                                    </span>
                                                    <svg role="img"
                                                        class="next-icon next-icon--rotate-270 next-icon--size-16"
                                                        aria-labelledby="arrow-detailed-18c22d39dd5e48cc8c038cec7890ac6a-title">
                                                        <title
                                                            id="arrow-detailed-0f55b97e20a441cc9e1024549a73d37b-title">
                                                            Trước</title>
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#arrow-detailed">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>


                                                <a class="btn tooltip tooltip-bottom tooltip-right-align js-next-btn <?php if($next->count() != 0){
                                                        echo '';
                                                    }else echo 'disabled';  
                                                    ?>" href="<?php if($next->count() != 0){
                                                        echo $next[0]->product_slug;
                                                    }else echo 'javascript:void(0)';  
                                                    ?>">
                                                    <span class="tooltip-container">
                                                        <span class="tooltip-label">Sau</span>
                                                    </span>
                                                    <svg role="img"
                                                        class="next-icon next-icon--rotate-90 next-icon--size-16"
                                                        aria-labelledby="arrow-detailed-20adc9b098e04a4e93e9c46165210122-title">
                                                        <title
                                                            id="arrow-detailed-153be3beba1847b6868b35bbedd7c37b-title">
                                                            Sau</title>
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#arrow-detailed"></use>
                                                    </svg>
                                                </a>


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ui-title-bar__main-group">
                                    <div class="ui-title-bar__heading-group">
                                        <span class="ui-title-bar__icon">
                                            <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-products"></use>
                                            </svg>
                                        </span>
                                        <h1 class="ui-title-bar__title">{{$product->product_name}}</h1>
                                    </div>
                                    <div class="action-bar">
                                        <div class="action-bar__item action-bar__item--link-container">
                                            <div class="action-bar__top-links">
                                                </button>
                                                <a href="http://www.cothongthai.com/sicilian-najdorf-b90-b99"
                                                    class="ui-button ui-button--transparent action-bar__link"
                                                    data-popover-index="2" target="_blank" rel="noopener noreferrer">
                                                    <svg
                                                        class="next-icon next-icon--size-20 action-bar__link-icon next-icon--no-nudge">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#next-view-minor"></use>
                                                    </svg>Xem trên web
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ui-title-bar__mobile-primary-actions">
                                            <div class="ui-title-bar__actions">
                                                <button
                                                    class="ui-button ui-button--primary js-btn-loadable js-btn-primary ui-title-bar__action btn-primary has-loading"
                                                    type="submit" name="button" disabled="disabled">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible-header">
                                <div class="collapsible-header__heading"></div>
                            </div>
                        </header>
                        <div class="ui-layout">
                            <div class="ui-layout__sections">
                                <?php if(session()->get('editsuccess')): ?>
                                <div class="ui-layout__section" id="load-content-success">
                                    <div class="ui-layout__item">
                                        <div class="ui-banner ui-banner--status-success hide-when-printing"
                                            tabindex="-1" role="alert" data-notice-announced="true">
                                            <div class="ui-banner__ribbon"><svg
                                                    class="next-icon next-icon--size-20 next-icon--no-nudge">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#checkmark-circle">
                                                    </use>
                                                </svg></div>
                                            <div class="ui-banner__content">
                                                <h2 class="ui-banner__title type--breakall">
                                                    {{session()->get('editsuccess')}} đã được chỉnh sửa.</h2>
                                                <div class="ui-type-container ui-type-container--spacing-tight">
                                                    <p>
                                                        <a data-allow-default="1" class="ui-button btn"
                                                            href="{{route('product.create')}}">Tạo sản phẩm khác</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    setTimeout(function () {
                                        <? php session() -> forget('editsuccess') ?>
                                         }, 1000);
                                </script>
                                <?php endif ?>
                                <?php if(session()->get('success')): ?>
                                <div class="ui-layout__section" id="load-content-success">
                                    <div class="ui-layout__item">
                                        <div class="ui-banner ui-banner--status-success hide-when-printing"
                                            tabindex="-1" role="alert" data-notice-announced="true">
                                            <div class="ui-banner__ribbon"><svg
                                                    class="next-icon next-icon--size-20 next-icon--no-nudge">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#checkmark-circle">
                                                    </use>
                                                </svg></div>
                                            <div class="ui-banner__content">
                                                <h2 class="ui-banner__title type--breakall">
                                                    {{session()->get('success')}} đã được tạo.</h2>
                                                <div class="ui-type-container ui-type-container--spacing-tight">
                                                    <p>
                                                        <a data-allow-default="1" class="ui-button btn"
                                                            href="{{route('product.create')}}">Tạo sản phẩm khác</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    setTimeout(function () {
                                        <? php session() -> forget('success') ?>
                                         }, 1000);
                                </script>
                                <?php endif ?>
                                <div class="ui-layout__section ui-layout__section--primary">
                                    <div class="ui-layout__item">
                                        <section class="ui-card" id="product-form-container">
                                            <div class="ui-card__section">
                                                <div class="ui-type-container">
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="product-name">
                                                            Tên sản phẩm
                                                        </label>
                                                        <input required="" id="product-name"
                                                            value="{{$product->product_name}}"
                                                            placeholder="Nhập tên sản phẩm" class="next-input" size="30"
                                                            type="text" name="product_name">
                                                    </div>
                                                    <div class="next-input-wrapper">
                                                        <label class="next-label" for="Content">Nội dung</label>
                                                        <textarea name="product_content"
                                                            class="next-input">{{$product->product_content}}</textarea>
                                                    </div>
                                                    <div define="{shownSummary: false}" class="next-input-wrapper">
                                                        <label bind-show="!shownSummary" class="next-label"
                                                            for="product-summary">
                                                            <a href="#" class="link"
                                                                bind-event-click="shownSummary = !shownSummary">Thêm mô
                                                                tả ngắn</a>
                                                        </label>
                                                        <div bind-show="shownSummary" class="hide">
                                                            <label class="next-label" for="product-summary">
                                                                Mô tả ngắn
                                                            </label>
                                                            <textarea name="product_description"
                                                                class="next-input">{{$product->product_description}}</textarea>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        CKEDITOR.replace('product_content');
                                                        CKEDITOR.replace('product_description');
                                                        timer = setInterval(updateDiv, 100);
                                                        function updateDiv() {
                                                            for (instance in CKEDITOR.instances) {
                                                                var desc = CKEDITOR.instances[instance].updateElement();
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="ui-card" id="product-images-container">
                                            <div data-define="{ imageActions: new Bizweb.ProductCreateImageActions(this, $context) }"
                                                data-context="imageActions" id="product-images-content"
                                                data-tg-refresh="product-images-content">
                                                <header class="next-card__header">
                                                    <div
                                                        class="next-grid next-grid--no-padding next-grid--vertically-centered">
                                                        <div class="next-grid__cell">
                                                            <h2 class="next-heading">Ảnh sản phẩm</h2>
                                                        </div>
                                                        <div class="next-grid__cell next-grid__cell--no-flex">
                                                            <div
                                                                class="next-grid next-grid--no-outside-padding next-grid--vertically-centered">
                                                                <div class="next-grid__cell next-grid__cell--no-flex">
                                                                    <div class="styled-file-input">
                                                                        <div class="btn btn--link"
                                                                            style="display:flex;">
                                                                            <a href="#"
                                                                                class="ui-button btn--link change-avatar updateavatar"
                                                                                style="padding:0 15px;"
                                                                                id="ht-cre-product-add-image">Thêm ảnh
                                                                                sản phẩm</a>
                                                                            <input id="uploadAvatar" type="file"
                                                                                name="product_image" accept="image/*"
                                                                                class="js-no-dirty hide">
                                                                            <a href="#"
                                                                                class="ui-button btn--link change-avatar uploadImage"
                                                                                style="padding:0 15px;display:none;"
                                                                                id="ht-cre-product-add-image">Thêm các
                                                                                ảnh sản phẩm</a>
                                                                            <input id="uploadImage" type="file"
                                                                                name="product_images[]" multiple=""
                                                                                accept="image/*"
                                                                                class="js-no-dirty hide">
                                                                            <script>
                                                                                $('.updateavatar').click(function (e) {
                                                                                    e.preventDefault();
                                                                                    $("#uploadAvatar").trigger('click');
                                                                                })
                                                                                $('.uploadImage').click(function (e) {
                                                                                    e.preventDefault();
                                                                                    $("#uploadImage").trigger('click');
                                                                                })

                                                                            </script>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="next-card__section">
                                                    <div class="next-upload-dropzone__wrapper">
                                                        <!-- Upload Image -->
                                                        <ol id="product-images" data-tg-refresh="product-images"
                                                            class="product-photo-grid product-photo-grid--is-showing-all clearfix ui-sortable">
                                                        </ol>
                                                        <!-- Process if image is null -->
                                                        <div id="image-exist">
                                                            <div class="next-upload-dropzone">
                                                                <div
                                                                    class="next-upload-dropzone__hit-area next-upload-dropzone__hit-area--padded">
                                                                    <svg
                                                                        class="next-icon next-icon--size-24 next-upload-dropzone__icon">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#next-dropzone">
                                                                        </use>
                                                                    </svg>
                                                                    <h3
                                                                        class="next-heading next-heading--no-margin next-upload-dropzone__heading">
                                                                        <div class="styled-file-input hide">
                                                                            Add images<input type="file" multiple=""
                                                                                accept="image/*" class="js-no-dirty">
                                                                            or drag and drop to upload
                                                                        </div>
                                                                        <div data-bind-show="dragging"
                                                                            aria-hidden="true">
                                                                            Thả file ảnh vào đây để thêm mới
                                                                        </div>
                                                                    </h3>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="ui-layout__item" id="product-outer-variants"
                                        data-tg-refresh="product-outer-variants">
                                        <div>
                                            <input value="{{$product->product_id}}" type="hidden" name="product_id"
                                                id="product_variant_id">
                                            <section class="ui-card">
                                                <header class="ui-card__header">
                                                    <h2 class="ui-heading">Giá sản phẩm</h2>
                                                </header>
                                                <div class="ui-card__section">
                                                    <div class="ui-type-container">
                                                        <div class="ui-form__section">
                                                            <div class="ui-form__group">
                                                                <div class="next-input-wrapper">
                                                                    <label class="next-label"
                                                                        for="variant-price">Giá</label>
                                                                    <div
                                                                        class="next-input--stylized next-input--has-content">
                                                                        <span
                                                                            class="next-input__add-on next-input__add-on--before">₫</span>
                                                                        <input type="text" name="product_price"
                                                                            id="variant-price" value="0"
                                                                            class="next-input next-input--invisible js-money-field"
                                                                            placeholder="0" data-bind="price"
                                                                            data-autonumeric="autoNumeric">
                                                                    </div>
                                                                </div>
                                                                <div class="next-input-wrapper">
                                                                    <label class="next-label"
                                                                        for="variant-compare_at_price">Giá khuyến
                                                                        mãi</label>
                                                                    <div class="next-input--stylized">
                                                                        <span
                                                                            class="next-input__add-on next-input__add-on--before">₫</span>
                                                                        <input type="text" name="product_price_sale"
                                                                            id="variant-compare_at_price" value=""
                                                                            class="next-input next-input--invisible js-money-field"
                                                                            data-bind="compareAtPrice"
                                                                            data-autonumeric="autoNumeric">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                                <div class="ui-layout__section ui-layout__section--secondary">
                                    <div class="ui-layout__item">
                                        <div class="next-card">
                                            <header class="next-card__header">
                                                <h3 class="ui-heading">Trạng thái</h3>
                                            </header>
                                            <section class="next-card__section">
                                                <div class="visibility" id="PublishingPanel"
                                                    data-context="publishingPanel">
                                                    <div class="ui-form__section">
                                                        <div class="ui-form__element">
                                                            <fieldset class="ui-choice-list">
                                                                <ul>
                                                                    <li>
                                                                        <div class="next-input-wrapper">
                                                                            <label class="next-label next-label--switch"
                                                                                for="active-true">
                                                                                Hiển thị
                                                                            </label>
                                                                            <input type="radio" name="product_active"
                                                                                id="active-true" value="true"
                                                                                class="next-radio"
                                                                                checked="&quot;checked&quot;">
                                                                            <span class="next-radio--styled"></span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="next-input-wrapper">
                                                                            <label class="next-label next-label--switch"
                                                                                for="active-false">
                                                                                Ẩn
                                                                            </label>
                                                                            <input type="radio" name="product_active"
                                                                                id="active-false" value="false"
                                                                                class="next-radio">
                                                                            <span class="next-radio--styled"></span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="ui-layout__item">
                                        <section class="ui-card ui-card--type-aside">
                                            <header class="ui-card__header">
                                                <h2 class="ui-heading">Phân loại</h2>
                                            </header>
                                            <div class="ui-card__section">
                                                <div class="ui-type-container">
                                                    <div class="next-input-wrapper">
                                                        <label for="product_product_type">Danh mục</label>
                                                        <div
                                                            class="ui-popover__container ui-popover__container--full-width-container">
                                                            <div>
                                                                <div class="next-field__connected-wrapper">
                                                                    <style>
                                                                        .select2-container .select2-selection--single {
                                                                            height: 40px;
                                                                        }
                                                                    </style>
                                                                    <select class="next-input select2"
                                                                        name="category_id">

                                                                        <option value="">Nhập danh mục</option>
                                                                       
                                                                        </option>
                                                                        @foreach($list_cat as $cat)
                                                                            @if($product->category_id == $cat->category_id)
                                                                                <option selected value="{{$cat->category_id}}">{{str_repeat('---', $cat->level).$cat->category_name}}</option>                                                                        
                                                                            @else
                                                                            <option value="{{$cat->category_id}}">{{str_repeat('---', $cat->level).$cat->category_name}}</option>                                                                        
                 
                                                                            @endif
                                                                        @endforeach


                                                                    </select>
                                                                    <script>
                                                                        $(document).ready(function () {
                                                                            $(".select2").select2(
                                                                                {
                                                                                    placeholder: "Nhập danh mục",
                                                                                    allowClear: true
                                                                                }
                                                                            );
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="next-input-wrapper">
                                                        <label for="product_vendor">Thương hiệu</label>
                                                        <div
                                                            class="ui-popover__container ui-popover__container--full-width-container">
                                                            <div>
                                                                <div class="next-field__connected-wrapper">
                                                                    <select class="next-input select1" name="brand_id">
                                                                        <option value="">Nhập thương hiệu</option>
                                                                        @foreach($brands as $brand)
                                                                        <option value="{{$brand->brand_id}}">
                                                                            {{$brand->brand_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <script>
                                                                        $(document).ready(function () {
                                                                            $(".select1").select2(
                                                                                {
                                                                                    placeholder: "Nhập thương hiệu",
                                                                                    allowClear: true
                                                                                }
                                                                            );
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-page-actions ui-page-actions--has-secondary">
                            <div class="ui-page-actions__container">
                                <div class="ui-page-actions__actions ui-page-actions__actions--secondary">
                                    <div class="ui-page-actions__button-group">
                                        <button class="ui-button btn-destroy" type="button" name="button">Xóa sản
                                            phẩm</button>
                                    </div>
                                </div>
                                <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                                    <div class="ui-page-actions__button-group">
                                        <button name="button" type="submit"
                                            class="btn js-btn-primary js-btn-loadable btn-primary has-loading">
                                            Lưu
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script>
                        $(document).ready(function () {
                            var result = "";
                            var filesAmount = 0;
                            var index = 0;
                            var dataImage = new Array();
                            var visible = function (result, imgPreviewPlaceholder) {
                                var addImage = `<li class="js-product-photo-grid-item product-photo-grid__item ui-sortable-handle">
                      <div class="aspect-ratio aspect-ratio--square">
                        <img class="aspect-ratio__content"
                          src="${result}"
                          id="image-41702134">
                        <div class="product-photo-hover-overlay drag">
                          <ul class="photo-overlay-actions photo-overlay-actions__selection"
                            data-bind-event-click="toggleImageSelection(41702134)">
                            <li>
                              <a class="photo-overlay-actions__link image-action tooltip tooltip-top">
                                <i
                                  style="width: 17px; height: 17px; display: flex; justify-content: center; align-items: center; border-radius: 50%; border: 2px solid white">
                                  <svg class="next-icon next-icon--color-white hide"
                                    style="top:0;width:10px;height:10px"
                                    data-bind-show="isImageIdSelected(41702134)">
                                    <use xlink:href="#next-checkmark-thick"></use>
                                  </svg>
                                </i>
                                <span class="tooltip-container"><span class="tooltip-label">Chọn</span></span>
                              </a>
                            </li>
                          </ul>
                          <ul class="photo-overlay-actions">
                            <li>
                              <a href="javascript:void(0)"
                                data-bind-event-click="imageAltImage_41702134.show()"
                                class="photo-overlay-actions__link tooltip tooltip-top">
                                <svg role="img" class="next-icon next-icon--color-white next-icon--size-16"
                                  aria-labelledby="next-preview-ae8344009b0b43faaa8885080c887429-title">
                                  <title id="next-preview-bf4d06cb5d3047b3bdd85ac6883de0b9-title">xem ảnh
                                  </title>
                                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-preview">
                                  </use>
                                </svg>
                                <span class="tooltip-container">
                                  <span class="tooltip-label">Xem ảnh</span>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a data-bind-event-click="deleteImage_41702134.show()"
                                class="photo-overlay-actions__link tooltip tooltip-top">
                                <svg role="img" class="next-icon next-icon--color-white next-icon--size-20"
                                  aria-labelledby="delete-minor-f82704e58a9f4943b98c26f1acbf02fa-title">
                                  <title id="delete-minor-439892bff05a47d3989cab2f1d478c2e-title">Xóa ảnh
                                  </title>
                                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#delete-minor">
                                  </use>
                                </svg>
                                <span class="tooltip-container"><span class="tooltip-label">Xóa
                                    ảnh</span></span>
                              </a>
                            </li>
                          </ul>
                         </div>
                       </div>
                   </li>`;
                                $(imgPreviewPlaceholder).append(addImage);
                            }
                            // Feature Image
                            var ShowImagePreview = function (input, imgPreviewPlaceholder, result) {
                                if (input.files) {
                                    filesAmount = input.files.length;
                                    for (var i = 0; i < filesAmount; i++) {
                                        var reader = new FileReader();
                                        reader.onload = function (event) {
                                            var result = event.target.result;
                                            visible(result, imgPreviewPlaceholder);
                                        }

                                        reader.readAsDataURL(input.files[i]);
                                    }
                                }
                            };

                            // Ảnh image feature
                            $('#uploadAvatar').on('change', function () {
                                $('#image-exist').css('display', 'none');
                                $('#ht-cre-product-add-image').css('display', 'none');
                                $('.uploadImage').css('display', 'block');
                                ShowImagePreview(this, '#product-images');

                            });

                            // Product Mutiple Image
                            var ShowMultipleImagePreview = function (input, imgPreviewPlaceholder) {
                                if (input.files) {
                                    filesAmount = input.files.length;
                                    for (var i = 0; i < filesAmount; i++) {
                                        var reader = new FileReader();
                                        reader.onload = function (event) {
                                            var result = event.target.result;
                                            visible(result, imgPreviewPlaceholder);
                                        }

                                        reader.readAsDataURL(input.files[i]);
                                    }
                                }
                            }

                            $('#uploadImage').on('change', function () {
                                ShowMultipleImagePreview(this, '#product-images');


                            });

                            $('#form-edit').submit(function (e) {
                                e.preventDefault();
                                var formData = new FormData(jQuery('#form-edit')[0]);
                                var url = $(this).attr('data-url');
                                $.ajax({
                                    type: 'post',
                                    url: url,
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'JSON',
                                    success: function (respone) {
                                        if (respone) {
                                            var url = '{{route ("product.edit", ":product_slug")}}';
                                            url = url.replace(':product_slug', respone.product_slug);
                                            window.location.href = url
                                        }

                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {

                                    }
                                })
                            })
                        })
                    </script>
                    @endforeach
                </div>

                <div class="ui-footer-help">
                    <div class="ui-footer-help__content">
                        <div class="ui-footer-help__icon">
                            <svg class="next-icon next-icon--size-24 next-icon--no-nudge" role="img"
                                aria-labelledby="next-help-circle-title">
                                <title id="next-help-circle-title">Help</title>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-help-circle"></use>
                            </svg>
                        </div>
                        <div>
                            Bạn có thể xem thêm hướng dẫn <a target="_blank" rel="noreferrer noopener"
                                title="Hướng dẫn thao tác với Sản phẩm"
                                href="https://support.sapo.vn/them-san-pham-sapo-web">tại đây</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>
@endsection