@foreach($categories as $category)
<form action="" class="" data-url="{{route('category.update', $category->category_slug)}}" method="post"  enctype="multipart/form-data" id="form-edit">
    {{ csrf_field() }}
    <header class="ui-title-bar-container">
        <div class="ui-title-bar">
            <div class="ui-title-bar__navigation">
                <div class="ui-breadcrumbs">
                    <a href="{{route('category.list')}}" class="ui-button ui-button--transparent ui-breadcrumb"
                        data-bind-href="">
                        <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                            <use xlink:href="#chevron-left-thinner"></use>
                        </svg>
                        <span class="ui-breadcrumb__item">Danh mục</span>
                    </a>
                </div>
            </div>
            <div class="ui-title-bar__main-group">
                <div class="ui-title-bar__heading-group">
                    <span class="ui-title-bar__icon">
                        <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                            <use xlink:href="#next-collections"></use>
                        </svg>
                    </span>
                    <h1 class="ui-title-bar__title">{{$category->category_name}}</h1>
                </div>
                <div data-define="" class="action-bar">
                    <div class="action-bar__item action-bar__item--link-container">
                        <div class="action-bar__top-links">
                            <a href="http://www.cothongthai.com/sach-khai-cuoc"
                                class="ui-button ui-button--transparent action-bar__link" target="_blank"
                                track_click="{category: 'View your website', action: &quot;SmartCollection&quot; + ' published'}"
                                data-popover-index="1" rel="noopener noreferrer">
                                <svg class="next-icon next-icon--size-20 action-bar__link-icon next-icon--no-nudge">
                                    <use xlink:href="#next-view-minor"></use>
                                </svg>Xem trên web
                            </a>
                        </div>
                        <div class="action-bar__more hide">
                            <div class="ui-popover__container">
                                <button class="ui-button ui-button--transparent" type="button" name="button">
                                    <span data-singular-label="Thao tác" data-multiple-label="Thao tác"
                                        class="action-bar__more-label">Thao tác</span>
                                    <svg class="next-icon next-icon--size-20">
                                        <use xlink:href="#next-disclosure"></use>
                                    </svg>
                                </button>
                                <div class="ui-popover ui-popover--align-edge">
                                    <div class="ui-popover__tooltip"></div>
                                    <div class="ui-popover__content-wrapper">
                                        <div class="ui-popover__content">
                                            <div class="ui-popover__pane">
                                                <ul class="action-bar__popover-wrapper">
                                                    <li>
                                                        <ul class="ui-action-list">
                                                            <li class="ui-action-list__item">
                                                                <a href="http://www.cothongthai.com/sach-khai-cuoc"
                                                                    class="ui-action-list-action" data-popover-index="1"
                                                                    target="_blank" rel="noopener noreferrer">
                                                                    <span class="ui-action-list-action__text">
                                                                        <span class="action-bar__popover-icon-wrapper">
                                                                            <svg
                                                                                class="next-icon next-icon--color-blue next-icon--size-16 action-bar__popover-icon">
                                                                                <use xlink:href="#next-view-minor">
                                                                                </use>
                                                                            </svg>
                                                                        </span>Xem trên web
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <div class="ui-title-bar__actions-group">
                <div class="ui-title-bar__actions"><button
                        class="ui-button ui-button--primary js-btn-loadable js-btn-primary ui-title-bar__action btn-primary has-loading"
                        type="submit" name="button" disabled="disabled">Save</button></div>
            </div>
        </div>
        <div class="collapsible-header">
            <div class="collapsible-header__heading"></div>
        </div>
    </header>
    <h3 style="color:blue;"></h3>
    <div class="container-fluid-md">
        <input id="hidden-submit" type="hidden" name="submit" value="Submit">
        <div class="ui-layout">
            <div class="ui-layout__sections">
            <?php if(session()->get('editsuccess')): ?>
                <div class="ui-layout__section" id="load-content-success">
                    <div class="ui-layout__item">
                        <div class="ui-banner ui-banner--status-success hide-when-printing" tabindex="-1" role="alert"
                            data-notice-announced="true">
                            <div class="ui-banner__ribbon"><svg
                                    class="next-icon next-icon--size-20 next-icon--no-nudge">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark-circle">
                                    </use>
                                </svg></div>
                            <div class="ui-banner__content">
                                <h2 class="ui-banner__title type--breakall">{{session()->get('editsuccess')}} đã được chỉnh sửa.
                                </h2>
                                <div class="ui-type-container ui-type-container--spacing-tight">
                                    <p>
                                        <a data-allow-default="1" class="ui-button btn"
                                            href="{{route('category.create')}}">Tạo danh mục khác</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    setTimeout(function () {
                       <?php session()->forget('editsuccess') ?>
                   }, 1000);
                </script>
                <?php endif ?>
                <?php if(session()->get('success')): ?>
                <div class="ui-layout__section" id="load-content-success">
                    <div class="ui-layout__item">
                        <div class="ui-banner ui-banner--status-success hide-when-printing" tabindex="-1" role="alert"
                            data-notice-announced="true">
                            <div class="ui-banner__ribbon"><svg
                                    class="next-icon next-icon--size-20 next-icon--no-nudge">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark-circle">
                                    </use>
                                </svg></div>
                            <div class="ui-banner__content">
                                <h2 class="ui-banner__title type--breakall">{{session()->get('success')}} đã được tạo.
                                </h2>
                                <div class="ui-type-container ui-type-container--spacing-tight">
                                    <p>
                                        <a data-allow-default="1" class="ui-button btn"
                                            href="{{route('category.create')}}">Tạo danh mục khác</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    setTimeout(function () {
                       <?php session()->forget('success') ?>
                   }, 1000);
                </script>
                <?php endif ?>
                <div class="ui-layout__section ui-layout__section--primary">
                    <div class="ui-layout__item">
                        <div class="next-card">
                            <div class="section-content">
                                <div class="next-card__section">
                                    <div class="next-input-wrapper">
                                        <label class="next-label" for="category-name">Tên danh
                                            mục</label>
                                        <input class="next-input" id="category-name" name="category_name" placeholder="Nhập tên danh mục" required=""
                                            type="text" value="{{$category->category_name}}">
                                    </div>
                                    <div class="next-input-wrapper">
                                        <label class="next-label" for="brand-name">Cấp bậc</label>
                                        <style>
                                            .select2-container .select2-selection--single {
                                                height: 40px;
                                            }
                                        </style>
                                        <select class="next-input select2" name="parent_id">
                                            <option value="0">Chọn cấp bậc</option>
                                            @foreach($list_cat as $cat)
                                             @if(!empty($category->parent_id) && $category->parent_id == $cat['category_id'] )
                                                <option selected value="{{$cat->category_id}}">{{str_repeat('---', $cat->level).$cat->category_name}}</option>
                                             @else
                                             <option value="{{$cat->category_id}}">{{str_repeat('---', $cat->level ).$cat->category_name}}</option>
                                             @endif
                                            @endforeach
                                        </select>
                                        <script>
                                            $(document).ready(function () {
                                                $(".select2").select2();
                                            });
                                        </script>

                                    </div>
                                    <div class="next-input-wrapper" id="content-editor-wrapper">
                                        <label class="next-label" for="collection-name">Mô
                                            tả</label>
                                        <textarea class="form-control" cols="20" id="Content" value="{{$category->category_description}}" name="Description"
                                            placeholder="" rows="2" type="text"></textarea>
                                        <script>
                                            CKEDITOR.replace('Description');
                                            timer = setInterval(updateDiv, 100);
                                            function updateDiv() {
                                                for (instance in CKEDITOR.instances) {
                                                    var desc = CKEDITOR.instances[instance].updateElement();
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui-layout__item">
                        <div class="next-card">
                            <div id="js-products" class="section products">
                                <div class="section-content">
                                    <div class="next-card__section">
                                        <h3 class="next-heading">Sản phẩm</h3>
                                    </div>
                                    <div class="next-card__section" id="collection-products"
                                        data-tg-refresh="collection_products">
                                        <table id="collection-products-table"
                                            class="border-bottom ui-sortable expanded ui-sortable--next">
                                            <tbody id="product-20684576">
                                                <tr>
                                                    <td class="collection_item_enumeration">1.</td>
                                                    <td style="width: 40px"
                                                        class="ui-sortable__item ui-sortable__helper-visible collection_item_thumbnail">
                                                        <div
                                                            class="aspect-ratio aspect-ratio--square aspect-ratio--square--40">
                                                            <img title="Smart Heart Power Pack puppy 20kg phát triển cơ bắp dành cho cho con - CutePets"
                                                                alt="" class="aspect-ratio__content"
                                                                src="https://bizweb.dktcdn.net/thumb/small/100/307/433/products/smart-heart-power-pack-puppy-20kg.jpg?v=1612325911200">
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="ui-sortable__item ui-sortable__helper-visible collection_item_title">
                                                        <a href="/admin/products/20684576">Smart
                                                            Heart Power Pack puppy 20kg phát triển
                                                            cơ bắp dành cho cho con - CutePets</a>
                                                    </td>

                                                    <td
                                                        class="remove type--right ui-sortable__item collection_item_remove">
                                                        <button
                                                            class="ui-button  btn--plain btn--plain--flush-right  tooltip tooltip-bottom tooltip-right-align"
                                                            type="button" name="button">
                                                            <span class="tooltip-container">
                                                                <span class="tooltip-label">Xóa</span>
                                                            </span>
                                                            <svg aria-hidden="true" focusable="false"
                                                                class="next-icon next-icon--color-blue next-icon--size-12">
                                                                <use xlink:href="#next-remove">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="collection-paging-helpers-container">
                                            <div id="collection-paging-helpers-container"
                                                data-eval="collectionProducts.updateLoadedProductIds([20675109,20684576,20675003,20675073,20675028,20675082,20674984,20674959,20674428,20673456,20673064,20665427])">
                                                <div class="type--centered">
                                                    <div class="hide" id="next-product-page-params">
                                                    </div>
                                                    <button type="button" class="btn btn--link sst">Hiện thêm 2 sản
                                                        phẩm</button>
                                                    <div class="next-spinner sst hide">
                                                        <svg aria-hidden="true" focusable="false"
                                                            class="next-icon next-icon--size-20">
                                                            <use xlink:href="#next-spinner"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                                <div class="visibility" id="PublishingPanel" data-context="publishingPanel">
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
                                                            <input type="radio" name="active" id="active-true"
                                                                value="true" class="next-radio" checked="&quot;checked&quot;">
                                                            <span class="next-radio--styled"></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label next-label--switch"
                                                                for="active-false">
                                                                Ẩn
                                                            </label>
                                                            <input type="radio" name="active" id="active-false"
                                                                value="false" class="next-radio">
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
                </div>
            </div>
        </div>
        <div class="ui-page-actions  ui-page-actions--has-secondary">
            <div class="ui-page-actions__container">
                <div class="ui-page-actions__actions ui-page-actions__actions--secondary">
                    <div class="ui-page-actions__button-group">
                        <a class="btn btn-destroy">Xóa danh mục</a>
                    </div>
                </div>
                <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                    <div class="ui-page-actions__button-group">
                        <button class="ui-button js-btn-loadable js-btn-primary btn-primary has-loading" type="submit"
                            name="button">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('#form-edit').submit(function (e) {
            e.preventDefault();
            var url = $(this).attr('data-url');
            console.log($(this).serialize());

            $.ajax({
                type: 'post',
                url: url,
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function (respone) {
                    if (respone) {
                        var url = '{{route ("category.edit", ":category_slug")}}';
                        url = url.replace(':category_slug', respone.category_slug);
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