@extends('admin.layouts.master')
@section('title')
Tài khoản
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">
                <script type="text/javascript">
                    Page();
                </script>
                <form autocomplete="off" data-context="form"
                    define="{form: new Bizweb.Forms(this, { disabledUntilDirty: true })}" id="edit_shop_372884"
                    data-tg-remote="true" accept-charset="UTF-8" method="post" action="/admin/settings/account">
                    <div context="account" define="{account: new Bizweb.Account()}">
                        <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                            aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                        <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>


                        <input type="hidden" name="AuthenticityToken"
                            value="Dj8aCGHm33kRtk0wsdAdTm1WOvT/6v/HLlC2H90IdAqEmNUs9UR+ktgBaxiZSISIOT7n8ZjBZsYKzheQvolo/Q==">
                        <header class="ui-title-bar-container">
                            <div class="ui-title-bar ui-title-bar--separator">
                                <div class="ui-title-bar__navigation">
                                    <div class="ui-breadcrumbs">
                                        <a href="/admin/settings"
                                            class="ui-button ui-button--transparent ui-breadcrumb">
                                            <svg class="next-icon next-icon--size-20 next-icon--no-nudge">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#chevron-left-thinner"></use>
                                            </svg>
                                            <span class="ui-breadcrumb__item">Nhân viên</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ui-title-bar__main-group">
                                    <div class="ui-title-bar__heading-group">
                                        <span class="ui-title-bar__icon"><svg
                                                class="next-icon next-icon--color-slate-lighter next-icon--size-20">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#next-account"></use>
                                            </svg></span>
                                        <h1 class="ui-title-bar__title">Tài khoản</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible-header">
                                <div class="collapsible-header__heading"></div>
                            </div>
                        </header>
                        <section class="ui-annotated-section-container">
                            <div class="ui-annotated-section staff-members">
                                <div class="ui-annotated-section__annotation">
                                    <div class="ui-annotated-section__title">
                                        <h2 class="ui-heading">Tài khoản và phân quyền</h2>
                                    </div>
                                </div>
                                <div class="ui-annotated-section__content table-users">
                                    <section class="ui-card staff-present">
                                        <header class="ui-card__header">
                                            <div class="ui-stack ui-stack--wrap">
                                                <div class="ui-stack-item ui-stack-item--fill">
                                                    <h2 class="ui-heading">Tài khoản nhân viên</h2>
                                                </div>
                                                <div class="ui-stack-item">
                                                    <div class="ui-stack ui-stack--wrap">
                                                        <div class="ui-stack-item">
                                                            <a href="{{route('user.create')}}" class="btn--link">Thêm
                                                                mới</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="ui-card__section">
                                            <div class="ui-type-container">
                                                <ul class="staff-accounts-list" id="all-accounts">
                                                  @foreach($users as $user)
                                                    <li class="staff-accounts-list__item" style="{{auth()->guard('admin')->user()->id == $user->id ? 'background: pink':''}}">
                                                        <div class="ui-stack">
                                                            <span class="user-avatar user-avatar--style-2">
                                                                <img class="user-avatar__gravatar-image" alt=""
                                                                    src="https://secure.gravatar.com/avatar/cb8f2c4f38a2fd98d0a1663076b9262d.jpg?s=45&amp;d=blank">
                                                                <span class="user-avatar__initials">
                                                                    <img class="profile-pic img-circle"
                                                                        data-name="{{$user->name}}"
                                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHBvaW50ZXItZXZlbnRzPSJub25lIiB3aWR0aD0iNDYiIGhlaWdodD0iNDYiIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMTg5LCAxOTUsIDE5OSk7IHdpZHRoOiA0NnB4OyBoZWlnaHQ6IDQ2cHg7IGJvcmRlci1yYWRpdXM6IDBweDsiPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHk9IjUwJSIgeD0iNTAlIiBkeT0iMC4zNWVtIiBwb2ludGVyLWV2ZW50cz0iYXV0byIgZmlsbD0iI2ZmZmZmZiIgZm9udC1mYW1pbHk9IkhlbHZldGljYU5ldWUtTGlnaHQsSGVsdmV0aWNhIE5ldWUgTGlnaHQsSGVsdmV0aWNhIE5ldWUsSGVsdmV0aWNhLCBBcmlhbCxMdWNpZGEgR3JhbmRlLCBzYW5zLXNlcmlmIiBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsgZm9udC1zaXplOiAyMHB4OyI+QjwvdGV4dD48L3N2Zz4=">
                                                                </span>
                                                            </span>
                                                            </span>
                                                            <div class="ui-stack-item ui-stack-item--fill">
                                                                <div
                                                                    class="ui-stack ui-stack--wrap ui-stack--distribution-leading">
                                                                    <div class="ui-stack-item ui-stack-item--fill">
                                                                        <p>
                                                                            <a href="{{route('user.edit',$user->id)}}">{{$user->name}} {{$user->surname}}</a>
                                                                        </p>
                                                                        <p>
                                                                            <span>Đăng nhập lần cuối 25/04/2021
                                                                                13:08:26</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p>
                                                                            <span>
                                                                                @if(auth()->guard('admin')->user()->id == $user->id)
                                                                                    Chủ tài khoản
                                                                                @else
                                                                                    @foreach($user->roles as $key)
                                                                                        {{$key->name}}
                                                                                    @endforeach
                                                                                @endif
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                  @endforeach  
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
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
                            Bạn có thể xem thêm hướng dẫn <a target="_blank" rel="noreferrer noopener" title="Hướng dẫn"
                                href="https://support.sapo.vn/tai-khoan-cua-ban">tại đây</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>
@endsection