@extends('admin.layouts.master')
@section('title')
Danh mục
@endsection
@section('content')
<main id="AppFrameMain" class="ui-app-frame__main">
    <div class="wrapper" id="wrapper">
        <div id="body" class="page-content clearfix" data-tg-refresh="body">
            <div id="content">

                <style type="text/css">
                    /*btn more, deletable*/
                    .btn.btn-more {
                        border: 1px solid #d3dbe2;
                        padding: 6px 15px;
                    }

                    .btn.btn-more:hover {
                        border: 1px solid #d3dbe2;
                        background-color: #f5f6f7;
                        color: #479ccf;
                        text-decoration: none;
                    }

                    .btn-more:before {
                        content: "•••";
                        text-indent: 0;
                        display: block;
                        font-size: 13px;
                    }

                    /*end*/

                    .rssFeedDisplay {
                        overflow: hidden;
                    }

                    .item {
                        background-image: url("//bizweb.dktcdn.net/assets/admin/images/admin.png");
                        background-position: 2px 10px;
                        background-repeat: no-repeat;
                        line-height: 25px;
                        padding-left: 12px;
                    }

                    .rssFeedDisplay .item:not(:last-child) {
                        border-bottom: 1px solid #e8e8e8 !important;
                    }

                    .metric-content {
                        display: block;
                    }

                    .img-responsive {
                        display: inline-block;
                    }

                    .table-fluid {
                        display: table;
                        width: 100%;
                    }

                    .col-fluid {
                        display: table-cell;
                    }

                    .marketing-banner>a:hover,
                    .marketing-banner>a:focus {
                        text-decoration: none;
                    }

                    .marketing-banner>a {
                        background: #2051e3 url('/themes/portal/admin/images/banner/banner-promotion.png') no-repeat center center;
                        height: 40px;
                        text-align: center;
                        color: #000;
                        display: block;
                    }

                    .marketing-banner span {
                        display: inline-block;
                        color: #fff;
                        position: absolute;
                        right: 0;
                        top: 0;
                        font-size: 25px;
                        width: 40px;
                        height: 40px;
                        line-height: 40px;
                        text-align: center;
                        cursor: pointer;
                        z-index: 1;
                    }

                    @media (max-width: 1400px) {
                        .marketing-banner>a>div {
                            background-size: 100%;
                        }
                    }

                    @media (max-width:855px) {
                        .marketing-banner>a>div {
                            height: 60px;
                        }
                    }

                    .notifications {
                        margin-top: 21px !important;
                    }
                </style>

                <div class="table-fluid area-banner-app hidden-md hidden-lg" style="position:relative"
                    define="{bannerApp: new Bizweb.SetSessionUtility()}" context="bannerApp">
                    <a href="javascript:void(0);" bind-event-click="setCookieForBannerApp()"
                        style="position: absolute; top: 0; bottom: 0; margin-bottom: auto; margin-top: auto; padding: 12px 0 12px 15px; display: table;">
                        <img src="//bizweb.dktcdn.net/assets/admin/images/close_btn.png" width="21">
                    </a>
                    <a href="javascript:void(0);">
                        <img src="//bizweb.dktcdn.net/assets/admin/images/banner-mobile-app.png">
                    </a>
                    <a href="javascript:void(0);"
                        style="position: absolute; top: 0; bottom: 0; margin-bottom: auto; margin-top: auto; right: 10px; display: table;">
                        <img src="//bizweb.dktcdn.net/assets/admin/images/next_btn.png" width="21">
                    </a>
                </div>

                <div id="dashboard" class="container-fluid-md">
                    <style type="text/css">
                        .panel-notification {
                            text-align: center;
                            margin-bottom: 25px;
                        }

                        .panel-notification img {
                            width: 100%;
                        }

                        .wait-loading-report-timeline {
                            text-align: center;
                            font-size: 30px;
                            position: absolute;
                            margin-left: auto;
                            margin-right: auto;
                            left: 0;
                            right: 0;
                            top: 143px;
                            z-index: 1;
                        }

                        .cd-panel.from-right .report-minimizable--inverted>div {
                            border-bottom: 1px solid #dfdfdf;
                        }

                        .report-minimizable {
                            display: none;
                        }

                        .report-minimizable--inverted {
                            display: block;
                        }

                        .dashboard-video {
                            display: none;
                        }

                        @media(min-width: 1366px) {
                            .dashboard-right.dashboard-video {
                                display: block;
                            }

                            .report-minimizable {
                                display: block;
                            }

                            .report-minimizable--inverted {
                                display: none;
                            }
                        }

                        @media(max-width: 1365px) {

                            .flat-video-fancybox,
                            .flat-video-fancybox .fancybox {
                                height: 300px;
                            }

                            .dashboard-video:not(.dashboard-right) {
                                display: block;
                                width: calc(50% - 7.5px);
                            }
                        }
                    </style>
                    <div class="modal" data-tg-refresh="modal" id="modal_container" style="display: none;"
                        aria-hidden="true" aria-labelledby="ModalTitle" tabindex="-1"></div>
                    <div class="modal-bg" data-tg-refresh="modal" id="modal_backdrop"></div>
                    <div>
                        <div class="new-dashboard">
                            <header class="ui-title-bar-container ui-title-bar-container--full-width"
                                style="margin-top:15px;">
                                <div class="ui-title-bar" style="min-height:0">
                                    <div class="ui-title-bar__main-group">
                                        <div class="ui-title-bar__heading-group">
                                            <h1 class="ui-title-bar__title">Xin chào {{Auth::user()->name}}</h1>
                                            <button class="cd-btn ui-button btn-show-summary" type="button">
                                                <svg class="next-icon next-icon--size-16">
                                                    <use xlink:href="#icon-report"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                </svg>&nbsp;
                                                Thông tin báo cáo
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapsible-header">
                                    <div class="collapsible-header__heading"></div>
                                </div>
                            </header>
                            <div class="reports-dashboard-new">
                                <div class="ui-layout ui-layout--full-width ui-layout__dashboard">
                                    <div class="cd-panel from-right">
                                        <header class="cd-panel-header">
                                            <h1>Báo cáo</h1>
                                            <a href="#0" class="cd-panel-close">Close</a>
                                        </header>
                                        <div class="cd-panel-container">
                                            <div class="cd-panel-content">
                                                <div class="panel reports-dashboard report-minimizable--inverted">
                                                    <div class="area-graph reports-dashboard">
                                                        <div class="report-graph">
                                                            <div class="page__sidebar-background header-right-reports">
                                                            </div>
                                                            <div class="page__sidebar">
                                                                <div class="next-card next-card--stacked next-card--home-channel-filters clearfix">
                                                                    <div>
                                                                        <section class="next-card next-card--stacked"
                                                                            data-bind-show="homeSidebar.isActive('all')">
                                                                            <section class="next-card__section">
                                                                                <div class="home-graph__wrapper">
                                                                                    <div class="report-caption">
                                                                                        <h2 class="report-caption-h2"
                                                                                            style="float:left; margin-right:20px;">
                                                                                            Doanh thu
                                                                                        </h2>
                                                                                        <div
                                                                                            class="ui-popover__container ui-popover__container--full-width btn-fillter">
                                                                                            <button
                                                                                                class="btn btn--full-width"
                                                                                                type="button"
                                                                                                name="button">
                                                                                                <div
                                                                                                    class="next-grid next-grid--no-padding next-grid--space-between">
                                                                                                    <div
                                                                                                        class="next-grid__cell next-grid__cell--no-flex">
                                                                                                        <span
                                                                                                            bind="datepicker.dateLabel">Hôm
                                                                                                            nay</span>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="next-grid__cell next-grid__cell--no-flex">
                                                                                                        <svg class="next-icon next-icon--size-12 next-icon--blue next-icon--no-nudge ui-channel-selector__icon"
                                                                                                            role="img"
                                                                                                            aria-labelledby="next-chevron-down-0750e83a7c25b852a1dfdebedd6619a8-title">
                                                                                                            <title
                                                                                                                id="next-chevron-down-0750e83a7c25b852a1dfdebedd6619a8-title">
                                                                                                                Select
                                                                                                                date
                                                                                                                range
                                                                                                            </title>
                                                                                                            <use
                                                                                                                xlink:href="#next-chevron-down">
                                                                                                            </use>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                            <div data-popover-relative-to-closest=".next-card"
                                                                                                class="ui-popover ui-popover--full-height">
                                                                                                <div
                                                                                                    class="ui-popover__tooltip">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ui-popover__content-wrapper">
                                                                                                    <div
                                                                                                        class="ui-popover__content">
                                                                                                        <div
                                                                                                            class="ui-popover__pane">
                                                                                                            <ul
                                                                                                                class="next-list next-list--compact next-list--home-sidebar">
                                                                                                                <li>
                                                                                                                    <button
                                                                                                                        class="next-list__item"
                                                                                                                        data-bind-class="{'next-list__item--is-selected': datepicker.selectedDate == 'today'}"
                                                                                                                        data-bind-event-click="datepicker.changeDate('today')">
                                                                                                                        <div
                                                                                                                            class="next-grid next-grid--no-padding next-grid--space-between">
                                                                                                                            <div
                                                                                                                                class="next-grid__cell">
                                                                                                                                <span>Hôm
                                                                                                                                    nay</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="next-grid__cell home-datepicker__quick-date-range">
                                                                                                                                <time
                                                                                                                                    data-bind="datepicker.formatted['today']"
                                                                                                                                    class="type--subdued">19/04</time>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </button>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <button
                                                                                                                        class="next-list__item"
                                                                                                                        data-bind-class="{'next-list__item--is-selected': datepicker.selectedDate == 'yesterday'}"
                                                                                                                        data-bind-event-click="datepicker.changeDate('yesterday')">
                                                                                                                        <div
                                                                                                                            class="next-grid next-grid--no-padding next-grid--space-between">
                                                                                                                            <div
                                                                                                                                class="next-grid__cell">
                                                                                                                                <span>Hôm
                                                                                                                                    qua</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="next-grid__cell home-datepicker__quick-date-range">
                                                                                                                                <time
                                                                                                                                    data-bind="datepicker.formatted['yesterday']"
                                                                                                                                    class="type--subdued">18/04</time>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </button>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <button
                                                                                                                        class="next-list__item"
                                                                                                                        data-bind-class="{'next-list__item--is-selected': datepicker.selectedDate == 'this_week'}"
                                                                                                                        data-bind-event-click="datepicker.changeDate('this_week')">
                                                                                                                        <div
                                                                                                                            class="next-grid next-grid--no-padding next-grid--space-between">
                                                                                                                            <div
                                                                                                                                class="next-grid__cell">
                                                                                                                                <span>Trong
                                                                                                                                    tuần</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="next-grid__cell home-datepicker__quick-date-range">
                                                                                                                                <time
                                                                                                                                    data-bind="datepicker.formatted['this_week']"
                                                                                                                                    class="type--subdued">19
                                                                                                                                    –
                                                                                                                                    25/04</time>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </button>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <button
                                                                                                                        class="next-list__item"
                                                                                                                        data-bind-class="{'next-list__item--is-selected': datepicker.selectedDate == 'this_month'}"
                                                                                                                        data-bind-event-click="datepicker.changeDate('this_month')">
                                                                                                                        <div
                                                                                                                            class="next-grid next-grid--no-padding next-grid--space-between">
                                                                                                                            <div
                                                                                                                                class="next-grid__cell">
                                                                                                                                <span>Trong
                                                                                                                                    tháng</span>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="next-grid__cell home-datepicker__quick-date-range">
                                                                                                                                <time
                                                                                                                                    data-bind="datepicker.formatted['this_month']"
                                                                                                                                    class="type--subdued">1
                                                                                                                                    –
                                                                                                                                    30/04</time>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </button>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                            <div class="home-calendar__wrapper"
                                                                                                                data-define="{calendar: new Bizweb.HomeSidebarCalendar(this, datepicker)}">
                                                                                                                <div
                                                                                                                    class="next-grid next-grid--compact">
                                                                                                                    <div
                                                                                                                        class="next-grid__cell">
                                                                                                                        <button
                                                                                                                            class="btn btn--icon btn--link"
                                                                                                                            data-bind-event-click="calendar.prevMonth()"
                                                                                                                            aria-label="Previous month"
                                                                                                                            type="button"
                                                                                                                            name="button"><svg
                                                                                                                                class="next-icon next-icon--rotate-180 next-icon--color-blue next-icon--size-16">
                                                                                                                                <use
                                                                                                                                    xlink:href="#next-chevron">
                                                                                                                                </use>
                                                                                                                            </svg></button>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="next-grid__cell next-grid__cell--three-quarter">
                                                                                                                        <h4 class="next-heading next-heading--small next-heading--no-margin type--centered"
                                                                                                                            data-bind="calendar.monthName">
                                                                                                                            tháng
                                                                                                                            4
                                                                                                                            2021
                                                                                                                        </h4>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="next-grid__cell type--right">
                                                                                                                        <button
                                                                                                                            class="btn btn--icon btn--link"
                                                                                                                            data-bind-event-click="calendar.nextMonth()"
                                                                                                                            aria-label="Previous month"
                                                                                                                            type="button"
                                                                                                                            name="button"><svg
                                                                                                                                class="next-icon next-icon--color-blue next-icon--size-16">
                                                                                                                                <use
                                                                                                                                    xlink:href="#next-chevron">
                                                                                                                                </use>
                                                                                                                            </svg></button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="js-home-calendar">
                                                                                                                    <table
                                                                                                                        class="home-calendar">
                                                                                                                        <caption
                                                                                                                            class="is-visuallyhidden">
                                                                                                                            Calendar
                                                                                                                            for
                                                                                                                            the
                                                                                                                            month
                                                                                                                            of
                                                                                                                            tháng
                                                                                                                            4
                                                                                                                            2021
                                                                                                                        </caption>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Monday">T2</abbr>
                                                                                                                                </th>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Tuesday">T3</abbr>
                                                                                                                                </th>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Wednesday">T4</abbr>
                                                                                                                                </th>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Thursday">T5</abbr>
                                                                                                                                </th>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Friday">T6</abbr>
                                                                                                                                </th>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Saturday">T7</abbr>
                                                                                                                                </th>
                                                                                                                                <th class="home-calendar__heading"
                                                                                                                                    scope="col">
                                                                                                                                    <abbr
                                                                                                                                        title="Sunday">CN</abbr>
                                                                                                                                </th>
                                                                                                                            </tr>

                                                                                                                            <tr>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">1</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">2</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">3</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">4</button>

                                                                                                                                </td>

                                                                                                                            </tr>

                                                                                                                            <tr>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">5</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">6</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">7</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">8</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">9</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">10</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">11</button>

                                                                                                                                </td>

                                                                                                                            </tr>

                                                                                                                            <tr>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">12</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">13</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">14</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">15</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">16</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">17</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">18</button>

                                                                                                                                </td>

                                                                                                                            </tr>

                                                                                                                            <tr>

                                                                                                                                <td class="home-calendar__date
                                                                                 home-calendar__date--range-start
                                                                                 home-calendar__date--range-end
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">19</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">20</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">21</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">22</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">
                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">23</button>

                                                                                                                                </td>

                                                                                                                                <td
                                                                                                                                    class="home-calendar__date">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">24</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">25</button>

                                                                                                                                </td>

                                                                                                                            </tr>

                                                                                                                            <tr>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">26</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">27</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">28</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">29</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                    <button
                                                                                                                                        class="btn btn--link btn--full-size"
                                                                                                                                        type="button"
                                                                                                                                        name="button">30</button>

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                </td>

                                                                                                                                <td class="home-calendar__date
                                                                                
                                                                                
                                                                                ">

                                                                                                                                </td>

                                                                                                                            </tr>

                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div define="{sales: new Bizweb.HomeSalesReport(this,{channelId: 'all',homeSidebar: homeSidebar})}"
                                                                                        context="sales"
                                                                                        class="panel-body">

                                                                                        <div
                                                                                            class="home-graph home-graph--sales">
                                                                                            <div class="home-graph__y-axis"
                                                                                                aria-hidden="true">

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                    45 ₫

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                    35 ₫

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                    25 ₫

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                    15 ₫

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                    5 ₫

                                                                                                </small>

                                                                                                <small
                                                                                                    class="home-graph__y-axis-label">

                                                                                                </small>

                                                                                            </div>
                                                                                            <div
                                                                                                class="home-graph__bars-and-x-axis">
                                                                                                <div class="home-graph__bars"
                                                                                                    style="height:250px">


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 00:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 10%;transform: translateX(-10%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                00:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 01:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 10%;transform: translateX(-10%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                01:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 02:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 10%;transform: translateX(-10%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                02:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 03:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 13%;transform: translateX(-13%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                03:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 04:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 17%;transform: translateX(-17%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                04:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 05:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 22%;transform: translateX(-22%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                05:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 06:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 26%;transform: translateX(-26%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                06:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 07:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 30%;transform: translateX(-30%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                07:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 08:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 35%;transform: translateX(-35%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                08:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 09:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 39%;transform: translateX(-39%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                09:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 10:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 43%;transform: translateX(-43%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                10:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 11:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 48%;transform: translateX(-48%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                11:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 12:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 52%;transform: translateX(-52%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                12:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 13:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 57%;transform: translateX(-57%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                13:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 14:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 61%;transform: translateX(-61%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                14:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 15:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 65%;transform: translateX(-65%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                15:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 16:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 70%;transform: translateX(-70%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                16:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 17:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 74%;transform: translateX(-74%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                17:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 18:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 78%;transform: translateX(-78%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                18:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 19:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 83%;transform: translateX(-83%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                19:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 20:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 87%;transform: translateX(-87%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                20:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 21:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 90%;transform: translateX(-90%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                21:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="home-graph__bar-wrapper"
                                                                                                        style="margin-left: 2px;"
                                                                                                        aria-label="19 tháng 4, 2021 22:00 0₫ 0 đơn hàng">



                                                                                                        <div class="home-graph__tooltip"
                                                                                                            style="margin-top: 248px;left: 90%;transform: translateX(-90%) translateY(-100%);">
                                                                                                            <p>19 tháng
                                                                                                                4, 2021
                                                                                                                22:00
                                                                                                            </p>
                                                                                                            <p>0₫</p>

                                                                                                            <p
                                                                                                                class="type--subdued">
                                                                                                                0 đơn
                                                                                                                hàng</p>

                                                                                                        </div>


                                                                                                        <div class="home-graph__bar"
                                                                                                            style="height: 2px;margin-top: 248px">
                                                                                                            <div
                                                                                                                class="home-graph__tooltip-tail">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <div class="home-graph__x-axis home-graph__x-axis--many-data-points"
                                                                                                    aria-hidden="true">

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick home-graph__x-axis-tick--with-label">
                                                                                                        </div>

                                                                                                        <small
                                                                                                            class="home-graph__x-axis-label">00:00</small>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick home-graph__x-axis-tick--with-label">
                                                                                                        </div>

                                                                                                        <small
                                                                                                            class="home-graph__x-axis-label">07:00</small>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick home-graph__x-axis-tick--with-label">
                                                                                                        </div>

                                                                                                        <small
                                                                                                            class="home-graph__x-axis-label">15:00</small>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick">
                                                                                                        </div>

                                                                                                    </div>

                                                                                                    <div class="home-graph__x-axis-mark"
                                                                                                        style="margin-left: 2px;">
                                                                                                        <div
                                                                                                            class="home-graph__x-axis-tick home-graph__x-axis-tick--with-label">
                                                                                                        </div>

                                                                                                        <small
                                                                                                            class="home-graph__x-axis-label">22:00</small>

                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="next-grid next-grid--no-padding next-grid--aligned-to-baseline next-grid--space-between">
                                                                                            <div
                                                                                                class="next-grid__cell next-grid__cell--no-flex report-total-price">
                                                                                                <p><span
                                                                                                        class="dot-total-price"></span>Tổng
                                                                                                    doanh thu <span
                                                                                                        class="type--number type--number--large"
                                                                                                        id="order-total-price"
                                                                                                        style="font-weight:500; color:#7cb5ec">0₫</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="area-data">
                                                        <div class="next-grid report-caption">
                                                            <h2 class="report-caption-h2">Sản phẩm bán chạy</h2>
                                                        </div>
                                                        <div class="panel-body">
                                                            <section class="next-card__section top-product-sales">
                                                                <div data-define="{topProducts: new Bizweb.HomeTopProductsReport(this,{channelId: 'all',channelName: '',homeSidebar: homeSidebar})}"
                                                                    data-context="topProducts">

                                                                    <div class="area-nodata">
                                                                        <div>
                                                                            <svg class="next-icon">
                                                                                <use xlink:href="#icon-nodata"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                </use>
                                                                            </svg>
                                                                        </div>
                                                                        <p>Cửa hàng bạn chưa có đơn hàng nào</p>
                                                                        <a class="ui-button intro-btn ui-button--dashboard"
                                                                            href="/admin/orders">
                                                                            Bắt đầu bán hàng
                                                                        </a>
                                                                        <div
                                                                            class="next-grid next-grid--no-padding next-grid--aligned-to-baseline next-grid--space-between">
                                                                            <div
                                                                                class="next-grid__cell next-grid__cell--no-flex report-total-price">
                                                                                <p><span
                                                                                        class="dot-total-price"></span>Tổng
                                                                                    doanh thu <span
                                                                                        class="type--number type--number--large"
                                                                                        id="order-total-price"
                                                                                        style="font-weight:500; color:#7cb5ec">0
                                                                                        đ</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ui-layout ui-layout--full-width ui-layout__dashboard">
                                    <div class="ui-layout__sections">
                                        <div class="ui-layout__section">
                                            <div class="ui-layout__item" style="display: flex; flex-wrap: wrap;">
                                                <div class="dashboard-left">
                                                    <section class="panel clearfix dashboard-sumary-panel"
                                                        style="margin-bottom:0">
                                                        <div class="dashboard-sumary">
                                                            <div class="sumary-left">
                                                                <div class="panel-body">
                                                                    <div class="">
                                                                        <h2 class="report-caption-h2">Tổng quan trong
                                                                            ngày</h2>
                                                                    </div>
                                                                    <div>
                                                                        <ul>
                                                                            <li class="clearfix">
                                                                                <div
                                                                                    class="panel-data-icon panel-data-icon-money">
                                                                                    <i class="fal fa-sack-dollar next-icon"></i>
                                                                                </div>
                                                                                <div class="panel-data-info">
                                                                                    <p class="panel-data-info-title">
                                                                                        Doanh thu</p>
                                                                                    <p class="panel-data-info-number number-money"
                                                                                        id="total_sales">0</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="clearfix">
                                                                                <div
                                                                                    class="panel-data-icon panel-data-icon-order">
                                                                                    <i class="fal fa-file-invoice next-icon"></i>
                                                                                </div>
                                                                                <div class="panel-data-info">
                                                                                    <p class="panel-data-info-title">Đơn
                                                                                        hàng</p>
                                                                                    <p class="panel-data-info-number number-order"
                                                                                        id="total_orders">0</p>
                                                                                </div>
                                                                            </li>
                                                                            <li class="clearfix">
                                                                                <div
                                                                                    class="panel-data-icon panel-data-icon-cus">
                                                                                    <i class="fal fa-user next-icon"></i>
                                                                                </div>
                                                                                <div class="panel-data-info">
                                                                                    <p class="panel-data-info-title">
                                                                                        Khách hàng mới</p>
                                                                                    <p class="panel-data-info-number number-cus"
                                                                                        id="total_customers">0</p>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sumary-right">
                                                                <div class="panel-body panel-body-detail-order">
                                                                    <div>
                                                                        <h2 class="report-caption-h2">Đơn hàng hiện tại
                                                                        </h2>
                                                                    </div>
                                                                    <div class="order-dashboard-wrapper">
                                                                        <div class="order-dashboard-item">
                                                                            <a
                                                                                href="/admin/orders?FinancialStatus=pending">
                                                                                <div class="order-dasboard-item-panel">
                                                                                    <div
                                                                                        class="order-dashboard-item-img">
                                                                                        <i class="fal fa-money-bill-wave next-icon"></i>
                                                                                    </div>
                                                                                    <p>
                                                                                        <span
                                                                                            class="detail-order-number">1</span>
                                                                                        <span
                                                                                            class="detail-order-title">Chưa
                                                                                            thanh toán</span>
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="order-dashboard-item">
                                                                            <a
                                                                                href="/admin/orders?FulfillmentStatus=unfulfilled">
                                                                                <div class="order-dasboard-item-panel">
                                                                                    <div
                                                                                        class="order-dashboard-item-img">
                                                                                        <i class="fal fa-shipping-fast next-icon"></i>
                                                                                    </div>
                                                                                    <p>
                                                                                        <span
                                                                                            class="detail-order-number">1</span>
                                                                                        <span
                                                                                            class="detail-order-title">Chưa
                                                                                            giao</span>
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="order-dashboard-item">
                                                                            <a
                                                                                href="/admin/checkouts?RecoveryStatus=not_recovered">
                                                                                <div class="order-dasboard-item-panel">
                                                                                    <div
                                                                                        class="order-dashboard-item-img">
                                                                                        <i class="fal fa-exclamation-triangle next-icon"></i>
                                                                                    </div>
                                                                                    <p>
                                                                                        <span
                                                                                            class="detail-order-number">0</span>
                                                                                        <span
                                                                                            class="detail-order-title">Đơn hàng bị hủy</span>
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="order-dashboard-item">
                                                                            <a
                                                                                href="/admin/orders?FinancialStatus=refunded">
                                                                                <div class="order-dasboard-item-panel">
                                                                                    <div
                                                                                        class="order-dashboard-item-img">
                                                                                        <i class="fal fa-ballot next-icon"></i>
                                                                                    </div>
                                                                                    <p>
                                                                                        <span
                                                                                            class="detail-order-number">0</span>
                                                                                        <span
                                                                                            class="detail-order-title">Chưa xử lí</span>
                                                                                    </p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <!-- <div class="dashboard-right dashboard-video">
                                                    <div class="panel clearfix">
                                                        <div class="next-grid report-caption">
                                                            <h2 class="report-caption-h2">Xem video hướng dẫn</h2>
                                                        </div>
                                                        <div class="flat-video-fancybox">
                                                            <a class="fancybox" data-type="iframe"
                                                                href="https://www.youtube.com/embed/rkXfWbhVgiI">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="dashboard-right">
                                                    <div class="panel reports-dashboard report-minimizable">
                                                        <div class="area-data">
                                                            <div class="next-grid report-caption">
                                                                <h2 class="report-caption-h2">Sản phẩm bán chạy</h2>
                                                            </div>
                                                            <div class="panel-body">
                                                                <section class="next-card__section top-product-sales">
                                                                    <div data-context="topProducts">
                                                                        <div class="area-nodata">
                                                                            <div>
                                                                                <i
                                                                                    class="fal fa-money-check-edit-alt next-icon"></i>
                                                                            </div>
                                                                            <p>Cửa hàng bạn chưa có đơn hàng nào</p>
                                                                            <div
                                                                                class="next-grid next-grid--no-padding next-grid--aligned-to-baseline next-grid--space-between">
                                                                                <div
                                                                                    class="next-grid__cell next-grid__cell--no-flex report-total-price">
                                                                                    <p><span
                                                                                            class="dot-total-price"></span>Tổng
                                                                                        doanh thu <span
                                                                                            class="type--number type--number--large"
                                                                                            id="order-total-price"
                                                                                            style="font-weight:500; color:#7cb5ec">0
                                                                                            đ</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ui-layout ui-layout--full-width ui-layout__dashboard">
                                    <div class="ui-layout__sections">
                                        <div class="ui-layout__section">
                                            <div class="ui-layout__item">

                                                

                                                    <div class="dashboard-left"
                                                        style="display:flex; justify-content: space-between; flex-wrap: wrap;">
                                                        <div class="history-dashboard">
                                                            <div class="panel">
                                                                <div class="next-grid report-caption">
                                                                    <h2 class="report-caption-h2">Nhật ký hoạt động</h2>
                                                                </div>
                                                                <div class="panel-body panel-body-history">
                                                                    <ul>
                                                                        <li>
                                                                            <div>
                                                                                <p>
                                                                                    <span>
                                                                                        <svg class="next-icon">
                                                                                            <use xlink:href="#icon-setting"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <strong>
                                                                                        Trần Đức Thái
                                                                                    </strong>
                                                                                    <span class="history-date">
                                                                                        08/04/2021 11:19
                                                                                    </span>
                                                                                </p>
                                                                                <p class="history-message">
                                                                                    Cập nhật bài viết: <a
                                                                                        href="/admin/blogs/448898/articles/2194525">Giải
                                                                                        Cờ vua Long Biên mở rộng lần 3
                                                                                        tranh
                                                                                        cúp " Chiến Binh Thông Thái "
                                                                                        (25/4/2021)</a>.
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div>
                                                                                <p>
                                                                                    <span>
                                                                                        <svg class="next-icon">
                                                                                            <use xlink:href="#icon-setting"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <strong>
                                                                                        Trần Đức Thái
                                                                                    </strong>
                                                                                    <span class="history-date">
                                                                                        08/04/2021 11:16
                                                                                    </span>
                                                                                </p>
                                                                                <p class="history-message">
                                                                                    Thêm mới bài viết: <a
                                                                                        href="/admin/blogs/448898/articles/2194525">Giải
                                                                                        Cờ vua Long Biên mở rộng lần 3
                                                                                        tranh
                                                                                        cúp " Chiến Binh Thông Thái "
                                                                                        (25/4/2021)</a>.
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div>
                                                                                <p>
                                                                                    <span>
                                                                                        <svg class="next-icon">
                                                                                            <use xlink:href="            #icon-order
" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <strong>
                                                                                        Sapo
                                                                                    </strong>
                                                                                    <span class="history-date">
                                                                                        07/04/2021 23:08
                                                                                    </span>
                                                                                </p>
                                                                                <p class="history-message">
                                                                                    Email xác nhận đơn hàng <a
                                                                                        href="/admin/orders/8486175">#1003</a>
                                                                                    đã được gửi tới khách hàng
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li style="padding:20px 0;">
                                                                            <a href="/admin/activity"><span>Xem thêm
                                                                                    hoạt
                                                                                    động</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bizweb-copyright text-center text-muted">
                                <p>Sapo - Nền tảng quản lý và bán hàng đa kênh được sử dụng nhiều nhất Việt Nam</p>
                            </div>
                        </div>
                    </div>



                    <style>
                        @media (min-width:768px) {
                            .report-chart-area {
                                border: 0;
                                width: 100%;
                                margin: -8px -8px -14px;
                                width: calc(100% + 16px);
                                height: calc(100% + 16px);
                            }
                        }

                        @media (max-width:767px) {
                            .panel-metric-sm .metric-content .value {
                                font-size: 23px;
                            }

                            .panel-metric-sm .metric-content .icon .fa {
                                font-size: 35px;
                                line-height: 20px;
                            }

                            .report-chart-area {
                                border: 0;
                                width: 100%;
                                height: 276px;
                            }
                        }

                        @media (max-width:375px) and (min-width:321px) {

                            .table-action-history>tbody>tr>td,
                            .table-action-history>tbody>tr>th,
                            .table-action-history>tfoot>tr>td,
                            .table-action-history>tfoot>tr>th,
                            .table-action-history>thead>tr>td,
                            .table-action-history>thead>tr>th {
                                padding: 8px 4px !important;
                            }
                        }

                        @media (max-width:320px) {
                            .table-action-history {
                                font-size: 11px !important;
                            }

                            .table-action-history>tbody>tr>td,
                            .table-action-history>tbody>tr>th,
                            .table-action-history>tfoot>tr>td,
                            .table-action-history>tfoot>tr>th,
                            .table-action-history>thead>tr>td,
                            .table-action-history>thead>tr>th {
                                padding: 8px 3px !important;
                            }
                        }

                        .table-detail-order>tbody>tr>td,
                        .table-detail-order>tbody>tr>th,
                        .table-detail-order>tfoot>tr>td,
                        .table-detail-order>tfoot>tr>th,
                        .table-detail-order>thead>tr>td,
                        .table-detail-order>thead>tr>th {
                            padding: 13px 10px;
                        }
                    </style>
                    <script defer="" type="text/javascript">
                        //var sticky = new Sticky('#area-app');
                        //$("#area-app").sticky({ topSpacing: 55 });
                        $(".fancybox").on("click", function (event) {
                            event.preventDefault();
                            $.fancybox({
                                href: this.href,
                                type: $(this).data("type"),
                                helpers: {
                                    overlay: {
                                        locked: false
                                    }
                                }
                            }); // fancybox
                            return false
                        });

                        //open the lateral panel
                        $('.cd-btn').on('click', function (event) {
                            event.preventDefault();
                            $('.cd-panel').addClass('is-visible');
                        });
                        //clode the lateral panel
                        $('.cd-panel').on('click', function (event) {
                            if ($(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close')) {
                                $('.cd-panel').removeClass('is-visible');
                                event.preventDefault();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection