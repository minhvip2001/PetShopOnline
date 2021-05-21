<form class="" data-url="{{route('category.store')}}" method="post" enctype="multipart/form-data" id="form-add"
    data-context-create-name="Danh mục" data-context-cancel-path="{{route('category.list')}}">
    {{ csrf_field() }}
    <header class="ui-title-bar-container">
        <div class="ui-title-bar">
            <div class="ui-title-bar__navigation">
                <div class="ui-breadcrumbs">
                    <a href="{{route('category.list')}}" class="ui-button ui-button--transparent ui-breadcrumb">
                        <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-left-thinner"></use>
                        </svg>
                        <span class="ui-breadcrumb__item">Danh mục</span>
                    </a>
                </div>
            </div>
            <div class="ui-title-bar__main-group">
                <div class="ui-title-bar__heading-group">
                    <span class="ui-title-bar__icon">
                        <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-collections"></use>
                        </svg>
                    </span>
                    <h1 class="ui-title-bar__title">Thêm mới danh mục</h1>
                </div>
            </div>
        </div>
        <div class="collapsible-header">
            <div class="collapsible-header__heading"></div>
        </div>
    </header>
    <h3 style="color:blue;"></h3>
    <div class="container-fluid-md">
        <!-- <input id="hidden-submit" type="hidden" name="submit" value="Submit"> -->
        <div class="ui-layout">
            <div class="ui-layout__sections">
                <div class="ui-layout__section ui-layout__section--primary">
                    <div class="ui-layout__item">
                        <div class="next-card">
                            <div class="section-content">
                                <div class="next-card__section">
                                    <div class="next-input-wrapper">
                                        <label class="next-label" for="category-name">Tên danh
                                            mục</label>
                                        <input class="next-input" id="category-name" name="category_name"
                                            placeholder="Nhập tên danh mục" type="text" value="">
                                    </div>
                                    <div class="next-input-wrapper">
                                        <label class="next-label" for="brand-name">Cấp bậc</label>
                                        <style>
                                            .select2-container .select2-selection--single {
                                                height: 40px;
                                            }
                                        </style>
                                        <select class="next-input select2" name="parent_id">
                                            <option value="">Chọn cấp bậc</option>
                                            @foreach($list_cat as $cat)
                                            <option value="{{$cat->category_id}}">{{str_repeat('---', $cat->level).$cat->category_name}}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            $(document).ready(function () {
                                                $(".select2").select2(
                                                    {
                                                        placeholder: "Chọn cấp bậc",
                                                        allowClear: true
                                                    }
                                                );
                                            });
                                        </script>

                                    </div>
                                    <div class="next-input-wrapper" id="content-editor-wrapper">
                                        <label class="next-label">Mô
                                            tả</label>
                                        <textarea class="form-control" id="Description" cols="20" rows="2"
                                            name="category_description" placeholder="" type="text"></textarea>
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
                </div>
                <div class="ui-layout__section ui-layout__section--secondary">
                    <div class="ui-layout__item">
                        <div class="next-card">
                            <header class="next-card__header">
                                <h3 class="ui-heading">Trạng thái</h3>
                            </header>
                            <section class="next-card__section">
                                <div class="visibility" id="PublishingPanel">
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
                                                                value="true" class="next-radio"
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
        <div class="ui-page-actions">
            <div class="ui-page-actions__container">
                <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                    <div class="ui-page-actions__button-group">
                        <a class="btn" href="/admin/collections">Hủy</a>
                        <button class="ui-button js-btn-loadable js-btn-primary btn-primary has-loading" type="submit"
                            value="Submit"><span>Lưu</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('#form-add').submit(function (e) {
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