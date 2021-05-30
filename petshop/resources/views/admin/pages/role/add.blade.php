@extends('admin.layouts.master')
@section('title')
Thêm mới vai trò
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <div class="editCollection">
                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                        aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop" tabindex="-1"></div>
                    <form class="" data-url="{{route('role.store')}}" method="post" enctype="multipart/form-data"
                        id="form-add" data-context-create-name="Danh mục"
                        data-context-cancel-path="{{route('role.list')}}">
                        {{ csrf_field() }}
                        <header class="ui-title-bar-container">
                            <div class="ui-title-bar">
                                <div class="ui-title-bar__navigation">
                                    <div class="ui-breadcrumbs">
                                        <a href="{{route('role.list')}}"
                                            class="ui-button ui-button--transparent ui-breadcrumb">
                                            <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#chevron-left-thinner"></use>
                                            </svg>
                                            <span class="ui-breadcrumb__item">Vai trò</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ui-title-bar__main-group">
                                    <div class="ui-title-bar__heading-group">
                                        <span class="ui-title-bar__icon">
                                            <svg class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-collections"></use>
                                            </svg>
                                        </span>
                                        <h1 class="ui-title-bar__title">Thêm mới vai trò</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible-header">
                                <div class="collapsible-header__heading"></div>
                            </div>
                        </header>
                        <h3 style="color:blue;"></h3>
                        <div class="container-fluid-md">
                            <div class="ui-layout">
                                <div class="ui-layout__sections">
                                    <div class="ui-layout__section ui-layout__section--primary">
                                        <div class="ui-layout__item">
                                            <div class="next-card">
                                                <div class="section-content">
                                                    <div class="next-card__section">
                                                        <div class="next-input-wrapper">
                                                            <label class="next-label" for="role-name">Tên vai
                                                                trò</label>
                                                            <input class="next-input" id="role-name" name="role_name"
                                                                placeholder="Nhập tên vai trò" type="text" value="">
                                                        </div>

                                                        <div class="next-input-wrapper" id="content-editor-wrapper">
                                                            <label class="next-label">Mô
                                                                tả</label>
                                                            <textarea class="form-control" id="Description" cols="20"
                                                                rows="2" name="role_description" placeholder=""
                                                                type="text"></textarea>
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
                                                <div class="section-content">
                                                    <div class="next-card__section">

                                                        <div class="ui-card__section">
                                                            <div class="ui-type-container">
                                                                <div class="ui-form__section">

                                                                    <div class="ui-form__group"
                                                                        data-bind-show="isLimitAccess">
                                                                        @foreach($permissionParent as $permissionParentItem)
                                                                        <div class="ui-form__element card-header__element">
                                                                            <div class="ui-form__element">
                                                                                <fieldset class="ui-choice-list">
                                                                               
                                                                                    <legend
                                                                                        class="ui-choice-list__title">
                                                                                        <label
                                                                                                    class="next-label next-label--switch">
                                                                                                    <input
                                                                                                        class="next-checkbox checkbox_wrapper"
                                                                                                        type="checkbox"
                                                                                                        value="">
                                                                                                    <span
                                                                                                        class="next-checkbox--styled" style="top: -15px;">
                                                                                                        <svg
                                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                xlink:href="#next-checkmark-thick">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                 
                                                                                                </label>
                                                                                        @foreach(config('permissions.table_module') as $key => $value)       
                                                                                            @if($permissionParentItem->name == $key)
                                                                                                {{$value}}
                                                                                            @endif       
                                                                                        @endforeach
                                                                                    </legend>
                                                                                    <ul>
                                                                                        @foreach($permissionParentItem->permissionChildrent as $permissionChildrentItem)
                                                                                        <li>
                                                                                            <div
                                                                                                class="next-input-wrapper">
                                                                                                <label
                                                                                                    class="next-label next-label--switch">
                                                                                                    <input
                                                                                                        class="next-checkbox checkbox_childrent"
                                                                                                        type="checkbox"
                                                                                                        name="permission_id[]"
                                                                                                        value="{{$permissionChildrentItem->id}}">
                                                                                                    <span
                                                                                                        class="next-checkbox--styled">
                                                                                                        <svg
                                                                                                            class="next-icon next-icon--size-10 checkmark">
                                                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                                xlink:href="#next-checkmark-thick">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                    @if($permissionChildrentItem->name == 'list')        
                                                                                                        Danh sách
                                                                                                    @elseif($permissionChildrentItem->name == 'add')
                                                                                                        Thêm
                                                                                                    @elseif($permissionChildrentItem->name == 'edit')
                                                                                                        Thêm 
                                                                                                    @else
                                                                                                        Xóa         
                                                                                                    @endif
                                                                                 
                                                                                                </label>
                                                                                            </div>
                                                                                        </li>
                                                                                        @endforeach
                                                                                       
                                                                                    </ul>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                        <script>
                                                                            $('.checkbox_wrapper').on('click', function (){
                                                                                $(this).parents('.card-header__element').find('.checkbox_childrent').prop('checked', $(this).prop('checked'));
                                                                            });
                                                                        </script>
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
                                                    <div class="visibility" id="PublishingPanel">
                                                        <div class="ui-form__section">
                                                            <div class="ui-form__element">
                                                                <fieldset class="ui-choice-list">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch"
                                                                                    for="active-true">
                                                                                    Hiển thị
                                                                                </label>
                                                                                <input type="radio" name="active"
                                                                                    id="active-true" value="true"
                                                                                    class="next-radio"
                                                                                    checked="&quot;checked&quot;">
                                                                                <span class="next-radio--styled"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="next-input-wrapper">
                                                                                <label
                                                                                    class="next-label next-label--switch"
                                                                                    for="active-false">
                                                                                    Ẩn
                                                                                </label>
                                                                                <input type="radio" name="active"
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
                                    </div>

                                </div>

                            </div>

                            <div class="ui-page-actions">
                                <div class="ui-page-actions__container">
                                    <div class="ui-page-actions__actions ui-page-actions__actions--primary">
                                        <div class="ui-page-actions__button-group">
                                            <a class="btn" href="/admin/collections">Hủy</a>
                                            <button
                                                class="ui-button js-btn-loadable js-btn-primary btn-primary has-loading"
                                                type="submit" value="Submit"><span>Lưu</span></button>
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
                                            var url = '{{route ("role.edit", ":role_slug")}}';
                                            url = url.replace(':role_slug', respone.role_slug);
                                            window.location.href = url

                                        }

                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {

                                    }
                                })
                            })
                        })
                    </script>
                </div>
                <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                    aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                <div class="ui-footer-help">
                    <div class="ui-footer-help__content">
                        <div class="ui-footer-help__icon">
                            <svg class="next-icon next-icon--size-24 next-icon--no-nudge" role="img"
                                aria-labelledby="next-help-circle-title">
                                <title id="next-help-circle-title">Help</title>
                                <use xlink:href="#next-help-circle"></use>
                            </svg>
                        </div>
                        <div>
                            <p>
                                Bạn có thể xem thêm hướng dẫn
                                <a rel="noreferrer noopener" target="_blank"
                                    href="https://support.sapo.vn/tao-danh-muc-san-pham-thu-cong">tại đây</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection